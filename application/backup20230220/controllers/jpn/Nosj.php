<?php
class Nosj extends MY_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->library('gjson');
    // $this->load->model(array('m_sales','m_hrm','m_spk'));
    $this->load->model(array('m_master','m_pekerja','m_perekrutan','m_jconnect'));
  }
  function getCommon_cmb($HEADCD){
    $jdata = $this->crud->getCommon_cmb($HEADCD);
    $this->gjson->returnjson($jdata);
  }
  function getNosjnull(){
    echo "[{\"TotalRows\":\"0\",\"Rows\":[]}]";
  }
  function getNosjnullarray(){
    $hasil = array();
  }
  
  function getMenu(){
    $jdata = $this->crud->getMenu_json();
    $this->gjson->returnjsontree($jdata);
  }  

  // function getUnitorganisasi_tree($all=false){
  //   $jdata = $this->m_hrm->getOrganisasi_tree();
  //   $return = $jdata;
  //   if($all){
  //     $return = array_merge($return, array("all"=>true));
  //   }
  //   // $this->common->debug_array($return);
  //   $this->gjson->returnjsontree($return);
  // }

  // function getPosisi_tree($div){
  //   $jdata = $this->m_hrm->getPosisiUO_tree($div);
  //   $return = $jdata;
  //   $this->gjson->returnjsontree($return);
  // }

  // function getOutletList($active){
  //   $jdata = $this->m_sales->getOutletList($active);
  //   $this->gjson->returnjson($jdata);
  // }


  // function get_dthead_spk(){
  //     $jdata = $this->m_spk->get_dthead_spk();
  //     // $this->common->debug_post();
  //     $this->gjson->returnjson($jdata);       
  // }

  // function get_dtdetail_spk($id){
  //     $jdata = $this->m_spk->get_dtdetail_spk($id);
  //     // $this->common->debug_post();
  //     $this->gjson->returnjson($jdata);       
  // }

}