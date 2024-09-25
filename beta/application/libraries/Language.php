<?php  
// Controller I  
class Language extends Controller {  
    public function __construct() {  
        parent::Controller();  
        // file-file ini sebaiknya di load di fitur autoload  
        $this->load->helper('url');  
        $this->load->helper('cookie');  
        $this->load->library('language');  
  
        if(get_cookie('bahasa') === 'en') {  
            $this->config->set_item('language', 'english');  
            $this->load->model('english', 'current_language');  
        }  
        else {  
            $this->config->set_item('language', 'indonesia');  
            $this->load->model('indonesia', 'current_language');  
  
            set_cookie(array('name' => 'bahasa',  
                          'value'   => 'in',  
                          'expire'  => '8650',  
                          'prefix'  => ''));  
        }  
    }  
  
    public function index() {  
        // Mengambil data dari language file di application/language  
        $this->lang->load('d3ptzz');  
        $data['title'] = $this->lang->line('title');  
        $data['hello'] = $this->lang->line('hallo');  
  
        // Mengambil data dari model  
        $data['dari_db'] = $this->current_language->get_data();  
        $this->load->view('view_multibahasa', $data);  
    }  
}  
//------------------------------------------------------  
?>