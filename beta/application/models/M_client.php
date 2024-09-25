<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_client extends CI_Model{
	var $username;
  var $idents;
  var $hasil;
  var $level;

	function __construct(){
    parent::__construct();
    $this->username = $this->session->userdata('USR_LOGINS');
    $this->idents = $this->session->userdata('USR_IDENTS');
    $this->level = $this->session->userdata('USR_LEVELS');
  }

// ------------------------- Master Client
  function getClientList($loginid){
    $sa = $this->level;
    $this->db->select("a.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC,d.CTY_NAMESS CITY,e.SPS_NAMESS BIDANG");
    $this->db->select("CASE WHEN a.CLI_ACTIVE = 1 THEN 'AKTIF' ELSE 'TIDAK AKTIF' END STATUS");
    $this->db->from("T_MAS_CLIENT a");
    $this->db->join("T_MAS_COMMON b","a.CLI_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CLI_PROVNC = c.PRV_IDENTS","INNER");
    $this->db->join("T_MAS_CITYSS d","a.CLI_CITYSS = d.CTY_IDENTS","INNER");
    $this->db->join("T_MAS_SPSLIZ e","a.CLI_ASPECS = e.SPS_IDENTS","INNER");
    if($sa != 99){
      $this->db->where("CLI_LOGNID",$loginid);
    }

    $hasil = $this->crud->returnforjson(array("order_by"=>array("CLI_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getClient_edit($id,$type){
    $this->db->select("a.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC,d.CTY_NAMESS CITY,e.USR_LOGINS");
    $this->db->from("T_MAS_CLIENT a");
    $this->db->join("T_MAS_COMMON b","a.CLI_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CLI_PROVNC = c.PRV_IDENTS","INNER");
    $this->db->join("T_MAS_CITYSS d","a.CLI_CITYSS = d.CTY_IDENTS","INNER");
    $this->db->join("T_MAS_USERSS e","a.CLI_LOGNID = e.USR_IDENTS","INNER");
    $this->db->where("CLI_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

  function getClientID($idlogin,$type){
    $this->db->select("CLI_IDENTS");
    $this->db->from("T_MAS_CLIENT");
    $this->db->where("CLI_LOGNID",$idlogin);

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

  function getComboBidang(){
    $this->db->select("SPS_IDENTS,SPS_NAMESS");
    $this->db->from("T_MAS_SPSLIZ");
    $query = $this->db->get();
    $data["0"] = "--Pilih Bidang Pekerjaan--";
    foreach($query->result() as $row){
        $data[$row->SPS_IDENTS] = $row->SPS_NAMESS;
    }
    return $data;   
  }

  function getComboJobsClients($idclnt){
    $this->db->select("JOB_IDENTS,CONCAT(JOB_TITLES,' (',JOB_NOMJOB,')') JOBS");
    $this->db->from("T_TRN_JOBPOS");
    $this->db->where("JOB_COMPNY",$idclnt);
    $query = $this->db->get();
    $data["0"] = "--Pilih Lowongan--";
    foreach($query->result() as $row){
        $data[$row->JOB_IDENTS] = $row->JOBS;
    }
    return $data;
    // return $query->result();
  }

  function getComboJobsClients2($idclnt){
    $this->db->select("JOB_IDENTS,CONCAT(JOB_TITLES,' (',JOB_NOMJOB,')') JOBS");
    $this->db->from("T_TRN_JOBPOS");
    $this->db->where("JOB_COMPNY",$idclnt);
    $query = $this->db->get();
    // $data["0"] = "--Pilih Lowongan--";
    // foreach($query->result() as $row){
    //     $data[$row->JOB_IDENTS] = $row->JOBS;
    // }
    // return $data;
    return $query->result();   
  }

  function getApplayJob($id,$type,$jobnya){
    // echo $type;
    $this->db->select("a.APP_IDENTS IDENTS,a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR,'/',PKR_TGLLHR) TMPTGLLHR,CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM,PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC,PKR_EXPNPT EXPNPT,PKR_EXPBDG EXPBDG,c.PKR_NOMRHP NOMRHP,a.APP_STATUS,PKR_FILECV FILECV,APP_CVIEWS CVIEWS,b.JOB_IDENTS IDJOBS,JOB_EXPDAT EXPDAT,b.JOB_TITLES TITLES,CASE WHEN b.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END TYPESS,JOB_NOMJOB,CASE WHEN a.APP_STATUS = 1 THEN 'MASIH BUKA' ELSE 'SUDAH TUTUP' END STATUS,d.CLI_NAMESS COMPNY");
    $this->db->from("T_TRN_APPLYJ a");
    $this->db->join("T_TRN_JOBPOS b","a.APP_IDJOBS = b.JOB_IDENTS","INNER");
    $this->db->join("T_MAS_PEKRJA c","a.APP_IDPKRJ = c.PKR_IDENTS","INNER");
    $this->db->join("T_MAS_CLIENT d","b.JOB_COMPNY = d.CLI_IDENTS","INNER");
    $this->db->join("T_MAS_USERSS e","d.CLI_LOGNID = e.USR_IDENTS","INNER");
    $this->db->where("a.APP_IDJOBS = b.JOB_IDENTS");
    $this->db->where("a.APP_IDPKRJ = c.PKR_IDENTS");
    if($jobnya != 0){
      $this->db->where("b.JOB_IDENTS",$jobnya);
    }
    // untuk superadmin/admin
    // if($this->level != 99){
    //   $this->db->where("d.CLI_LOGNID",$id);
    // }
    // Belum diproses/Aktif
    if($type != 0){
      $this->db->where("a.APP_STATUS",$type);
    }
    $this->db->group_by('JOB_NOMJOB');
    // $this->db->order_by('a.APP_IDPKRJ');
    $query = $this->db->get();

    // echo "<br>".$this->db->last_query()."<br>";
    $return= $query->result_array();
    return $return;
  }

  function getUpdateCounter($idents,$idappl){
    $sql =" 
          UPDATE T_TRN_APPLYJ a
          INNER JOIN (
              SELECT APP_IDENTS,APP_IDPKRJ,(APP_CVIEWS+1) CVIEWS
              FROM T_TRN_APPLYJ 
              WHERE APP_IDPKRJ = ".$idents." AND APP_IDENTS = ".$idappl."
            ) b ON a.APP_IDPKRJ = b.APP_IDPKRJ
          SET a.APP_CVIEWS = CVIEWS
          WHERE a.APP_IDPKRJ = ".$idents." AND a.APP_IDENTS = ".$idappl."
    ";

    $query = $this->db->query($sql);
    // echo $this->db->last_query();
    // $this->common->debug_sql();die();

    return $query;
  }
  
  function getApplayJobReport($id,$types,$tahun,$bulan){
    // echo $type;
    if($bulan != 0){
      $periode = "$tahun-$bulan";
    }

    $this->db->select("LEFT(b.JOB_DATCRT,4) TAHUN, LEFT(b.JOB_DATCRT,7) BULAN, a.APP_IDENTS IDENTS,a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR,', ',PKR_TGLLHR) TMPTGLLHR,CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM,PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC,PKR_EXPNPT EXPNPT,PKR_EXPBDG EXPBDG,c.PKR_NOMRHP NOMRHP,a.APP_STATUS,PKR_FILECV FILECV,APP_CVIEWS CVIEWS,b.JOB_IDENTS IDJOBS,JOB_EXPDAT EXPDAT,b.JOB_TITLES TITLES,CASE WHEN b.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END TYPESS,JOB_NOMJOB,CASE WHEN a.APP_STATUS = 1 THEN 'MASIH BUKA' ELSE 'SUDAH TUTUP' END STATUS,d.CLI_NAMESS COMPNY,b.JOB_ASPECS");
    $this->db->from("T_TRN_APPLYJ a");
    $this->db->join("T_TRN_JOBPOS b","a.APP_IDJOBS = b.JOB_IDENTS","INNER");
    $this->db->join("T_MAS_PEKRJA c","a.APP_IDPKRJ = c.PKR_IDENTS","INNER");
    $this->db->join("T_MAS_CLIENT d","b.JOB_COMPNY = d.CLI_IDENTS","INNER");
    $this->db->join("T_MAS_USERSS e","d.CLI_LOGNID = e.USR_IDENTS","INNER");
    $this->db->where("a.APP_IDJOBS = b.JOB_IDENTS");
    $this->db->where("a.APP_IDPKRJ = c.PKR_IDENTS");

    // untuk superadmin/admin
    if($this->level != 99){
      $this->db->where("d.CLI_LOGNID",$id);
    }

    if($tahun != '' && $bulan == 0){
      $this->db->where("LEFT(b.JOB_DATCRT,4)",$tahun);
    }

    if($tahun != '' && $bulan != 0){
      $this->db->where("LEFT(b.JOB_DATCRT,7)",$periode);
    }

    if($types == 2){
      $this->db->group_by("b.JOB_ASPECS");
    }

    $this->db->order_by('JOB_NOMJOB');
    $query = $this->db->get();

    // echo "<br>".$this->db->last_query()."<br>";
    $return= $query->result_array();
    return $return;
  }

  function getApplayJobReport_Excel($id,$types,$tahun,$bulan){
    
    if($bulan != 0){
      $periode = "$tahun-$bulan";
    }

    $this->db->select("LEFT(b.JOB_DATCRT,4) TAHUN, LEFT(b.JOB_DATCRT,7) BULAN, a.APP_IDENTS IDENTS,a.APP_IDPKRJ IDPKRJ, c.PKR_NAMESS PEKRJA, CONCAT(PKR_TMPLHR,'/',PKR_TGLLHR) TMPTGLLHR,CASE WHEN c.PKR_JNSKLM = 1 THEN 'LAKI-LAKI' ELSE 'PEREMPUAN' END JNSKLM,PKR_FOTOSS FOTOSS, PKR_EXPRNC EXPRNC,PKR_EXPNPT EXPNPT,PKR_EXPBDG EXPBDG,c.PKR_NOMRHP NOMRHP,a.APP_STATUS,PKR_FILECV FILECV,APP_CVIEWS CVIEWS,b.JOB_IDENTS IDJOBS,JOB_EXPDAT EXPDAT,b.JOB_TITLES TITLES,CASE WHEN b.JOB_DRTION = 1 THEN 'KONTRAK' ELSE 'TETAP' END TYPESS,JOB_NOMJOB,CASE WHEN a.APP_STATUS = 1 THEN 'MASIH BUKA' ELSE 'SUDAH TUTUP' END STATUS,d.CLI_NAMESS COMPNY,b.JOB_ASPECS");
    $this->db->from("T_TRN_APPLYJ a");
    $this->db->join("T_TRN_JOBPOS b","a.APP_IDJOBS = b.JOB_IDENTS","INNER");
    $this->db->join("T_MAS_PEKRJA c","a.APP_IDPKRJ = c.PKR_IDENTS","INNER");
    $this->db->join("T_MAS_CLIENT d","b.JOB_COMPNY = d.CLI_IDENTS","INNER");
    $this->db->join("T_MAS_USERSS e","d.CLI_LOGNID = e.USR_IDENTS","INNER");
    $this->db->where("a.APP_IDJOBS = b.JOB_IDENTS");
    $this->db->where("a.APP_IDPKRJ = c.PKR_IDENTS");
    // untuk superadmin/admin
    if($this->level != 99){
      $this->db->where("d.CLI_LOGNID",$id);
    }

    if($tahun != '' && $bulan == 0){
      $this->db->where("LEFT(b.JOB_DATCRT,4)",$tahun);
    }

    if($tahun != '' && $bulan != 0){
      $this->db->where("LEFT(b.JOB_DATCRT,7)",$periode);
    }

    if($types == 2){
      $this->db->group_by("b.JOB_ASPECS",$types);
    }

    $this->db->order_by('JOB_NOMJOB');
    
    $query = $this->db->get();
    return $query;
  }

}
?>