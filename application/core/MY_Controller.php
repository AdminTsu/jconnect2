<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	//Page info
	protected $data = Array();
	protected $pageName = FALSE;
	protected $template = "main";
	protected $hasNav = TRUE;
	//Page contents
	protected $javascript = array();
	protected $css = array();
	protected $fonts = array();
	//Page Meta
	protected $title = FALSE;
	protected $description = FALSE;
	protected $keywords = FALSE;
	protected $author = FALSE;
	public $mytable;
	public $username;
	public $viewerpage;

	function __construct()
	{	
		parent::__construct();
		$this->data["uri_segment_1"] = $this->uri->segment(1);
		$this->data["uri_segment_2"] = $this->uri->segment(2);
		$this->title = $this->config->item('site_title');
		$this->description = $this->config->item('site_description');
		$this->keywords = $this->config->item('site_keywords');
		$this->author = $this->config->item('site_author');

		//user config declaration
		$this->username = $this->session->userdata('USR_LOGINS');
		$this->usrlayout = $this->session->userdata('USR_LAYOUT');
		$this->usrthemes = $this->session->userdata('USR_THEMES');		
		$this->datesave = date('Y-m-d H:i:s');
		// $this->empidents = $this->session->userdata('karyawanid');
		// $this->empfnames = $this->session->userdata('nama');
		// $this->empposisi = $this->session->userdata('jabatanid');
		$this->empidents = $this->session->userdata('USR_LOGINS');
		$this->empfnames = $this->session->userdata('USR_NAMESS');
		$this->empposisi = $this->session->userdata('USR_LEVESS');
		
		if($this->uri->segment(1)!="login"){
			if($this->session->userdata('USR_LOGINS')==""){
				// $this->session->sess_destroy();
				// echo "detanto";
			// echo "<pre>";
				// print_r($this->session->userdata);
			// die();			
				// echo $this->session->userdata('USR_LOGINS');
				// die();
				redirect('/login');
			}			
		}

    $CI =& get_instance();
		$url = uri_string();
		$otorisasi = "true";//$CI->common->otorisasi($url);
		// echo $otorisasi;
		// if($otorisasi==""){
		// 	redirect('/home/notauthorized');
		// }
		$this->pageName = strToLower(get_class($this));
	}
	 
	public function sett($table){
		$this->mytable = $table;
	}

	protected function _render($view, $value, $viewer="admin", $breadcrumb=null, $renderData="FULLPAGE") {
		$this->viewerpage = $view;
        switch ($renderData) {
        case "AJAX"     :
	        $this->load->view($view,$this->data);
	        break;
        case "JSON"     :
        	echo json_encode($this->data);
        	break;
        case "FULLPAGE" :
        default         : 
			//static
			$toTpl["javascript"] = $this->javascript;
			$toTpl["css"] = $this->css;
			$toTpl["fonts"] = $this->fonts;
			
			//meta
			$toTpl["title"] = $this->title;
			$toTpl["description"] = $this->description;
			$toTpl["keywords"] = $this->keywords;
			$toTpl["author"] = $this->author;
		
			//data
			$this->data['content'] = $value;
			$this->data['breadcrumb'] = $breadcrumb;
			$toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl),true);

			//nav menu
			// $folder_template = "template_samping";
			$folder_template = "template";
			if($this->hasNav){
					$this->load->helper("nav");
					$toMenu["pageName"] = $this->pageName;
					$toHeader["nav"] = $this->load->view($folder_template . "/nav",$toMenu,true);
			}
			$toHeader["basejs"] = $this->load->view("js.php",$this->data,true);
			
			$toBody["header"] = $this->load->view($folder_template . "/header",$toHeader,true);
			$previous = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : $this->config->base_url()."home/welcome";
			$toTpl["onunload"] = "
			<script>
				function jvtransLock(opt){
					var tprm = {};
					tprm['hapuss'] = opt;
					tprm['urinya'] = '".$this->uri->ruri_string()."';
					$.post('/".$this->router->fetch_directory() . $this->router->fetch_class()."/transLock',tprm,function(rebound){
						if(rebound){
							eval(rebound);
							self.location.replace('" . $previous . "');
						}
					});
				}
			</script>
			";
			//$toBody["footer"] = $this->load->view("template/footer",'',true);
			//$toTpl["body"] = "";
					////load untuk bikin kunci kalo edit
			$toTpl["body"] = $this->load->view($folder_template . "/".$this->template,$toBody,true);

			//render view
			$this->load->view($folder_template . "/skeleton",$toTpl);
			break;
		}
	}

	function transLock(){
	    $uri = $this->input->post('urinya');
	    $breakURI = explode('/',$uri);
	    $noedit = 0;
	    $indexs = '0';
	    foreach ($breakURI as $key => $value) {
	      ////cek ada edit gak, kalo ada jalanin common->transLock
	      if($value=='edit'){
	        $noedit = 1;
	        $indexs = $key;
	      }
	    }
	    if($noedit==1){
	    	if($this->input->post('hapuss')){
	    		$ishapus = $this->input->post('hapuss');
	    	}else{
	    		$ishapus = 0;
	    	}
	    	// $ishapus = 0;
	      $this->common->transLock($breakURI[($indexs+1)],$ishapus);
	    }
	}
}