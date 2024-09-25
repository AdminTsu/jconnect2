<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_job extends CI_Model{
	var $username;
  var $idents;
  var $hasil;
  var $isAdmin;

	function __construct(){
    parent::__construct();
    $this->username = $this->session->userdata('USR_LOGINS');
    $this->idents = $this->session->userdata('USR_IDENTS');
    $this->isAdmin = $this->session->userdata('USR_LEVELS');
  }

// ------------------------- Master Job
  function getJobList($level,$loginid){
    $level = $this->session->userdata('USR_LEVELS');

    $this->db->select("a.*,b.CLI_NAMESS CLIENT,CASE WHEN JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END JENIS");
    $this->db->select("CASE WHEN JOB_STATUS = 1 THEN 'AKTIF' ELSE 'CLOSE' END STATUS");
    $this->db->from("T_TRN_JOBPOS a");
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","LEFT");
    // $this->db->join("T_MAS_COMMON c","a.JOB_ACTIVE = c.COM_TYPECD AND c.COM_HEADCD = 6","LEFT");
    if($level == 2 || $level == 3){
      $this->db->where("b.CLI_LOGNID",$loginid);
    }
    $this->db->where("a.JOB_STATUS",1);

    $hasil = $this->crud->returnforjson(array("order_by"=>array("JOB_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getJob_edit($id,$type){
    $this->db->select("a.*,JOB_COMPNY,b.CLI_NAMESS CLIENT");
    $this->db->from("T_TRN_JOBPOS a");
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","LEFT");
    $this->db->where("JOB_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

  function getPekerjaID($idlogin,$type){
    $this->db->select("JOB_IDENTS");
    $this->db->from("T_MAS_PEKRJA");
    $this->db->where("JOB_LOGNID",$idlogin);

    if($type == 1 ){
      $query = $this->db->get(); 
      // $this->common->debug_sql;
      // echo $this->db->last_query();
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

  function getDataCompany($id){
    $this->db->select('CLI_IDENTS,CLI_NAMESS,CTY_NAMESS CITY,SPS_NAMESS ASPECS');
    $this->db->from('T_MAS_CLIENT a');
    $this->db->join("T_MAS_CITYSS b","a.CLI_CITYSS = b.CTY_IDENTS","LEFT");
    $this->db->join("T_MAS_SPSLIZ c","a.CLI_ASPECS = c.SPS_IDENTS","LEFT");
    $this->db->where("CLI_IDENTS",$id);
    
    // echo $this->db->last_query();die();

    $query = $this->db->get();
    $return= $query->row();
    return $return;
  }

  function update_file($data,$table,$kolomid,$ID)
  {
    $this->db->where($kolomid, $ID);
    $this->db->update($table, $data);
    return $this->db->affected_rows();
  }

  function getJobUpdate(){
    $this->db->select('*,TIMEDIFF(NOW(),JOB_DATCRT) JAM,DATEDIFF(NOW(),JOB_DATCRT) HARI');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    $this->db->order_by("JOB_DATCRT");
    
    // echo $this->db->last_query();die();

    $sql = $this->db->_compile_select();
    $this->db->_reset_select();
    
    $query = $this->db->get('('.$sql.') a', 5);
    $return= $query->result_array();
    return $return;
  }

  function getJobUpdate_list($limit, $start,$bidang,$jeniss,$contry,$provnc,$cityss,$exprnc){
    // $query = $this->db->get('T_TRN_JOBPOS', $limit, $start);

    $this->db->select('*');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    if($bidang != ''){
      $this->db->where("JOB_ASPECS",$bidang);
    }
    if($jeniss != ''){
      $this->db->where("JOB_DRTION",$jeniss);
    }
    if($contry != ''){
      $this->db->where("CLI_CONTRY",$contry);
    }
    if($provnc != ''){
      $this->db->where("CLI_PROVNC",$provnc);
    }
    if($cityss != ''){
      $this->db->where("CLI_CITYSS",$cityss);
    }
    if($exprnc != ''){
      if($exprnc == 1){
        $this->db->where("JOB_EXPREQ IN(1,2)");
      }
      if($exprnc == 2){
        $this->db->where("JOB_EXPREQ IN(2,3)");
      }
      if($exprnc == 3){
        $this->db->where("JOB_EXPREQ IN(3,5,6)");
      }
      if($exprnc == 4){
        $this->db->where("JOB_EXPREQ > 6");
      }
    }
    $this->db->order_by("JOB_DATCRT");

    // echo $this->db->last_query();die();
    $sql = $this->db->_compile_select();
    $this->db->_reset_select();
    
    $query = $this->db->get('('.$sql.') a', $limit, $start);
    
    // echo $this->db->last_query();die();
    return $query;
  }

  public function getrecordCountJob($bidang='',$jeniss=0,$contry=0,$provnc=0,$cityss=0,$exprnc='') {

    $this->db->select('count(*) as allcount');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    if($bidang != ''){
      $this->db->where("JOB_ASPECS",$bidang);
    }
    if($jeniss != 0){
      $this->db->where("JOB_DRTION",$jeniss);
    }
    if($contry != 0){
      $this->db->where("CLI_CONTRY",$contry);
    }
    if($provnc != 0){
      $this->db->where("CLI_PROVNC",$provnc);
    }
    if($cityss != 0){
      $this->db->where("CLI_CITYSS",$cityss);
    }
    if($exprnc != 0){
      if($exprnc == 1){
        $this->db->where("JOB_EXPREQ IN(1,2)");
      }
      if($exprnc == 2){
        $this->db->where("JOB_EXPREQ IN(2,3)");
      }
      if($exprnc == 3){
        $this->db->where("JOB_EXPREQ IN(3,5,6)");
      }
      if($exprnc == 4){
        $this->db->where("JOB_EXPREQ > 6");
      }
    }
    $this->db->order_by("JOB_DATCRT");
    $sql = $this->db->_compile_select();
    $this->db->_reset_select();
    
    $query = $this->db->get('('.$sql.') a');
    $result = $query->result_array();
    // echo $this->db->last_query();die();
 
    return $result[0]['allcount'];
  }

  function getJobUpdate_Detail($id){
    $this->db->select("*,TIMEDIFF(NOW(),JOB_DATCRT) JAM,DATEDIFF(NOW(),JOB_DATCRT) HARI");
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    $this->db->where("JOB_IDENTS",$id);
    $this->db->order_by("JOB_DATCRT");

    $query = $this->db->get();
    $return= $query->result_array();
    return $return;
  }
  
  function get_salary_range()
  {
    $data['JOB_SALMIN'] =   $this->db->select('JOB_SALMIN')->from('T_TRN_JOBPOS')->where('JOB_STATUS',1)->order_by('JOB_SALMIN','asc')->limit(1)->get()->row()->JOB_SALMIN;
    $data['JOB_SALMAX'] =   $this->db->select('JOB_SALMAX')->from('T_TRN_JOBPOS')->where('JOB_STATUS',1)->order_by('JOB_SALMAX','desc')->limit(1)->get()->row()->JOB_SALMAX;
    return $data;
  }
  
  function getBidangKerja(){
    $this->db->select("SPS_IDENTS,SPS_NAMESS");
    $this->db->from("T_MAS_SPSLIZ");
    $this->db->where("SPS_IDENTS <> 15");
    $query = $this->db->get();
    $data["0"] = "Pilih Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach($query->result() as $row){
        $data[$row->SPS_IDENTS] = $row->SPS_NAMESS;
    }
    return $data;   
  }

  function getBidangKerja_autotag(){
    $this->db->select("SPS_IDENTS,SPS_NAMESS,(SELECT COUNT(*) JML FROM T_MAS_SPSLIZ WHERE SPS_IDENTS <> 15) JML");
    $this->db->from("T_MAS_SPSLIZ");
    $this->db->where("SPS_IDENTS <> 15");
    $query = $this->db->get();
    // $data["0"] = "Pilih Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach($query->result() as $row){
        $data[$row->SPS_IDENTS] = $row->SPS_NAMESS;
    }
    return $data;   
  }

  function list_datajobs($keywrd,$lokasi){
    // echo $keywrd.'~'.$lokasi;die();

    // ------------------ untuk data
    $this->db->select('*');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);

    if($keywrd){
      $this->db->like('JOB_TITLES',$keywrd);
    }
    if($lokasi){
      $this->db->where('JOB_LCTION',$lokasi);
    }

    $this->db->order_by("JOB_DATCRT");

    // echo $this->db->last_query();die();
    $sql = $this->db->_compile_select();
    $this->db->_reset_select();
    
    $query = $this->db->get('('.$sql.') a');
    // $query = $this->db->get('T_TRN_JOBPOS',$total,$offset);

    // echo $this->db->last_query();die();
    $result['data'] = $query->result(); 
    $result['total_rows'] = $this->db->count_all_results('T_TRN_JOBPOS');
    return $result;
  }

  public function get_list_jobs_num($keywrd=null,$lokasi=null,$spsliz=null,$typjob=null)
  {
    $sql = "
      SELECT count(*) as jml
      FROM T_TRN_JOBPOS a
      INNER JOIN T_MAS_CLIENT b ON a.JOB_COMPNY = b.CLI_IDENTS
      WHERE JOB_STATUS = 1
    ";

    if ($keywrd != '') {
      $sql .= "AND (JOB_TITLES like '%$keywrd%' OR CLI_NAMESS like '%$keywrd%')";
    }

    if ($lokasi != '') {
      $sql .= " AND (JOB_LCTION like '%$lokasi%')";
    }

    if ($spsliz != '') {
      $sql .= " AND JOB_ASPECS like '%$spsliz%'";
    }

    if ($typjob != '') {
      $sql .= " AND JOB_DRTION = $typjob";
    }

    // echo $sql;die();

    return $this->db->query($sql)->row()->jml;
  }

  public function get_list_jobs($limit, $start, $keywrd=null,$lokasi=null, $spsliz=null,$typjob=null)
  {
    // echo "$keywrd ~ $lokasi <br>";
    $sql = "
      SELECT *
      FROM T_TRN_JOBPOS a
      INNER JOIN T_MAS_CLIENT b ON a.JOB_COMPNY = b.CLI_IDENTS
      WHERE JOB_STATUS = 1
    ";

    if ($keywrd != '') {
      $sql .= "AND (JOB_TITLES like '%$keywrd%' OR CLI_NAMESS like '%$keywrd%')";
    }

    if ($lokasi != '') {
      $sql .= " AND JOB_LCTION like '%$lokasi%'";
    }

    if ($spsliz != '') {
      $sql .= " AND JOB_ASPECS like '%$spsliz%'";
    }

    if ($typjob != '') {
      $sql .= " AND JOB_DRTION = $typjob";
    }

    $sql .= "
      ORDER BY JOB_TITLES
    ";

    if ($start != '' or $limit != '') {
      $sql .= " LIMIT $start,$limit";
    }

    // echo $sql;
    // die();

    return $this->db->query($sql)->result();
  }

  function list_jobs($keywrd,$lokasi){
    $this->db->select('*');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    if($bidang != ''){
      $this->db->where("JOB_ASPECS",$bidang);
    }
    if($jeniss != '' || $jeniss != 0){
      $this->db->where("JOB_DRTION",$jeniss);
    }
    if($contry != '' || $contry != 0){
      $this->db->where("CLI_CONTRY",$contry);
    }
    if($provnc != '' || $provnc != 0){
      $this->db->where("CLI_PROVNC",$provnc);
    }
    if($cityss != '' || $cityss != 0){
      $this->db->where("CLI_CITYSS",$cityss);
    }
    if($exprnc != '' || $exprnc != 0){
      if($exprnc == 1){
        $this->db->where("JOB_EXPREQ IN(1,2)");
      }
      if($exprnc == 2){
        $this->db->where("JOB_EXPREQ IN(2,3)");
      }
      if($exprnc == 3){
        $this->db->where("JOB_EXPREQ IN(3,5,6)");
      }
      if($exprnc == 4){
        $this->db->where("JOB_EXPREQ > 6");
      }
    }
    if($keywrd){
      $this->db->like('JOB_TITLES',$keywrd);
    }
    if($lokasi){
      $this->db->where('JOB_LCTION',$lokasi);
    }

    $this->db->order_by("JOB_DATCRT");

    // echo $this->db->last_query();die();
    $sql = $this->db->_compile_select();
    $this->db->_reset_select();
    
    $query = $this->db->get('('.$sql.') a', $total, $offset);
    // $query = $this->db->get('T_TRN_JOBPOS',$total,$offset);

    // echo $this->db->last_query();die();
    $result['data'] = $query->result(); 
    $result['total_rows'] = $this->db->count_all_results('T_TRN_JOBPOS');
    return $result;
  }

  function view(){
    $this->db->select('*');
    $this->db->from('T_TRN_JOBPOS a');
    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
    $this->db->where("JOB_STATUS",1);
    $this->db->order_by("JOB_DATCRT");

    // echo $this->db->last_query();die();
    $sql = $this->db->_compile_select();
    $this->db->_reset_select();

    $query = $this->db->get('('.$sql.') a');
    $result = $query->result(); 

    return $result;
  }

  function getJobs($keywrd=null,$lokasi=null){
      $this->db->select("*");
      $this->db->from('T_TRN_JOBLIS');
      if($keywrd != null){
        $this->db->like('JOB_TITLES',$keywrd);
      }
      if($lokasi != null){
        $this->db->like('JOB_LCTION',$lokasi);
      }

      $query = $this->db->get();
      return $query->result();
  }

  function tags($keywrd=null){
    $this->db->select("*");
    $this->db->from('T_TRN_JOBLIS');
    if($keywrd != null){
      $this->db->like('JOB_TITLES',$keywrd);
    }
  
    $query = $this->db->get();
    return $query->result();
  }

  function getDataUser($id){      
    $this->db->select('USR_IDENTS idnya,USR_NAMESS nama');
    $this->db->from('T_MAS_USERSS');
    $this->db->where('USR_IDENTS',$id);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    $data = $query->result();
    return $data; 
  }
  
  function getKandidatInfo($id){
      $this->db->select("a.*,b.*,c.COM_DESCRE JNSKLM,d.COM_DESCRE RELIGN,e.COM_DESCRE EDUCTN,f.COM_DESCRE MARRID,g.SPS_NAMESS MNTBDG");
      $this->db->from("T_MAS_PEKRJA a");
      $this->db->join("T_MAS_USERSS b","a.PKR_LOGNID = b.USR_IDENTS","INNER");
      $this->db->join("T_MAS_COMMON c","a.PKR_JNSKLM = c.COM_TYPECD AND c.COM_HEADCD = 2","LEFT");
      $this->db->join("T_MAS_COMMON d","a.PKR_RELIGN = d.COM_TYPECD AND d.COM_HEADCD = 1","LEFT");
      $this->db->join("T_MAS_COMMON e","a.PKR_EDUCID = e.COM_TYPECD AND e.COM_HEADCD = 3","LEFT");
      $this->db->join("T_MAS_COMMON f","a.PKR_MARRID = f.COM_TYPECD AND f.COM_HEADCD = 14","LEFT");
      $this->db->join("T_MAS_SPSLIZ g","a.PKR_MNTBDG = g.SPS_IDENTS","LEFT");
      $this->db->where("USR_IDENTS",$id);

      $query = $this->db->get();
      // echo $this->db->last_query();die();
      $return= $query->result_array();
      return $return;
    }
}
?>