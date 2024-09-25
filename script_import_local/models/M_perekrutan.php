<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_perekrutan extends CI_Model{
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

// ------------------------- Master Rekrut
  function getRekrutList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,UPPER(b.JOB_TITLES) JOB_TITLES,b.JOB_NOMJOB,b.JOB_LCTION,b.JOB_ASPECS,c.CLI_NAMESS CLIENT,CASE WHEN b.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END STATUS");
    $this->db->from("T_TRN_RCRUIT a");
    $this->db->join("T_TRN_JOBPOS b","a.REC_JOBPOS = b.JOB_IDENTS","LEFT");
    $this->db->join("T_MAS_CLIENT c","a.REC_COMPNY = c.CLI_IDENTS","LEFT");
    // $this->db->where("a.REC_ACTIVE",1);

    $hasil = $this->crud->returnforjson(array("order_by"=>array("REC_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getDetail_Rekrut($IDENTS=null){
    $this->db->select("b.*,a.REC_IDENTS IDENTS,a.REC_PKRJID,REC_FIDENT,c.PKR_NAMESS,CONCAT(c.PKR_EXPRNC,' TAHUN') PKR_EXPRNC,c.PKR_EXPNPT,c.PKR_EXPBDG, d.COM_DESCRE PKR_JNSKLM");
    $this->db->from("T_TRN_RCRUIT_DETAIL a");
    $this->db->join("T_TRN_RCRUIT b","a.REC_FIDENT = b.REC_IDENTS","INNER");
    $this->db->join("T_MAS_PEKRJA c","a.REC_PKRJID = c.PKR_IDENTS","LEFT");
    $this->db->join("T_MAS_COMMON d","c.PKR_JNSKLM = d.COM_TYPECD AND d.COM_HEADCD = 2","LEFT");
    $this->db->where("a.REC_FIDENT",$IDENTS);
    $hasil = $this->crud->returnforjson(array("ORDER_BY"=>array("b.REC_FIDENT")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getPerekrutan_edit($id,$type){
    $this->db->select("a.*,b.*,c.PKR_NAMESS,c.PKR_JNSKLM,CONCAT(c.PKR_EXPRNC,' TAHUN') PKR_EXPRNC,c.PKR_EXPNPT,c.PKR_EXPBDG,d.CLI_CONTRY,d.CLI_NAMESS COMPANY,CONCAT('Negara Indonesia => Provinsi ',e.`PRV_NAMESS`,' => Kota ',f.`CTY_NAMESS`) LCTION,g.SPS_NAMESS ASPECS,h.JOB_TITLES PEKERJAAN,CASE WHEN h.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END STATUS,h.JOB_NOMJOB");
    $this->db->from("T_TRN_RCRUIT a");
    $this->db->join("T_TRN_RCRUIT_DETAIL b","a.REC_IDENTS = b.REC_FIDENT","INNER");
    $this->db->join("T_MAS_PEKRJA c","b.REC_PKRJID = c.PKR_IDENTS","INNER");
    $this->db->join("T_MAS_CLIENT d","a.REC_COMPNY = d.CLI_IDENTS","INNER");
    $this->db->join("T_MAS_PROVNC e","d.CLI_PROVNC = e.PRV_IDENTS","INNER");
    $this->db->join("T_MAS_CITYSS f","d.CLI_CITYSS = f.CTY_IDENTS","INNER");
    $this->db->join("T_MAS_SPSLIZ g","d.CLI_ASPECS = g.SPS_IDENTS","INNER");
    $this->db->join("T_TRN_JOBPOS h","a.REC_JOBPOS = h.JOB_IDENTS","INNER");
    $this->db->where("a.REC_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

  function getDataJob($id){
    $this->db->select('JOB_IDENTS,JOB_NOMJOB,JOB_TITLES,CASE WHEN JOB_DRTION = 1 THEN "KONTRAK" ELSE "TETAP" END JOB_DRTION');
    $this->db->from('T_TRN_JOBPOS');
    $this->db->where("JOB_IDENTS",$id);
    $this->db->where("JOB_STATUS",1);
    
    // echo $this->db->last_query();die();

    $query = $this->db->get();
    $return= $query->row();
    return $return;
  }

  function getDataPekerja($id){
    $this->db->select('PKR_IDENTS,PKR_NAMESS NAMA,b.COM_DESCRE JNSKLM,PKR_EXPRNC EXPRNC,PKR_EXPNPT PRSHAN,PKR_EXPBDG BIDANG');
    $this->db->from('T_MAS_PEKRJA a');
    $this->db->join("T_MAS_COMMON b","a.PKR_JNSKLM = b.COM_TYPECD AND b.COM_HEADCD = 2","LEFT");
    $this->db->where("PKR_IDENTS",$id);
    $this->db->where("PKR_ACTIVE",1);
    
    // echo $this->db->last_query();die();

    $query = $this->db->get();
    $return= $query->row();
    return $return;
  }

  function cekPekerja($pekrja){
    // echo "$username ~ $table ~ $field";
    $this->db->select('count(REC_PKRJID) HASIL');
    $this->db->from('T_MAS_PEKRJA a');
    $this->db->join('T_TRN_RCRUIT_DETAIL b','a.PKR_IDENTS = b.REC_PKRJID','INNER');
    $this->db->where('REC_PKRJID',$pekrja);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    foreach($query->result() as $row){
        $data = $row->HASIL;
    }
    return $data; 
  }

  function getPerusahaanTag($table, $arrfield, $filter=null, $addfil=null,$dbsource,$protected=true,$all=false){
    // ------------------ jumlah job dari perusahaan yang sudah terisi
    $this->db->select("REC_COMPNY,COUNT(REC_COMPNY) JML_COMJOB");
    $this->db->from( "T_TRN_RCRUIT a");
    $this->db->join('T_TRN_JOBPOS b','a.REC_JOBPOS = b.JOB_IDENTS','INNER');
    $this->db->group_by("REC_COMPNY");

    $sqlx = $this->db->_compile_select();
    $this->db->_reset_select();

    $this->db->select("CLI_IDENTS,(COUNT(CLI_IDENTS)-JML_COMJOB) JML_JOB");
    $this->db->from( "T_MAS_CLIENT a");
    $this->db->join('T_TRN_JOBPOS b','a.CLI_IDENTS = b.JOB_COMPNY','INNER');
    $this->db->join('('.$sqlx.') c','a.CLI_IDENTS = c.REC_COMPNY','INNER');
    $this->db->group_by("CLI_IDENTS");

    $query = $this->db->get(); 
    foreach($query->result() as $row){
      $jml = $row->JML_JOB;
    }
    // echo $data;die();

    if($jml > 0){

      $this->db->select("CLI_IDENTS as id", false);
      $this->db->select("CLI_NAMESS as name", false);
      $this->db->from( "T_MAS_CLIENT a");

      $sqly = $this->db->_compile_select();
      $this->db->_reset_select();

      $this->db->select("DISTINCT id,name");
      $this->db->from("($sqly) a");
      $this->db->where("UPPER(name) like '%" . $_GET['q'] . "%'");
      $this->db->limit(20);

    }

    $query = $this->db->get();
    // echo $this->db->last_query();die();
    // $this->common->debug_sql();
    return $query;
  }

  function getPekerjaTag($table, $arrfield, $filter=null, $addfil=null,$dbsource,$protected=true,$all=false){
    $this->db->select("PKR_IDENTS as id", false);
    $this->db->select("PKR_NAMESS as name", false);
    $this->db->from( "T_MAS_PEKRJA a");
    $this->db->join('T_TRN_RCRUIT_DETAIL b','a.PKR_IDENTS <> b.REC_PKRJID','INNER');
    $this->db->join('T_TRN_APPLYJ c','a.PKR_IDENTS = c.APP_IDPKRJ','INNER');

    $sql = $this->db->_compile_select();
    $this->db->_reset_select();

    $this->db->select("DISTINCT id,name");
    $this->db->from("($sql) a");
    $this->db->where("UPPER(name) like '%" . $_GET['q'] . "%'");
    // $this->db->where("id NOT IN (SELECT REC_PKRJID FROM T_TRN_RCRUIT_DETAIL)");
    $this->db->limit(20);

    $query = $this->db->get();
    // $this->common->debug_sql();
    return $query;
  }

}

?>