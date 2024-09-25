<?php
class Nosj extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('gjson');
        $this->load->model('m_master');
    }

    function getUsers_list(){
        $jdata = $this->m_master->getUserList();
        $this->gjson->returnjson($jdata);
    }
    
    function getMenus_list(){
        $jdata = $this->m_master->getMenu_List();
        $this->gjson->returnjson($jdata);
    }
    
    function getOtorisasi_list(){
        $jdata = $this->m_master->getOtorisasiList();
        $this->gjson->returnjson($jdata);
    }
    
    function getOtorisasi_Detail(){
        $jdata = $this->m_master->getUOMList();
        $this->gjson->returnjson($jdata);
    }
    
    function getProvince_list(){
        $jdata = $this->m_master->getProvinceList();
        $this->gjson->returnjson($jdata);
    }
    
    function getCity_list(){
        $jdata = $this->m_master->getCityList();
        $this->gjson->returnjson($jdata);
    }
    
    function getBidangkerja_list(){
        $jdata = $this->m_master->getBidangkerjaList();
        $this->gjson->returnjson($jdata);
    }
    
    function getDetail_Project($id_project){
        $jdata = $this->m_master->getDetail_Project($id_project);
        $this->gjson->returnjson($jdata);       
    }
    
}