<?php
class Nosj extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('gjson');
        $this->load->model('m_client');
    }
    
    function getClient_list(){
        $jdata = $this->m_client->getClientList();
        $this->gjson->returnjson($jdata);
    }
    
}