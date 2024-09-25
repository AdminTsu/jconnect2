<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_master extends CI_Model{
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
  function getUserList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,b.COM_DESCRE LEVELS,c.COM_DESCRE STATUS");
    $this->db->from("T_MAS_USERSS a");
    $this->db->join("T_MAS_COMMON b","a.USR_LEVELS = b.COM_TYPECD AND b.COM_HEADCD = 4","LEFT");
    $this->db->join("T_MAS_COMMON c","a.USR_ACTIVE = c.COM_TYPECD AND c.COM_HEADCD = 6","LEFT");
    if($superuser != 99){
      $this->db->where("a.USR_LEVELS < 99");
    }else{
      $this->db->where("a.USR_LEVELS <= $superuser");
    }

    $hasil = $this->crud->returnforjson(array("order_by"=>array("USR_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getUsers_edit($id,$type){
    $this->db->select("*");
    $this->db->from("T_MAS_USERSS");
    $this->db->where("USR_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
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

// ------------------------- Master Menu
  function getMenu_List(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,CASE WHEN a.MNU_HVCHLD = 1 THEN 'Yes' ELSE 'No' END HVCHLD,CASE WHEN a.MNU_CHILDS = 1 THEN 'Yes' ELSE 'No' END CHILDS,CASE WHEN b.MNU_DESCRE = '' THEN '#' ELSE b.MNU_DESCRE END REFERENSI");
    $this->db->from("T_MAS_MENUSS a");
    $this->db->join("T_MAS_MENUSS b","a.MNU_REFERS = b.MNU_NOMORS","LEFT");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("MNU_NOMORS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getMenu_edit($id,$type){
    $this->db->select("*");
    $this->db->from("T_MAS_MENUSS");
    $this->db->where("MNU_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

// ------------------------- Master Otorisasi
  function getOtorisasiList(){
    $superuser = $this->isAdmin;
    $this->db->select("PRV_IDENTS,PRV_POSIDN,PRV_MNUNOM,b.USR_LOGINS, c.MNU_DESCRE, CONCAT(a.PRV_RIGHTS,' <b>(Add, Edit, Delete, View)</b>') PRV_RIGHTS");
    $this->db->select("CASE WHEN MNU_HVCHLD = 1 THEN 'Yes' ELSE 'No' END HVCHLD");
    $this->db->select("CASE WHEN MNU_CHILDS = 1 THEN 'Yes' ELSE 'No' END CHILDS");
    $this->db->from("T_MAS_PRIACC a");
    $this->db->join("T_MAS_USERSS b","a.PRV_POSIDN = b.USR_LOGINS","INNER");
    $this->db->join("T_MAS_MENUSS c","a.PRV_MNUNOM = c.MNU_NOMORS","INNER");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("PRV_POSIDN,PRV_MNUNOM")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getOtorisasi_edit($id,$type){
    $this->db->select("PRV_IDENTS,PRV_POSIDN,PRV_MNUNOM,b.USR_LOGINS, c.MNU_DESCRE, a.PRV_RIGHTS");
    $this->db->select("CASE WHEN MNU_HVCHLD = 1 THEN 'Yes' ELSE 'No' END HVCHLD");
    $this->db->select("CASE WHEN MNU_CHILDS = 1 THEN 'Yes' ELSE 'No' END CHILDS");
    $this->db->from("T_MAS_PRIACC a");
    $this->db->join("T_MAS_USERSS b","a.PRV_POSIDN = b.USR_LOGINS","INNER");
    $this->db->join("T_MAS_MENUSS c","a.PRV_MNUNOM = C.MNU_NOMORS","INNER");
    $this->db->where("PRV_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

// ------------------------- Master Province
  function getProvinceList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,b.COM_DESCRE CONTRY");
    $this->db->from("T_MAS_PROVNC a");
    $this->db->join("T_MAS_COMMON b","a.PRV_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("PRV_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getProvince_edit($id,$type){
    $this->db->select("PRV_IDENTS,PRV_NAMESS,PRV_INTIAL,PRV_CONTRY");
    $this->db->from("T_MAS_PROVNC a");
    $this->db->join("T_MAS_COMMON b","a.PRV_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->where("PRV_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

// ------------------------- Master City
  function getCityList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC");
    $this->db->from("T_MAS_CITYSS a");
    $this->db->join("T_MAS_COMMON b","a.CTY_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CTY_PROVNC = c.PRV_IDENTS","INNER");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("CTY_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getCity_edit($id,$type){
    $this->db->select("CTY_IDENTS,CTY_NAMESS,CTY_INTIAL,CTY_CONTRY,CTY_PROVNC,b.COM_DESCRE CTY_CONTRY_DESC,c.PRV_NAMESS CTY_PROVNC_DESC");
    $this->db->from("T_MAS_CITYSS a");
    $this->db->join("T_MAS_COMMON b","a.CTY_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CTY_PROVNC = c.PRV_IDENTS","INNER");
    $this->db->where("CTY_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

// ------------------------- Master Bidang Kerja
  function getBidangkerjaList(){
    $superuser = $this->isAdmin;
    $this->db->select("*");
    $this->db->from("T_MAS_SPSLIZ");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("SPS_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getBidangkerja_edit($id,$type){
    $this->db->select("*");
    $this->db->from("T_MAS_SPSLIZ");
    $this->db->where("SPS_IDENTS",$id);
    
    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

// ------------------------- Master Client
  function getClientList(){
    $superuser = $this->isAdmin;
    $this->db->select("a.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC,d.CTY_NAMESS CITY");
    $this->db->from("T_MAS_CLIENT a");
    $this->db->join("T_MAS_COMMON b","a.CLI_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CLI_PROVNC = c.PRV_IDENTS","INNER");
    $this->db->join("T_MAS_CITYSS d","a.CLI_CITYSS = d.CTY_IDENTS","INNER");

    $hasil = $this->crud->returnforjson(array("order_by"=>array("CLI_IDENTS")));
    // $this->common->debug_sql();
    return $hasil;
  }

  function getClient_edit($id,$type){
    $this->db->select("a.*,b.COM_DESCRE CONTRY,c.PRV_NAMESS PROVNC,d.CTY_NAMESS CITY");
    $this->db->from("T_MAS_CLIENT a");
    $this->db->join("T_MAS_COMMON b","a.CLI_CONTRY = b.COM_TYPECD AND b.COM_HEADCD = 7","INNER");
    $this->db->join("T_MAS_PROVNC c","a.CLI_PROVNC = c.PRV_IDENTS","INNER");
    $this->db->join("T_MAS_CITYSS d","a.CLI_CITYSS = d.CTY_IDENTS","INNER");
    $this->db->where("CLI_IDENTS",$id);

    if($type == 1 ){
      $query = $this->db->get(); 
      return $query->row(); 
    }else{
      $query = $this->db->get(); 
      return $query;  
    }   
  }

  function getChangePass_edit($login){
    $this->db->select('*');
    $this->db->from('USER_LOGIN');
    $this->db->where('USR_LOGINS',$login);

    $query = $this->db->get();
    return $query->row();
  }

  function getDataMenu($id){
    $this->db->select('MNU_NOMORS,MNU_DESCRE');
    $this->db->select("CASE WHEN MNU_HVCHLD = 1 THEN 'Yes' ELSE 'No' END HVCHLD");
    $this->db->select("CASE WHEN MNU_CHILDS = 1 THEN 'Yes' ELSE 'No' END CHILDS");
    $this->db->from('T_MAS_MENUSS');
    $this->db->where("MNU_NOMORS",$id);
    
    // echo $this->db->last_query();die();

    $query = $this->db->get();
    $return= $query->row();
    return $return;
  }

  function getComboMenu(){
    $this->db->select("MNU_NOMORS,MNU_DESCRE");
    $this->db->from("T_MAS_MENUSS");
    $this->db->where("MNU_CHILDS",0);
    $this->db->order_by("MNU_NOMORS");
    $query = $this->db->get();
    $data[""] = "";
    foreach($query->result() as $row){
        $data[$row->MNU_NOMORS] = $row->MNU_DESCRE;
    }
    return $data;   
  }

  function getComboContry($headcd){
    $this->db->select("COM_TYPECD,COM_DESCRE");
    $this->db->from("T_MAS_COMMON");
    $this->db->where("COM_HEADCD",$headcd);
    $query = $this->db->get();

    return $query->result();   
  }

  function getComboProvince(){
    $this->db->select("PRV_IDENTS,PRV_NAMESS");
    $this->db->from("T_MAS_PROVNC");
    $query = $this->db->get();
    $data["0"] = "All";
    foreach($query->result() as $row){
        $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    }
    return $data;   
  }

  function getComboProvinceJP(){
    $this->db->select("PRV_IDENTS,PRV_NAMESS,PRV_INTIAL");
    $this->db->from("T_MAS_PROVNC_JP");
    $query = $this->db->get();
    $data["0"] = "何れも";
    foreach($query->result() as $row){
        $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    }
    return $data;   
  }

  function getComboProvince_change($idcontry){
    $this->db->select("PRV_IDENTS,PRV_NAMESS");
    $this->db->from("T_MAS_PROVNC");
    $this->db->where("PRV_CONTRY",$idcontry);
    $query = $this->db->get();
    // $data["0"] = "--Pilih Provinsi--";
    // foreach($query->result() as $row){
    //     $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    // }
    // echo $this->db->last_query();die();
    return $query->result();    
  }

  function getComboProvinceJP_change($idcontry){
    $this->db->select("PRV_IDENTS,PRV_NAMESS,PRV_INTIAL");
    $this->db->from("T_MAS_PROVNC_JP");
    $this->db->where("PRV_CONTRY",$idcontry);
    $query = $this->db->get();
    // $data["0"] = "--Pilih Provinsi--";
    // foreach($query->result() as $row){
    //     $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    // }
    // echo $this->db->last_query();die();
    return $query->result();    
  }

  function getComboKota_change($idcontry,$idprovnc){
    $this->db->select("CTY_IDENTS,CTY_NAMESS");
    $this->db->from("T_MAS_CITYSS");
    $this->db->where("CTY_CONTRY",$idcontry);
    $this->db->where("CTY_PROVNC",$idprovnc);
    $query = $this->db->get();
    // $data["0"] = "--Pilih Provinsi--";
    // foreach($query->result() as $row){
    //     $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    // }
    // echo $this->db->last_query();die();
    return $query->result();    
  }

  function getComboKotaJP_change($idcontry,$idprovnc){
    $this->db->select("CTY_IDENTS,CTY_NAMESS,CTY_INTIAL");
    $this->db->from("T_MAS_CITYSS_JP");
    $this->db->where("CTY_CONTRY",$idcontry);
    $this->db->where("CTY_PROVNC",$idprovnc);
    $query = $this->db->get();
    // $data["0"] = "--Pilih Provinsi--";
    // foreach($query->result() as $row){
    //     $data[$row->PRV_IDENTS] = $row->PRV_NAMESS;
    // }
    // echo $this->db->last_query();die();
    return $query->result();    
  }

  function getComboCity(){
    $this->db->select("CTY_IDENTS,CTY_NAMESS");
    $this->db->from("T_MAS_CITYSS");
    $query = $this->db->get();
    $data["0"] = "Pilih Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach($query->result() as $row){
        $data[$row->CTY_IDENTS] = $row->CTY_NAMESS;
    }
    return $data;   
  }
  
  function getComboCity_autotag(){
    $this->db->select("CTY_IDENTS,CTY_NAMESS,CASE WHEN CTY_CONTRY = 1 THEN 'INDONESIA' ELSE 'JEPANG' END CONTRY");
    $this->db->from("T_MAS_CITYSS");
    $this->db->order_by('CTY_CONTRY ASC');

    $query = $this->db->get();
    foreach($query->result() as $row){
        $data[$row->CTY_IDENTS] = $row->CTY_NAMESS;
    }
    return $data;   
  }
  
  function cekData($table,$field,$username){
    // echo "$username ~ $table ~ $field";
    $this->db->select('count('.$field.') HASIL');
    $this->db->from($table);
    $this->db->where($field,$username);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    foreach($query->result() as $row){
        $data = $row->HASIL;
    }
    return $data; 
  }

  function cekProvince($table,$contry,$provnc){
    // echo "$username ~ $table ~ $field";
    $this->db->select('count(PRV_NAMESS) HASIL');
    $this->db->from($table);
    $this->db->where('PRV_CONTRY',$contry);
    $this->db->where('PRV_NAMESS',$provnc);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    foreach($query->result() as $row){
        $data = $row->HASIL;
    }
    return $data; 
  }
  
  function cekCity($table,$contry,$provnc,$cityss){
    // echo "$username ~ $table ~ $field";
    $this->db->select('count(CTY_NAMESS) HASIL');
    $this->db->from($table);
    $this->db->where('CTY_CONTRY',$contry);
    $this->db->where('CTY_PROVNC',$provnc);
    $this->db->where('CTY_NAMESS',$cityss);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    foreach($query->result() as $row){
        $data = $row->HASIL;
    }
    return $data; 
  }

  function getDataDescre($table,$kolomid,$kolom,$id){
    // echo $id;die();
    $this->db->select(''.$kolom.' HASIL');
    $this->db->from($table);
    $this->db->where($kolomid,$id);
    
    $query = $this->db->get(); 
    // $this->common->debug_sql();die();
    // echo $this->db->last_query();die();
    $data = '';
    foreach($query->result() as $row){
        $data = $row->HASIL;
    }
    return $data; 
  }
}

?>