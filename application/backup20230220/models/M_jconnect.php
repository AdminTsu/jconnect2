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
	
	function getUserID_byUser($logins){			
	    $this->db->select('USR_IDENTS');
	    $this->db->from('T_MAS_USERSS');
	    $this->db->where('USR_NAMESS',$logins);
	    $this->db->where('USR_ACTIVE',0);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    $data = $query->result();
	    return $data; 
	}
	
	function getUserID_byPekerja($names){			
	    $this->db->select('PKR_IDENTS');
	    $this->db->from('T_MAS_PEKRJA');
	    $this->db->where('PKR_NAMESS',$names);
	    $this->db->where('PKR_ACTIVE',0);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    $data = $query->result();
	    return $data; 
	}
	
	function getClientID($id){			
	    $this->db->select('CLI_IDENTS,CLI_NAMESS,CLI_ACTIVE');
	    $this->db->from('T_MAS_CLIENT');
	    $this->db->where('CLI_LOGNID',$id);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    $data = $query->result();
	    return $data; 
	}
	
  	function getKandidatInfo($id){
	    $this->db->select("a.*,b.*,c.COM_DESCRE JNSKLM,d.COM_DESCRE RELIGN,e.COM_DESCRE EDUCTN,f.COM_DESCRE MARRID,g.SPS_NAMESS MNTBDG,CASE WHEN a.PKR_CONTRY = 0 THEN '-' ELSE h.COM_DESCRE END CONTRY,CASE WHEN a.PKR_PROVNC = 0 THEN '-' ELSE i.PRV_NAMESS END PROVNC,CASE WHEN a.PKR_CITYSS = 0 THEN '-' ELSE j.CTY_NAMESS END CITYSS");
	    $this->db->from("T_MAS_PEKRJA a");
	    $this->db->join("T_MAS_USERSS b","a.PKR_LOGNID = b.USR_IDENTS","INNER");
	    $this->db->join("T_MAS_COMMON c","a.PKR_JNSKLM = c.COM_TYPECD AND c.COM_HEADCD = 2","LEFT");
	    $this->db->join("T_MAS_COMMON d","a.PKR_RELIGN = d.COM_TYPECD AND d.COM_HEADCD = 1","LEFT");
	    $this->db->join("T_MAS_COMMON e","a.PKR_EDUCID = e.COM_TYPECD AND e.COM_HEADCD = 3","LEFT");
	    $this->db->join("T_MAS_COMMON f","a.PKR_MARRID = f.COM_TYPECD AND f.COM_HEADCD = 14","LEFT");
	    $this->db->join("T_MAS_SPSLIZ g","a.PKR_MNTBDG = g.SPS_IDENTS","LEFT");
	    $this->db->join("T_MAS_COMMON h","a.PKR_CONTRY = h.COM_TYPECD AND h.COM_HEADCD = 7","LEFT");
	    $this->db->join("T_MAS_PROVNC i","a.PKR_PROVNC = i.PRV_IDENTS","LEFT");
	    $this->db->join("T_MAS_CITYSS j","a.PKR_CITYSS = j.CTY_IDENTS","LEFT");
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
  	
  	function list_jobs($idents,$jml){
  		if($jml > 0){
		    $this->db->select('*,e.SPS_NAMESS BIDANG,CASE WHEN JOB_STATUS = 1 THEN "Aktif" WHEN JOB_STATUS = 2 THEN "Tidak Aktif" ELSE "Tidak Berlaku" END JOB_STATUS, CASE WHEN JOB_DRTION = 1 THEN "Kontrak" ELSE "Tetap" END JOB_DRTION');
		    $this->db->from('T_TRN_JOBPOS a');
		    $this->db->join("T_MAS_CLIENT b","a.JOB_COMPNY = b.CLI_IDENTS","INNER");
		    $this->db->join("T_MAS_USERSS c","b.CLI_LOGNID = c.USR_IDENTS","INNER");
		    $this->db->join("T_MAS_SPSLIZ e","b.CLI_ASPECS = e.SPS_IDENTS","INNER");
		    $this->db->where("JOB_STATUS",1);
		    $this->db->where("USR_IDENTS",$idents);
		    // $this->db->order_by('JOB_NOMJOB ASC');
		}else{
		    $this->db->select('*,c.SPS_NAMESS BIDANG');
		    $this->db->from("T_MAS_CLIENT a");
		    $this->db->join("T_MAS_USERSS b","a.CLI_LOGNID = b.USR_IDENTS","INNER");
		    $this->db->join("T_MAS_SPSLIZ c","a.CLI_ASPECS = c.SPS_IDENTS","INNER");
		    $this->db->where("CLI_ACTIVE",1);
		    $this->db->where("USR_IDENTS",$idents);
		    // $this->db->order_by("CLI_IDENTS");
		}

	    $query = $this->db->get();
	    // echo $this->db->last_query();die();
	    $return= $query->result_array();
	    return $return;
  	}

  	function getCompanyCmb($comidn){
	    $this->db->select("*");
	    $this->db->from("T_MAS_CLIENT");
		$this->db->where("CLI_IDENTS",$comidn);

	    $query = $this->db->get();
	    // echo $this->db->last_query();
	    $data["0"] = "-- Pilih Perusahaan --";
	    foreach($query->result() as $row){
	        $data[$row->CLI_IDENTS] = $row->CLI_NAMESS;
	    }
	    return $data;
  	}

  	function getBidangKerja(){
	    $this->db->select("SPS_IDENTS,SPS_NAMESS");
	    $this->db->from("T_MAS_SPSLIZ");
	    $query = $this->db->get();
	    $data["0"] = "-- Pilih Bidang --";
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
  	    $sql = "
            SELECT COUNT(USR_ACTIVE) JUMLAH 
            FROM ".$table."
            WHERE USR_LOGINS = '".$usrnam."';
        ";
        $jml = $this->db->query($sql);
	   // $jml = $this->db->get(); 
	    foreach($jml->result() as $baris){
	        $jmlnya = $baris->JUMLAH;
	    }
	   // echo $jmlnya;die();
	   // echo $this->db->last_query();die();
  	    
	    $this->db->select('USR_ACTIVE HASIL');
	    $this->db->from($table);
	    $this->db->where('USR_LOGINS',$usrnam);
	    
	    $query = $this->db->get(); 
	    // $this->common->debug_sql();die();
	    // echo $this->db->last_query();die();
	    if($jmlnya > 0){
    	    foreach($query->result() as $row){
    	       $data = $row->HASIL;
    	    }
	    }else{
	        $data = $jmlnya;
	    }
	    return $data;
  	}

	function getJobpost_autotag($compid){
		$this->db->select('*,CONCAT(JOB_NOMJOB," (",JOB_TITLES,")") JOBS');
		$this->db->from("T_TRN_JOBPOS");
		$this->db->where("JOB_COMPNY",$compid);
        $this->db->where('JOB_STATUS',1);

		$query = $this->db->get();
	    // echo $this->db->last_query();die();

		$data["0"] = "Pilih Data";
		foreach($query->result() as $row){
		    $data[$row->JOB_IDENTS] = $row->JOBS;
		}
		return $data;   
	}

	function getPekerja_autotag($jobsid=NULL){
		$sqlx = "
	      SELECT REC_PKRJID
	      FROM T_TRN_RCRUIT a
	      INNER JOIN T_TRN_RCRUIT_DETAIL b ON a.REC_IDENTS = b.REC_FIDENT
	      WHERE REC_JOBPOS = '".$jobsid."'
	    ";

	    $this->db->select("PKR_IDENTS,PKR_NAMESS");
	    $this->db->from( "T_MAS_PEKRJA a");
	    $this->db->join('T_TRN_APPLYJ b','a.PKR_IDENTS = b.APP_IDPKRJ','INNER');
	    $this->db->where("a.PKR_IDENTS NOT IN ($sqlx)");

		$query = $this->db->get();
	    // echo $this->db->last_query();
	    // die();
		// $data["0"] = "Pilih Data";
		// foreach($query->result() as $row){
		// 	$data[$row->PKR_IDENTS] = $row->PKR_NAMESS;
		// }
		// return $data;
		return $query->result();
	}

  	function list_recruit($idents,$jml){
  		if($jml > 0){
		    $this->db->select('c.JOB_IDENTS,a.REC_NOMORS,c.JOB_NOMJOB,c.JOB_TITLES,c.JOB_LCTION,CASE WHEN c.JOB_DRTION = 1 THEN "Kontrak" ELSE "Tetap" END STATUS');
		    $this->db->from('T_TRN_RCRUIT a');
	    	$this->db->join('T_TRN_RCRUIT_DETAIL b','a.REC_IDENTS = b.REC_FIDENT','INNER');
	    	$this->db->join('T_TRN_JOBPOS c','a.REC_JOBPOS = c.JOB_IDENTS','INNER');
	    	$this->db->join('T_MAS_CLIENT d','a.REC_COMPNY = d.CLI_IDENTS','INNER');
		    $this->db->where("d.CLI_LOGNID",$idents);
		}else{
		    $this->db->select('c.JOB_IDENTS,a.REC_NOMORS,c.JOB_NOMJOB,c.JOB_TITLES,c.JOB_LCTION,CASE WHEN c.JOB_DRTION = 1 THEN "Kontrak" ELSE "Tetap" END STATUS');
		    $this->db->from('T_TRN_RCRUIT a');
	    	$this->db->join('T_TRN_RCRUIT_DETAIL b','a.REC_IDENTS = b.REC_FIDENT','INNER');
	    	$this->db->join('T_TRN_JOBPOS c','a.REC_JOBPOS = c.JOB_IDENTS','INNER');
	    	$this->db->join('T_MAS_CLIENT d','a.REC_COMPNY = d.CLI_IDENTS','INNER');
		    $this->db->where("d.CLI_LOGNID",$idents);
		}

	    $query = $this->db->get();
	    // echo $this->db->last_query();die();
	    $return= $query->result_array();
	    return $return;
  	}

}
?>