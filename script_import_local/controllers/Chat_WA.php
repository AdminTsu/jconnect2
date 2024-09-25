<?php
class Chat_WA extends CI_Controller {
	
    function __construct() {
        parent::__construct();
        $CI =& get_instance();
        $this->title = $this->config->item('app_names');
        $this->load->library('pagination');
        $this->load->helper(array('ginput','dashboard','jqxgrid','hp'));
        $this->load->model(array('m_jconnect','m_master','m_job'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
    }

	public function index()
	{
        // sediakan nohp target
        $nohp = hp('08111035838');
        // atur pesan dengan helper text urlencode
        // $message = '&text=' . urlencode('Hii..testing aplikasi direct link API Whatsapp. Untuk info lebih lanjut silahkan klik ini http://jconnect.co.id');
        $message = '&text=' . urlencode('Hii..kami dari JConnect, ada yang bisa kami bantu. Untuk info lebih lanjut silahkan klik ini http://jconnect.co.id');
        // cek user_agent / device yang digunakan user
        // kalau mobil maka pakai api.whatsapp.com
        // if ($this->agent->is_mobile()){
          $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
        // tapi kalau desktop pakai web.whatsapp.com
        // }else{
        //   $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
        // }
		// $data['title'] = 'Chat Whatsapp';
  //       $data['content'] = 'whatsapp';
  //       $data['linkWA'] = $linkWA;

		// $this->load->view('backend/chat/index', $data);
        // $this->load->view('v_dashboard',$data);
        redirect($linkWA);
	}
}
?>