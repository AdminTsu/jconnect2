<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Jconnect extends CI_Model{
	var $username;
	var $hasil;
	var $isAdmin;
	var $deptmn;

	function __construct(){
	  parent::__construct();
	  $this->username = $this->session->userdata('USR_LOGINS');
	  $this->isAdmin = $this->session->userdata('USR_LEVELS');
	}

	function getUserID($id){			
	    $this->db->select('USR_IDENTS idnya,USR_NAMESS nama,USR_ACTIVE aktif');
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

  	function getClientInfo($id){
	    $this->db->select("a.*,e.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC,d.CTY_NAMESS CITY,e.USR_LOGINS,f.SPS_NAMESS BIDANG");
	    $this->db->from("T_MAS_CLIENT a");
	    $this->db->join("T_MAS_COMMON b","a.CLI_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","LEFT");
	    $this->db->join("T_MAS_PROVNC c","a.CLI_PROVNC = c.PRV_IDENTS","LEFT");
	    $this->db->join("T_MAS_CITYSS d","a.CLI_CITYSS = d.CTY_IDENTS","LEFT");
	    $this->db->join("T_MAS_USERSS e","a.CLI_LOGNID = e.USR_IDENTS","LEFT");
    	$this->db->join("T_MAS_SPSLIZ f","a.CLI_ASPECS = f.SPS_IDENTS","LEFT");
	    $this->db->where("USR_IDENTS",$id);
	    
	    $query = $this->db->get();
	    // echo $this->db->last_query();die();
	    $return= $query->result_array();
	    return $return;
  	}
  	
  	function list_jobs($idents){
	    $this->db->select('*,e.SPS_NAMESS BIDANG');
	    $this->db->from('T_TRN_JOBPOS a');
	    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
	    $this->db->join("T_MAS_USERSS c","b.CLI_LOGNID = c.USR_IDENTS","INNER");
	    $this->db->join("T_MAS_SPSLIZ e","b.CLI_ASPECS = e.SPS_IDENTS","INNER");
	    $this->db->where("JOB_STATUS",1);
	    $this->db->where("USR_IDENTS",$idents);
	    $this->db->order_by("JOB_DATCRT");

	    $query = $this->db->get();
	    // echo $this->db->last_query();die();
	    $return= $query->result_array();
	    return $return;
  	}

  	function getBidangKerja(){
	    $this->db->select("SPS_IDENTS,SPS_NAMESS");
	    $this->db->from("T_MAS_SPSLIZ");
	    $query = $this->db->get();
	    $data["0"] = "-- Pilih Minat Bidang --";
	    foreach($query->result() as $row){
	        $data[$row->SPS_IDENTS] = $row->SPS_NAMESS;
	    }
	    return $data;
  	}

  	function getReligion(){
	    $this->db->select("COM_TYPECD,COM_DESCRE");
	    $this->db->from("T_MAS_COMMON");
	    $this->db->where("COM_HEADCD",1);
	    $this->db->where("COM_TYPECD > 0");
	    $query = $this->db->get();
	    $data["0"] = "-- Pilih Agama --";
	    foreach($query->result() as $row){
	        $data[$row->COM_TYPECD] = $row->COM_DESCRE;
	    }
	    return $data;
  	}

  	function getLastEdu(){
	    $this->db->select("COM_TYPECD,COM_DESCRE");
	    $this->db->from("T_MAS_COMMON");
	    $this->db->where("COM_HEADCD",3);
	    $this->db->where("COM_TYPECD > 0");
	    $query = $this->db->get();
	    $data["0"] = "-- Pilih Pendidikan --";
	    foreach($query->result() as $row){
	        $data[$row->COM_TYPECD] = $row->COM_DESCRE;
	    }
	    return $data;
  	}

  	function getStatusMarried(){
	    $this->db->select("COM_TYPECD,COM_DESCRE");
	    $this->db->from("T_MAS_COMMON");
	    $this->db->where("COM_HEADCD",14);
	    $this->db->where("COM_TYPECD > 0");
	    $query = $this->db->get();
	    $data["0"] = "-- Pilih Status Pernikahan --";
	    foreach($query->result() as $row){
	        $data[$row->COM_TYPECD] = $row->COM_DESCRE;
	    }
	    return $data;
  	}

  	function getFileUpload($id,$table,$kolomid,$kolom,$type){
  		if($type == 1){
	    	$this->db->select('count('.$kolom.') HASIL');
	    }else{
	    	$this->db->select(''.$kolom.' filenya');
	    }
	    $this->db->from($table);
	    $this->db->where($kolomid,$id);
	    
	    // echo $this->db->last_query();die();

	    $query = $this->db->get();
	    $return= $query->row();
	    return $return;
  	}

  	function cekUsername($table,$usrnam){
	    $this->db->select('count(USR_LOGINS) HASIL');
	    $this->db->from($table);
	    $this->db->where('USR_LOGINS',$usrnam);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    foreach($query->result() as $row){
	        $data = $row->HASIL;
	    }
	    return $data;
  	}

  	function cekUserActive($table,$usrnam){
	    $this->db->select('USR_ACTIVE HASIL');
	    $this->db->from($table);
	    $this->db->where('USR_LOGINS',$usrnam);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    foreach($query->result() as $row){
	        $data = $row->HASIL;
	    }
	    return $data;
  	}
}
?>