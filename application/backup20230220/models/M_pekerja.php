<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_pekerja extends CI_Model{
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
  
// ------------------------- Master User
  function getPekerjaList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,b.COM_DESCRE JNSKLM,c.COM_DESCRE STATUS");
    $this->db->from("T_MAS_PEKRJA a");
    $this->db->join("T_MAS_COMMON b","a.PKR_JNSKLM = b.COM_TYPECD AND b.COM_HEADCD = 2","LEFT");
    $this->db->join("T_MAS_COMMON c","a.PKR_ACTIVE = c.COM_TYPECD AND c.COM_HEADCD = 6","LEFT");
    $this->db->where("a.PKR_ACTIVE",1);
    
    $hasil = $this->crud->returnforjson(array("order_by"=>array("PKR_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }
  
  function getPekerja_edit($id,$type){
    $this->db->select("a.*,b.USR_LOGINS");
    $this->db->from("T_MAS_PEKRJA a");
    $this->db->join("T_MAS_USERSS b","a.PKR_LOGNID = b.USR_IDENTS","LEFT");
    $this->db->where("PKR_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }
  
  function getPekerjaID($idlogin,$type){
    $this->db->select("PKR_IDENTS");
    $this->db->from("T_MAS_PEKRJA");
    $this->db->where("PKR_LOGNID",$idlogin);

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
  
  function update_file($data,$table,$kolomid,$ID)
  {
    $this->db->where($kolomid, $ID);
    $this->db->update($table, $data);
    return $this->db->affected_rows();
  }
  
  function getApplayJob($id,$type){
    $this->db->select("a.APP_IDENTS IDAPPL,a.APP_IDPKRJ IDPKRJ,d.CLI_NAMESS COMPNY,b.JOB_TITLES TITLES,CASE WHEN b.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END TYPESS,JOB_SALMIN SALMIN, JOB_SALMAX SALMAX, JOB_EXPDAT EXPDAT,CLI_LOGOSS LOGOSS,CASE WHEN a.APP_STATUS = 1 THEN 'MASIH BUKA' ELSE 'SUDAH TUTUP' END STATUS,b.JOB_COMPNY COMIDN,a.APP_STATUS,PKR_FILECV FILECV,APP_CVIEWS CVIEWS,b.JOB_IDENTS IDJOBS,b.JOB_STATUS JOBSTS,JOB_NOMJOB");
    $this->db->from("T_TRN_APPLYJ a");
    $this->db->join("T_TRN_JOBPOS b","a.APP_IDJOBS = b.JOB_IDENTS","INNER");
    $this->db->join("T_MAS_PEKRJA c","a.APP_IDPKRJ = c.PKR_IDENTS","INNER");
    $this->db->join("T_MAS_CLIENT d","b.JOB_COMPNY = d.CLI_IDENTS","INNER");
    $this->db->join("T_MAS_USERSS e","c.PKR_LOGNID = e.USR_IDENTS","INNER");
    if($this->isAdmin > 1 && $this->isAdmin < 99){
      $this->db->where("a.APP_IDPKRJ",$id);
    }
    if($type == 1){
      $this->db->where("a.APP_STATUS",1);
    }
    $this->db->where("a.APP_IDJOBS = b.JOB_IDENTS");
    $this->db->where("a.APP_IDPKRJ = c.PKR_IDENTS");
    $this->db->order_by('a.APP_IDENTS,a.APP_IDPKRJ');
    $query = $this->db->get();
    
    // echo $this->db->last_query();
    $return= $query->result_array();
    return $return;
  }
  
}
?>