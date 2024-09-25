<?php
class Common {

	var $langu;
	var $menu_id;
	var $segment2;
	var $segment3;
	var $segment4;
	var $menu_nomors;
	var $userlogins;
	var $deftable;
	var $driver;
	var $prefix;
	var $dbschm;
	var $office_file;
	var $pdf_file;
	var $image_file;
	var $video_file;
	var $all_file;
  // ------------------------------------------------------------------------
	/**
	 * Session Constructor
	 */
  function Common() {
    $this->CI =& get_instance();
    define('BASE_URL', base_url());
    $data['message']  = (empty($message)) ? '' : $message;
    $data['username'] = $this->userlogins;
		$arrDeftable = $this->CI->session->userdata('deftable');
		$this->driver =  $this->CI->db->dbdriver;
		$this->database =  $this->CI->db->database;
		
		include(APPPATH.'config/database'.EXT);
		$this->driver =  $db['default']['dbdriver'];
		$this->prefix =  $db['default']['dbprefix'];
		// $this->dbschm =  $db['default']['schema'];
		$this->office_file = 'pdf|PDF|doc|DOC|docx|DOCX|xls|XLS|xlsx|XLSX|ppt|PPT|pptx|PPTX|odt|ODT|ods|ODS|odp|ODP';
		$this->image_file = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|bmp|BMP';
		$this->pdf_file = 'pdf|PDF';
		$this->all_file = $this->office_file . '|' . $this->image_file;
		$this->video_file = 'swf|SWF|flv|FLV|mp4|MP4|3gp|3GP';
		if (!isset($deftable)){
			// $this->getDeftable();
		}
		$this->applic = $this->CI->router->fetch_class();
  }
	
	function getDefinition($type, $value){
		if(strpos($value,"(")>0){
			$length = strpos($value,"(");
		}else{
			$length = strlen($value);
		}
		
		$datatype = substr($value,0, $length);
		$precision = str_replace(")","", str_replace("(", "", substr($value, $length, strlen($value))));
		if($precision==""){
			$precision = 10;
		}				
		$returnf = ${$type};
		return $returnf;
	}
	function extractjsonf($application, $jenis="table"){
		$jsondec = "";
		if($jenis=="table"){
			$info = $this->CI->crud->getDeftable($application);
			$prefix = "TBL";
			$nama = "TBL_TABLES";
		}
		if($jenis=="report"){
			$info = $this->CI->crud->getDefReport($application)->result_array();
			$prefix = "RPT";
			$nama = "RPT_APPLIC";
		}
		// echo $this->CI->db->last_query();;
		if(isset($info[0][$prefix."_DEVLPR"])){
			$jsonval = $info[0][$prefix . "_DEVLPR"];
			$jsondec = array($info[0][$nama]=>json_decode($jsonval));
		}
		// return $jsondec;
		return json_decode(json_encode($jsondec),true);
	}
	function extractjson($table, $column){
		if(substr($table, 0,2)==$this->prefix){
			$table = substr($table, 2, strlen($table)-2);
		}
		// echo substr($table, 0,3);
		// echo $table;
		// die();
		$info = $this->CI->crud->getDeftable(null, $table, false);
		$return = "";
		if(isset($info[0]["TBL_DEVLPR"])){
			// $jsonval = str_replace('`', '"', $info[0]["TBL_DEVLPR"]);
			$jsonval = $info[0]["TBL_DEVLPR"];
			$jsondec = json_decode($jsonval);
			if($jsondec!=""){
				foreach($jsondec as $prop){
					foreach($prop as $key=>$val){
						${$key} = $val;
						if($val==$column){
							$return = $prop;
							break;
						}
					}
				}
			} 
		}
		// return json_decode($return);//
		return json_decode(json_encode($return),true);
		// print_r($return);
	}
	function divCari($txtSearch=null){
		$cari = "
  <div class='row' >
    <div class=\"col-md-8\" style='text-align: center'>
      <div class=\"input-group\">
        <div class=\"input-group-btn search-panel\">
          <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span id=\"search_concept\">Pencarian</span> <span class=\"caret\"></span>
          </button>
          <ul class=\"dropdown-menu\" role=\"menu\" style=\"text-align:left\">
            <li><a href=\"#judul\">Judul</a></li>
            <li><a href=\"#renkon\">Kategori Renkon</a></li>
            <li><a href=\"#penyelenggara\">Penyelenggara</a></li>
            <li><a href=\"#propinsi\">Provinsi</a></li>
            <li><a href=\"#kabupaten\">Kabupaten/Kota</a></li>
          </ul>
        </div>
        <input type=\"hidden\" name=\"search_param\" value=\"all\" id=\"search_param\">
         <input type=\"text\" class=\"form-control input-sm\" name=\"x\" id='txtSearch' placeholder=\"Pencarian data..\" value=\"". $txtSearch . "\">
        <div class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\" onclick=\"jvCari()\">Cari!</button></div>
      </div>
    </div>
    
  </div>
		";
		return $cari;
	}
	function formatdatedb($return, $field=null, $format=null, $driver=null){
		if($format==""){		
			$format = $this->CI->config->item("dateformat");	
		}
		$arrMysql = array("YYYY"=>"%Y","YY"=>"%y","MM"=>"%m", "DD"=>"%d");
		$formatdt = $format;
		$final = "";
		$arrFormat = explode("-", $format);
		$rc = false;
		if($driver==""){
			$driver = $this->driver;
		}
		if($driver=="mysql" || $driver=="mysqli"){
			$formatdt = "";
			for($i=0;$i<count($arrFormat);$i++){
				foreach($arrMysql as $key=>$value){
					if($key==strtoupper($arrFormat[$i])){
						if ($rc) $formatdt .="-";
						$formatdt .= $value;
						$rc=true;
					}
				}
			}
		}
		if($driver=="mssql"){
			switch ($format) {
				case 'DD Mon YY':
					$formatdt = 106;
					break;
				case 'YYYYMMDD':
					$formatdt = 112;
					break;
				case 'YYYY-MM-DD':
					$formatdt = 120;
					break;
				case 'DD Mon YY, HH24:MI:SS':
					$formatdt = 120;
					break;
				default:
					$formatdt = 120;
					break;
			}
		}
		//echo $formatdt;
		switch($driver){
			case "mysql":
			case "mysqli":
				$function = "DATE_FORMAT";
				break;
			case "mssql":
				$function = "CONVERT";
				break;
			case "oci8":
			case "postgre" :
				$function = "TO_CHAR";
				break;
		}
		
		switch ($return){
			case "1" : //format tanggal
				switch($driver){
					case "mysql":
					case "mysqli":
					case "postgre" :
					case "oci8" :
						$final = $function . "(" . $field .", '" . $formatdt . "')";
						break;
					case "mssql" :
						$format = strtoupper($format);
						switch ($format) {
							case 'YYYY':
								$final = "YEAR(" . $field .")";
								break;
							case 'MONTH':
								$final = "DATENAME(MONTH, " . $field .")";
								break;
							case 'MON':
								$final = "LEFT(DATENAME(MONTH, " . $field ."),3)";
								break;
							case 'DD MON YY, HH24:MI:SS':	
								$final = "" . $function . "(varchar(30), " . $field ."," . $formatdt . ") ";
								break;
							case 'DD MON YY':	
								$final = "" . $function . "(varchar(30), " . $field ."," . $formatdt . ") ";
								break;
							default:
								$final = "left(" . $function . "(varchar(30), " . $field ."," . $formatdt . "),10) ";
								break;
						}
						break;
				}
				break;
			case "2" : //function
				$final = $function;
				break;
			case "3" : //function datediff dengan current date
				switch($driver){
					case "mysql":
					case "mysqli":
						$final = "DATEDIFF(".$field.",now())";
						break;
					case "oci8" :
						$final = "(" . $field ." - sysdate)";
						break;
				}
				break;
			case "4" :
				$final = "YEAR(" . $field . ")";
				break;
		}

		return $final;
	}
	function otorisasi($cignit, $check='true'){
		$data = array('grab','login','home','nosj','home','export');
		$ada = false;
		for($x=0;$x<count($data);$x++){
			if(strpos(strtolower($cignit), $data[$x])!==false){
				$ada = true;
				break;
			}
		}
		if($ada){
			$otorisasi = "true";
		}else{
			if($check=='true'){
				$otorisasi = $this->CI->crud->getOtorisasi($cignit);	
			}else{
				$otorisasi = $check;
			}
		}
		return $otorisasi;
	}

	
	function vmenu(){
		$username = $this->CI->session->userdata('USR_LOGINS');
		$levels   = $this->CI->session->userdata('USR_LEVELS');
		$menuItemsgw = $this->CI->crud->getMenu_json();
		// $this->CI->common->debug_sql();
		// $this->CI->common->debug_array($this->CI->session->userdata());
		$html = '';
		if($menuItemsgw->num_rows()>0){
			$menuItemsxx = $menuItemsgw->result_array();
			$parent = '';
			$parent_stack = array();
			$children = array();
			foreach ( $menuItemsxx as $item ){
			    $children[$item['MNU_REFERS']][] = $item;
			}
			
			while ( ( $option = each( $children[$parent] ) ) || ( $parent > 0 ) ){
		    if ( !empty( $option ) )
		    {
		    // 1) Menu yg mempunyai anak
	        // store current parent in the stack, and update current parent
	        if ( !empty( $children[$option['value']['MNU_IDENTS']] ) ){
	          $PARENT = $option['value']['MNU_REFERS'];
	          $ICONED = $option['value']['MNU_ICONED'];
	          $ROUTES = $option['value']['MNU_ROUTES'];
	          $RGHT = "";
	          $ICON = "";
	          $LINK = "#";
	          if($ICONED!=""){
	              $ICON = "<i class=\"fa fa-" . $ICONED. "\"></i>&nbsp;";
	          }
	           // if($PARENT==0){
	              $RGHT = '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';
	           // }
	              
	          $html .= '<li class="treeview"><a href="'.$ROUTES.'">'.$ICON . '<span>'.$option['value']['MNU_DESCRE'] . '&nbsp;&nbsp;</span>'.$RGHT.'</a>';
	          $html .= '<ul class="treeview-menu">'; 
	          array_push( $parent_stack, $parent );
	          $parent = $option['value']['MNU_IDENTS'];
	        }else{// 2) The item yg tidak mempunyai anak
	          $ICONED = $option['value']['MNU_ICONED'];
	          $ROUTES = $option['value']['MNU_ROUTES'];
	          $ICON = "";
	          if($ICONED!=""){
	              $ICON = "<i class=\"fa fa-" . $ICONED. "\"></i>&nbsp;";
	          }
	          $html .= '<li><a href="/'.$ROUTES.'">'.$ICON . '<span style="width:10px;word-wrap: break-word;">'.$option['value']['MNU_DESCRE'] . '&nbsp;&nbsp;</span></a>';
	          // $html .= '<li><a href="#">' . $option['value']['MNU_DESCRE'] . '</a></li>';
	        }
	    	}
	    // 3) Current parent has no more children:
	    // jump back to the previous menu level
	    	else
	    	{
	        $html .= '</ul></li>';
	        $parent = array_pop( $parent_stack );
	    	}
			}
		}
	
		return $html;
	}
	
	function getDeftable(){
		$this->CI->load->model('crud');
		//$carrDeftable = count($arrDeftable);
		$rslDeftable = $this->CI->crud->getDeftable();
			//$this->CI->session->set_userdata('deftable',$rslDeftable);
		//}
		foreach ($rslDeftable as $row){
			$tblAPPLIC = $row['TBL_APPLIC']; //Modul Code
			$tblTABLES = $row['TBL_TABLES']; //Modul Code
			$tblNOTESS = $row['TBL_NOTESS']; //Modul Code
			$tblDESCRE = $row['TBL_DESCRE']; //Modul Code
			$this->deftable[$tblAPPLIC]= array($tblTABLES, $tblDESCRE);
		}
	}
	function uploadfile($parameter){
		// $this->debug_array($pass);
		$path = '/assets/documents';
		$allowed_types = $this->office_file;
		$max_size = 10000000;
		$overwrite = true;
		$response = true;
		$multiple = false;
		$redirect = "";
		$serverlocation = $_SERVER["DOCUMENT_ROOT"];
		foreach ($parameter as $indx=>$value){
			${$indx}=$value;
		}
		switch ($typedoc) {
			case 'pdf':
				$allowed_types = $this->pdf_file;
				break;
			case 'office':
				$allowed_types = $this->office_file;
				break;
			case 'image':
				$allowed_types = $this->image_file;
				break;
			case 'all':
				$allowed_types = $this->all_file;
				break;
			default:
				$allowed_types = $this->office_file;
				break;
		}
		$config['upload_path'] = $serverlocation .$path;
		$config['allowed_types'] = $allowed_types;
		$config['max_size']	= $max_size;
		$config['overwrite'] = TRUE; 
		$this->CI->load->library('upload');
		$this->CI->upload->initialize($config,TRUE);
		$folder =  $serverlocation . "" . $path ."/";
		if(!$multiple){
			$fileupload = $_FILES[$field]['name'];	
			$fileerror = $_FILES[$field]['error'];
		}else{
			$fileupload = $filess[$field]['name'][$loop];
			$fileerror = $filess[$field]['error'][$loop];
			if($fileerror!=4){
	      $_FILES[$field]['name']= $fileupload;
	      $_FILES[$field]['type']= $filess[$field]['type'][$loop];
	      $_FILES[$field]['tmp_name']= $filess[$field]['tmp_name'][$loop];
	      $_FILES[$field]['error']= $filess[$field]['error'][$loop];
	      $_FILES[$field]['size']= $filess[$field]['size'][$loop];				
			}
		}
		if($fileerror!=4){
			if (!$this->CI->upload->do_upload($field))
			{
				$error = $this->CI->upload->display_errors('\n','\n');
				$error = "Kesalahan Unggah Berkas,".$error."(" . $fileupload.")";
				$this->message_save('save_gagal', $error, $redirect);
				$response = false;
			}	
			else
			{
				$data = $this->CI->upload->data();
				$timestamp = str_replace(":","", str_replace(" ", "", str_replace("-", "", date('Y-m-d H:i s'))));
				//Rename nama file yang baru saja diupload, rename dengan menghilangkan spasi 
				$fileupload = $timestamp. "_" . str_replace(",","", str_replace(" ", "_", $fileupload));
				rename($data['full_path'], $data['file_path'].$fileupload);
				$response  = $fileupload;
			}
		}
		
		return $response;
	}
	public function message_save($val, $from=null, $redirect=null, $str=null){
		$this->CI->lang->load('common');
		if($str==""){
			$str = ($this->CI->lang->line($val) == FALSE) ? $val : $this->CI->lang->line($val);		
		}
		
		$previous = $this->CI->config->item('adminpage');
		if(isset($_SERVER['HTTP_REFERER'])) {
		  $previous = $_SERVER['HTTP_REFERER'];
		}
		$script = "alert('" . $str ." " . $from . "');";
		if($val=="save_gagal"){
			if($redirect!=""){
				$script .= "self.location.replace('" .$redirect . "');";
			}else{
				$script .= "history.back();";
			}
		}else{
			if($redirect!=""){
				$script .= "self.location.replace('" .$redirect . "');";	
			}
		}
		echo "<body onload=\"" . $script. ";\"></body>";
	}

	function menu($id=null){
		$user = $this->CI->session->userdata('USR_LOGINS');	
		$username = $this->CI->session->userdata('USR_NAMESS');	
		if(trim($username)!=""){
		 $usrtext = "Signed in as <b>$username</b>";
		}else{
		 $usrtext = "Please Log in!";
		 // redirect('/login');return;
		}
		
		$arrMenu00 = $this->CI->crud->getMenuHeader($user);
		$arrMenu01 = $this->CI->crud->getMenu($user,1);
		$arrMenu02 = $this->CI->crud->getMenu($user,2);
		$arrMenu03 = $this->CI->crud->getMenu($user,3);

		$carrMenu00 = count($arrMenu00)==0 ? 1 : count($arrMenu00);
		$carrMenu01 = count($arrMenu01)==0 ? 1 : count($arrMenu01);
		$carrMenu02 = count($arrMenu02)==0 ? 1 : count($arrMenu02);
		$carrMenu03 = count($arrMenu03)==0 ? 1 : count($arrMenu03);

		$menu = "";
		$oGroups = "";
		$adaAnak = 0;
		foreach($arrMenu00 as $key=>$item){ // start looping menu level 0
			$ZNomors = substr($item['MNU_NOMORS'],0,6); //Modul Code
			$ZOrigin = $item['MNU_NOMORS'];
			$ZApplic = 1;//Application Code
			$ZDescre = $item["MNU_DESCRE"]; //Application Description (Detail)
			$ZFrcign = $item["MNU_ROUTES"]; //Frcign = Framework Codeigniter
			$ZHvChld = $item["MNU_HVCHLD"];
			$ZIconed = $item["MNU_ICONED"];
			$iconed = "";
			if($ZIconed!=""){
				$iconed = "<i class=\"fa fa-" . $ZIconed. "\"></i>";
			}
			if($ZFrcign!="#"){
				if($ZHvChld==0){
					$ulchild = "";
				}
				$menu .="<li><a href=\"/$ZFrcign\">" . $iconed . $ZDescre . "</a>";
			}else{
				$class1 = "";
				if($ZHvChld==1){
					$class1 ="class=\"dropdown\"";
					$ulchild = "
					<ul class=\"dropdown-menu\">";  
				}
				$menu .= " <li $class1><a data-toggle=\"dropdown\" class=\"dropdown-toggle\">" . $iconed . "&nbsp;&nbsp;" . $ZDescre ."<b class=\"caret\"></b></a>
				" . $ulchild;
			}
			$ul2 = 1;
			$loop = 1;
			$ulmenu1="";
			$divider = true;
			$ulchild = "";
			if($ulchild == ''){
				$ulchild = '#';
			}
			foreach($arrMenu01 as $key=>$item2){
				$adaAnak = 1;
				$ulmen21 = "<li>";
				$tutup21 = "";
				$ulmen22 = "";
				$yApplic = 1;
				$yNomors = substr($item2['MNU_NOMORS'],0,6);
				$yOrigin = $item2['MNU_NOMORS'];
				$yRefers = substr($item2['MNU_REFERS'],0,6);
				$yDescre = $item2["MNU_DESCRE"];
				$yAuthrz = $item2["MNU_RIGHTS"];
				$yFrcign = $item2["MNU_ROUTES"];
				$yHvChld = $item2["MNU_HVCHLD"];
				$yGroups = 1;
				$oGroups = $oGroups=="" ? "1" : $oGroups;
				$yLinked="";
				$yLinken="";
				if($loop>2 && $divider==true){
					if($yGroups!=$oGroups && $oGroups<$yGroups){
						$menu .= "<li class=\"divider\"></li>";
					}
				}
				if($yFrcign!="#" && $yFrcign!=""){
					$yLinked="<a tabindex=\"-1\" href=\"/$yFrcign\">";
				}else{
					//$yLinked="<a tabindex=\"-1\" href=\"#\">";
					$yLinked="<a tabindex=\"-1\">";
				}
				//if($ul2==1){
					if($yHvChld==1){
						$tutup21 = 1;
						$ulmen21 = "
						<li class=\"dropdown-submenu\">
						";
						$ulmen22 = "
							<ul class=\"dropdown-menu\" role=menu>
						";
					}else{
						$tutup21 = 2;
						$ulmen21 = "<li>";
						$ulmen22 = "";
					}
				//}
				
				if($ZApplic==$yApplic){
					if($ZNomors==$yRefers){
						$menu .=$ulmen21 . $yLinked . " " . $yDescre  ."</a>" . $ulmen22;
						$ul3=1;

						$ulmen31 = "<li>";
						$tutup31 = "";
						$ulmen32 = "";
//================
						foreach($arrMenu02 as $key=>$item3){
							$TApplic = $item3["MNU_APPLIC"];
							$TNomors = substr($item3['MNU_NOMORS'],0,6);
							$TOrigin = $item3['MNU_NOMORS'];
							$TRefers = substr($item3['MNU_REFERS'],0,6);
							$TDescre = $item3["MNU_DESCRE"];
							$TAuthrz = $item3["MNU_RIGHTS"];
							$TFrcign = $item3["MNU_ROUTES"];
							$THvChld = $item3["MNU_HVCHLD"];
							
							if($TFrcign!="#" && $TFrcign!=""){
								$TLinked="<a href=\"/$TFrcign\">";
							}else{
								//$TLinked="<a tabindex=\"-1\" href=\"#\">";
								$TLinked="<a tabindex=\"-1\">";
							}
							$ulmen31 ="";
							$ulmen32 ="";
							
							//if($ul3==1){
								if($THvChld==1){
									$tutup31 = "1";
									$ulmenu3 = 1;
									$ulmen31 = "
									<li class=\"dropdown-submenu\">
									";
									$ulmen32 = "
										<ul class=\"dropdown-menu\">
									";
								}else{
									$tutup31 = "2";
									$ulmen31 = "
									<li>";
									
								}
							//}
							if($yApplic==$TApplic){
								if($yNomors==$TRefers){
									$menu .=$ulmen31 . $TLinked . " " . $TDescre  . "</a>" . $ulmen32;
									$ul4=1;

									$ulmen41 = "<li>";
									$tutup41 = "";
									$ulmen42 = "";
									
									foreach($arrMenu03 as $key=>$item4){
										$FApplic = $item4["MNU_APPLIC"];
										$FNomors = substr($item4['MNU_NOMORS'],0,6);
										$FOrigin = $item4['MNU_NOMORS'];
										$FRefers = substr($item4['MNU_REFERS'],0,6);
										$FDescre = $item4["MNU_DESCRE"];
										$FAuthrz = $item4["MNU_RIGHTS"];
										$FFrcign = $item4["MNU_ROUTES"];
										$FHvChld = $item4["MNU_HVCHLD"];

										if($FFrcign!="#" && $FFrcign!=""){
											$FLinked="<a href=\"/$FFrcign\">";
										}else{
											$FLinked="<a tabindex=\"-1\" href=\"#\">";
										}
										//if($ul4==1){
											if($FHvChld==1){
												$tutup41 = "1";
												$ulmenu4 = 1;
												$ulmen41 = "
												<li class=\"dropdown-submenu\">x
												";
												$ulmen42 = "
													<ul class=\"dropdown-menu\">
												";
											}else{
												$tutup41 = "2";
												$ulmen41 = "
												<li>";
											}
										//}
										if($TApplic==$FApplic){
											if($TNomors==$FRefers){
												$menu .=$ulmen41 . $FLinked . " " . $FDescre  . " </a>" . $ulmen42;

												if($ulmen41!=""){
													if($tutup41==1){
														$menu .="</ul></li>";	
													}
													if($tutup41==2){
														$menu .="</li>";	
													}
												}
											}
										}										
									}
									if($ulmen31!=""){
										if($tutup31==1){
											$menu .="</ul></li>";	
										}
										if($tutup31==2){
											$menu .="</li>";	
										}
									}
								}
							}
						}						
//================						
						if($ulmen21!=""){
							if($tutup21==1){
								$menu .="</ul></li>";
								$divider = false;
							}
							if($tutup21==2){
								$menu .="</li>";	
							}
						}					
					}else{
						$loop=1;
					}
					$loop++;
				}
				$ul2++;
				$oGroups = $yGroups;
			}
			if($ulchild!=""){
				$menu .= "</ul>";
			}
			$ulchild = "";
			$menu .= "</li>";
		} // end looping menu level 0
		return $menu;
	}

	function get_post($stop=true){
	    $data = $_POST;//$this->input->post();
	    $temp = "";
	    echo "<pre>";
	    foreach($data as $key=>$value){
	      $temp .= '$'.$key . ' = $this->input->post(\''.$key.'\');'; 
	    }
	    echo $temp;
	    echo "</pre>"; 
	    if($stop){
	    	die();
	    }
	    
	}

	function debug_post(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	function debug_array($array, $stop=true){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($stop){
			die();	
		}
	}

	function debug_sql($db='db', $stop=false, $compile=false){
		echo "<pre>";
		if($compile){
			echo $this->CI->{$db}->get_compiled_select();
		}else{
			echo $this->CI->{$db}->last_query();	
		}
		echo "</pre>";
		if($stop){
			die();
		}
		// die();
	}

	function toCombo($arrParameter){
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		// $this->debug_array($resultset);

	    $data[''] = '';
	    foreach($resultset as $row){
	        $data[$row->$IDENTS] = $row->$DESCRE;
	    }
	    return $data;
		}

		function comboBox($tahun=NULL, $jenis=NULL)
		{
	  	$arrBulan = $this->list_bulan(1);
	  	foreach($arrBulan as $row){
	  		//echo $row['id']."<br>";
	  		$options[$row['id']] = $row['bulan'];
	  	}
	  	if(isset($tahun)){
		  	$result = $this->CI->crud->grepTahun($tahun);
		  	$col = 'idk_tahuns';
	  	}else{
		  	$result = $this->CI->crud->getTahun($jenis);
		  	$col = 'ktd_yearss';
	  	}
	  	if($result['numrow'] <> 0){
	  		foreach($result['result'] as $row){
	  			$optthns[$row[$col]] = $row[$col];
	  		}
	  	}else{
	  		$optthns = array((date("Y")-1) => (date("Y")-1),date("Y") => date("Y"),(date("Y")+1) => (date("Y")+1));
	  	}
	  	///
	  	return "
	      <form name='formrpt' method='post' target='_self'>
	    	<table class='topfilter'>
	    		<tr><td><b>Filter</b></td><td>:</td>
	    			<td>".form_dropdown("fltBulan",$options,"","id='fltBulan'")."</td>
	    			<td>".form_dropdown("fltTahun",$optthns,"","id='fltTahun'")."</td>
	    			<td><a href='javascript:void(0);' onclick='jvReload();'><img src=/images/img_info.gif></a></td>
	    		</tr>
	    	</table>
	      </form>
	  	";
	}

	function rowLock_logout(){
	  	$userlock = $this->CI->session->userdata('USR_LOGINS');
	  	$arrTable = array(
	  		'KBS_QUESTN',
				'KBS_CHKLST',
				'KBS_JADWAL',
				'KBS_CHKLST_DETAIL',
				'KBS_HASILS_AUDITS',
				'KBS_BIBLIO'
	  		);
	  	for($i=0;$i<count($arrTable);$i++){
				$this->CI->db->set('LCK_USRNAM', null);
				$this->CI->db->set('LCK_USRDAT', null);
				$this->CI->db->where('LCK_USRNAM', $userlock);
				$this->CI->db->update($arrTable[$i]);
	  	}
	}

	function transLock($appidnya,$ishapus=0){
		$userlock = $this->CI->session->userdata('USR_LOGINS');
		$sessions = $this->CI->session->userdata('__ci_last_regenerate');
		$iplogins = $this->CI->input->ip_address();
		$modulnya = $this->CI->router->fetch_class();
		$waktunya = date("Y-m-d H:i:s");

		switch ($ishapus) {
			case 0:
				$modess = 'append';
				break;
			case 1:
				$modess = 'delete';
				break;
			
			default:
				$modess = 'noavail';
				break;
		}


		if($ishapus==1){
			/////////cari ident terkecil untuk mengakomodasi delete dari session yg sama
	    $this->CI->db->select('MIN(LOC_IDENTS)LOC_IDENTS');
	    $this->CI->db->from('APP_LOCKSS');
			$this->CI->db->where('LOC_GOURLS', $modulnya);
			$this->CI->db->where('LOC_APPIDN', $appidnya);
	    $query = $this->CI->db->get();
	    if($query->num_rows()!=0){////hapus kalo session sama
	    	$hasil = $query->row_array();
				$this->CI->db->where('LOC_GOURLS', $modulnya);
				$this->CI->db->where('LOC_APPIDN', $appidnya);
				$this->CI->db->where('LOC_SESSID', $sessions);
				$this->CI->db->where('LOC_IDENTS', $hasil['LOC_IDENTS']);
		    $this->CI->db->delete('APP_LOCKSS');
	    }
	    //////
		}else{
		  	////cek dulu sedang dalam edit mode apa gak
		    $this->CI->db->select('*');
		    $this->CI->db->from('APP_LOCKSS');
				$this->CI->db->where('LOC_GOURLS', $modulnya);
				$this->CI->db->where('LOC_APPIDN', $appidnya);
		    $query = $this->CI->db->get();
		    if($query->num_rows()!=0){
		    	$hasil = $query->row_array();

		    	if($sessions == $hasil['LOC_SESSID']){
		    		////////insert buat gantiin yg mau dihapus
						$this->CI->db->set('LOC_GOURLS', $modulnya);
						$this->CI->db->set('LOC_APPIDN', $appidnya);
						$this->CI->db->set('LOC_IPADDR', $iplogins);
						$this->CI->db->set('LOC_LOGINS', $userlock);
						$this->CI->db->set('LOC_DATESS', $waktunya);
						$this->CI->db->set('LOC_SESSID', $sessions);
						$this->CI->db->insert("APP_LOCKSS");
						///
			    	$script = "alert('Data sedang di-edit oleh Anda!');";
		    	}else{
			    	$script = "alert('Data sedang di-edit oleh ".$hasil['LOC_LOGINS']."!');";
		    	}
					echo $script;
		    }else{
					$this->CI->db->set('LOC_GOURLS', $modulnya);
					$this->CI->db->set('LOC_APPIDN', $appidnya);
					$this->CI->db->set('LOC_IPADDR', $iplogins);
					$this->CI->db->set('LOC_LOGINS', $userlock);
					$this->CI->db->set('LOC_DATESS', $waktunya);
					$this->CI->db->set('LOC_SESSID', $sessions);
					$this->CI->db->insert("APP_LOCKSS");
		    }
		}

		// $this->CI->db->set('LOC_GOURLS', $modulnya);
		// $this->CI->db->set('LOC_APPIDN', $appidnya);
		// $this->CI->db->set('LOC_IPADDR', $iplogins);
		// $this->CI->db->set('LOC_LOGINS', $userlock);
		// $this->CI->db->set('LOC_DATESS', $waktunya);
		// $this->CI->db->set('LOC_MODESS', $modess);
		// $this->CI->db->insert("APP_LOCKSS");
	}

	function rowLock($arrParameter){
		$userlock = $this->CI->session->userdata('USR_LOGINS');
		$datelock = date('Y-m-d H:i:s');
		$appslock = $this->CI->config->item('app_lock');
		$return = false; // return true berarti ada yang make
		$updatedb = false;

		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}  	
		if($USRNAM==""){
			$updatedb = true;
		}else{ 
			if($USRNAM!=$userlock){
				$timelock = strtotime($datelock);
				$usrdlock = strtotime($USRDAT);
				$selisih = round($timelock - $usrdlock)/60;
				if($selisih>$appslock){
					$updatedb = true;
				}else{
					$updatedb = false;
					$return = true;
				}
			}else{
				$updatedb = true;
			}
		}
		if($updatedb){
			$this->CI->db->set('LCK_USRNAM', $userlock);
			$this->CI->db->set('LCK_USRDAT', $datelock);
			$this->CI->db->where($pk);
			$this->CI->db->update($table);
			$return = false;
		}
		if($return){
			echo "<script>alert('Data sedang digunakan oleh : " . $USRNAM . " pada ". $USRDAT . "\\nAnda tidak bisa melakukan perubahan!')</script>";
		}
		return $return;
	}

	function encrypt($string){
		$encrypt = "";
		$length = strlen($string);
		$length_code;
		$chrCode;
		$chr;		
	
		for ($i=0; $i<$length; $i++)
		{
			$chr = substr($string,$i,1);
			$chrCode = ord($chr);
			$length_code = strlen($chrCode);
	
			$encrypt .= $length_code . $chrCode;
		}
		return $encrypt;
	}
	
	function decrypt($string){
		$StringToDecrypt;
		$StringToDecrypt=$string;
		$Decrypt="";
		while ($StringToDecrypt<>"")
		{
			$CharPos = substr($StringToDecrypt,0,1);
			$lenDec = strlen($StringToDecrypt);
			$StringToDecrypt = substr($StringToDecrypt, 1, $lenDec);
			$CharCode = substr($StringToDecrypt, 0, $CharPos);
			$lenDec2 = strlen($StringToDecrypt);
			$StringToDecrypt = substr($StringToDecrypt, strlen($CharCode) , $lenDec2);
			$Decrypt = $Decrypt . Chr($CharCode);
		}
		return  $Decrypt ;
	}

	function dateformat($str,$ff="Y-m-d"){
		$time = strtotime($str);
		$newdate = date($ff,$time);
		return $newdate;
	}

	function numberformat($str){

		if(is_numeric($str)){
			$ArrVal = explode(".",$str);
			if(isset($ArrVal[1])) {
			  $len = strlen($ArrVal[1]);
			  $return = number_format($str,$len);
			} else {
			  $return = number_format($str);
			}
		}else{
			$return = "NaN";
		}

		return $return;
	}

	function terbilang($angka=0){
		$angka = (float)$angka;
		$bilangan = array(
				'',
				'satu',
				'dua',
				'tiga',
				'empat',
				'lima',
				'enam',
				'tujuh',
				'delapan',
				'sembilan',
				'sepuluh',
				'sebelas'
		);
	 
		if ($angka < 12) {
			return $bilangan[$angka];
		} else if ($angka < 20) {
			return $bilangan[$angka - 10] . ' belas';
		} else if ($angka < 100) {
			$hasil_bagi = (int)($angka / 10);
			$hasil_mod = $angka % 10;
			return trim(sprintf('%s puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
		} else if ($angka < 200) {
			return sprintf('seratus %s', $this->terbilang($angka - 100));
		} else if ($angka < 1000) {
			$hasil_bagi = (int)($angka / 100);
			$hasil_mod = $angka % 100;
			return trim(sprintf('%s ratus %s', $bilangan[$hasil_bagi], $this->terbilang($hasil_mod)));
		} else if ($angka < 2000) {
			return trim(sprintf('seribu %s', $this->terbilang($angka - 1000)));
		} else if ($angka < 1000000) {
			$hasil_bagi = (int)($angka / 1000); // karena hasilnya bisa ratusan jadi langsung digunakan rekursif
			$hasil_mod = $angka % 1000;
			return sprintf('%s ribu %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod));
		} else if ($angka < 1000000000) {
			// hasil bagi bisa satuan, belasan, ratusan jadi langsung kita gunakan rekursif
			$hasil_bagi = (int)($angka / 1000000);
			$hasil_mod = $angka % 1000000;
			return trim(sprintf('%s juta %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
		} else if ($angka < 1000000000000) {
			// bilangan 'milyaran'
			$hasil_bagi = (int)($angka / 1000000000);
			$hasil_mod = fmod($angka, 1000000000);
			return trim(sprintf('%s milyar %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
		} else if ($angka < 1000000000000000) {                          // bilangan 'triliun'                           
			$hasil_bagi = $angka / 1000000000000;                           
			$hasil_mod = fmod($angka, 1000000000000);                           
			return trim(sprintf('%s triliun %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));  
		} else {                            
			return 'Nilai Terlalau Banyak !';                        
		}                   
	}

	function terbilangTranslate($number) {
		$string = '';
		$suffix = '';
		$max_size = pow(10,18);
					
		switch ($number){
			// set up some rules for converting digits to words
			case $number < 0:
				$prefix = "negative";
				$suffix = $this->terbilangTranslate(-1*$number);
				$string = $prefix . " " . $suffix;
				break;
			case 1:
				$string = "one";
				break;
			case 2:
				$string = "two";
				break;
			case 3:
				$string = "three";
				break;
			case 4: 
				$string = "four";
				break;
			case 5:
				$string = "five";
				break;
			case 6:
				$string = "six";
				break;
			case 7:
				$string = "seven";
				break;
			case 8:
				$string = "eight";
				break;
			case 9:
				$string = "nine";
				break;                
			case 10:
				$string = "ten";
				break;            
			case 11:
				$string = "eleven";
				break;            
			case 12:
				$string = "twelve";
				break;            
			case 13:
				$string = "thirteen";
				break;            
			// fourteen handled later
			case 15:
				$string = "fifteen";
				break;            
			case $number < 20:
				$string = $this->terbilangTranslate($number%10);
				// eighteen only has one "t"
				if ($number == 18)
				{
				$suffix = "een";
				} else 
				{
				$suffix = "teen";
				}
				$string .= $suffix;
				break;            
			case 20:
				$string = "twenty";
				break;            
			case 30:
				$string = "thirty";
				break;            
			case 40:
				$string = "forty";
				break;            
			case 50:
				$string = "fifty";
				break;            
			case 60:
				$string = "sixty";
				break;            
			case 70:
				$string = "seventy";
				break;            
			case 80:
				$string = "eighty";
				break;            
			case 90:
				$string = "ninety";
				break;                
			case $number < 100:
				$prefix = $this->terbilangTranslate($number-$number%10);
				$suffix = $this->terbilangTranslate($number%10);
				$string = $prefix . "-" . $suffix;
				break;
			// handles all number 100 to 999
			case $number < pow(10,3):                    
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,2)))) . " hundred";
				if ($number%pow(10,2)) $suffix = " and " . $this->terbilangTranslate($number%pow(10,2));
				$string = $prefix . $suffix;
				break;
			case $number < pow(10,6):
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,3)))) . " thousand";
				if ($number%pow(10,3)) $suffix = $this->terbilangTranslate($number%pow(10,3));
				$string = $prefix . " " . $suffix;
				break;
			case $number < pow(10,9):
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,6)))) . " million";
				if ($number%pow(10,6)) $suffix = $this->terbilangTranslate($number%pow(10,6));
				$string = $prefix . " " . $suffix;
				break;                    
			case $number < pow(10,12):
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,9)))) . " billion";
				if ($number%pow(10,9)) $suffix = $this->terbilangTranslate($number%pow(10,9));
				$string = $prefix . " " . $suffix;    
				break;
			case $number < pow(10,15):
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,12)))) . " trillion";
				if ($number%pow(10,12)) $suffix = $this->terbilangTranslate($number%pow(10,12));
				$string = $prefix . " " . $suffix;    
				break;        
			// Be careful not to pass default formatted numbers in the quadrillions+ into this function
			// Default formatting is float and causes errors
			case $number < pow(10,18):
				// floor return a float not an integer
				$prefix = $this->terbilangTranslate(intval(floor($number/pow(10,15)))) . " quadrillion";
				if ($number%pow(10,15)) $suffix = $this->terbilangTranslate($number%pow(10,15));
				$string = $prefix . " " . $suffix;    
				break;                    
		}
	
		return $string;    
	}

	function cekLogin($user='',$password='',$bs='USR_LOGINS',$cnf=null){
		if($user == '' OR $password == '') {
			return false;
		}

		$query = $this->CI->crud->login($user);

		if ($query->num_rows()==1) {
			$row = $query->row_array();
			//check huruf user, kapital ato nggak
			if(md5($row['USR_LOGINS'])!=md5($user)){
				return false;
			}

			if($row['USR_ACCESS'] != 1){
				return false;
			}

			if($row['USR_LEVELS'] != 1){
				if($this->CI->config->item('site_access')!=null){
					if($row[$this->CI->config->item('site_access')] == 0){
						return false;
					}			
				}else{///defaultnya punya SMS
					if($row['USR_SMSAPP'] != 1){
						return false;
					}			
				}
			}

			if(isset($cnf)){
				if(is_array($cnf)){
					if(!in_array($row[$bs], $cnf)){
						return false;
					}
				}else{
					if($row[$bs] <> $cnf){
						return false;
					}
				}
			}

			$dbPassword = $this->CI->common->decrypt($row['USR_PASSWD']);

			if($password ==  $dbPassword) {
				return true;			
			}else{
				return false;
			}
		}	else {
			return false;
		}

	}

	// ======= image/files upload related
	function divImage($parameter){
		$file="";
		$divfile = "filegw";
		$url="";
		$funadd = "jvAddImages";
		$fundel = "jvHapusimage";

		if($parameter!=""){
			foreach ($parameter as $detail=>$valueAwal){
				${$detail} = $valueAwal;
			}
		}
		if(!isset($addImage)){
			$addImage = "
				function ".$funadd."(elementnya)
				{
					var newrow = \"\";
					newrow += \"<div><input type=file name=\"+elementnya+\"[] size=25></div>\";
					$('#".$divfile."').append(newrow);
				}
			";
		}

		if(!isset($delImage)){
			$delImage = "
			function jvHapusimage(id,idents){
				var param = {};
				param['IDENTS'] = id;			
				$.post('/".$url."/getImage_delete/',param,function(data){
		    	if(data){
		      	alert('Bukti ' + data + '!');
				    $.post('/".$url."/getImage_data/'+idents+'/refresh', function(rebound){
				    	$('#thumbnailList1').remove();
								$('#xxx').append(rebound);
      			});
		      }
		    });
	    }
	    ";
		}		
		$divImage = "
		<script>
		".$addImage."
		".$delImage."
		</script>
		";
		$divImage .= "<div id=".$divfile." style='float:left;padding-left:10px'>" . $input . "</div><div style='float:left'><a href=javascript:".$funadd."('".$file."')><li class='fa fa-plus-circle'></li></a></div>";
		return $divImage;
	}

	function showimage($arrParameter, $source="view"){
	  	$readonly = false;
	  	$id = "thumbnailList1";
			$path = "/assets/vendor/";
			$arrJenis = array(".pdf"=>"ico_pdf.png", ".doc"=>"ico_word.png", ".xls"=>"ico_excel.png", ".ppt"=>"ico_powerpoint.png");
			$fldIMAGES = 'ATT_ATTCHM';
			$fldIDENT1 = 'ATT_ATTCHM';
			$fldIDENT2 = 'ATT_ATTCHM';
			$fundel = "jvHapusimage";
			$caption = "";
			if(is_array($arrParameter)){
				foreach ($arrParameter as $detail=>$valueAwal){
					${$detail} = $valueAwal;
				}
			}else{
				// $this->debug_array($_POST);
		    $data = $_POST;
		    foreach($data as $key=>$value){
		    	${$key}=$value;
		    }
			}
	    if(!isset($resultset)){
		    $this->CI->load->model($model);
	    	$resultset = $this->CI->$model->$function('grid', $idents);
	    }
		$thumbnail = "		
		<div id='".$id."'>";
		$img = "";
		$pathoriginal = $path;
		foreach ($resultset->result() as $key => $value) {
			$path = $pathoriginal;
			$imagess = $value->$fldIMAGES;
			if(!$readonly){
				$caption = "<a href='javascript:".$fundel."(" . $value->$fldIDENT1 . ", " . $value->$fldIDENT2 . ")''>Hapus</a>";	
			}
			foreach ($arrJenis as $keyimage => $valueimage) {
				if(strpos("XX" . strtoupper($imagess), strtoupper($keyimage))>1){
					if($caption!=""){
						$caption .= " | ";	
					}
					$caption .= "<a href='".$path."/".$imagess."' target=_blank>Lihat</a>";
					$imagess = $valueimage;
					$path = base_url(IMAGES);
					break;
				}
			}
			$imagess = $path .'/'. $imagess;
			$thumbnail .= "<a class=\"imgBukti\" href='".$imagess."' title=\"".$caption."\">";
			$thumbnail .= "<img src='" . $imagess . "'>";
			$thumbnail .= "</a>";
			$caption ="";
		}
		$thumbnail .= "</div>";
		$thumbnail .= scrThumbnail(array('id'=>$id));
    	$thumbnail .= scrImages(array('class'=>'imgBukti'));
		if($source=="view"){
			return $thumbnail;	
		}else{
			echo $thumbnail;
		}
	}

	function chkMEMOSS($arrUNIORG=null){
	  	// $this->CI->load->model('m_master');
	  	$UNIORG = 0;
	  	$DEPTMN = $this->CI->session->userdata("EMP_DEPTMN");
	  	$DVSION = $this->CI->session->userdata("EMP_DVSION");
	  	$SCTION = $this->CI->session->userdata("EMP_SCTION");
	  	$LEADER = $this->CI->session->userdata("STR_LEADER")==1 ? true : false;
	  	$MANGR = false;
	  	$KADIV = false;
	  	$UNIORG = $SCTION;
	  	if($SCTION==0 && $DVSION==0){
	  		if($LEADER){
	  			$MANGR = true;
	  		}
	  		$UNIORG = $DEPTMN;
	  	}
			if($SCTION==0 && $DVSION!=0){
	  		if($LEADER){
	  			$KADIV = true;
	  		}			
	  		$UNIORG = $DVSION;
			}
	  	$arrDEPMMO = $this->CI->config->item('dep_memo');
	  	$rsltUNIORG = array();
	  	if(!isset($arrUNIORG)){
	  		$arrUNIORG = $this->chkUNIORG($UNIORG, $LEADER);	
	  	}
	  	for($e=0;$e<count($arrUNIORG);$e++){
				if(array_search($arrUNIORG[$e], $arrDEPMMO)!==FALSE){
					$rsltUNIORG[] = $arrUNIORG[$e];
					break;
				}
	  	}
		return $rsltUNIORG;
	}

	function chkUNIORG($UNIORG=null, $LEADER=true){
	  	if(is_array($UNIORG)){
				foreach ($UNIORG as $keyUNIORG=>$valUNIORG){
					${$keyUNIORG} = $valUNIORG;
				}
				$LEADER = ($LEADER ==1) ? true : false;
		  	if($SCTION!=0){
		  		if($LEADER){
		  			$MANGR = true;
		  		}
		  		$UNIORG = $SCTION;
		  	}			
		  	if($SCTION==0 && $DVSION==0){
		  		if($LEADER){
		  			$MANGR = true;
		  		}
		  		$UNIORG = $DEPTMN;
		  	}
				if($SCTION==0 && $DVSION!=0){
		  		if($LEADER){
		  			$KADIV = true;
		  		}			
		  		$UNIORG = $DVSION;
				}			
	  	}
	  	$arrUNIORG = array();
	  	if($LEADER){
		  	$rslDEPTMN = $this->CI->crud->getDepartement(1);
		  	$rslDPRTMN = $rslDEPTMN['records'];
		  	$rslDPRTMN = json_decode(json_encode($rslDPRTMN),true);
		  	foreach ($rslDPRTMN as $key => $value) {
		  		$DPR_CDATAS = $value["DPR_CDATAS"];
		  		$DPR_CODESS = $value['DPR_CODESS'];
		  		$DPR_DESCRE = $value['DPR_DESCRE'];

		  		if($DPR_CDATAS==$UNIORG){
		  			$index = array_search($key, array_keys($rslDPRTMN));
		  			unset($rslDPRTMN[$index]);
		  			$arrUNIORG[]= $DPR_CODESS;// . ">>P<<" . $DPR_CDATAS . ".1." . $DPR_DESCRE;
			  		foreach ($rslDPRTMN as $key1 => $value1) {
			  			$DPR_CDATAS1 = $value1["DPR_CDATAS"];
			  			$DPR_CODESS1 = $value1["DPR_CODESS"];
			  			$DPR_DESCRE1 = $value1['DPR_DESCRE'];
			  			if($DPR_CDATAS1==$DPR_CODESS){
			  				$arrUNIORG[]=$DPR_CODESS1;// . ">>P<<" . $DPR_CDATAS1 . ".2." . $DPR_DESCRE1;
			  				foreach ($rslDPRTMN as $key2 => $value2) {
					  			$DPR_CDATAS2 = $value2["DPR_CDATAS"];
					  			$DPR_CODESS2 = $value2["DPR_CODESS"];
					  			$DPR_DESCRE2 = $value2['DPR_DESCRE'];
					  			if($DPR_CDATAS2==$DPR_CODESS1){
					  				$arrUNIORG[]=$DPR_CODESS2;// . ">>P<<" . $DPR_CDATAS2 . ".3." . $DPR_DESCRE2;
					  				foreach ($rslDPRTMN as $key3 => $value3) {
							  			$DPR_CDATAS3 = $value3["DPR_CDATAS"];
							  			$DPR_CODESS3 = $value3["DPR_CODESS"];
							  			$DPR_DESCRE3 = $value3['DPR_DESCRE'];
							  			if($DPR_CDATAS3==$DPR_CODESS2){
							  				$arrUNIORG[]=$DPR_CODESS3;// . ">>P<<" . $DPR_CDATAS3 . ".4." . $DPR_DESCRE3;
											}
										}
									}
			  				}
			  			}
			  		}
		  		}
	  			if($DPR_CODESS==$UNIORG){
	  				$index = array_search($key, array_keys($rslDPRTMN));
	  				$arrUNIORG[]=$DPR_CODESS;//$DPR_DESCRE;
	  			}
	  		}
	  	}else{
	  		$arrUNIORG = array($UNIORG);
	  		// $DEPTMN = $arrUNIORG['DEPTMN'];
	  		// $DVSION = $arrUNIORG['DVSION'];
	  		// $SCTION = $arrUNIORG['SCTION'];
	  		// if($SCTION!=""){
	  		// 	$arrUNIORG = array($SCTION);
	  		// }else{
		  	// 	if($DVSION!=""){
		  	// 		$arrUNIORG = array($DVSION);
		  	// 	}else{
			  // 		if($DEPTMN!=""){
			  // 			$arrUNIORG = array($DEPTMN);
			  // 		}	  			
		  	// 	}
	  		// }  		
	  		// $arrUNIORG = $arrUNIORG;
	  	}	
	  	return $arrUNIORG;  	
	}

	function bersih($string, $spasi=null) {
		if(isset($spasi)){
			$string = str_replace(' ', $spasi, $string);	
		}
		
		$string = preg_replace('/[^A-Za-z0-9\s\-]/', '', $string);
		if(isset($spasi)){
			$string = preg_replace('/-+/', $spasi, $string);
		}else{
			$string = $string;
		}
		return $string;// // Replaces multiple hyphens with single one.
	}

	function searchArray($array, $key, $value){
		$results = array();
		if(is_array($array)){
			if(isset($array[$key])){
				if ( $array[$key] == $value ){
					$results[] = $array;	
				} 
			}else {
		        foreach ($array as $subarray)
		          $results = array_merge( $results, $this->searchArray($subarray, $key, $value) );
	      	}
		}
		return $results;
	}


	function getUNIORG($UNIORG, $level=0, $DOWN=true, $SELF=false){
		if($level==0){
			$level=99;
		}
		$rslDEPTMN = $this->CI->crud->getDepartement(1);
	  	$rslDEPTMN = $rslDEPTMN['records'];
	  	$rslDEPTMN = json_decode(json_encode($rslDEPTMN),true);
	  	$PARENT = "OKS";
		$yatim = true; 
		$loop=0;
		$DEPTMN = array();

		if(!$DOWN){
			while($yatim){
				if($PARENT=="OKS"){
					$PARENT = $UNIORG;	
				}
				$arrPARENT = $this->searchArray($rslDEPTMN, 'DPR_CODESS', $PARENT);
				$arrDEPTMN = array();
				if($SELF){
					$DEPTMN[] = $arrPARENT;
					$SELF = false;
				}
				if(isset($arrPARENT[0]['DPR_CDATAS'])){
					$PARENT = $arrPARENT[0]['DPR_CDATAS'];	
					$arrDEPTMN = $this->searchArray($rslDEPTMN, 'DPR_CODESS', $PARENT);
				}			

				if(count($arrDEPTMN)>0){
					$DEPTMN[] = $arrDEPTMN;
				}else{
					$yatim=false;				
				}

				$loop++;
			}
		}else{
			while($yatim){
				if(is_array($UNIORG)){
					foreach ($UNIORG as $keyP => $valueP) {
						$arrDEPTMN = $this->searchArray($rslDEPTMN, 'DPR_CDATAS', $valueP['DPR_CODESS']);
						if(count($arrDEPTMN)>0){
							if($loop<$level){
								$nguik[] = $arrDEPTMN;
								foreach ($arrDEPTMN as $keyX => $valueX) {
									$UNIORG[] = array('DPR_CODESS'=>$valueX['DPR_CODESS'], 'DPR_DESCRE'=>$valueX['DPR_DESCRE'], 'DPR_PARENT'=>$valueX['DPR_CDATAS'], 'DPR_LEVELS'=>$valueX['DPR_LEVELS']);
								}
							}else{
								$yatim = false;
							}
						}else{
							$yatim = false;
						}
					}
				}else{
					$arrDEPTMN = $this->searchArray($rslDEPTMN, 'DPR_CDATAS', $UNIORG);
					$UNIORG = array();
					if($SELF){
						$UNIORG[] = $this->searchArray($rslDEPTMN, 'DPR_CODESS', $UNIORG);
						$SELF = false;
					}

					if(count($arrDEPTMN)>0){
						$nguik = $arrDEPTMN;
						if($loop<$level){
							foreach ($nguik as $key => $value) {
								$UNIORG[] = array('DPR_CODESS'=>$value['DPR_CODESS'], 'DPR_DESCRE'=>$value['DPR_DESCRE'], 'DPR_PARENT'=>$value['DPR_CDATAS'], 'DPR_LEVELS'=>$value['DPR_LEVELS']);
							}											
						}
					}else{
						$yatim = false;
					}
				}
			}
			$DEPTMN = $UNIORG;
		}
		return $DEPTMN;
	}

	function getSTRUKTUR($PSTION, $level=0, $DOWN=true, $SELF=false){
		if($level==0){
			$level=99;
		}

	  	$rslSTRKTR = $this->CI->crud->getPosisi(1);
	  	$rslSTRKTR = $rslSTRKTR['records'];
	  	$rslSTRKTR = json_decode(json_encode($rslSTRKTR),true);
		$yatim = true; 
		$i;
		$loop=0;
		$PARENT = "OKS";

		if(!$DOWN){
			while($yatim){
				if($PARENT=="OKS"){
					$PARENT = $PSTION;	
				}
				$arrPARENT = $this->searchArray($rslSTRKTR, 'STR_CODESS', $PARENT);
				$arrSTRKTR = array();
				if($SELF){
					$STRKTR[] = $arrPARENT;
					$SELF = false;
				}
				if(isset($arrPARENT[0]['STR_CDATAS'])){
					$PARENT = $arrPARENT[0]['STR_CDATAS'];	
					$arrSTRKTR = $this->searchArray($rslSTRKTR, 'STR_CODESS', $PARENT);
				}			

				if(count($arrSTRKTR)>0){
					$STRKTR[] = $arrSTRKTR;
				}else{
					$yatim=false;				
				}

				$loop++;
			}
		}else{
			while($yatim){
				if(is_array($PSTION)){
					foreach ($PSTION as $keyP => $valueP) {
						// $arrSTRKTR = $this->searchArray($rslSTRKTR, 'STR_CDATAS', $valueP);
						$arrSTRKTR = $this->searchArray($rslSTRKTR, 'STR_CDATAS', $valueP['STR_CODESS']);
						if(count($arrSTRKTR)>0){
							if($loop<$level){
								$nguik[] = $arrSTRKTR;
								foreach ($arrSTRKTR as $keyX => $valueX) {
									$PSTION[] = array('STR_CODESS'=>$valueX['STR_CODESS'], 'STR_PSTION'=>$valueX['STR_PSTION'], 'STR_PARENT'=>$valueX['STR_CDATAS']);
								}
							}else{
								$yatim = false;
							}
						}else{
							$yatim = false;
						}
					}
				}else{
					$arrSTRKTR = $this->searchArray($rslSTRKTR, 'STR_CDATAS', $PSTION);
					$PSTION = array();
					if(count($arrSTRKTR)>0){
						$nguik = $arrSTRKTR;
						if($loop<$level){
							foreach ($nguik as $key => $value) {
								$PSTION[] = array('STR_CODESS'=>$value['STR_CODESS'], 'STR_PSTION'=>$value['STR_PSTION'], 'STR_PARENT'=>$value['STR_CDATAS']);
							}											
						}
					}else{
						$yatim = false;
					}
				}
				$loop++;
			}
			$STRKTR = $PSTION;			
		}
	
		return $STRKTR;
	}	
  // =================================================


	function konv_bulan($mm,$lang=2)
  	{
	    $mm = intval($mm);
	    switch ($lang) {
	    	case "1":
			    switch ($mm)
			    {
			      case 1 : $bulan="January";break;
			      case 2 : $bulan="February";break;
			      case 3 : $bulan="March";break;
			      case 4 : $bulan="April";break;
			      case 5 : $bulan="May";break;
			      case 6 : $bulan="June";break;
			      case 7 : $bulan="July";break;
			      case 8 : $bulan="August";break;
			      case 9 : $bulan="September"; break;
			      case 10 : $bulan="October";break;
			      case 11 : $bulan="November";break;
			      case 12 : $bulan="December";break;
			    }
	    		break;
	    	case "2" :
			    switch ($mm)
			    {
			      case 1 : $bulan="Januari";break;
			      case 2 : $bulan="Februari";break;
			      case 3 : $bulan="Maret";break;
			      case 4 : $bulan="April";break;
			      case 5 : $bulan="Mei";break;
			      case 6 : $bulan="Juni";break;
			      case 7 : $bulan="Juli";break;
			      case 8 : $bulan="Agustus";break;
			      case 9 : $bulan="September"; break;
			      case 10 : $bulan="Oktober";break;
			      case 11 : $bulan="November";break;
			      case 12 : $bulan="Desember";break;
			    }
	    		break;
	    	case "3" :
			    switch ($mm)
			    {
			      case 1 : $bulan="I";break;
			      case 2 : $bulan="II";break;
			      case 3 : $bulan="III";break;
			      case 4 : $bulan="IV";break;
			      case 5 : $bulan="V";break;
			      case 6 : $bulan="VI";break;
			      case 7 : $bulan="VII";break;
			      case 8 : $bulan="VIII";break;
			      case 9 : $bulan="IX"; break;
			      case 10 : $bulan="X";break;
			      case 11 : $bulan="XI";break;
			      case 12 : $bulan="XII";break;
			    }
	    		break;
	    	default:
	    		# code...
	    		break;
	    }
	    return $bulan;
	}

	function konv_hari($dd)
	{
	    $dd = intval($dd);
	    switch ($dd)
	    {
	      case 1 : $hari="Senin";break;
	      case 2 : $hari="Selasa";break;
	      case 3 : $hari="Rabu";break;
	      case 4 : $hari="Kamis";break;
	      case 5 : $hari="Jumat";break;
	      case 6 : $hari="Sabtu";break;
	      case 7 : $hari="Minggu";break;
	    }
	    return $hari;
	}
	
	function concatdb($return, $field=null, $alias=null){
		//$this->driver
		$driver = "mysql";
		$awal = "";
		$return = "";
		$akhir = "";
		switch($this->driver){
			case "mysql":
			case "mysqli":
				$awal = "CONCAT(";
				$akhir = ")";
				$separator = ", ";
				break;
			case "oci8":
			case "postgre" :
				$separator = " || ";
				break;
		}
		
		$rc = false;
		for($f=0;$f<count($field);$f++){
			if ($rc) $return .= $separator;
			if(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $field[$f], $match)==true) {
				$return .= "'" . $field[$f] . "'";
			}else{
				$return .= $field[$f];	
			}
			
			$rc = true;
		}
		return $awal . $return . $akhir . " " . $alias;
	}
}