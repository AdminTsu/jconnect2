<?php
class Nosj extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('gjson');
        $this->load->model('m_job');
    }

    function getJob_list($level,$loginid){
        $jdata = $this->m_job->getJobList($level,$loginid);
        $this->gjson->returnjson($jdata);
    }
    
}