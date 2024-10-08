<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Datatables extends CI_Model{
    var $username;
    var $hasil;
    var $isAdmin;
    var $deptmn;
    var $table = 'T_TRN_JOBPOS';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(null,'JOB_NOMJOB','JOB_TITLES','JOB_LCTION','JOB_ASPECS','JOB_DRTION','JOB_STATUS');

    var $column_search = array('JOB_NOMJOB','JOB_TITLES','JOB_LCTION','JOB_ASPECS','JOB_DRTION','JOB_STATUS');
    // default order 
    var $order = array('JOB_NOMJOB' => 'asc');

    function __construct(){
      parent::__construct();
      $this->username = $this->session->userdata('USR_LOGINS');
      $this->isAdmin = $this->session->userdata('USR_LEVELS');
    }

    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
?>