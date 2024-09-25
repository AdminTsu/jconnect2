<?php
class Nosj extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('gjson');
        $this->load->model('m_pekerja');
    }

    function getPekerja_list(){
        $jdata = $this->m_pekerja->getPekerjaList();
        $this->gjson->returnjson($jdata);
    }
    
}