<?php
class Nosj extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('gjson');
        $this->load->model('m_perekrutan');
    }
    
    function getRekrut_list($loginid){
        $jdata = $this->m_perekrutan->getRekrutList($loginid);
        $this->gjson->returnjson($jdata);
    }
    
    function getDetail_Rekrut($idents){
        $jdata = $this->m_perekrutan->getDetail_Rekrut($idents);
        $this->gjson->returnjson($jdata);
    }
    
    function tagPerusahaan(){
        $table = 'T_MAS_CLIENT';
        $idnya = 'CLI_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'CLI_NAMESS',
            'where'=>'CLI_NAMESS',
            'disabled'=>FALSE
        );
        $this->db->where('CLI_ACTIVE',1);
        $filter = "";

        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter
                )
            );
        // $this->common->debug_sql();
    }

    function getDataCompany($id){
        $getdata = $this->m_job->getDataCompany($id);
        echo $getdata->CLI_IDENTS.'~'.$getdata->CLI_NAMESS.'~'.$getdata->CITY.'~'.$getdata->ASPECS;
    }

}