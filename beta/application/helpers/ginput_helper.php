<?php

/*
====================================================
Penggunaan : 
====================================================
====================================================
variabel utama :
====================================================
dat : tanggal
num : numerik
txt : text
hid : hidden
tim : waktu
txa : textarea
cmb : combobox
view : hanya liat saja
chk : checkbox
viwfil : file (lihat)
fil : file
pwd : password
rdb : radio button
rdv : radio button
ddt : data defined tree
udi : user defined input
udf : user defined input (full)

====================================================
Fungis
====================================================
generateTabjqx  : generate tab (jqx)
generateBreadcrumb : buat breadcrumb
buildInput : buat input


*/
	function generateTabjqx($arrParameter){
		$CI = get_instance();
		$CI->load->helper(array('form','html'));
		$theme = $CI->config->item('app_theme'); // grid theme, the value came from config.php
		$USR_THEMES = $CI->session->userdata("USR_THEMES");
		$USR_LAYOUT = $CI->session->userdata("USR_LAYOUT");
		if($USR_THEMES!=""){
			$theme = $USR_THEMES;
		}		
		$atas = "<div class='row' style='padding:0px 15px 0px 15px;height:100%'>";
		$isi = "";
		$save = "";
		$loop = 1;
		$bentuk = "tab";
		$tabwidth = "100%";
		$tabheight = "100%";
		$width = "800";
		$button = "";
		$fullheight = true;
		$funcinit = "";
		$mepet = false;
  		$divluar = "contentBody";
		$jarakatas = "padding-top:20px";
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		if($mepet){
			$jarakatas = "";
		}
		
		if($button!=""){
			$atas = "
			<div style='height:100%;padding:0px 15px 0px 15px'>
			<div class='row' style='height:92%;padding-top:2px'>
			";
		}	
		// <div class='row' style='height:37px'>".$button."</div>	
		if($bentuk=="tab"){
			if(isset($scriptinit)){
				$scriptinit = ", initTabContent : function (tab) {" . $scriptinit . "}";
			}else{
				if(isset($funcname)){
					$scriptinit = ", initTabContent : " . $funcname . "";	
				}else{
					$scriptinit = "";	
				}
			}
			$tabscript ="
				<script>
					$(document).ready(function(){			
						var cbheight = $('#".$divluar."').height();
						$('#tab" . $id . "').on('created', function () { 
							$('#loading').hide();
						}); 
						". $funcinit ."
						$('#tab" . $id . "').jqxTabs({ width:'" . $tabwidth . "', height: '" . $tabheight . "' ". $scriptinit."});
			";
			// if($fullheight){
			// 	$tabscript .="
			// 		toolbarexist = $(\"div[id^='toolbar']\").length;
			// 		kurang = 0;
			// 		if(toolbarexist){
			// 			kurang = 35;
			// 		}
			// 		// $('#tab" . $id . "').jqxTabs({height:(cbheight-kurang)});
			// 	";
			// }
			if(isset($ajax)){
				if($ajax){
					$tabscript .= "
							$('#tab" . $id . "').on('tabclick', function (event) {
								var pageIndex = event.args.item;
								var echo = $('#tab" . $id . "').jqxTabs('getTitleAt', event.args.item).toLowerCase().replace(/\s+/g, '');
								//var Page = loadPage('".$utama . "/' + echo, echo);
								$.post('" . $utama . "/'+echo, function( data ) {
									$('#tab" . $id . "').jqxTabs('setContentAt', pageIndex, data);
								});
							});";
				}
			}
			$tabscript .= "
						});
				</script>
				";

			foreach($arrTabs as $key=>$nilai){
				if($loop==1){
					$atas .= "<div id='tab". $id ."' style='width:100%'><ul>";
					$style = " style='margin-left: 30px;'";
				}else{
					$style ="";
				}
				if(strpos($key,"^")==0){
					$atas .= "<li " . $style . ">" . $key . "</li>";				
				}else{
					$gambar = "";
					$fawesom = "";
					$arrKey = explode("^", $key);
					$atas .= "<li " . $style . ">";
					$image = $arrKey[0];

					$fayesno = substr($image, 0,3)=="fa " ? 'true' : 'false';

					$texts = $arrKey[1];
					// div untuk tab header
					// $atas .= "<div>";
					$atas .= "";
					// <span class="fa fa-user fa-2x"></span>
					if($fayesno=="false"){
						$gambar = "<img style='float: left;' width='25' height='25' src='/resources/img/". $image."' alt='' class='small-image'/>";	
					}else{
						$arrImage = explode(" ", $image);
						$fawesom = "<i class=\"fa " . $arrImage[1] . "\"></i>&nbsp;&nbsp;";
					}
					
					$atas .= $gambar . "<div style=\"float: left; margin-left: 6px; text-align: center; vertical-align:middle; font-size: 13px;\">" . $fawesom . "".$texts."</div>";
					// $atas .= "</div>";
					$atas .= "</li>";
				}

				if(isset($font)){
					$fontstyle = "font-size:" . $font . ";";
				}else{
					$fontstyle = "";
				}

				foreach($nilai as $keyval => $value){
					if($keyval=="data"){
						if($value=="ajax"){
							$value ="<img src='" . base_url(IMAGES.'ajax-loader.gif') ."' />";
						}
						$isi .= "<div id=\"content" . $id . $loop . "\" style='" . $fontstyle . " height:100%;".$jarakatas."'>" .  $value. "</div>";
					}
				}
				if($loop==count($arrTabs)){
					$atas .="</ul>";
					$isi .= "</div>";
				}
				$loop++;
			}
			// 
			$return = "";
			$return = $tabscript;
			$return .= $atas;
			$return .= $isi;
			$isi .= "</div></div>";
		}else{
			if($bentuk=="nav"){
				$return = generateNavjqx($arrParameter);	
			}
			if($bentuk=="div"){
				$return = generateDivjqx($arrParameter);
			}
		}
		return $return;
	}
	function generateBreadcrumb($arrbread){
		$CI = get_instance();
		$showconn = $CI->config->item('showconn');

		$bread = "<ol class='breadcrumb'>";
		$loop =1;
		for($i=0;$i<count($arrbread);$i++){
			$class = "";
			$link = $arrbread[$i]['link'];
			$text = "";
			if($loop==1){
				$text = "<i class=\"fa fa-home fa-lg\"></i>&nbsp;&nbsp;";
			}
			$text .= $arrbread[$i]['text'];
			$linked = "<a href='" . $link . "'>" .$text ."</a>";
			if($i==count($arrbread)-1){
				$class = "active";
				$link = "";
				$linked = $text;
			}			
			$bread .="<li class='breadcrumb-item ". $class . "'>".$linked."</li>";
			$loop++;
		}
		if($showconn){
			include(APPPATH.'config/database'.EXT);
			$hostname =  $db['default']['hostname'];
			$database =  $db['default']['database'];
			$bread .="<li class='breadcrumb-item'> <b><i class=\"fa fa-database\" style='color:#ff0000'></i> [ ".strtoupper($hostname)." || ".strtoupper($database)." ] </b> </li>";
		}
		$bread .= "</ol>"; 

		return $bread;

//   <li class="breadcrumb-item"><a href="#">Home</a></li>
//   <li class="breadcrumb-item"><a href="#">Library</a></li>
//   <li class="breadcrumb-item active">Data</li>
// </ol>


	}
	function _generateBreadcrumb($arrbread=null){
		$CI = get_instance();
		$ul = "<span style='text-align:left'><div class=divbc>
							<div id=\"bc2\" class=\"btn-group btn-breadcrumb\">
							";
		$loop =1;
		for($i=0;$i<count($arrbread);$i++){
			$class = "";
			$link = $arrbread[$i]['link'];
			$text = "<div>" . $arrbread[$i]['text'] . "</div>";
			if($loop==1){
				$text = "<div><i class=\"fa fa-home fa-lg\"></i></div>";
			}

			if($i==count($arrbread)-1){
				$class = "class='active'";
			}
			$class = "class='btn btn-detanto'";
			$ul .="<a href='" . $link . "' ". $class . ">" .$text ."</a>\n";
			$loop++;
		}
		$ul .= "</div></div></span><div style='height:10px'></div>";
		$al = "
		<div class=row style='position:relative;top:5px;text-align:right'>" . $ul ."</div>";
		return $ul;	
	}
	function buildInput($parameter){

		$CI = get_instance();
		$column = "";
		$loop = 1;
		$modul = '';
		$arrField = array();
		$debug = false;

		foreach ($parameter as $indx=>$value){
			${$indx}=$value;
		}
		if($type=="view"){
			$status = "view";
		}
		if($source=="db"){
			// $fielddetail = $CI->crud->getTableInformation($table);
			// print_r($fielddetail);
			//cari prefix field
			if ($fielddetail->num_rows() > 0){
				$onerow = $fielddetail->row();
				$prefixField = substr($onerow->Field,0,3);
				$adatable = true;
			}else{
				$adatable = false;
			}
			$arrField = $fielddetail->result_array();
		}else{
			$arrComment = $CI->common->extractjsonf($modul);

			foreach ($arrComment as $key => $value) {
				$table = $key;
				foreach ($value as $key_one => $value_one) {
					$loopsrc = 1;
					foreach($value_one as $keyd=>$valued){
						if($keyd=="fn"){
							$ottable = false;
							$fieldname = $valued;
							$datatype = $CI->crud->getTableInformation($table, null, $fieldname, null, 2);
							// echo $CI->db->last_query();
							if(count($datatype)!=0){
								$datatype = $datatype->Type;
								$ottable = true;
								$arrField = array_merge($arrField, array(array('Field'=>$fieldname, 'Type'=>$datatype)));
								if($loopsrc==1){
									$prefixField = substr($valued,0,3);
								}
							}
						}
						if($ottable=true){
							if($keyd=="ft"){
								$datatype = $valued; 
								$arrField = array_merge($arrField, array(array('Field'=>$fieldname, 'Type'=>$datatype)));
								// $prefixField = substr($valued,0,3);
							}
						}
						$loopsrc++;
					}
				}
			}
			// print_r($arrField);		
		}
		//query ke database
		$desc = "";
		// print_r($column);
		if($type!="add"){
			if($type=="view"){
				$desc = "_DESC";
			}
			if(!$column){
				if(isset($function)=="" && isset($model)==""){
					$column = $CI->crud->getTable_edit($table, $prefixField.'_IDENTS', $param);
				}else{
					$CI->load->model($model);
					$column = $CI->{$model}->{$function}($param);
				}				
			}else{
				$column = $column;	
			}
		}
		$txt = "";
		foreach($arrField as $key=>$value){
			$fldnam = $value["Field"];
			$dattyp = $value["Type"];
			$presis = getDefinition('precision', $dattyp);
			$dattyp = getDefinition('datatype', $dattyp);
			$option ="";
			$arrComment = $CI->common->extractjson($table, $fldnam);
			// echo $CI->db->last_query();
			// ============================================== start of build input
			if($arrComment!=""){
				$gs="";
				$lao ="1";
				$validator="";
				// ======== ambil value dari json ========
				foreach($arrComment as $key=>$value){
					if(!is_array($value)){
						${$key}=$value;
					}else{
						//print_r($value);
						if($key=="crud"){
							foreach($value as $keyd=>$valued){
								foreach($valued as $keyd=>$valuede){
									${$keyd} = $valuede;
								}
							}
						}
					}
				}
				$object = substr($fldnam,4,6);
				$prefixElement = $ct;
				$objname = $prefixElement . $object;
				if(!isset($cg)){
					$cg=1;
					unset($cg);
				}					
				if(isset($cr)){
					$validator = array('harusisi'=>true);
					unset($cr);
				}
				if(isset($cw)){
					$size = $cw;
					unset($cw);
				}else{
					$size = 4*$presis;				
				}
				if($column){
					${$objname} = $column->{$fldnam};
				}else{
					if($dattyp == "varchar" || $dattyp == "datetime" || strpos("X" . $dattyp, "timestamp")>0){
						${$objname} = "";
						$maxlength = $presis;
					}else{
						${$objname} = "";
					}
				}
				if($dattyp == "datetime"){
					$size = 100;
				}

				$label = $fd;
				$input = $ct;
				// kalau bukan hidden
				// if($ct!='hid'){
				$nourut = isset($cu) ? $cu : 999;
				// kalau combobox
				if($ct=="cmb"){
					if($column){					
						${$objname} = $column->{$fldnam.$desc};
					}
					$option = "";
					$vField = $fldnam;
					if(isset($cs)){
						if(isset($cm)){
							$model = $cm;
							unset($cm);
						}else{
							$model = "crud";
						}
						$parameter = array();
						if(isset($cp)){
							$parameter = explode('^',$cp);
							unset($cp);
						}
						$option = call_user_func_array(array($CI->$model,$cf), $parameter);
						unset($cs);
						unset($cf);							
					}else{
						if(isset($optionC)){
							if(is_array($optionC)){
								$dapet = false;
								foreach ($optionC as $key => $value){
									if($object==$key){
										${'opt'. $object} = $value;
										$dapet = true;
									}
								}
								if($dapet==true){
									$option = ${'opt'. $object};
									$vField = "";
								}
							}
						}							
					}
					// 
					if($size=="50"){
						$size =100;
					}
					$arrTable[] =array('group'=>$cg, 'urutan'=>$nourut, 'type'=> isset($status) ? 'view' : 'cmb', 'label'=>$label, 'namanya' => $objname,'size' => $size, 'option' => $option, 'value'=> isset($column) ? (isset($status) ? ${$objname} : ${$objname}) : '147');
					$txt .=  '$arrTable[] = array(\'group\'=>' . $cg .', \'urutan\'=>'. $nourut .', \'type\'=> isset($status) ? \'view\' : \'cmb\', \'label\'=>\''. $label. '\', \'namanya\' =>\''. $objname. '\',\''. $size. '\' => \'50\',\'option\' => $option, \'value\'=> isset($column) ?(isset($status) ? $'. $objname .' : $' . $objname .') : \'0\');
';
				}else{
					if($ct=="txa"){
						$arraynya=array('group'=>$cg, 'urutan'=>$nourut, 'type'=> isset($status) ? 'view' : 'txa', 'maxlength'=>$presis, 'label'=> $label, 'namanya'=> $objname, 'size'=> $size, 'value'=> isset($column) ? ${$objname} : '');	
						if(isset($cy)){
							$arraynya = array_merge($arraynya, array('ckeditor'=> isset($cy) ? $cy : ''));
						}
						$arrTable[] = 
						$txt .= '$arrTable[] = array(\'group\'=>' . $cg .', \'urutan\'=>' . $nourut . ', \'type\'=> isset($status) ? \'view\' : \'' . $input .'\', \'maxlength\'=>\'' . $presis .'\', \'label\'=> \''. $label.'\', \'namanya\'=> \'' .$objname .'\', \'ckeditor\'=> isset($cy) ? $cy : \'\', \'size\'=> \'' .$size . '\', \'value\'=> isset($column) ? $' . $objname . ' : \'\');
';						
					}else{
						// echo $input ."<br>";
						switch ($input) {
							case 'hid':
								$status_e = "edt";
								break;
							default:
								$status_e = isset($status) ? $status : "edit";
								break;
						}
						if(isset($status)){
							$typeInput = $status_e=="view" ? "view" : $input;		
						}else{
							// if($input=="hid"){
							// 	$input = "txt";
							// }
							$typeInput = $input;
						}
						$arrInputTables = array('group'=>$cg, 'urutan'=>$nourut, 'type'=> $typeInput, 'maxlength'=>$presis, 'label'=> $label, 'namanya'=> $objname, 'size'=> $size, 'value'=> isset($column) ? ${$objname} : '');	
						if(isset($ci)){
							$arrInputTables = array_merge($arrInputTables, array('tagsinput'=>isset($ci) ? $ci : ''));
						}
						$arrTable[] = $arrInputTables;
						$txt .= '$arrTable[] = array(\'group\'=>' . $cg .', \'urutan\'=>' . $nourut . ', \'type\'=> isset($status) ? \'view\' : \'' . $input .'\', \'maxlength\'=>\'' . $presis .'\', \'label\'=> \''. $label.'\', \'namanya\'=> \'' .$objname .'\', \'size\'=> \'' .$size . '\', \'value\'=> isset($column) ? $' . $objname . ' : \'\');
';						
					}
				}
				unset($cu);
				unset($ci);
			}
			$loop++;
		}
		// ============================================== end of build input
		if($debug=="true"){
			debug_array($txt);
		}else{
			return $arrTable;	
		}
		
	}
	function getArrInput($detail){
		$inp_groups = $detail['group'];
		$inp_urutan = $detail['urutan'];
		$inp_typinp = $detail['type'];
		$inp_labels = "";
		$inp_namess = "";
		$inp_values = "";
		$inp_sizess = "";
		if(isset($detail['label'])){
			$inp_labels = $detail['label'];
		}
		if(isset($detail['namanya'])){
			$inp_namess = $detail['namanya'];	
		}		
		if(isset($detail['size'])){
			$inp_sizess = $detail['size'];	
		}
		if(isset($detail['value'])){
			$inp_values = $detail['value'];	
		}
		$arrInput = array('group'=>$inp_groups, 'urutan'=>$inp_urutan, 'type'=> $inp_typinp, 'label'=> $inp_labels, 
											'namanya'=> $inp_namess, 'size'=> $inp_sizess, 'value'=> $inp_values);

		if(isset($detail['events'])){
			$arrInput = array_merge($arrInput, array('events'=> $detail['events']));
		}
		if(isset($detail['placeholder'])){
			$arrInput = array_merge($arrInput, array('placeholder'=> $detail['placeholder']));
		}
		if(isset($detail['style'])){
			$arrInput = array_merge($arrInput, array('style'=> $detail['style']));
		}
		if(isset($detail['colInput'])){
			$arrInput = array_merge($arrInput, array('colInput'=> $detail['colInput']));
		}
		if(isset($detail['link'])){
			// debug_array($detail['link']);
			$arrInput = array_merge($arrInput, array('link'=> $detail['link']));
		}
		if($inp_typinp=="cmb"){
			$inp_option = $detail['option'];
			$arrInput = array_merge($arrInput, array('option' => $inp_option));
			// $arrInput = array('group'=>$inp_groups, 'urutan'=>$inp_urutan, 'type'=> $inp_typinp, 'label'=>$inp_labels, 
			// 									'namanya'=> $inp_namess,'size' => $inp_sizess, 'option' => $inp_option, 'value'=> $inp_values,
			// 									'events'=> $inp_events);
			if(isset($detail['readonly'])){
				$readonly = $detail['readonly'];	
				if($readonly){
					$arrInput = array_merge($arrInput, array("readonly"=>true));	
				}
			}
			if(isset($detail['otoheight'])){
				$otoheight = $detail['otoheight'];	
				if($otoheight){
					$arrInput = array_merge($arrInput, array("otoheight"=>true));	
				}
			}
			if(isset($detail['validator'])){
				$inp_validt = $detail['validator'];	
				$arrInput = array_merge($arrInput, array("validator"=>$inp_validt));
			}			
		}else{
			$inp_typinp = ($inp_typinp=="viw" ? "view" : $inp_typinp);
			// $inp_maxlen = isset($detail['maxlength']) ? $detail['maxlength'] : '';
			// $inp_taginp = isset($detail['tagsinput']) ? $detail['tagsinput'] : '';
			// $inp_txtinp = isset($detail['text']) ? $detail['text'] : '';

			// $arrInput = array_merge($arrInput, array('maxlength'=>$inp_maxlen, 'text'=> $inp_txtinp));

			// $arrInput = array('group'=>$inp_groups, 'urutan'=>$inp_urutan, 'type'=> $inp_typinp, 'maxlength'=>$inp_maxlen, 
			// 									'label'=> $inp_labels, 'namanya'=> $inp_namess, 'size'=> $inp_sizess, 'value'=> $inp_values, 
			// 									'text'=> $inp_txtinp,'events'=> $inp_events);

			if(isset($detail['maxlength'])){
				$arrInput = array_merge($arrInput, array("maxlength"=>$detail['maxlength']));
			}
			if(isset($detail['text'])){
				$arrInput = array_merge($arrInput, array("text"=>$detail['text']));
			}
			if(isset($detail['ckeditor'])){
				$inp_ckeditor = $detail['ckeditor'];	
				$arrInput = array_merge($arrInput, array("ckeditor"=>$inp_ckeditor));
			}
			if(isset($detail['rows'])){
				$arrInput = array_merge($arrInput, array("rows"=>$detail['rows']));
			}
			if(isset($detail['coltxa'])){
				$arrInput = array_merge($arrInput, array("coltxa"=>$detail['coltxa']));
			}
			if(isset($detail['jqxeditor'])){
				$inp_jqxeditor = $detail['jqxeditor'];	
				$arrInput = array_merge($arrInput, array("jqxeditor"=>$inp_jqxeditor));
			}
			if(isset($detail['tagsinput'])){
				$inp_taginp = $detail['tagsinput'];	
				$arrInput = array_merge($arrInput, array("tagsinput"=>$inp_taginp));
			}
			if(isset($detail['validator'])){
				$inp_validt = $detail['validator'];	
				$arrInput = array_merge($arrInput, array("validator"=>$inp_validt));
			}
			if(isset($detail['button'])){
				$button = $detail['button'];	
				$arrInput = array_merge($arrInput, array("button"=>$button));
			}
			if(isset($detail['readonly'])){
				$readonly = $detail['readonly'];	
				if($readonly){
					$arrInput = array_merge($arrInput, array("readonly"=>$readonly));	
				}
			}
			if(isset($detail['pilihan'])){
				$pilihan = $detail['pilihan'];	
				$arrInput = array_merge($arrInput, array("pilihan"=>$pilihan));	
			}
			if(isset($detail['asal'])){
				$asal = $detail['asal'];	
				$arrInput = array_merge($arrInput, array("asal"=>$asal));	
			}	
			if(isset($detail['digits'])){
				$digits = $detail['digits'];	
				$arrInput = array_merge($arrInput, array("digits"=>$digits));	
			}	
			if(isset($detail['max'])){
				$max = $detail['max'];	
				$arrInput = array_merge($arrInput, array("max"=>$max));	
			}	
			if(isset($detail['otherelement'])){
				$arrInput = array_merge($arrInput, array("otherelement"=>$detail['otherelement']));	
			}			
			if(isset($detail['location'])){
				$inp_lokasi = $detail['location'];	
				if($inp_lokasi!=""){
					$arrInput = array_merge($arrInput, array("location"=>$inp_lokasi));	
				}
			}
			if(isset($detail['masked'])){
				if($detail['masked']!=""){
					$arrInput = array_merge($arrInput, array("masked"=>$detail['masked']));	
				}
			}	
			if(isset($detail['optional'])){
				if(is_array($detail['optional'])){
					$arrInput = array_merge($arrInput, array("optional"=>$detail['optional']));	
				}
			}
			if(isset($detail['decimaldigit'])){
				$arrInput = array_merge($arrInput, array("decimaldigit"=>$detail['decimaldigit']));	
			}				
		}		
		return $arrInput;
	}
	function generateForm($parameter, $createtab=true, $hidTRNSKS=true){
		$CI = get_instance();
		//================================
		// deklarasi default awal
		//================================
		$multicolumn = false;
		$column = "";
		$modul ="";
		$debug = false;
		$save = true;
		//form related
		//================================
		$nameForm = "formgw";
    $classForm = "form-horizontal";
    //================================
		$width = 710;
		$tabname  = "";
		$source ="";
		$table = "";
		$form_create = true;
		$heightnya = "96%";
    //================================
		foreach ($parameter as $indx=>$value){
			${$indx}=$value;
		}

    if(!isset($param)){
      $param=0;
    }
		if(!isset($arrTable)){
			$arrPass = array('source'=>$source, 'type'=>$type, 'param'=>$param, 'modul'=>$modul,'table'=>$table, 'debug'=>$debug, 'column'=>$column);
			if(isset($model)){
				$arrPass = array_merge($arrPass, array('model'=>$model));
			}
			if(isset($function)){
				$arrPass = array_merge($arrPass, array('function'=>$function));
			}				
			$arrTable = buildInput($arrPass);	
		}
		
		$urutan = array();		 
		foreach ($arrTable as $arrUrut) {
			$urutan[] = $arrUrut['group'];
		}
		array_multisort($urutan, SORT_ASC, $arrTable);

		if($createtab){
			$grouptab = 0;
			$grouptab_temp = 1;
			$looptab =1;
			$ketemu = 1;
			$namatab = "";
			$arrTabs =array();
			$arrCount = count($arrTable);
			// looping form input yang didapat dari controller
			$resetX = false;
			foreach($arrTable as $detail){
				$inp_groups = $detail['group'];//initial group
				// if($looptab>1 && count($arrTable)>1){
				if($arrCount>1){
					$namatab = "Tab " . $grouptab_temp;
					if(is_array($tabname)){
						$namatab = $tabname[$grouptab_temp];
					}
					// kalau group != group sebelumnya atau jumlah loop = jumlah arrTable
					
					if($inp_groups!=$grouptab_temp){
						${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
						$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
						unset($arrTableX);						
						$arrTableX[] = getArrInput($detail);
						if($looptab==$arrCount){
							$namatab = "Tab " . $inp_groups;
							if(is_array($tabname)){
								$namatab = $tabname[$inp_groups];
							}

							${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
							$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
						}
					}else{
						$arrTableX[] = getArrInput($detail);
						// debug_array($arrTableX,false);
						${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
						$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
					}
				}else{
					//kalau cuman satu elemen
					$namatab = "Tab " . $inp_groups;
					if(is_array($tabname)){
						$namatab = $tabname[$inp_groups];
					}					
					if(!isset($arrTableX)){
						$arrTableX = array();
						$arrTableX[] = getArrInput($detail);
					}

					${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
					$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));					
				}
				$looptab++;
				$grouptab_temp = $inp_groups;//group lama
			}
			/*
			foreach($arrTable as $detail){
				$inp_groups = $detail['group'];
				 
				if($looptab>1 || count($arrTable)==1){
					if($inp_groups!=$grouptab_temp || $arrCount==$looptab){
						$namatab = "Tab " . $grouptab_temp;
						if(is_array($tabname)){
							$namatab = $tabname[$grouptab_temp];	
						}
						if(!isset($arrTableX)){
							$arrTableX = array();
							$arrTableX[] = getArrInput($detail);
						}
						${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
						$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
						if(count($arrTable)>1){
							if($looptab==count($arrTable) && $inp_groups!=$grouptab_temp){
								$arrTableX = array();
								// $arrTableX[] = getArrInput($detail);
								$namatab = "Tab " . $inp_groups;
								if(is_array($tabname)){
									$namatab = $tabname[$inp_groups];	
								}
								${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
								$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
							}

							if($looptab==count($arrTable) && $inp_groups==$grouptab_temp){
								$arrTableX[] = getArrInput($detail);
								$namatab = "Tab " . $inp_groups;
								if(is_array($tabname)){
									$namatab = $tabname[$inp_groups];	
								}
								${'html'.$ketemu} = generateinput(array('arrTable'=>$arrTableX));
								$arrTabs = array_merge($arrTabs, array($namatab=>array('data'=>${'html'.$ketemu})));
							}							
						}

						$arrTableX = array();
						$ketemu++;
					}
				}

				$arrTableX[] = getArrInput($detail);
				$looptab++;
				$grouptab_temp = $inp_groups;
			}		
			
			*/	
			$arrTabs = array('id'=>'Dashboard','arrTabs'=> $arrTabs);

			if(isset($font)){
				$arrTabs = array_merge($arrTabs,array('font'=>$font));
			}

			if(isset($tabwidth)){
				$arrTabs = array_merge($arrTabs, array('tabwidth'=>$tabwidth));
			}
			if(isset($tabheight)){
				$arrTabs = array_merge($arrTabs, array('tabheight'=>$tabheight));
			}
			if(isset($bentuk)){
				$arrTabs = array_merge($arrTabs, array('bentuk'=>$bentuk));
			}
			if(isset($scriptinit)){
				$arrTabs = array_merge($arrTabs, array('scriptinit'=>$scriptinit));
			}
			if(isset($funcinit)){
				$arrTabs = array_merge($arrTabs, array('funcinit'=>$funcinit));
			}
			if(isset($button)){
				$arrTabs = array_merge($arrTabs, array('button'=>$button));
				// $content = ;
			}
			if(isset($multicolumn)){
				$arrTabs = array_merge($arrTabs, array('multicolumn'=>$multicolumn));
			}

			$isinya = generateTabjqx($arrTabs);

		}else{
			$arrInput = array('multicolumn'=>$multicolumn, 'arrTable'=>$arrTable);
			if(isset($colLabel)){
				$arrInput = array_merge($arrInput, array('colLabel'=>$colLabel));
			}
			if(isset($colInput)){
				$arrInput = array_merge($arrInput, array('colInput'=>$colInput));
			}
			$isinya = generateinput($arrInput);
		}
		if($form_create){
	    $attr = array('class' => $classForm, 'name' => $nameForm, 'id' => $nameForm);
	    if(isset($heightnya)){
	    	$attr = array_merge($attr, array('style'=>'top:50px;height:'.$heightnya));
	    }
	    $command = "";
	    if($save==true){
	    	if(isset($formcommand)){
	    		$formcommand =$formcommand;
	    	}else{
		    	$command = "save";	
		    	$formcommand = '/'.$command.'/' . $modul;
	    	}
	    }
	    $form_create = form_open_multipart($formcommand, $attr);
		}else{
			$form_create = "";
		}
    $content = $form_create;
    $content .= $isinya;
    if($form_create!=""){
    	if($hidTRNSKS){
    		$content .= form_input(array('name' => "hidTRNSKS",'id'=> "hidTRNSKS", 'type'=>'hidden', 'value'=> (isset($type) ? $type : "view")));		
    	}
    }
		return $content;
	}	
	function generateButton($arraynya=null, $lebartoolbar=null){
		$CI = get_instance();

		$url = substr(uri_string(),strpos(uri_string(),"/")+1,strlen(uri_string()));
		$height = 30;
		$posisi = "float";
		$style = "";
		$iddiv = "";
		$button = "";
		$buttonnya = "";
		$check = true;
		$createToolbar = false;
		$toolbarname = "toolbarForm";
		if(is_array($arraynya)){
			foreach ($arraynya as $detail=>$value){
				${$detail} = $value;
			}
		}

		if(isset($lebar)){
			$width = $lebar;
		}else{
			$width = 100;	
		}


		// if(is_array($arraynya)){
		// }else{
		// 	//, "reset"=>array("Kosongkan", "jvReset()","warning","refresh"));//, "reset^warning"=>"jvReset", "Backs^info"=>"jvBacks");, "backs"=>array("Kembali", "jvBacks()","info")
		// }
		if(!is_array($button)){
			$button = array("save"=>array("Simpan", "jvSave()","info","save",null, "fa-floppy-o"));	
		}
		
		if(!$createToolbar){
			$script = "
	    <script>
				$(document).ready(function(){		
			";
			foreach($button as $key=>$value){
				$theme = "danger";
				// $arrThemes = explode("^", $key);
				$texts = $key;
				if(count($value)>2){
					$theme = $value[2];
				}
				$script .= "$('#jqx" . $texts . "').jqxButton({ template: '". $theme. "', width:".$width.", height :".$height."});";	
			}
			
			$script .= "
				});
	    </script>
			";
			$nbsp = "&nbsp;";
			if($posisi == "float"){
				$iddiv = "id='tombolfloat'";
				$nbsp = "";
			}else{
				if($posisi!=""){
					$iddiv = "id='".$posisi."'";
					$nbsp = "";
				}
			}
	    $buttonnya = $script . $style . "<div ".$iddiv.">";
	    foreach($button as $key=>$value){
	    	$buttonnya .= "<input type='button' onclick='" . $value[1] . "' value='".$value[0]."' id='jqx".$key."'/>".$nbsp;
	    }
			$buttonnya .= "</div>";			
		}else{
			$arrButton = array();
			$index = 0;
			// $CI->common->debug_array($button);
			foreach($button as $key=>$value){
				$theme = "primary";
				$texts = $key;
				if(count($value)>2){
					$theme = $value[2];
				}
				// $script .= "$('#jqx" . $texts . "').jqxButton({ template: '', width:"..", height :".$height."});";
				$icon = "fa-floppy-o"	;
				if(isset($value[4])){
					$icon = $value[4]	;
				}
				$image = "<i style='position: relative; top: -2px' class='fa ".$icon."'></i>"	;
				$butt = array($index=>array(
        'text' => "&nbsp;".$value[0],
        'image'=> $image,
        'events'=> $value[1],
        'theme'=> $theme,
        'width'=> $width
					)
				);
				$arrButton = array_merge($arrButton, $butt); 
			}
			$arrButt = array('createToolbar'=>true,'toolbarname'=>$toolbarname, 'arrButton'=>$arrButton, 'RTL'=>true);
			if($lebartoolbar!=""){
				$arrButt = array_merge($arrButt, array('lebartoolbar'=>$lebartoolbar));
			}
			$buttonnya = generateToolbar($arrButt);
		}
		$otorisasi = $CI->common->otorisasi($url, $check);
		$oADD = strpos("N".$otorisasi,"A");
		$oEDT = strpos("N".$otorisasi,"E");
		// if($oADD.$oEDT==""){
		// 	$buttonnya = "";
		// }	
    return $buttonnya;
    	// <div style='height:5px'></div>
   //  	if(isset($value[3])){
   //  		$img = "<i class='fa fa-" . $value[3] . " fa-lg' style='float: left;'></i>";
   //  	}
			// $buttonnya .= "
			// 		<div id='jqx".$key."' style='padding:4px'>
			//  			<div style='vertical-align:middle;'>". $img . "<div style='float: left;margin:4px;height:20px'>".$value[0]."</div></div>
			// 		</div>";    	

	}
  		// 
  		// <input type='button' value='Reset' id='jqxReset' /><div style='height:5px'></div>
  		// <input type='button' value='Kembali' id='jqxBacks' />
	function generateinputfile($detail, $status="edit"){
		$filexist = true;
		$location = "/assets/documents/";
		if(isset($detail['location'])){
			if(isset($detail['location'])!=""){
				$location = $detail['location'];	
			}
		}
		if(isset($detail['link'])){
			if($detail['link']!=""){
				$link = $detail['link'];	
			}
		}
		$arrACRPDF = array('pdf','PDF');
		$arrDOCMNT = array('doc','DOC','docx','DOCX','odt','ODT');
		$arrEXCELS = array('xls','XLS','xlsx','XLSX','ods','ODS');
		$arrPPOINT = array('ppt','PPT','pptx','PPTX','odp','ODP');
		$arrIMAGES = array('jpg','JPG','jpeg','JPEG','png','PNG','gif','GIF','bmp','BMP');
		$arrVIDEOS = array('swf','SWF','flv','FLV','mp4','MP4','3gp','3GP');
		$arrLOOPNG = array('ACRPDF','DOCMNT','EXCELS','PPOINT','IMAGES','VIDEOS');
		
		if($status=="view"){
			$forminputnya = "";
		}else{
			$forminputnya = form_upload(array('name'=> $detail['namanya'], 'id'=> $detail['namanya'], 'size'=>$detail['size'], 'value'=> $detail['value'] ));
		}
		if($detail['value'] != ""){
			$ext = explode('.',$detail['value']);
			if(isset($ext[1])){
				$iconed = "<i class='fa fa-file fa-lg' style='color:#FFC0CB'></i>";
				for($x=0;$x<count($arrLOOPNG);$x++){
					$TYPEFIL = $arrLOOPNG[$x];
					if(in_array($ext[1], ${'arr'.$TYPEFIL})){
						switch ($TYPEFIL) {
							case 'ACRPDF':
								$iconed = "<i class='fa fa-file-pdf-o fa-lg' style='color:#ff0000'></i>";
								break;
							case 'DOCMNT':
								$iconed = "<i class='fa fa-file-word-o fa-lg' style='color:#3232FF'></i>";
								break;
							case 'EXCELS':
								$iconed = "<i class='fa fa-file-excel-o fa-lg' style='color:#009900'></i>";
								break;
							case 'PPOINT':
								$iconed = "<i class='fa fa-file-powerpoint-o fa-lg' style='color:#ffa500'></i>";
								break;
							case 'IMAGES':
								$labelgw = "<img src='". $location .$detail['value']."' height='200' width='200'>";
								break;
							case 'VIDEOS':
								$iconed = "<i class='fa fa-file-video-o fa-lg' style='color:#9975b9'></i>";
								break;
							default :
								$iconed = "<i class='fa fa-file fa-lg' style='color:#FFC0CB'></i>";
								break;
						}
					}
				}
				if(!isset($labelgw)){
					$labelgw = $iconed . "&nbsp;&nbsp;<a href='".$location .$detail['value']."' target=_blank>". $detail['value']."</a>";
				}
				if(isset($link)){
					$labelgw = "&nbsp;&nbsp;".$link;
				}
				$return = form_label($labelgw,'', array('class' => '"btn btn-default')). $forminputnya . "&nbsp;&nbsp;";	
			}else{
				$return = form_label( "<a href='".$location .$detail['value']."' target=_blank>".$detail['value']."</a>",'', array('class' => 'btn btn-default','target'=>'_blank')) . $forminputnya . "&nbsp;&nbsp;";	
			}
		}else{
			$return = $forminputnya . "&nbsp;&nbsp;";	
		}
		return $return;	
	}
	function inputNumber($detail){
		$arrNumInput = array();
		$namanya = "txtNUMINP";
		if(isset($detail['namanya'])){
			$namanya = $detail['namanya'];
		}else{
			if(isset($detail['name'])){
				$namanya = $detail['name'];
			}
		}
		if(isset($detail['value'])){
			$valuenya = $detail['value'];
		}else{
			$valuenya = 0;
		}
		$arrNumnya = array(
			'id'=>$namanya,
			'val'=>$valuenya,
			);
		if(isset($detail['readonly'])){
			$arrNumnya = array_merge($arrNumnya, array('disabled'=>$detail['readonly']));
		}
		
	
		if(isset($detail['decimaldigit'])){
			$arrNumnya = array_merge($arrNumnya, array('decimaldigit'=>$detail['decimaldigit']));
		}					
		if(isset($detail['size'])){
			$arrNumnya = array_merge($arrNumnya, array('width'=>$detail['size']));
		}					
		if(isset($detail['inputmode'])){
			$arrNumnya = array_merge($arrNumnya, array('inputmode'=>$detail['inputmode']));
		}
		if(isset($detail['digits'])){
			$arrNumnya = array_merge($arrNumnya, array('digits'=>$detail['digits']));
		}
		if(isset($detail['symbol'])){
			$arrNumnya = array_merge($arrNumnya, array('symbol'=>$detail['symbol']));
		}
		if(isset($detail['max'])){
			$arrNumnya = array_merge($arrNumnya, array('max'=>$detail['max']));
		}
		if(isset($detail['spinmode'])){
			$arrNumnya = array_merge($arrNumnya, array('spinmode'=>$detail['spinmode']));
		}
		$arrNumInput = array_merge($arrNumInput, array($arrNumnya));

		return $arrNumInput;
	}
	function inputEditor($detail){
		$arrEditor = array();
		$namanya = "txtNUMINP";
		if(isset($detail['namanya'])){
			$namanya = $detail['namanya'];
		}else{
			if(isset($detail['name'])){
				$namanya = $detail['name'];
			}
		}

		$arrEditor = array(
			'id'=>$namanya,
			'val'=>$detail['value'],
			);

		$editoropt = $detail['jqxeditor'];
		if(isset($editoropt['create'])){
			$arrEditor = array_merge($arrEditor, array('create'=>$editoropt['create']));
		}
		if(isset($editoropt['readonly'])){
			$arrEditor = array_merge($arrEditor, array('disabled'=>$editoropt['readonly']));
		}
		if(isset($editoropt['full'])){
			$arrEditor = array_merge($arrEditor, array('full'=>$editoropt['full']));
		}
		if(isset($editoropt['toolbar'])){
			$arrEditor = array_merge($arrEditor, array('toolbar'=>$editoropt['toolbar']));
		}
		if(isset($editoropt['toolbarPosition'])){
			$arrEditor = array_merge($arrEditor, array('toolbarPosition'=>$editoropt['toolbarPosition']));	
		}
		if(isset($editoropt['width'])){
			$arrEditor = array_merge($arrEditor, array('width'=>$editoropt['width']));
		}					
		if(isset($editoropt['height'])){
			$arrEditor = array_merge($arrEditor, array('height'=>$editoropt['height']));
		}		
		return $arrEditor;
	}	
	function inputCombo($detail){
		$nojqx = false;
		$arrCombobox = array();
		$arrEvents = array();
		$arrJs = array();
		$width = "";

		if(isset($detail['size'])){
			$width = $detail['size'];
		}
		if(isset($detail['readonly'])){
			$cbro = $detail['readonly'];
		}else{ 
			$cbro = false; 
		}
		if(isset($detail['multiselect'])){
			$cbmt = $detail['multiselect'];
		}else{ 
			$cbmt = false; 
		}
		if(isset($detail['otoheight'])){
			$ohei = $detail['otoheight'];
		}else{ 
			$ohei = false; 
		}
		if(isset($detail['fontsize'])){
			$fontsize = $detail['fontsize'];
		}		
		// if(is_array($detail['option'])){
		if(array_search("json", $detail['option'])){
			$arrCombo = array('width'=>$width, 'json'=> array_merge($detail['option'],array('value'=>$detail['value'])));
			if($cbro){
				$arrCombo = array_merge($arrCombo, array('disabled'=>$cbro));
			}
			if($ohei){
				$arrCombo = array_merge($arrCombo, array('otoheight'=>$ohei));
			}
			if($cbmt){
				$arrCombo = array_merge($arrCombo, array('multiselect'=>$cbmt));
			}
			if(isset($fontsize)){
				$arrCombo = array_merge($arrCombo, array('fontsize'=>$fontsize));
			}
			$arrCombobox = array_merge($arrCombobox, array($detail['namanya']=>$arrCombo));

			$return = "<div name='".$detail['namanya']."' id='".$detail['namanya']."'></div>";
			// }
		}else{
			if(isset($detail['events'])){
				if(is_array($detail['events'])){
					foreach ($detail['events'] as $keyevents => $valueevents) {
						$arrJs = array_merge($arrJs, array($keyevents=> 'javascript:' . $valueevents));
						if(!$nojqx){
							$arrEvents = array_merge($arrEvents, array('events'=> $detail['events']));
						}
					}
				}	
			}
			if(!is_array($detail['option'])){
				$opsyen = array("0"=>"Array Kosong");
			}else{
				$opsyen = $detail['option'];
			}

			if(!$nojqx){
				$arrNojqx = array('disabled'=>$cbro,'jmlrow' =>count($detail['option']),'width'=>$width);
				if($ohei){
					$arrNojqx = array_merge($arrNojqx, array('otoheight'=>'true'));
				}
				if($cbmt){
					$arrNojqx = array_merge($arrNojqx, array('multiselect'=>'true'));
				}
				if(count($arrEvents)>0){
					$arrNojqx = array_merge($arrNojqx, $arrEvents);	
				}
				$arrCombobox = array_merge($arrCombobox, array($detail['namanya']=> $arrNojqx));
			}
			$arrJs = array_merge($arrJs, array('id'=>$detail['namanya'], 'class'=>'selectpicker'));
			$value = "";
			if(isset($detail['value'])){
				$value = $detail['value'];
			}
			$return = form_dropdown($detail['namanya'], $opsyen, $value, $arrJs);
		}
		return array('return'=>$return, 'arrCombobox'=>$arrCombobox);
	}
	function inputDate($detail){
		$separator = "<span class='input-group-addon' style='height:5px;padding: 2px 5px;'> &nbsp - &nbsp</span>";
		if(isset($detail['readonly'])){
			$dtro = $detail['readonly'];
		}else{ 
			$dtro = false; 
		}
		$arrDate = array();
		if(is_array($detail['namanya'])){
			$return = "<div class='input-daterange input-group' id='datepicker' style='width:230px'>";
			$loop = 1;
			foreach ($detail['namanya'] as $keydate => $valuedate) {
				$elmDATESS = $keydate;
				$nilaidat = "";
				if(isset($valuedate['value'])){
					$nilaidat = $valuedate['value'];
				}
				$valDATESS = $nilaidat;
				$arrDATESS = array('name'=>$elmDATESS,'value'=>$valDATESS);
				if(isset($valuedate['readonly'])){
					if($valuedate['readonly']){
						$arrDATESS = array_merge($arrDATESS, array('disabled'=>true));	
					}
				}
				$arrDate = array_merge($arrDate, array($arrDATESS));
				$return .= "<div name='" . $elmDATESS . "' id='" . $elmDATESS . "'></div>";
				if($loop==1){
					$return .= $separator;
				}
				$loop++;
			}
			$return .= "</div>";
		}else{
			if(strpos($detail['namanya'],"~")>0){
				$arrDateName = explode("~", $detail['namanya']);
				$arrDateValue = explode("~", $detail['value']);
				$datename1 = $arrDateName[0];
				$datename2 = $arrDateName[0]."2";
				$datevalue1 = $arrDateValue[0];
				$datevalue2 = "";

				if(count($arrDateName)>1){
					$datename2 = $arrDateName[1];
				}
				if(count($arrDateValue)>1){
					$datevalue2 = $arrDateValue[1];
				}
				$arrDate1 = array('name'=>$datename1,'value'=>$datevalue1, 'disabled'=>$dtro);
				$arrDate2 = array('name'=>$datename2,'value'=>$datevalue2, 'disabled'=>$dtro);
				$arrDate = 	array_merge(
											array($arrDate1), 
									 		array($arrDate2)
									 		);

				$return = "
							<div class='input-daterange input-group' id='datepicker' style='width:230px'>
							  <div name='" . $datename1 . "' id='" . $datename1 . "'></div>
							  <span class='input-group-addon' style='height:5px;padding: 2px 5px;'> &nbsp - &nbsp</span>
							  <div name='" . $datename2 . "' id='" . $datename2 . "'></div>
						  </div>";						
			}else{
				$valuenya = "";
				if(isset($detail['value'])){
					$valuenya = $detail['value'];
				}
				$arrDatevalue = array('name'=>$detail['namanya'],'value'=>$valuenya, 'disabled'=>$dtro);
				if(isset($detail['optional'])){
					$arrDatevalue = array_merge($arrDatevalue, $detail['optional']);
				}				
				$arrDate = array($arrDatevalue);
				$return = "<div name='" . $detail['namanya'] . "' id='" . $detail['namanya'] . "'></div>";
				if($dtro){
					$return .= form_input(array('name' => $detail['namanya'],'id'=> $detail['namanya'], 'type'=>'hidden', 'value'=> $valuenya));
				}
			}			
		}
		return array('return'=>$return, 'arrDate'=>$arrDate);
	}
  function generateinput($parameter,$addTabs=null){
    $CI =& get_instance();
		$multicolumn=false;
		$elementonly = false;
		$clsTable = "table";
		$loop = 1;
		$rr = 1;
		$ukuran ="";
		$return = "";
		$events = "";
		$filexist = false;
		$ckeditor = false;
		$panjangtoken = "280";
		$decimaldigit = 0;
		$inputmode = "";
		$style = "";
		
		foreach ($parameter as $param=>$value){
			${$param}=$value;
		}

		$urutan = array();		 
		foreach ($arrTable as $arrUrut) {
			$urutan[] = $arrUrut['urutan'];
		}
		// $multicolumn = ($multicolumn==true) ? 1 : $multicolumn;

		array_multisort($urutan, SORT_ASC, $arrTable);
		$arrDate = array();
		$arrTimeinput = array();
		$arrNumInput = array();
		$arrEditor = array();
		$arrValid = array();
		$arrDDT = array();
		$arrDDL = array();
		$arrDDG = array();
		$arrCombobox = array();
		$arrTags = array();
		$arrMasked = array();
		$divlebar = "";

		if(isset($lebardiv)){
			$divlebar = 'width:' .$lebardiv .'px';
		}
		$heightdiv="";//"height:230px;";

		// if(count($arrTable)>5){
			$heightdiv = "height:100%;";
		// }
		$input = "";
  // transform: rotate(-90deg);
  // -webkit-transform: rotate(-90deg); 
  // -moz-transform: rotate(-90deg); 
  // -o-transform: rotate(-90deg); 
  // filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
// #feedback a { 
//   display: block; 
//   background: #f00; 
//   height: 15px; 
//   width: 70px; 
//   padding: 8px 16px;
//   color: #fff; 
//   font-family: Arial, sans-serif; 
//   font-size: 17px; 
//   font-weight: bold; 
//   text-decoration: none; 
//   border-bottom: solid 1px #333;
//   border-left: solid 1px #333;
//   border-right: solid 1px #fff;
// }
		if(!$elementonly){
			$html = "
				<style>
					.col-md-11 {
					   margin:3px 2px;
					}
				</style>
				<fieldset>
					<div class=\"container-fluid center-block\" style='text-align:left;".$heightdiv."overflow-y:auto;overflow-x:hidden;" . $divlebar . "' >
			";
		}else{
			$html="";
		}
		
		foreach($arrTable as  $detail){

			if(isset($detail['column'])){
				$colInput = $detail['column'];
			}else{
				if(!isset($colLabel) && !isset($colInput)){
					$colLabel = "col-xs-3 col-md-2";
					$colInput = "col-xs-5 col-md-3";
					if($multicolumn==false){
						$colLabel = "col-xs-13 col-md-4";
						$colInput = "col-xs-13 col-md-8";
					}else{
						if($multicolumn > 3){ //maksimal 3
							$colLabel = "col-xs-13 col-md-3";
							$colInput = "col-xs-13 col-md-7";
						}else{
							if($multicolumn == 3){
								$colLabel = "col-xs-13 col-md-1";
								$colInput = "col-xs-13 col-md-3";
							}elseif ($multicolumn == 2) {
								$colLabel = "col-xs-13 col-md-3";
								$colInput = "col-xs-13 col-md-3";
							}else{
								$colLabel = "col-xs-13 col-md-3";
								$colInput = "col-xs-13 col-md-7";
							}
						}
					}							
				}				
			}
			$label = "";

			if(isset($detail['label'])){
				$adalabel = false;
				$detailnama = "";
				$placeholder = "";

				if(isset($detail['namanya'])){
					$detailnama = $detail['namanya'];
					if(is_array($detailnama)){
						$detailnama = str_replace(" ", "", $detail['label']);
					}
				}
				if(isset($detail['placeholder'])){
					$placeholder = $detail['placeholder'];
				}
				if(is_array($detail['label'])){
					$arrLabel = $detail['label'];
					if(isset($arrLabel['value'])){
						$textlabel = $arrLabel['value'];
						$adalabel = true;
					}
					if(isset($arrLabel['style'])){
						$labelstyle = $arrLabel['style'];	
					}
				}else{
					if($detail['label']!=""){
						$textlabel = $detail['label'];
						$labelstyle = 'text-align:right';
						$adalabel = true;
					}
				}
 
				$arrLabel = array(
						'id'=>'lbl'.substr($detailnama,3,6),
						'class' => $colLabel . ' control-label'
					);

				if(isset($detail['placeholder'])){
					$arrLabel = array_merge($arrLabel, array('placeholder'=>$detail['placeholder']));
				}
				if(isset($labelstyle)){
					$arrLabel = array_merge($arrLabel, array('style'=>$labelstyle));
				}				
				if($adalabel){
					$label = form_label( $textlabel, $detailnama, $arrLabel);
				}
			}
			if(isset($detail['size'])){
				$ukuran = $detail['size'];	
			}
			$others = '';
			if(isset($detail['other'])){
				if(is_array($detail['other'])){
					$others = $detail['other'];
				}
			}
			// validator function 
			$typeInput = $detail['type'];

			if(isset($detail['validator']) && $typeInput!="view"){
				if(is_array($detail['validator'])){
					if(strpos($detail['namanya'],'~') > 0){
						$arrName = explode('~', $detail['namanya']);
						foreach ($arrName as $key => $value) {
							$arrValid = array_merge($arrValid, array($value =>$detail['validator']));	
						}
					}else{
						$arrValid = array_merge($arrValid, array($detail['namanya']=>$detail['validator']));
					}
				}//else{
					// $arrValid = array_merge($arrValid, array(bootstrapvalidator($detail['namanya'], $detail['label'], $detail['validator'])));	
					//$arrValid = array_merge($arrValid, array($detail['namanya']=>$detail['validator']));		
				// }
			}
			switch($typeInput){			
				case "dat": // tanggal
					$arrInputDate = inputDate($detail);
					$return = $arrInputDate['return'];
					$arrDate = array_merge($arrDate, $arrInputDate['arrDate']);
					break;
				case "tim": // waktu
					if(isset($detail['readonly'])){
						$dtro = $detail['readonly'];
					}else{ $dtro = false; }
					
					if(strpos($detail['namanya'],"~")>0){	
						$arrTimeName = explode("~", $detail['namanya']);
						$arrTimeValue = explode("~", $detail['value']);
						$timename1 = $arrTimeName[0];
						$timename2 = "";
						$timevalue1 = $arrTimeValue[0];
						$timevalue2 = "";

						if(count($arrTimeName)>1){
							$timename2 = $arrTimeName[1];
						}
						if(count($arrTimeValue)>1){
							$timevalue2 = $arrTimeValue[1];
						}

						$arrTimeinput = array_merge($arrTimeinput, 
															array(array('name'=>$timename1,'value'=>$timevalue1, 'disabled'=>$dtro)), 
															array(array('name'=>$timename2,'value'=>$timevalue2, 'disabled'=>$dtro))
														);
						$return = "
									<div class='input-daterange input-group' id='datepicker' style='width:230px'>
									  <div name='" . $timename1 . "' id='" . $timename1 . "'></div>
									  <span class='input-group-addon' style='height:5px;padding: 2px 5px;'> &nbsp - &nbsp</span>
									  <div name='" . $timename2 . "' id='" . $timename2 . "'></div>
								  </div>";
					}else{
						$arrTimeinput = array_merge($arrTimeinput, array(array('name'=>$detail['namanya'],'disabled'=>$dtro,'value'=>$detail['value'])));	
						$return = "<div name='" . $detail['namanya'] . "' id='" . $detail['namanya'] . "'></div>";
					}
					
					break;					
				case "int":
				case "num":
					$arrNumInput = array_merge($arrNumInput, inputNumber($detail));
					$return = "<div style='margin-top: 0px;' name='" . $detail['namanya'] . "' id='" . $detail['namanya'] . "'></div>";
					break;
				case "txh":
				case "txt" :
					$valueinput = isset($detail['value']) ? $detail['value'] : '';
					$namesinput = $detail['namanya'];

					$element = array();
					/* digunakan kalau ingin dalam satu col isinya 2 txt :
					Contoh cara penggunaan : 
					$arrNamanya = array(
						'txtITEMSS'=>array(
							'size'=> '160', 
							'readonly'=>true
							),
						'txtNMAITM'=>array(
							'size'=> '200', 
							'readonly'=>true)
					);
					$arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'label'=>'Produk', 'namanya' => $arrNamanya,'size' => '350','value'=>'','readonly'=>true);
					*/
					if(is_array($namesinput)){ //=== kalau nameinput array(lebih dari satu)
						$loop = 0;
						foreach ($namesinput as $idelement => $valueelement) {
							$element[$loop]['namanya']=$idelement;	
							$element[$loop]['name']=$idelement;	
							$element[$loop]['id']=$idelement;
							if(is_array($valueelement)){
								foreach ($valueelement as $keyelement => $valuekeyelement) {
									switch ($keyelement) {
										case 'dat' :
											$element[$loop]['type']=$valuekeyelement;		
											break;
										case 'cmb' :
											$element[$loop]['type']=$valuekeyelement;		
											break;
										case 'size':
											$element[$loop]['style']='width:' . $valuekeyelement  .'px';
											$element[$loop]['size']=$valuekeyelement;	
											break;
										case 'button':
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
										case 'readonly':
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
										case 'masked':
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
										case 'value':
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
										case 'delimiter':
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
										default:
											$element[$loop][$keyelement]=$valuekeyelement;
											break;
									}
								}
							}
							$loop++;
						}
					}else{
						$element[0]['namanya']=$namesinput;
						$element[0]['name']=$namesinput;	
						$element[0]['id']=$namesinput;
						if(!isset($detail['tagsinput'])){
							$element[0]['style']='width:' . $ukuran  .'px';
							if(isset($detail['maxlength'])){
								$element[0]['maxlength'] = $detail['maxlength'];
							}
						}
						$element[0]['value']=$valueinput;
						if(isset($detail['tagsinput'])){
							$element[0]['tagsinput'] = $detail['tagsinput'];
						}
						if(isset($detail['readonly'])){
							if($detail['readonly']){
								$element[0]['readonly'] = $detail['readonly'];	
							}
						}
						if(isset($detail['button'])){
							$element[0]['button'] = $detail['button'];
						}
						if(isset($detail['masked'])){
							if($detail['masked']!=""){
								$element[0]['masked'] = $detail['masked'];
							}
						}						
						if(isset($valueinput)){
							$classinput = 'form-control input-small';
							if(is_numeric(str_replace(",","", $valueinput))){
								$classinput = 'form-control input-number';
							}
							$element[0]['class'] = $classinput;
						}else{
							$element[0]['class'] = 'form-control input-small';
						}
					}
					$forminput = "";
					$countElement = count($element);
					$divstr = "";
					$divend = "";					
					if($countElement>1){
						$divstr = "<div style='float:left;padding-right:2px'>";
						$divend = "</div>";
					}

					foreach ($element as $kunci => $nilai) {
						$buttona = "";
						$buttonb = "";
						$buttonc = "";
						$numerik = false;
						$delimit = "";
						$classinput = 'form-control input-small';
						if(isset($nilai['value'])){
							if(is_numeric(str_replace(",","", $nilai['value']))){
								$classinput = 'form-control input-number';
							}
						}
						if(isset($nilai['masked'])){
							$arrMasked = array_merge($arrMasked, array($nilai['namanya']=>$nilai['masked']));	
						}
						if(isset($nilai['delimiter'])){
							$delimit = "<div style='float:left;padding-right:2px'>&nbsp;".$nilai['delimiter']."&nbsp;</div>";
						}
						if(isset($nilai['jenis'])){
							$numerik = true;
							$arrNumInput = array_merge($arrNumInput, inputNumber($nilai));
						}else{
							$numerik = false;
						}
						if(isset($nilai['tagsinput'])){
							if($ukuran==""){
								$panjangtoken = ($ukuran > $panjangtoken) ? $ukuran : $panjangtoken;///ambil ukuran terpanjang
							}else{
								$panjangtoken = $ukuran;
							}
							
							if($nilai['tagsinput']!=""){
								if(isset($nilai['namanya'])){
									$nilainama = $nilai['namanya'];
								}else{
									$nilainama = $nilai['namanya'];
								}
								$arrTagspass = array_merge($nilai['tagsinput'], array('size'=>$ukuran));
								$arrTags = array_merge($arrTags, array($nilainama=>$arrTagspass));
							}							
							unset($nilai['tagsinput']);
						}
						if(isset($nilai['button'])){
							$btnscript = "";
							if(isset($nilai['button'][1])){
								$btnscript =  " onclick=\"" . $nilai['button'][1] . "\"" ;
							}
							if(isset($nilai['button'][0])){
								$button = $nilai['button'][0];
								$arrButton = explode("^", $button);
								switch ($arrButton[0]) {
									case 'txt':
										$button = $arrButton[1];
										$btntexts = $button;
										break;
									default:
										$btntexts = "<li class='fa fa-".$button."'></li>";
										break;
								}
								
							}						
							$buttona = "<div class=\"input-group col-xs-1 col-md-3\" style=\"padding:0px\">";
							$buttonb = "<div class=\"input-group-addon\" style=\"border-radius:0px;padding: 2px 12px;\" " . $btnscript . ">".$btntexts."</div>";	
							$buttonc = "</div>";
							unset($nilai['button']);
						}
						$nilai = array_merge($nilai, array('class'=>$classinput));
						if($numerik){
							$inputan = "<div style='margin-top: 3px;' name='" . $nilai['namanya'] . "' id='" . $nilai['namanya'] . "'></div>";
						}else{
							$datetrue = false;
							$iscombos = false;
							if(is_array($namesinput)){
								if(isset($nilai['type'])){
									if($nilai['type']=="dat"){
										$datetrue = true;
										// $arrDate = array_merge($arrDate, $arrInputDate['arrDate']);									
									}
									if($nilai['type']=="cmb"){
										$iscombos = true;
										// $arrDate = array_merge($arrDate, $arrInputDate['arrDate']);									
									}
								}
							}
							if($datetrue){
								$arrInputDate = inputDate($nilai);
								$inputan = $arrInputDate['return'];
								$arrDate = array_merge($arrDate, $arrInputDate['arrDate']);
							}else{
								if($iscombos){
									$arrInputCombo = inputCombo($nilai);
									$inputan = $arrInputCombo['return'];
									if(count($arrInputCombo['arrCombobox'])>0){
										$arrCombobox = array_merge($arrCombobox, $arrInputCombo['arrCombobox']);
									}
								}else{
									$inputan = form_input($nilai);	
								}
							}
						}
						$forminput .= $delimit;
						$forminput .= $divstr . $buttona . $inputan . $buttonb. $buttonc . $divend;	
					}
					$return = $forminput ;
					break;
				case "txa":
					$editor = "";
					$valuetxa = ""; 
					$rows = 2;
					if(isset($detail['value'])){
						$valuetxa = $detail['value'];
					}
					if(isset($detail['rows'])){
						$rows = $detail['rows'];
					}
					if(isset($detail['coltxa'])){
						$coltxa = $detail['coltxa'];
					}
					$arrtxt = array('name'=> $detail['namanya'], 'id'=> $detail['namanya'],'value'=> $valuetxa ,'class'=>'form-control col-xs-12', 'rows'=>$rows, 'cols'=>'10');
					if(isset($detail['style'])){
						$arrtxt = array_merge($arrtxt, array('style'=>$detail['style']));
					}
					if(isset($detail['placeholder'])){
						$arrtxt = array_merge($arrtxt, array('placeholder'=>$detail['placeholder']));
					}					
					if(isset($detail['jqxeditor'])){
						// $arrtxt = array('name'=> $detail['namanya'], 'id'=> $detail['namanya'],'value'=> $detail['value']);
						$arrtxt = array('name'=> $detail['namanya'], 'id'=> $detail['namanya'],'value'=> htmlspecialchars($detail['value']));
						$arrEditor = array_merge($arrEditor, inputEditor($detail));
					}
				 // 'ckeditor'=>array('full'=>false, 'toolbar'=>'simple','height'=>'200px')
					if(isset($detail['ckeditor'])){
						// 'ckeditor'=>array('full'=>false, 'toolbar'=>'verysimple', 'coltxa'=>'col-md-6','width'=>'70%','height'=>'80px')
						$width = "100%";
						$height = "200px";
						$toolbar = "Full";
						$full = true;
						if(isset($detail['size'])){
							$width = $detail['size'];
						}
						$CI->load->helper('ckeditor');
						if(is_array($detail['ckeditor'])){
							// debug_array($detail['ckeditor']);
							foreach ($detail['ckeditor'] as $key => $value) {
								${$key}=$value;
							}						
						}
	
						$ckeditor= array(
							//ID of the textarea that will be replaced
							'id' 	=> 	$detail['namanya'],
							'path'	=>	'resources/js/ckeditor',
							'toolbar' 	=> $toolbar,
							//Optional values
							'config' => array( 	//Using the Full toolbar
								'width' 	=> 	$width,	//Setting a custom width
								'height' 	=> 	$height,	//Setting a custom height,
								'filebrowserImageUploadUrl' => '/form/upload'
							)
						);
						// $ckeditor= array(
						// 	//ID of the textarea that will be replaced
						// 	'id' 	=> 	$detail['namanya'],
						// 	'path'	=>	'resources/js/ckeditor',
						// 	//Optional values
						// 	'config' => array(
						// 		'toolbar' 	=> $toolbar, 	//Using the Full toolbar
						// 		'width' 	=> 	$width,	//Setting a custom width
						// 		'height' 	=> 	$height,	//Setting a custom height,
						// 		'filebrowserImageUploadUrl' => '/form/upload'
						// 	),
						// 	//Replacing styles from the "Styles tool"
						// 	'styles' => array(
						// 		//Creating a new style named "style 1"
						// 		'style 1' => array (
						// 			'name' 		=> 	'Blue Title',
						// 			'element' 	=> 	'h2',
						// 			'styles' => array(
						// 				'color' 			=> 	'Blue',
						// 				'font-weight' 		=> 	'bold'
						// 			)
						// 		),
						// 	//Creating a new style named "style 2"
						// 		'style 2' => array (
						// 			'name' 		=> 	'Red Title',
						// 			'element' 	=> 	'h2',
						// 			'styles' => array(
						// 				'color' 			=> 	'Red',
						// 				'font-weight' 		=> 	'bold',
						// 				'text-decoration'	=> 	'underline'
						// 				)
						// 			)				
						// 	)
						// );
						$editor = display_ckeditor($ckeditor);
					}else{
						if(isset($detail['colInput'])){
							$colInput = $detail['colInput'];//"col-xs-13 col-md-6";
						}else{
							if($multicolumn==false){
								$colInput = "col-md-5";
							}
						}
					}
					if(is_array($others)){
						$arrtxt = array_merge($arrtxt, $others);	
					}
					$return = form_textarea($arrtxt) . $editor;
					break;
				case "cmb":
					$arrInputCombo = inputCombo($detail);
					$return = $arrInputCombo['return'];
					if(count($arrInputCombo['arrCombobox'])>0){
						$arrCombobox = array_merge($arrCombobox, $arrInputCombo['arrCombobox']);
					}
					break;
				case "view" :
					$responsetext = true;
					$nilai = "";
					if(isset($detail['value'])){
						$nilai = $detail['value'];	
					}
					
					if(isset($detail['tagsinput']['tokenvalue'])){
						if($detail['tagsinput']['tokenvalue']=="id"){
							$responsetext = false;
							$nilai = $detail['tagsinput']['data'];
						}
					}
					$autowidth = "";
					// $colInput = "col-md-4";
					if(!$responsetext){
						$arrNilai = explode(";", $nilai);
						$ulo ="";
						$ulc ="";
						$lio ="";
						$lic ="";						
						if(count($arrNilai)>1){
							$ulo ="<ul>";
							$ulc ="</ul>";
							$lio ="<li>";
							$lic ="</li>";
						}
						$nilai = $ulo;
						for($x=0;$x<count($arrNilai);$x++){
							$arrNilaiID = explode("~", $arrNilai[$x]);
							// for($y=0;$y<count($arrNilaiID);$y++){
							if(isset($arrNilaiID[1])){
								$nilai .= $lio .$arrNilaiID[1].$lic;
							}
							// }
						}
						$nilai .= $ulc;
					}
					if(is_array($detail['namanya'])){
						// debug_array($detail['namanya']);
						$rc = false;
						$nilai = "";
						foreach ($detail['namanya'] as $keyNamanya => $valueNamanya) {
							if($rc) $nilai .= ", ";
							$nilai .= $valueNamanya['value'];
							$rc = true;
						}
					}
					$return = "<p class=\"form-control-static\" >". $nilai ."</p>";
					break;
				case "chk":
					$colInput = "col-md-1";
					$chek = ($detail['value'] == 1) ? TRUE : FALSE;
					$attr = array(
						'name' => $detail['namanya'],
						'id' => $detail['namanya'],
						'value'  => 'true',
						'checked' => $chek,
						'class' => 'control-label'
					);

					$return = "<div class='checkbox' style='padding-left:20px'>" . form_checkbox($attr) . "</div>";
					break;
				case "chv":
					if(!$multicolumn){
						$colInput ="col-md-1";		
					}
					
					$chek = ($detail['value'] == 1) ? "<li class='fa fa-check-square-o'></li>" : "<li class='fa fa-square-o'></li>";
					$attr = array(
						'name' => $detail['namanya'],
						'id' => $detail['namanya'],
						'value'  => 'true',
						'checked' => $chek,
						'class' => 'control-label'
					);

					$return = "<div class='checkbox' style='padding-left:20px'>" . $chek . "</div>";					
					break;
				case "viwfil":
					$return = generateinputfile($detail, 'view');
					break;
				case "fil":	
					$return = generateinputfile($detail);
					break;
				case "pwd":
					$classinput = 'form-control input-small';
					$buttona = "";
					$buttonb = "";
					$buttonc = "";
					if(isset($detail['button'])){
						$btnscript = "";
						if(isset($detail['button'][1])){
							$btnscript =  " onclick=\"" . $detail['button'][1] . "\"" ;
						}
						if(isset($detail['button'][0])){
							$button = $detail['button'][0];
							$arrButton = explode("^", $button);
							switch ($arrButton[0]) {
								case 'txt':
									$button = $arrButton[1];
									$btntexts = $button;
									break;
								default:
									$btntexts = "<li class='fa fa-".$button."'></li>";
									break;
							}
						}						
						$buttona = "<div class=\"input-group col-xs-1 col-md-3\" style=\"padding:0px\">";
						$buttonb = "<div class=\"input-group-addon\" style=\"border-radius:0px;padding: 2px 12px;\" " . $btnscript . ">".$btntexts."</div>";	
						$buttonc = "</div>";
						unset($nilai['button']);
					}
					$arrPasswd = array('name'=> $detail['namanya'],'id'=> $detail['namanya'], 'style'=>'width:200px', 'class'=>$classinput);
					if(isset($detail['value'])){
						if($detail['value']!=""){
							$arrPasswd = array_merge($arrPasswd, array('value'=>$detail['value']));
						}
					}
					$inputan = form_password($arrPasswd);
					$forminput = $buttona . $inputan . $buttonb. $buttonc;
					$return = $forminput ;
					break;
				case "rdv":
					$colInput ="col-md-5";	
					if(isset($detail['pilihan'])){
						$return = "";
						$i=1;
						foreach($detail['pilihan'] as $kunci=>$value){
							if(isset($detail['asal'])){
								if($detail['asal']=="db"){
									$nilai = $kunci;
								}else{
									$nilai = $i;
									$keterangan = $value;
								}
							}
							if($detail['value'] == $i){
								$return = "<p class=\"form-control-static\" >". $keterangan ."</p>";								
							}
							$i++;
						}
					}else{
						$return = form_radio('rdbDEFAUL', 1, FALSE)."Ya&nbsp;".form_radio('rdbDEFAUL', 0, TRUE)."Tidak";
					}
					break;

				case "rdb":
					$colInput ="col-md-5";	
					if(isset($detail['pilihan'])){
						$return = "";
						$i=1;
						foreach($detail['pilihan'] as $kunci=>$value){
							if(isset($detail['asal'])){
								if($detail['asal']=="db"){
									$nilai = $kunci;
								}else{
									$nilai = $i;
								}
							}
							$chek = ($detail['value'] == $i) ? TRUE : FALSE;
							$attr = array(
								'name' => $detail['namanya'],
								'id' => $detail['namanya'],
								'value'  => $nilai,
								'checked' => $chek,
								'style' => 'margin:10px',
								'othvalue' => $value
							);
							$return .= form_radio($attr).$value;
							$i++;
						}
					}else{
						$return = form_radio('rdbDEFAUL', 1, FALSE)."Ya&nbsp;".form_radio('rdbDEFAUL', 0, TRUE)."Tidak";
					}
					break;
				case "ddt" :
					$strDiv1 = "";
					$endDiv1 = "";
					$strDiv2 = "";
					$endDiv2 = "";
					$value = "";
					if(isset($detail['text'])){
						$value = $detail['text'];	
					}
					$arraynya = array('width'=>$detail['size'],'value'=>$value);
					if(isset($detail['readonly'])){
						$arraynya = array_merge($arraynya, array('disable'=>$detail['readonly'])); 
					}
					if(isset($detail['otherelement'])){
						$strDiv1 = "<div style='float:left;padding-right:2px'>";
						$endDiv1 = "</div>";
						$strDiv2 = "<div style='float:left'>".$detail['otherelement']."</div>";
					}
					$arrDDT = array_merge($arrDDT, array($detail['namanya']=>$arraynya));
					$return = $strDiv1 . "
					<div name='div" . $detail['namanya'] . "' id='div" . $detail['namanya'] . "'>
						<div id='tree" . $detail['namanya'] . "' style='overflow:auto'></div>
					</div>
					<input type=hidden id='" . $detail['namanya'] . "' name='" . $detail['namanya'] . "' value='".$detail['value']."'>
					".  $endDiv1 . $strDiv2;;
					unset($detail['otherelement']);
					break;
				case "ddg" :///jqxgrid dropdownlist
					$strDiv1 = "";
					$endDiv1 = "";
					$strDiv2 = "";
					$endDiv2 = "";
					if(isset($detail['otherelement'])){
						$strDiv1 = "<div style='float:left;padding-right:2px'>";
						$endDiv1 = "</div>";
						$strDiv2 = "<div style='float:left'>".$detail['otherelement']."</div>";
					}
					$valuetext = "";
					if(isset($detail['text'])){
						$valuetext = $detail['text'];
					}
					$arrDDG = array_merge($arrDDG, array($detail['namanya']=>array('width'=>$detail['size'],'value'=>$valuetext)));
					$ddgvalue = "";
					if(isset($detail['value'])){
						$ddgvalue = $detail['value'];
					}
					$return = $strDiv1 . "
						<div name='div" . $detail['namanya'] . "' id='div" . $detail['namanya'] . "'>
							<div id='jqxDDG_" . $detail['namanya'] . "' style='border-color: transparent;'></div>
						</div>
						<input type=hidden id='" . $detail['namanya'] . "' name='" . $detail['namanya'] . "' value='".$ddgvalue."'>
					".  $endDiv1 . $strDiv2;
					break;
				case "hid" :
				// form_password(array('name'=> $detail['namanya'],'id'=> $detail['namanya'], 'style'=>'width:200px', 'class'=>$classinput )) ;
					// $return = form_hidden();
					$valuenya = "";
					if(isset($detail['value'])){
						$valuenya = $detail['value'];
					}				
					$return = form_input(array('name' => $detail['namanya'],'id'=> $detail['namanya'], 'type'=>'hidden', 'value'=> $valuenya));
					break;
				case "udi" : //user defined input
					$return = $detail['value'];
					if($label==""){
						$colInputO = $colInput;
						$colInput = "col-md-9";	
					}else{
						if(isset($detail['colInput'])){
							$colInput = $detail['colInput'];//"col-xs-13 col-md-6";
						}
					}
					break;
				case "udf" : //user defined full
					if(!isset($detail['style'])){
						$style = "style='margin-left:50px'";		
					}else{
						$style = "style='".$detail['style']."'";
					}
					$return = "<div ".$style.">" . $detail['value'] ."</div>";
					if($label==""){
						$colInputO = $colInput;
						$colInput = "col-md-12";
					}
					if(isset($detail['colInput'])){
						$colInput = $detail['colInput'];		
					}
					break;
				default:
					$return = $typeInput;
					break;
			}
			// $classinput = "class='col-md-4'";
			// echo "<pre style='text-align:right;>";
			// print_r($detailnama);
			// echo "</pre>";

			/////ngasih id ke div yg berisi label dan element
			if(isset($detailnama)){
				$divID = "id='myrow".$detailnama."'";
			}else{
				$divID = "";
			}

			if($multicolumn==false){
				$penuh="";
				// $penuh="<div class=col-md-2></div>";
				if($typeInput!="hid"){
					if(!$ckeditor && $typeInput!="udx"){
						if(!$elementonly){
							if(isset($colInput)){
								$classinput = "class='" . $colInput . "'";
							}
							if($typeInput=="udf" || $typeInput=="udi"){
								if(isset($colInputO)){
									$colInput = $colInputO;
								}
							}
							$input = 	"	
								<div class='row' ".$divID.">
									<div class='form-group'>" . $label . "
										<div ".$classinput.">" . $return . "</div>
									</div>
								</div>";
						}else{
							$input = $return;
						}
						unset($classinput);
					}else{
						if($full){
							if(!isset($coltxa)){
								$coltxa = 'col-md-9';
							}

							// $style = "style='padding: 100px 100px 100px 100px'";
							if(isset($style)){
								$style = "style='padding-right:50px;padding-left:50px;". $style. "'";
							}else{
								$style = "";
							}
							$input = 	"	
								<div class='row' ".$divID.">
									<div class='form-group'>
										<div class=".$coltxa." ".$style.">" . $return . "</div>
									</div>
								</div>";
							$ckeditor = false;						
						}else{

							if(!isset($classinput)){
								$classinput = "class='col-xs-12 col-md-7'";
							}

							// $classinput = "class='col-xs-12 col-md-5'";
							$input = 	"	
								<div class='row' ".$divID.">
									<div class='form-group'>" . $label . "
										<div ".$classinput.">" . $return . "</div>
									</div>
								</div>";
							$ckeditor = false;							
						}	
					}
				}else{
					$input = $return;
				}
			}else{
				if($typeInput!="hid"){
					$bikin = "";
					if($rr==1){
						$bikin = "<div class='row' ".$divID.">
												<div class='form-group'>
						";
						$classinput = "";
						if(isset($colInput)){
							$classinput = "class='" . $colInput . "'";
						}						
						$bikin .= $label . "<div ".$classinput.">" . $return . "</div>";
					}else{
						
						// $bikin = "<div class=\"clearfix visible-xs\"></div>";
						if(isset($colInput)){
							$classinput = "class='" . $colInput . "'";
						}
						$bikin .= $label . "<div ".$classinput.">" . $return . "</div>";
						if($rr == $multicolumn){
							$bikin .= "</div></div>";
							$rr=0;
						}
					}
					$input = $bikin;
					$rr++;
				}else{
					$input = $return;
				}
			}
			// unset($colInput);
			$html .= $input;
			$loop++;
		}

							// if(!isset($classinput)){
							// 	$classinput = "class='col-xs-12 col-md-7'";
							// }

		if(!$elementonly){
			$html .= "
					</div>
				</fieldset>
			";			
		}
		$script ="";

		if(count($arrDate)>0 || count($arrEditor)>0 || count($arrMasked)>0 || count($arrValid)>0 || count($arrCombobox)>0 || count($arrTimeinput)>0 || count($arrNumInput)>0 || count($arrTags)>0 || $filexist==true || count($arrDDL)>0|| count($arrDDT)>0|| count($arrDDG)>0){
			$script ="";
			if(count($arrMasked)>0){
				$script .= "<script type=\"text/javascript\" src=\"".base_url(JS."jqxwidgets/jqxmaskedinput.js"). "\"></script>";
			}
			if(count($arrEditor)>0){
				$script .= "<script type=\"text/javascript\" src=\"".base_url(JS."jqxwidgets/jqxeditor.js"). "\"></script>";
			}			
			if($filexist){
				$script .= "<script src=" . base_url(JS."bootstrap.file-input.js") . "></script>";	
			}
			if(count($arrTags)>0){
				// <link rel=\"stylesheet\" href=\"" . base_url(CSS."jquery.tagsinput.css") ."\">
				// <script src=\"" . base_url(JS."jquery-ui.min.js") . "\"></script>
				// <script src=\"" . base_url(JS."jquery.tagsinput.js") . "\"></script>
				// <link rel=\"stylesheet\" href=\"" . base_url(CSS."jquery-ui-1.10.4.custom.min.css") ."\">

				$script .= "
				<link rel=\"stylesheet\" href=\"" . base_url(CSS."token-input.css") ."\">
				<link rel=\"stylesheet\" href=\"" . base_url(CSS."token-input-facebook.css") ."\">
				<style>
				ul.token-input-list{
				   width:".$panjangtoken."px;
				   border-radius: 3px;
				   font-size: 12px;
				   height: 27px;
				   background-color: #ffffff;
				   border: 1px solid #cccccc;
				   color: #555555;
				   vertical-align: middle;
				}
				</style>
				<script src=\"" . base_url(JS."jquery.tokeninput.js") . "\"></script>				
				";
			}

			$script .= "
				<script>
				$(document).ready(function(){";
			if(count($arrValid)>0){
				$script .= generateValidator($arrValid);
			}
			if(count($arrDate)>0){
				$script .= generateDate($arrDate);
			}
			if(count($arrTimeinput)>0){
				$script .= generateDate($arrTimeinput,'time');
			}
			if(count($arrMasked)>0){
				$script .= generateMasked($arrMasked);
			}
			if(count($arrDDT)>0){
				$script .= generateDDT($arrDDT);
			}
			if(count($arrDDG)>0){
				$script .= generateDDG($arrDDG);
			}
			if(count($arrCombobox)>0){
				$script .= generateCombobox($arrCombobox);
			}
			if(count($arrEditor)>0){
				$script .= generateEditor($arrEditor);
			}
			if(count($arrTags)>0){
				$script .= generateTags($arrTags);
			}
			if(count($arrNumInput)>0){
				$script .= generateNumberInput($arrNumInput);
			}
			if($filexist){
				$script .= "
				// $('input[type=file]').bootstrapFileInput();
				// $('.file-inputs').bootstrapFileInput();
				";
			}
			$script .= "
			});
			</script>";
		}
		return $html . $script;
	}

	function generateEditor($arrEditor){
		$strEditor = "";
		$create = true;
		$height = 500;
		foreach ($arrEditor as $key => $value) {
			${$key}=$value;
		}
		if($create){
			$strEditor = "$('#".$id."').jqxEditor({ lineBreak :'', ";
			$rc = false;
			if(isset($toolbarPosition)){
				$strEditor .= "toolbarPosition:\"".$toolbarPosition."\"";
				$rc = true;
			}
			if(isset($width)){
				if ($rc) $strEditor .= ",";
				$strEditor .= 'width:"'.$width.'"';
				$rc = true;
			}

			if(isset($height)){
				if ($rc) $strEditor .= ",";
				$strEditor .= 'height:"'.$height.'"';
				$rc = true;
			}
			if(isset($toolbar)){
				switch ($toolbar) {
					case 'sedang':
						$toolbar = "bold italic underline | format font size";
						break;
					default:
						$toolbar = "bold italic underline | left center right";
						break;
				}
				if ($rc) $strEditor .= ",";
				$strEditor .= "tools:\"" .$toolbar ."\"";
				$rc = true;
			}
			$strEditor .= "});";		
		}	
		return $strEditor;		
	}
	function generateMasked($arrParam){
		/*
    # - digit, dari 0 ke 9
    9 - digit, dari 0 ke 9
    0 - digit, dari 0 ke 9
    A - alphanumerik, dari 0 ke 9 dan a ke z dan A ke Z
    L - alpha, a ke z dan A ke Z
    [abcd] - 	karakter set, hanya bisa diisi karakter yg dikurung
    					contoh :[abcd] = [a-d],
    									[0-5] => hanya menerima karakter 0-5
    									[ab] => hanya menerima karakter a dan b

		*/
		$strMasked = "";
		foreach ($arrParam as $key => $value) {
			$strMasked .= "$(\"#".$key."\").jqxMaskedInput({ mask: '".$value."' });";
		}
		return $strMasked;
	}
	function generateValidator_bootstrap($arrValid){
		$scriptValidator ="
			$('#formgw').bootstrapValidator({
				container:'#messages',
				fields: {
		";
		$koma = false;
		for($x=0;$x<count($arrValid);$x++){
			if ($koma) $scriptValidator .= ",";
			$scriptValidator .= $arrValid[$x];
			if($arrValid[$x]!=""){
				$koma = true;
			}else{
				$koma = false;
			}
		}
		$koma = false;
		$scriptValidator .="}});";
		return $scriptValidator;
	}

	function generateValidator($arrValid){
		$strule = "";
		$onSuccess = "alert('Tidak ada fungsi!')";
		$formname = "formgw";
		foreach ($arrValid as $key => $value) {
			# code...
			for ($i=0; $i < count($value); $i++) {
				# code...
				switch ($value[$i]['rule']) {
					case 'empty':
						# code...
						$str = "{input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: function(input){var nilai = input.val();var result = (!(nilai == 0 && $.trim(nilai) == ''));return result;}}";
						break;
					
					case 'zero':
						# code...
						$str = "{input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: function(input){var nilai = input.val();var result = (!(nilai == 0));return result;}}";
						break;
					
					case 'required':
						# code...
						$str = "{ input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: 'required' }";
						break;
					
					case 'custom':
						# code...
						if(isset($value[$i]['function'])){
							$str = "{ input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: function(input){var nilai = input.val();" . $value[$i]['function'] . "return result;}}";
						}else{
							$str = "{ input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: 'required' }";
						}
						break;
					
					case 'email':
						$str = "{ input: '#".$key."', message: 'Format email tidak benar!', action: 'keyup, blur', rule: 'email' }";
						break;
					default:
						# code...
						$str = "{ input: '#".$key."', message: '".$value[$i]['message']."', action: 'keyup, blur', rule: 'required' }";
						break;
				}

				$strule .= ($strule=="") ? $str : "," . $str;

				if(isset($value[$i]['onSuccess'])){
					$onSuccess = $value[$i]['onSuccess'];
				}

				if(isset($value[$i]['formnya'])){
					$formname = $value[$i]['formnya'];
				}

			}
		}

		$strValidator = "
			$('#".$formname."').jqxValidator({
    		hintType: 'label',
        animationDuration: 0,
        position: 'topcenter',
        focus: true,
				rules: [
				" . $strule . "
				],
				onSuccess: function(event){
					" . $onSuccess . "
				}
			});
		";

		return $strValidator;
	}

	function generateDate_datepicker($arrDate){
    $CI =& get_instance();
		$scriptDate = "
				$('";
		$rc = false;
		for($x=0;$x<count($arrDate);$x++){
			if ($rc) $scriptDate .= ",";
			$scriptDate .= "#" . $arrDate[$x];
			$rc = true;
		}
		$scriptDate .= "').datepicker({
			format: \"" . strtolower($CI->config->item('dateformat')) . "\",
			todayBtn: \"linked\",
			language: \"id\",
			autoclose: true
		});
		";
		return $scriptDate;		
	}
	function generateDate($arrDate, $jenis=null){
		$CI = get_instance();
		$theme = $CI->config->item('app_theme');
		$rc = false;
		$scriptDate = "";
		$timebutton = "";
		$disabled = "";
		$formatString = "yyyy-MM-dd";
		if($jenis=="time"){
			$formatString = "HH:mm";
			$timebutton = "showTimeButton: true, showCalendarButton: false, ";
		}
		foreach ($arrDate as $keyarr => $valuearr) {
			if(is_array($valuearr)){
				// $('#" . $valuearr['name'] . "').jqxDateTimeInput({ readonly: true});
				if(isset($valuearr['disabled'])){
					if($valuearr['disabled'] != ""){
						$disabled = "disabled:true,";
					}else{
						$disabled = "";
					}
				}
				$scriptDate .= "
					var " . $valuearr['name'] . "offset = $(\"#" . $valuearr['name'] . "\").offset();
					var " . $valuearr['name'] . "letaknya = " . $valuearr['name'] . "offset.top;
					if(" . $valuearr['name'] . "letaknya <= (screen.height / 2)){
						var " . $valuearr['name'] . "dropDownVerticalAlignment = 'bottom';
					}else{
						var " . $valuearr['name'] . "dropDownVerticalAlignment = 'top';
					}
					$('#" . $valuearr['name'] . "').jqxDateTimeInput({ width: '110px', dropDownVerticalAlignment: " . $valuearr['name'] . "dropDownVerticalAlignment, height: '27px', " . $disabled . " formatString:'" . $formatString . "', " . $timebutton. "theme:'".$theme."'});
				";
				if($valuearr['value']!=""){
					if($jenis!="time"){
						$arr = explode("-", $valuearr['value']);
						if(count($arr)>2){
							$scriptDate .= "
								$('#" . $valuearr['name'] . "').jqxDateTimeInput('setDate', new Date($arr[0],$arr[1]-1," . substr($arr[2],0,2) ."));
							";							
						}else{
							$scriptDate .= "
								$('#" . $valuearr['name'] . "').jqxDateTimeInput('val', '".$valuearr['value']."');
							";
						}
					}else{
						$arr = explode(":", $valuearr['value']);
						$scriptDate .= "
							$('#" . $valuearr['name'] . "').jqxDateTimeInput('setDate', new Date(1975,1,20,$arr[0]," . substr($arr[1],0,2) ."));
						";						
					}
				}else{
					$scriptDate .= "
						$('#" . $valuearr['name'] . "').jqxDateTimeInput({value:null});
					";					
				}
				if(isset($valuearr['disabled'])){
					if($valuearr['disabled']){
						$scriptDate .= "
							$('#" . $valuearr['name'] . "').jqxDateTimeInput({showCalendarButton: false});
						";
					}
				}
				// $('#datDUEDAT').jqxDateTimeInput({min: new Date(2016,10-1,04}));
				if(isset($valuearr['min'])){
					if($valuearr['min']){
						$arr = explode("-", $valuearr['min']);
						$scriptDate .= "
							$('#" . $valuearr['name'] . "').jqxDateTimeInput({min: new Date($arr[0],$arr[1]-1," . substr($arr[2],0,2) .")});
						";
					}
				}
			}else{
				$scriptDate .= "$('#" . $valuearr . "').jqxDateTimeInput({ width: '110px', height: '25px', enableBrowserBoundsDetection: true, formatString:'" . $formatString . "', " . $timebutton. "theme:'".$theme."'});";
			}
			if(isset($valuearr['fontsize'])){
				$scriptDate .= "$('#" . $valuearr['name'] . "').find('input').css('font-size', '".$valuearr['fontsize']."px');";
			}
		}		
		// $scriptDate .= "$('#input" . $valuearr['name'] . "').css('font-size', '6px');";
		return $scriptDate;
	}

	function generateNumberInput($arrNumInput){
		$scriptNumberInput = "";
		$decimaldigit = "0";
		$inputmode = "";
		$spinButtons = 'false';
		$spinMode = 'none';
		$promptChar = '';
		$disabled = "";
		$digits = "";
		$symbol = "";
		$minvalue = "min:0, ";
		$height = "25px";
		$rc = false;
		foreach ($arrNumInput as $value) {
			$ni_size = '150';
			$digits = "";
			$symbolinput = "";
			$disabled = "";
			if(isset($value['width'])){
				$ni_size = (is_numeric($value['width'])) ? $value['width'] : $ni_size;
			}
			if(isset($value['height'])){
				$height = $value['height'];
			}
			if(isset($value['minvalue'])){
				$minvalue = (is_numeric($value['minvalue'])) ? ("min:" . $value['minvalue'] .",") : "min:0, ";
			}
			if(isset($value['symbol'])){
				if($value['symbol']=="%"){
					$symbolinput .= "symbolPosition: 'right',";	
				}				
				$symbolinput .= "symbol : '" .$value['symbol'] . "',";
			}			
			if(isset($value['decimaldigit'])){
				$decimaldigit = $value['decimaldigit'];
			}
			if(isset($value['digits'])){
				$digits = (is_numeric($value['digits'])) ? "digits :" .$value['digits'] : "";
				$digits = $digits . ",";
			}
			if(isset($value['promptChar'])){
				$promptChar = "promptChar : '" . $value['promptChar'] ."',";
			}			
			if(isset($value['inputmode'])){
				if($value['inputmode']!=""){
					$inputmode = "inputMode : '" .$value['inputmode']."', ";	
				}
			}
			if(isset($value['spinmode'])){
				if($value['spinmode']!=""){
					$spinMode = $value['spinmode'];	
				}
			}
			if(isset($value['max'])){
				if($value['max']!="" && is_numeric($value['max'])){
					$inputmode = "max : '" .$value['max']."', ";	
				}
			}
			if(isset($value['disabled'])){
				if($value['disabled']!=""){
					$disabled = "readOnly: " . $value['disabled'] . ",";
				}
			}
			$scriptNumberInput .= "$('#" . $value['id'] . "').jqxNumberInput({ width: '".$ni_size."px', height: '".$height."', spinMode: '".$spinMode."',  spinButtons: ".$spinButtons.", ". $promptChar ." " . $disabled . " " . $inputmode ."" . $digits . $symbolinput . $minvalue ." decimalDigits: ".$decimaldigit." });";
			if($value['val']!=""){
				$scriptNumberInput .= "$('#" . $value['id'] . "').jqxNumberInput('val'," . $value['val'] . ");";	
			}
			if(isset($value['fontsize'])){
				$scriptNumberInput .= "$('#" . $value['id'] . "').find('input').css('font-size', '".$value['fontsize']."px');";
			}

			$inputmode = "";
		}
		return $scriptNumberInput;		
	}

	function generateDDT($arrDDT){
		$scriptDDT = "";
		$rc = false;
		$width = 150;
		// ({ width: 150, height: 25});

		foreach ($arrDDT as $key => $value) {
			// print_r($value);
			if(isset($value['width'])){
				$width = $value['width'];
			}
			if(isset($value['value'])){
				$nilai = $value['value'];
			}			
			$scriptDDT .= "
				$('#div" . $key . "').jqxDropDownButton({ width: " . $width . ", height: 25});
				var content = '<div style=\"position: relative; margin-left: 3px; margin-top: 5px;\">".$nilai."</div>';
				$('#div" . $key. "').jqxDropDownButton('setContent', content);
			";
			if(isset($value['disable'])){
				if($value['disable']){
					$scriptDDT .= "$('#div" . $key. "').jqxDropDownButton({disabled: true });";
				}
			}
		}
      //       var args = event.args;
      //       var item = $('#" . $elementid. "').jqxTree('getItem', args.element);                
      //       var id = args.element.id;
						// var ip;
      //       var recursion = function (object) {
      //         for (var i = 0; i < object.length; i++) {
      //           if (id == object[i].id) {
      //             ip = object[i].nilai;
      //             break;
      //           } else if (object[i].items) {
      //             recursion(object[i].items);
      //           };
      //         };
      //       };
      //       recursion(records);
      //       alert(id);
      //       var dropDownContent = '<div style=\"position: relative; margin-left: 3px; margin-top: 5px;\">' + item.label + '</div>';
      //       $('#" . str_replace("tree", "", $elementid). "').jqxDropDownButton('setContent', dropDownContent);
      //       $('#" . str_replace("tree", "", $elementid). "').jqxDropDownButton('close');          


		return $scriptDDT;
	}

	function generateDDG($arrDDG){
		$scriptDDG = "";

		$rc = false;
		$width = 150;
		$valued = "";
		$focusout = "";

		// ({ width: 150, height: 25});
		foreach ($arrDDG as $key => $value) {
			if(isset($value['width'])){
				$width = $value['width'];
			}
			if(isset($value['value'])){
				$valued = $value['value'];
			}
			if(isset($value['focusout'])){
				if($value['focusout']==true){
					$focusout = "
						$('#div" . $key . "').on('focusout', function () {
							$('#div" . $key . "').jqxDropDownButton('close');
						});
					";
				}
			}
			// //edited by detanto
			// $focusout = "
			// 	$('#jqxDDG_" . $key . "').on('focusout', function () {
			// 		// alert('detanto');
			// 		$('#div" . $key . "').jqxDropDownButton('close');
			// 	});
			// ";

			$scriptDDG .= "
				$('#div" . $key . "').jqxDropDownButton({ width: " . $width . ", height: 25});
				var content = '<div style=\"position: relative; margin-left: 3px; margin-top: 5px;\">".$valued."</div>';
				$('#div" . $key . "').jqxDropDownButton('setContent', content);
			" . $focusout;
		}
		
		return $scriptDDG;

	}


	function generateTags($arrTags){
		// print_r($arrTags);
		$scriptTags = "";
		$rc = false;
		foreach ($arrTags as $key => $value) {
			$parameter = "";
			$hinttext = "Pencarian data";
			$noduplicate = 'true';
			$tokenvalue = 'name';
			$tiro = "";
			$cb = "";
			foreach ($value as $keyvalue => $valuekey) {
				${$keyvalue}=$valuekey;
				if($keyvalue == 'url'){
					$url = "'" . $valuekey . "'";	
				}
				if($keyvalue == 'function'){
					$url = $valuekey;
				}
				if($keyvalue == 'noduplicate'){
					if(!$valuekey){
						$noduplicate = "false";
					}
				}
				if($keyvalue == 'tokenvalue'){
					if($valuekey=="id"){
						$tokenvalue = "id";
					}
				}
				if($keyvalue == 'tambah'){
					if($valuekey){
						$parameter .= ", allowFreeTagging: true";	
					}
				}
				if($keyvalue == 'limit'){
					$parameter .= ", tokenLimit: " . $valuekey;	
				}
				if($keyvalue == 'minchar'){
					$parameter .= ", minChars: " . $valuekey;	
				}
				if($keyvalue == 'zindex'){
					$parameter .= ", zindex: " . $valuekey;	
				}

				if($keyvalue == 'searchDelay'){
					$parameter .= ", searchDelay: " . $valuekey;	
				}
				if($keyvalue == 'readonly'){
					if($valuekey==true){
						$tiro = ",'readonly' : true";
					}
				}		
				if($keyvalue == 'callback'){
					if(is_array($valuekey)){
						$zz = "";
            foreach ($valuekey as $fn => $str) {
            	# code...
            	$zz .= "
            		, ".$fn.":function(item){
            			".$str."
            		}
            	";
            }
            $cb .= $zz;
					}
				}	
				if($keyvalue =='data'){
					$arrData = explode(";", $valuekey);					
				}	
			}
			if(isset($arrData)){
				if(count($arrData)>0){
					$nilai = "["; 
					$rc=false;

					for($x=0;$x<count($arrData);$x++){
						// if($rc==true)
						$nilai .= ($rc==true ? "," : "");
						if($tokenvalue=="id"){
							$arrDataToken = explode("~", $arrData[$x]);
							$token0 = $arrDataToken[0];
							if(isset($arrDataToken[1])){
								$token1 = $arrDataToken[1];
								$nilai .= "{id:'" . $token0 . "', name:'" . trim($token1). "'" . $tiro . "}";
							}else{
								$token1 = $arrDataToken[0];
								$nilai .= "{id:'" . $token0 . "', name:'" . trim($token1). "'" . $tiro . "}";
							}
						}else{
							$token1 = trim($arrData[$x]);
							$nilai .= "{name:'" . trim($arrData[$x]). "'}";	
						}
						$rc=true;
					}
					$nilai .= "]";						
				}
				
				// if($nilai!="[]" && $nilai!="[{id:'', name:''}]" && $nilai!="[{id:'0', name:''}]"){
				if($token1!=""){
					$parameter .= ", prePopulate: " . $nilai;	
				}	
			}

			// $scriptTags .= "$('#" . $key . "').tagsInput({ width: '".$arrTagsd[0]."', tambah: '".$arrTagsd[1]."', 'autocomplete_url':'".$arrTagsd[2]."'});";
			$scriptTags .= "$('#" . $key . "').tokenInput(". $url. ",
				{ preventDuplicates: ".$noduplicate.", 
					tokenDelimiter:'~', 
					hintText:'" . $hinttext. "', 
					noResultsText:'Data Tidak ditemukan', 
					searchingText:'..mencari..',
					tokenValue:'" . $tokenvalue . "'" . $parameter . $cb . "});";
			if($size!=""){
				$scriptTags .= "$('#token" .$key . "').css('width', '". $size . "px');";	
			}
		}
		
		return $scriptTags;		
	}

	function generateCombobox($arrCombobox){
		$CI = get_instance();
		$theme = $CI->config->item('app_theme');
		$scriptCombobox = "";
		$extrascript = "";
		$rc = false;
		$css = "";
		foreach ($arrCombobox as $key => $value) {
			$script = "";
			$extracombo = "";
			$autoheight = "false";
			$lebar = "";
			$multiselect = "";
			if(is_array($value)){
				foreach ($value as $keyval => $value_value) {
					if($keyval=="otoheight"){
						$autoheight = $value_value;
					}
					if($keyval=="jmlrow"){
						if($value_value<7){
							$autoheight = "true";
						}					
					}
					if($keyval=="width"){
						if($value_value!=""){
							$lebar = "width:" . $value_value . ",";
						}
					}
					if($keyval=="fontsize"){
						if($value_value!=""){
							$fontsize = $value_value;
						}
					}
					if($keyval=="disabled"){
						if($value_value){
							$extrascript .= "$('#" . $key . "').jqxComboBox({ disabled: true });";
						}					
					}
					if($keyval=="multiselect"){
						if($value_value){
							$multiselect = "multiSelect:true,";
						}
					}
					if($keyval=="events"){
						$comboid = $key;
						$script = "";
						foreach ($value_value as $keyevents => $valueevents) {
							$script .= "$(\"#".$key ."\").on('".$keyevents."', function(event".$comboid."){";
							if(substr($valueevents, 0,2)=="jv"){
								$script .= $valueevents;
							}else{
								$script .= "
						    var args = event".$comboid.".args;
						    if (args) {
							    var index = args.index;
							    var item = args.item;
							    var label = item.label;
							    var value = item.value;
							    var type = args.type; // keyboard, mouse or null depending on how the item was selected.
							    ".$valueevents."
								}
								";								
							}
							$script .= "});";
						}

						// debug_array($arrCombobox);
					}
					// disini
					if($keyval=="json"){
						// $autoheight = "false";
		        $extracombo .= ", source : dataAdapter".$key .",";

						foreach ($value_value as $keyjson => $valuejson) {
							if($keyjson=="url"){
		            $scriptCombobox .= "
		            var url = \"" . $valuejson . "\"";
		          }
		          if($keyjson=="fields"){
		          	$extracombo .= "displayMember: '".$valuejson[1]."', valueMember: '".$valuejson[0]."'";
		          	$scriptCombobox .= "
		                var source".$key ." =
		                {
		                    datatype: \"json\",
		                    datafields: [
			                    { name: '".$valuejson[0]."' },
			                    { name: '".$valuejson[1]."' }
		                    ],
		                    url: url,
		                    async: false
		                };
		                var dataAdapter".$key ." = new $.jqx.dataAdapter(source".$key .");
		            ";
		          }
		          if($keyjson=="value"){
								$extrascript .= "$('#".$key ."').jqxComboBox('selectItem','".$valuejson."');";
		          	
		          }
		          	// echo($extrascript);
		          if($keyjson=="script"){
		          	if(!is_array($valuejson)){
		          		$script = $valuejson;
		          	}else{
		          		$cascade = 'true';
		          		$cmbwidth = 300;
		          		$cmbheight= 25;
		          		$cmbscript = "";
		          		$autodropdownheight = true;
									foreach ($valuejson as $arrparam=>$arrvalue){
										${$arrparam}=$arrvalue;
									}
									if(!$cascade){
										$script = $cmbscript;
									}else{
										$script = "
											$(\"#".$key ."\").bind('select', function(event".$cmbid."){
												if (event".$cmbid.".args) {
													args".$cmbid." = event".$cmbid.".args;

									        $(\"#".$cmbid."\").jqxComboBox({
									            disabled: false,
									            selectedIndex: -1
									        });
													if(args".$cmbid.".item){
														var value".$cmbid." = event".$cmbid.".args.item.value;
														". $cmbscript ."
								            var url = \"".$cmburl."\"+value".$cmbid.";
								          }else{
								          	var url = \"".$cmburl."0\";
								          }
						                var source".$cmbid." =
						                {
						                    datatype: \"json\",
						                    datafields: [
							                    { name: '".$cmbvalue."' },
							                    { name: '".$cmbdisplay."' }
						                    ],
						                    url: url,
						                    async: false
						                };
						                var dataAdapter".$cmbid." = new $.jqx.dataAdapter(source".$cmbid.");
								            
														$('#".$cmbid."').jqxComboBox({ width:".$cmbwidth.", autoDropDownHeight: ".$autodropdownheight.", height: ".$cmbheight.", theme: '', selectionMode: 'dropDownList', 
															source : dataAdapter".$cmbid.",displayMember: '".$cmbdisplay."', valueMember: '".$cmbvalue."'
														});
					              }
											});									
										";									
									}
		          	}
		          }
						}
					}						
				}
			}

				$scriptCombobox .= "
					$('#" . $key . "').jqxComboBox({" . $lebar . " 
animationType: 'none',
autoDropDownHeight: ". $autoheight.", height: 25, 
theme: '" . $theme . "',
".$multiselect."
selectionMode: 'dropDownList',
enableBrowserBoundsDetection:true
".$extracombo."
																				});
					" . $extrascript ."
					" . $script;
			if(isset($fontsize)){
				$scriptCombobox .= "$('#" . $key . "').find('input').css('font-size', '".$fontsize."px');";
				unset($fontsize);
			}
		}
		return $scriptCombobox;
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
	function generateFunctionCmbKabupaten(){
		$script = "
		<script>
		$(document).ready(function(){
			var srcKabupaten =
			{
				datatype: 'json',
				datafields: [
					{ name: 'KAB_IDENTS'},
					{ name: 'KAB_DESCRE'},
					{ name: 'KAB_PROVNC'}
				],
				url: '/master/kabupaten/getKabupatenJQW',
				cache: false,
	      async: false
			};

			var kabAdapter = new $.jqx.dataAdapter(srcKabupaten);		

			$('#cmbKABPTN').jqxComboBox({
				theme:'shinyblack',
				width: 200,
				height: 25,
				// disabled: true,
				promptText: 'Pilih Kabupaten...',
				displayMember: 'KAB_DESCRE',
				valueMember: 'KAB_IDENTS',
				autoDropDownHeight: true
			});

			$('#cmbPROVNC').bind('select', function(event){
				if (event.args){
					$('#cmbKABPTN').jqxComboBox({ disabled: false, selectedIndex: -1});		
					var value = event.args.item.value;
					srcKabupaten.data = {KAB_PROVNC: value};
					kabAdapter = new $.jqx.dataAdapter(srcKabupaten);
					$('#cmbKABPTN').jqxComboBox({source: kabAdapter});
				}
			});

			$('#cmbKABPTN').bind('select', function(event){
				// alert($('#cmbKABPTN').val());
				$('#hidKABPTN').val($('#cmbKABPTN').val());
			});

		});
		</script>
		";
		return $script;
	}
	function generatePaging($paging, $tabs=null){
		$CI =& get_instance();
		$page = $CI->input->post('page');
		$CI->load->library(array('pagination'));
		if(is_array($paging)){
			foreach($paging as $key=>$row){
				${$key}=$row;
			}
			//=========== paging
			$config['base_url'] = $url;
			$config['per_page'] = $per_page;
			$config["uri_segment"] = $uri_segment;
			$config["anchor_class"] = "class='page gradient' ";
			$config["prev_link"] = "<";
			$config["next_link"] = ">";
			$config["first_link"] = "<<";
			$config["last_link"] = ">>";
			$config['total_rows'] = $total_rows;
			$form = 'formgw';
			$pagingtable = "
			<link rel=\"stylesheet\" type=\"text/css\" href=\"/resources/css/paging.css\" />
			<script>
				$(document).ready(function(){
					$('#pagination a').click(function () {
						var link = $(this).get(0).href; // 
						var form = $('#form1');
						var segments = link.split('/');
						$('[name=\"page\"]').val('".$page."'); // set a hidden field with the page number
						// alert('$page');
						// $('[name=\"page\"]').val(segments[$uri_segment]); // set a hidden field with the page number
						$('form#$form').attr('action', link); // set the action attribute of the form
						$('form#$form').submit();
						return false; // avoid the default behaviour of the link
					});
				});
			</script>			
			";
			
			$CI->pagination->initialize($config);		
			$paging = $CI->pagination->create_links($page);
			$pagingtable .= "
							<div id=container style=width:600px>
								<div id=pagination>" . $paging . "</div>
							</div>";
			$attr = array('class' => 'form-horizontal', 'name' => $form,'id' => $form);
			$pagingtable .= form_open(null, $attr);
			$pagingtable .= form_hidden('page',$page);
			//echo $tabs;
			if($tabs){
				$pagingtable .= form_hidden('txtTabs',$tabs);
			}
			$pagingtable .= form_close();
			//$CI->table->add_row(array('data'=>$pagingtable, 'colspan'=>5, 'style'=>'text-align:center'));    
		}
		return $pagingtable;
	}
	function autotag($arrParameter){
		$table=null;
		$field=null;
		$filter=null;
		$addfil=null;
		$wherein = false;
		$db='db';
		$model='crud';
		$function='getTaginput';
		$protected=true;
		$all = false;

		// print_r($arrParameter);
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		$CI =& get_instance();
		// $resultset = $CI->{$model}->{$function}($table, $field, $filter, $addfil, $protected);
		$resultset = $CI->{$model}->{$function}($table, $field, $filter, $addfil, $db, $protected,$all);

		$rc=false;
    $loop = 1;
		$arr = array();
		foreach ($resultset->result() as $key => $value) {
			$arr[] = $value;
		}

		$jeson = json_encode($arr);

		if(isset($_GET["callback"])) {
		    $jeson = $_GET["callback"] . "(" . $jeson . ")";
		}		
		echo $jeson;

	}

	function hanyajson($resultset){
		$arr = array();
		foreach ($resultset->result() as $key => $value) {
			$arr[] = $value;
		}

		$jeson = json_encode($arr);
		echo $jeson;
	}


	function makePage($parameter)
	{
		$CI =& get_instance();
		$CI->load->helper('html');
		$menuny = "";
		$divnya = "";
		$functs = "";

		$widths = "85%";

		$loadonce = false;

		$Mnames = "jqxMenu";
		$idDivs = "tab";
		$arrDiv = "";
		$sMenus = array();
		foreach ($parameter as $key => $value) {
			${$key} = $value;
		}

		if(is_array($arrDiv)){
			$loop = 1;
			$ddiv = "";
			foreach ($arrDiv as $k => $v) {
				# code...
			////bikin menu + icon
				if(isset($v['icon'])){
					$icon = $v['icon'];
					if(substr($icon, 0,2)!="fa"){
						$imgprop = array(
							'src' => base_url(IMAGES .$v['icon']),
							'width' => '16',
							'height' => '16',
							'title' => $k,
							'style' => 'float:left; margin-right:5px;'
						);
						$images = img($imgprop);
					}else{
						$images = "<i class=\"fa " . $icon . "\"></li>";
					}
				}

				$sMenus[] = $images . "<span>" . $k . "</span>";	


			////bikin Div
				if($loadonce == true){///debug
					///cek semua div diberi data atau tidak
					if(trim($v['data']) == ""){
						echo "<script>alert('Warning 01 : Data awal untuk ". $k ." tidak ada!')</script>";
						return;
					}
				}
				if($loop==1){
					$ddiv .= "<div id=".$idDivs.$loop." style='height:90%'>" . $v['data'] . "</div>";
				}
			//////////////////
				$fungsinya = "
				";

				$loop++;
			}

		}

		$menuny .= "<div id='" . $Mnames . "'>" . ul($sMenus) . "</div>	";

		$divnya .= "
		<div class=row style='height:100%;'>		
			<div class='col-md-2 col-xs-2' style='height:100%;'>" . $menuny . "</div>
			<div class='col-md-10 col-xs-10' style='height:100%'>
				<div id='jqxTabs' style='height:100%'>" . $ddiv . "</div>
			</div>
		</div>
		";

		////script toggle data berdasarkan loadonce
		if($loadonce == true){
			$scload = "
				$('#jqxTabs').find('div[id^=\'".$idDivs."\']').hide();
				$('#".$idDivs."' + (prm + 1)).show();
			";

		}else{
			if(!isset($utama)){///debug
				echo "<script>alert('Warning 02 : Set url untuk parameter \'utama\'!')</script>";
				return;
			}
			$scload = "
					$.post('" . $utama . "/'+echo, function( data ) {
						$('#".$idDivs."1').html(data);
						$('#".$idDivs."1').find('div[id=\'tabval\']').css('top',0);
					});
			";
		}

		$script = "
			<script>
			$(document).ready(function(){
				// $('#divfloatGrid').css('height',(screen.width));
				$('#divfloatGrid').css('height','90%');
				
				$(\"#".$Mnames."\").jqxMenu({height:'90%', width:'100%',mode: 'vertical',theme:'orange'});
        $(\"#".$Mnames."\").css('visibility', 'visible');
				$('#".$Mnames."').on('itemclick', function (event)
				{
				    // get the clicked LI element.
				    var element = event.args;
				    // alert($(element).find('img').attr('title'));
				    klik".$Mnames."($(element));
				    // tampilinmsg(element);
				});

			});

	    function tampilinmsg(element) {
				// console.log(element.offsetLeft,element.clientLeft,element.offsetTop,element.clientTop,$(element).width());
	    	var txt = $(element).find('img').attr('title');

				$( '#message' )
				.css('left',(element.offsetLeft + $(element).width()) + 'px')
				.css('top',element.offsetTop + 'px')
				.html(txt)
				.show(1000)
				.delay(800)
				.fadeOut(1000);
	    }

			function klik".$Mnames."(elm){
				var prm = elm.index();
				echo = elm.text().toLowerCase().replace(/\s+/g, '');
				// alert(echo);

				".$scload."

			}
			</script>
		";
		$cssnya = "
		<style>
		body { overflow:hidden; }

		#divfloatGrid{
			float: right;
			margin-right: 10px;
			width:100%;
		}

		#".$Mnames."{
			width : 155px;
			float:left;
			visibility: hidden;
			margin-left:10px;
		}

		@media screen and (max-width:480px){

			#divfloatGrid{
				margin-right: 5px;
				width:90%;
			}

			#".$Mnames."{
				width : 24px;
				margin-left:-1px;
			}
			#".$Mnames." span{
				visibility: hidden;
			}

			#".$Mnames." li{
				padding: 4px 0px;
			}

		}

		</style>";

		$html = $cssnya . $divnya . $script;

		return $html;
	}

	function generateTree($parameter){
		$height = "100%";
		$width = "247";
		$fontsize = 11;
		$scripttambahan = "";
		$data = "";
		foreach ($parameter as $indx=>$value){
			${$indx}=$value;
		}
		if(isset($url)){
			$url = "url: '" . $url . "'";
		}else{
			$url = "localdata: data";
		}
		$script ="
		<script type=\"text/javascript\">
			$(document).ready(function () {
				" . $data ."
				var source =
	      {
	          datatype: 'json',
	          datafields: [
	              { name: 'id' },
                { name: 'icon' },	              
	              { name: 'parentid' },
	              { name: 'text' },
	              { name: 'nilai' }
	          ],
	          id: 'id',
	          async: false,
	          ". $url ."
	      };
	      var dataAdapter = new $.jqx.dataAdapter(source);
	      dataAdapter.dataBind();
	      var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
	      $('#" . $elementid. "').jqxTree({ source: records, height: '". $height. "', width: '".$width."'});
	      ";
		if(isset($expandAll)){
			if($expandAll){
				$script .= "$('#" . $elementid. "').jqxTree('expandAll');";
			}
		}
		if(isset($collapseAll)){
			if($collapseAll){
				$script .= "$('#" . $elementid. "').jqxTree('collapseAll');";
			}
		}		
		if(isset($select)){
			if($select){
				$script .="
					$('#" . $elementid. "').on('select', function (event) {
            var args = event.args;
            var item = $('#" . $elementid. "').jqxTree('getItem', args.element);                
            var id = args.element.id;
						var ip;
            var recursion = function (object) {
              for (var i = 0; i < object.length; i++) {
                if (id == object[i].id) {
                  ip = object[i].nilai;
                  break;
                } else if (object[i].items) {
                  recursion(object[i].items);
                };
              };
            };
            recursion(records);            
				";
				if($scripttambahan==""){
					$scripttambahan = "
		        var dropDownContent = '<div id=".str_replace("tree", "dpr", $elementid). " style=\"position: relative; margin-left: 3px; margin-top: 5px;\">' + item.label + '</div>';
		        $('#" . str_replace("tree", "div", $elementid). "').jqxDropDownButton('setContent', dropDownContent);
		        $('#" . str_replace("tree", "div", $elementid). "').jqxDropDownButton('close');
		        $('#" . str_replace("tree", "", $elementid). "').val(id);							
					";
				}
				$script .= $scripttambahan;
				$script .="});";
			}
		}
		$script .="
			});
		</script>
		";
		$script .= "
		<style>
		#" . $elementid. " li{
		    font-size:".$fontsize."px;
		}
		</style>
		";
		return $script;
	}
	function cetak($pass){
		$script = "";
    foreach ($pass as $param=>$value){
      ${$param}=$value;
    }		
		$scriptCetak = "
    <script>
      function jvCetak(tipe){
        var param = {};
        ". $parameter ."
        ". $script . "
        $.post('/".$controllerdata."',param,function(data){
          if(data=='0'){
            alert('Tidak ada data!');
            return;
          }else{
            userWidth = window.screen.width;userHeight = window.screen.height;
            openCenterWin('/".$controllerreport.", userWidth, userHeight, '', 'status=1,fullscreen=1,toolbar=0,scrollbars=1,menubar=1')
          }
        });
      }
      function openCenterWin(url, height, width, name, parms){
        $('#printanimasi').css('display','none');
        var left = Math.floor( (screen.width - width) / 2);
        var top = Math.floor( (screen.height - height) / 3);
        var winParms = 'top=' + top + ',left=' + left + ',height=' + height + ',width=' + width;
        if (parms) { winParms += ',' + parms; }
        var win = window.open(url, name, winParms);
        if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
        return ;
      }      
    </script>  		
		";
		return $scriptCetak;
	}
	function generateWindowjqx($arrParameter){
		$CI = get_instance();
		$theme = $CI->config->item('app_grids'); // grid theme, the value came from config.php
		$USR_THEMES = $CI->session->userdata("USR_THEMES");
		if($USR_THEMES!=""){
			$theme = $USR_THEMES;
		}		
		$CI->load->helper(array('form','html'));
		$overflow = "hidden";
		$loop = 1;
		$widths = "90%";
		$height = "90%";
		$isModal = "true";
		$autoOpen = "false";
		$autoClose = true;
		$animationType = "none";
		$showCloseButton = true;
		$content = "
		<style>
 
.container-fluid{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}
.row-fluid {height: 100%; display:table-cell; vertical-align: middle;}
.centering {
  float:none;
  margin:0 auto;
}
</style>
<div class=\"container-fluid\">
    <div class=\"row-fluid\">
        <div class=\"centering text-center\">
           <img src=\"" . base_url(IMAGES.'spinloader.gif') . "\">
        </div>
    </div>
</div>
		";
		$content = "";
		$loader = "<center><img src=\"" . base_url(IMAGES.'spinloader.gif') . "\"></center>";
		$heightwidth = "";
		$contentwidth = 1000;
		// $maxWidth = '100%';
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		if(!isset($maxWidth)){
			$maxWidth = $widths;
		}
		if(!isset($minWidth)){
			$minWidth = $maxWidth;
		}
// , 
// 	        	minWidth: '".$minWidth."',
// 	        	maxWidth: '".$maxWidth."'		
		if($height!="auto" && $widths!="auto"){
			$heightwidth = "
	        	,height: '" . $height . "', 
	        	width:'".$widths."'
			";
			$contentwidth = $widths-20;
		}else{
			$heightwidth = "
	        	,height: 'auto', 
	        	width:'auto'
			";			
		}
		if($isModal){
			$isModal = "isModal : true,";
		}
		$showclose = "";
		if(!$showCloseButton){
			$showclose = "showCloseButton : false,";
		}
		$windowscript = "
			<script>
	      $(document).ready(function(){
	        $('#jqw". $window . "').jqxWindow({
	        	theme : '".$theme."',
	        	position: 'center, center',
	        	" .$isModal. "
	        	autoOpen: ".$autoOpen.",
	        	maxWidth: '".$maxWidth."',
	        	minWidth: '".$minWidth."',
	        	" . $showclose ."
	        	animationType:'".$animationType."' 
	        	".$heightwidth."});";
		if($autoClose){
			$windowscript .= "$('#jqw". $window . "').on('close', function (event) { $('#jqw". $window . "').jqxWindow('setContent', '".$content."'); }); ";
		}
	  $windowscript .= "    });				
			</script>";
    // $windowresult = ($content!="" ? $windowscript : "" ) .  "<div id=\"jqw" . $window. "\">			
    $windowresult = $windowscript .  "<div id=\"jqw" . $window. "\">
          <div id=\"customWindowHeader\">
              <span id=\"captureContainer\" style=\"float: left\">".$title."</span>
          </div>
          <div id=\"customWindowContent\" style=\"overflow: ".$overflow."\">
              <div id=\"winContent\" style=\"margin: 10px;width:100%\">". $content . "</div>
          </div>
      </div>";
      return $windowresult;
	}
	function generatePopup($arrParameter){
		$CI = get_instance();
		$CI->load->helper('jqxgrid');
		$width = 380;
		$index = "CHK_IDENTS";
		$field = "txtUNIORG";
		$url ="";
		$gridname = 'jqxgrid';
		$autorowheight = false;
		$setdatanya = "";
		$scripoverride = "";
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		if($scripoverride!=""){
			$setdatanya = $scripoverride;
		}else{
			if(is_array($field)){
				foreach ($field as $key => $value) {
					$setdatanya .= "var pop".$key."=rowData.".$value.";$('#".$key ."').val(pop".$key.");";
				}
			}else{
				$setdatanya = "
			    var popINDEX = rowData.". $index ."
			    $('#".$field ."').val(popINDEX);
				";
			}			
		}
	
		$arrGrid = array('col'=>$col, 'url'=>$url, 'gridname'=> $gridname, 'pagermode'=>'simple','width'=>$width,'showToolbar'=>false, 'autorowheight'=>$autorowheight);
		if(isset($height)){
			$arrGrid = array_merge($arrGrid, array('height'=>$height));
		}
		
		if(isset($columnsheight)){
			$arrGrid = array_merge($arrGrid, array('columnsheight'=>$columnsheight));
		}
		$content = gGrid($arrGrid);
		$content .= "<center><div id=\"". $gridname. "\"></div></center>";
		$content .= "
		<style>
        #footer
        {
          position: absolute;
          bottom: 0px;
          height: 15px;
          width: 100%;
          border-top-width: 1px;
          border-top-style: solid;
          border-bottom: none;
        }		
		</style>
		<script>
		$('#". $gridname. "').on('rowselect', function (event) 
		{
		    var args = event.args;
		    var rowData = args.row;
		    ". $setdatanya."
        $('#". $windowname. "').jqxWindow('close');
		});
		</script>";

		return $content;
	}
	function scrThumbnail($arrParameter=null){
		$id = "thumbnailList1";
		$backgroundColor="#ccc";
		$imageDivClass = "dpic";
	  $thumbWidths = 120;
	  $thumbHeight = 100;

		if($arrParameter!=""){
			foreach ($arrParameter as $detail=>$valueAwal){
				${$detail} = $valueAwal;
			}			
		}
		$script = "
		<script>
			$(document).ready(function() {		
				$(\"#". $id. " img\").MyThumbnail({
				  thumbWidth:".$thumbWidths.",
				  thumbHeight:".$thumbHeight.",
				  backgroundColor:\"".$backgroundColor."\",
				  imageDivClass:\"".$imageDivClass."\"
				});	
			});
		</script>		
		";
		return $script;
	}
	function scrImages($arrParameter=null){
		$type = "single";
		if($arrParameter!=""){
			foreach ($arrParameter as $detail=>$valueAwal){
				${$detail} = $valueAwal;
			}			
		}
		$script = "
		<script>
			$(document).ready(function() {
				$('.".$class."').magnificPopup({";
		if($type=="single"){
			$script .= "
					type: 'image',
					closeOnContentClick: true,
					fixedContentPos: true,
					mainClass: 'mfp-no-margins mfp-with-zoom',
					image: {
						verticalFit: true
					}
			";			
		}else{
			$script .= " 
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return item.el.attr('title');
					}
				}			
			";
		}

		$script .="
			});
		});
		</script>		
		";
		return $script;
	}
	function scheduler($arrParameter=null){
		$CI = get_instance();
		$theme = $CI->config->item('app_theme'); // grid theme, the value came from config.php
		$USR_THEMES = $CI->session->userdata("USR_THEMES");
		if($USR_THEMES!=""){
			$theme = $USR_THEMES;
		}		
		// $theme = "metro";
		$url = "";
    $year = date('Y');        
    $month = date('m');
    $day = '01';
    $width = '100%';
    $height = '100%';
    $schedulename="scheduler";
    $editDialog = "editDialog: false,";
    $appointmentTooltips = "appointmentTooltips: false,";
    $enablehover = "enableHover: false,";
    $defaultview = "monthView";
    $optionview = "'monthView'";
    $scriptevents = "";
		if($arrParameter!=""){
			foreach ($arrParameter as $detail=>$valueAwal){
				${$detail} = $valueAwal;
			}			
		}
		if(is_array($optionview)){
			$option = "";
			$ro =false;
			for($x=0;$x<count($optionview);$x++){
				if($ro) $option .= ",";
				if(is_array($optionview[$x])){
					$option .= "{";
					$rcin = false;
					for ($i=0; $i < count($optionview[$x]); $i++) { 
						if($rcin) $option .= ",";
						if(strpos($optionview[$x][$i],":")==0){
							$option .= "type:'" . $optionview[$x][$i] ."'";		
						}else{
							$option .= $optionview[$x][$i];
						}
						$rcin = true;	
					}
					$option .= "}";
				}else{
					$option .= "'" . $optionview[$x] . "'";	
				}
				
				$ro =true;
			}
			$optionview = $option;
		}
		$dataFields = "";
		$rc = false;
		$ri = false;
		$include = "";
		foreach ($col as $key => $value) {
			if($rc) $dataFields .= ", ";
	  	$dataFields .= "{ ";
	  	$dataFields .= "name : '".$value['namanya']."'";
	  	$dataFields .= ", type : 'string'";
	  	if(isset($value['type'])){
	  			$dataFields .= ", type : '".$value['type']."'";
	  	}
	  	if(isset($value['format'])){
	  		$dataFields .= ", format : '".$value['format']."'";
	  	}
	  	if(isset($value['fromdate'])){
	  		$fromdate = $value['namanya'];
	  	}
	  	if(isset($value['todate'])){
	  		$todate = $value['namanya'];
	  	}
	  	if(isset($value['subject'])){
	  		$subject = $value['namanya'];
	  	}
	  	if(isset($value['include'])){
	  		if($value['include']){
	  			if($ri) $include .= ", ";
	  			if($value['namanya']=="calendar"){
	  				$include .= "resourceId : '".$value['namanya']."'";
	  			}else{
	  				$include .= $value['namanya'] . " : '".$value['namanya']."'";	
	  			}
	  			$ri=true;
	  		}
	  	}
	  	$dataFields .= "}";
	  	$rc = true;
	  }
	  $scriptsource = "
          var source =
          {
              dataType: 'json',
              dataFields: [".$dataFields."],
              id: '".$id."',
              url: '". $url . "'
          };
          var adapter = new $.jqx.dataAdapter(source);	  
	  ";
	  if(isset($events)){
	  	$scriptevents = "";
	  	foreach ($events as $keyevents => $valueevents) {
	  		$scriptevents .= "$('#".$schedulename."').on('".$keyevents."', function (event) {";
	  		$scriptevents .= $valueevents;
	  		$scriptevents .= "});";
	  	}
	  	$scriptevents .= "";
	  }
	  // 
    $script = "
    	<script type=\"text/javascript\" src=\"".base_url(JS."jqxwidgets/jqxscheduler.js"). "\"></script>
    	<script type=\"text/javascript\" src=\"".base_url(JS."jqxwidgets/jqxscheduler.api.js"). "\"></script>
      <script type='text/javascript'>
        $(document).ready(function () {
        	".$scriptsource."
          $('#".$schedulename."').jqxScheduler({
						theme : '" . $theme . "',
            date: new $.jqx.date(".$year.", ".$month.", ".$day."),
            width:  '".$width."',
            height: '".$height."',
            source: adapter,
       			localization: {
							firstDay: 1,
							days: {
								names: [\"Minggu\",\"Senin\",\"Selasa\",\"Rabu\",\"Kamis\",\"Jumat\",\"Sabtu\"],
								namesAbbr: [\"Mgu\",\"Sen\",\"Sel\",\"Rab\",\"Kam\",\"Jum\",\"Sab\"],
								namesShort: [\"Mg\",\"Sn\",\"Sl\",\"Rb\",\"Km\",\"Jm\",\"Sa\"]
							},
							months: {
								names: [\"Januari\",\"Februari\",\"Maret\",\"April\",\"Mei\",\"Juni\",\"Juli\",\"Agustus\",\"September\",\"Oktober\",\"November\",\"Desember\",\"\"],
								namesAbbr: [\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mei\",\"Jun\",\"Jul\",\"Ags\",\"Sep\",\"Okt\",\"Nov\",\"Des\",\"\"]
							},
            	monthViewString: \"Bulan\",
            	timelineMonthViewString: \"Timeline Bulan\"
       			},
            showLegend: true,
            " . $editDialog ."
            " . $appointmentTooltips . "
            " . $enablehover . "
            ready: function () {
           
            },

		        resources:
		        {
		            colorScheme: \"scheme05\",
		            dataField: \"calendar\",
		            source:  new $.jqx.dataAdapter(source)
		        },            
            appointmentDataFields:
            {
              from: '".$fromdate."',
              to: '".$todate."',
              id: '".$id."',
              subject: '".$subject."',
              ". $include . "
            },
            appointmentsMinHeight: 20,
            view: '".$defaultview."',
            views:
            [
                ".$optionview."
            ]
          });
					" . $scriptevents . "
        });
    </script>
    <div id='".$schedulename."' style='width:99%'></div>
    ";

    return $script;
	}
	function generateToolbar($arrParameter){
		$CI = get_instance();
		$theme = $CI->config->item('app_theme'); // grid theme, the value came from config.php
		$USR_THEMES = $CI->session->userdata("USR_THEMES");
		if($USR_THEMES!=""){
			$theme = $USR_THEMES;
		}		
		$arrCombo = array();
		$toolbarname = "toolbar";
		$name = "";
		$createToolbar = false;
		// $lebartoolbar = "100%";
		$lebartoolbar = "width:'100%',";
		$tinggitoolbar = "height: 35,";
		$width = "";
		$RTL = false;
		$kanan = "";
		if($arrParameter!=""){
			foreach ($arrParameter as $detail=>$valueAwal){
				${$detail} = $valueAwal;
			}			
		}
		if($toolbarname!="toolbar"){
			$name = str_replace("toolbar", "", $toolbarname);
		}
		
		if($RTL){
			$kanan = "rtl: true,";
		}

		$toggle = "'";
		$indexToolbar = 0;
		$endofCombo = 0;
		$srcOptions = "";
		$toolbarAdapter = "";
		$variable = "";
		$comboscript = "";
		if(isset($toolbarCombo)){
			if(is_array($toolbarCombo)){
				// if($indexToolbar>0){
				// 	$toggle .= " | "; 	
				// }
				
				$rt = false;
				foreach ($toolbarCombo as $key => $value) {
					if($rt) $toggle .=" ";
					$toggle .= "combobox";
					$toolbarValue = "";
					$toolbarEvents = "";
					$toolbarJson = "";
					$toolbarSource = "";
					$toolbarHeight = "";
					$toolbarIdents = $toolbarCombo[$key]['idents'];
					$toolbarWidths = $toolbarCombo[$key]['width'];
					$toolbarPlchdr = $toolbarCombo[$key]['placeHolder'];

					if(isset($toolbarCombo[$key]['height'])){
							$toolbarHeight = $toolbarCombo[$key]['height'];	
					}

					if(isset($toolbarCombo[$key]['variable'])){
						if($toolbarCombo[$key]['variable']){
							$variable .= "var " . $toolbarIdents . ", " . $toolbarIdents."Min;";	
						}
					}
					if(isset($toolbarCombo[$key]['events'])){
						$toolbarEvents = $toolbarCombo[$key]['events'];
					}
					if(isset($toolbarCombo[$key]['json'])){
						$toolbarJson = $toolbarCombo[$key]['json'];
					}
					if(isset($toolbarCombo[$key]['comboscript'])){
						$comboscript .= $toolbarCombo[$key]['comboscript'];
					}

					if(isset($toolbarCombo[$key]['value'])){
						$toolbarValue = $toolbarCombo[$key]['value'];
					}
					if(isset($toolbarCombo[$key]['source'])){
						$toolbarSource = $toolbarCombo[$key]['source'];
					}
					if(isset($toolbarCombo[$key]['adapter'])){
						$toolbarAdapter .= $toolbarCombo[$key]['adapter'];
					}
					$arrCombo = array_merge($arrCombo, 
						array(
							array(
								'idents'=>$toolbarIdents,
								'widthcombo'=>$toolbarWidths,
								'index'=>$indexToolbar,
								'source'=> "source".$key,
								'events'=> $toolbarEvents,
								'placeHolder'=>$toolbarPlchdr,
								'value'=>$toolbarValue,
								'json'=>$toolbarJson,
								'heightCombo' => $toolbarHeight
								)
							)
						);
					
					$srcOptions .= "
var source".$key." = [
";
					$rcmb = false;
					if(is_array($toolbarSource)){
						foreach ( $toolbarSource as $keysrc => $valuesrc) {
							if($rcmb) $srcOptions .= ",";
								$srcOptions .= "{ value : '".$keysrc."', text : '".$valuesrc."'}";
							$rcmb = true;
						}
					}
$srcOptions .= "
];";			
					$rt = true;
					$indexToolbar++;
					$endofCombo =$indexToolbar;
				}
			}
		}
		$rt=false;
		if(count($arrButton)>0){
			if($indexToolbar>0){
				$toggle .= " | "; 	
			}
		}

		for($e=0;$e<count($arrButton);$e++){
			if($rt) $toggle .=" ";
			$toggle .= "custom"; 
			$indexToolbar++;
			$rt = true;
		}		
			
		$styleToolbar = "
    <style type=\"text/css\">
        .buttonIcon
        {
            margin: -5px 0 0 -3px;
            width: 16px;
            height: 17px;
        }
    </style>
		";
    $toggle .= "'";
		$buttonToolbar = $srcOptions . $toolbarAdapter . $variable . "
		$(\"#" . $toolbarname ."\").jqxToolBar({
			theme : '" . $theme . "',
			".$lebartoolbar." 
			".$tinggitoolbar."
			tools: ". $toggle .",
			" . $kanan . "
			initTools: function (type, index, tool, menuToolIninitialization) {
        switch (index) {
    ";
    $buttontop = "margin-top:5px";
    $loop = 1;
    foreach ($arrButton as $keybutton => $valuebutton) {
    	$idx = $keybutton+$endofCombo;
    	$idx = substr("0000" . $idx, -4);//$keybutton+$endofCombo;
    	$buttidx = "butt".$name . $idx;
    	// $text = $valuebutton['text']!="" ? "tool.text(\"".$valuebutton['text']."\")" : "";
    	$text = $valuebutton['text']!="" ? $valuebutton['text'] : "";
    	$image = $valuebutton['image'];
    	$events = $valuebutton['events']!="" ? "tool.on('click', function (event) { " . $valuebutton['events'] ."});" : "";
    	$theme = $valuebutton['theme']!="" ? "template: '" . $valuebutton['theme'] ."'" : "template: 'info'";
    	$width = $valuebutton['width']!="" ? ", width: " . $valuebutton['width'] : "";
			// $buttemp .= "

			if($text!=""){
				$button = "var " . $buttidx ."= $(\"<div id='".$buttidx."' style='float: left;'>" . $image . "<span style='margin-left: 4px; position: relative; top: -2px;'>" . $text ."</span></div>\");";	
			}else{
				$button = "var " . $buttidx ."= $(\"<div style='float: left;'><span style='margin-left: 4px; '>" . $image ."</span></div>\");";
			}

$button .= "tool.append(".$buttidx.");
".$buttidx.".jqxButton({".$theme.$width."});
";			
    	$buttonToolbar .= "
case " . $idx .":
" . $button ."
" . $events;	
$buttonToolbar .= "
break;";
			$loop++;		
    }

		$eventsCombo = "";
		if(isset($arrCombo)){
			if(count($arrCombo)>0){
				foreach ($arrCombo as $keyCombo => $valueCombo) {
					$kindss = substr($valueCombo['idents'],0,3);
					$jqxcombox = "";
					$eventsCombo = "";
					$widthCombo = isset($valueCombo['widthcombo']) ? $valueCombo['widthcombo']  : "150";
					$heightCombo = isset($valueCombo['heightcombo']) ? $valueCombo['heightcombo']  : "23px";
					$placeHolder = $valueCombo['placeHolder']!="" ? ", placeHolder: '" .$valueCombo['placeHolder'] ."'" : "";
					if(isset($valueCombo['events'])){
						if($valueCombo['events']!=""){
							// $keysevents = array_keys(array_keys($valueCombo['events']));
							if(is_array($valueCombo['events'])){
								// debug_array($valueCombo['events']);
								$eventsCombo = "";
								foreach ($valueCombo['events'] as $kEvents => $vEvents) {
									if($kEvents!="none"){
										$eventsCombo .= "tool.on('".$kEvents."', function (event) { " . $vEvents . "; });";
									}else{
										$eventsCombo .= $vEvents;
									}
									
								}

								// $keysevents = (array_keys($valueCombo['events']));
								// $eventsCombo = $valueCombo['events']!="" ? ("tool.on('".$keysevents[0]."', function (event) { " . $valueCombo['events'][$keysevents[0]]. "; });") : "";	
							}else{
								$eventsCombo = $valueCombo['events'];
							}
						}
					}
					switch ($kindss) {
						case "txt":
							$jqxcombo = "jqxComboBox({ width: ".$widthCombo.", valueMember: 'value' " . $placeHolder ."});";		
							break;
						case "cmb":
							if(is_array($valueCombo['json'])){
								$jsonvalue = $valueCombo['json'];	
								foreach ($valueCombo['json'] as $param=>$meter){
									${$param} = $meter;
								}								
								$jqxcombo = "jqxComboBox({ width: ".$widthCombo.",height:'".$heightCombo."', source: ".$source.", animationType: 'none', displayMember: '".$displayMember."', valueMember: '".$valueMember."' " . $placeHolder ."});";		
							}else{
								$jqxcombo = "jqxComboBox({ width: ".$widthCombo.",height:'".$heightCombo."', source: ".$valueCombo['source'].",  animationType: 'none', displayMember: 'text', valueMember: 'value' " . $placeHolder ."});";			
							}
							// 
							
							if(isset($valueCombo['value'])){
								$jqxcombox = "tool.jqxComboBox('selectItem','".$valueCombo['value']."');";	
							}
							break;
					}

			    $buttonToolbar .= "
			case " . $valueCombo['index'] .":
			tool." . $jqxcombo .";
			".$jqxcombox."
			tool.attr('id','".$valueCombo['idents']."');
			" . $eventsCombo . "
			break;
			";
				}	
			}	
		}
		$buttonToolbar .= "
        }
			}
		});" . $comboscript ."";
		if($toggle==="''"){
			$createToolbar = false;	
			$buttonToolbar = "";
		}

		if($createToolbar){
			$buttonToolbar = "<script type=\"text/javascript\">
      $(document).ready(function () {". $buttonToolbar . "});</script>";	
			$buttonToolbar .= "<center><div id=\"" . $toolbarname . "\" style='width:".$width.";margin-bottom:5px'></div></center>";
		}
		return $buttonToolbar;		
	}

	function code128A($char){
		if(ord($char) == 32){
			$code128A = "00";
		}else{
			$tempcode = (ord($char)) - 32;
			$code128A = $tempcode;
		}
		return $code128A;
	}
	function debug_array($array, $stop=true){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($stop){
			die();	
		}
	}	

	function generateNavjqx($arrParameter){
		$CI = get_instance();
		$CI->load->helper(array('form','html'));
		$theme = $CI->config->item('app_grids'); // grid theme, the value came from config.php
		$USR_THEMES = $CI->session->userdata("USR_THEMES");
		if($USR_THEMES!=""){
			$theme = $USR_THEMES;
		}		
		$atas = "";
		$isi = "";
		$save = "";
		$loop = 1;
		$tabwidth = "100%";
		$tabheight = "100%";
		$width = "800";
		$margintop = "25px";
		$style = "";
		$fontstyle ="";
		$expandmode = "singleFitHeight";
		$animation = "none";
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		$content ="
			<script type=\"text/javascript\" src=\"".base_url(JS."jqxwidgets/jqxnavigationbar.js"). "\"></script>
			<script>
					$(document).ready(function(){
						$('#nav" . $id . "').on('created', function () { 
							$('#loading').hide();
						}); 

						$('#nav" . $id . "').jqxNavigationBar({ theme:'" . $theme . "', width:'" . $tabwidth . "', height: '" . $tabheight . "', expandMode: '".$expandmode."', animationType: '".$animation."' });

		";
		$content .= "
					});
			</script>";
		$content .= "<center><div id='nav". $id ."' style='width:100%'>";
		foreach($arrTabs as $key=>$nilai){
			if(strpos($key,"^")==0){
				$content .= "<div " . $style . ">" . $key . "</div>";
			}else{
				$gambar = "";
				$fawesom = "";
				$arrKey = explode("^", $key);

				$image = $arrKey[0];
				$fayesno = substr($image, 0,3)=="fa " ? 'true' : 'false';
				$texts = $arrKey[1];

				if($fayesno=="false"){
					$gambar = "<img style='float: left;' width='25' height='25' src='/resources/img/". $image."' alt='' class='small-image'/>";	
				}else{
					$arrImage = explode(" ", $image);
					$gambar = "<i class=\"fa " . $arrImage[1] . "\" style='margin-left:10px'></i>&nbsp;&nbsp;";
				}

				$content .= "<div " . $style . ">".$gambar . $texts."</div>";
				// $atas .= $gambar . "<div style=\"float: left; margin-left: 6px; text-align: center; vertical-align:middle; font-size: 13px;\">" . $fawesom . "".$texts."</div>";
			}
			foreach($nilai as $keyval => $value){
				if($keyval=="data"){
					$content .= "<div id=\"content" . $id . $loop . "\" style='" . $fontstyle . " height:100%'><div class=row style='width:100%;height:".$margintop."'></div>" .  $value. "</div>";	
				}
			}

			$loop++;
		}
		$content .= "</div></center>";
		return $content;
	}
	function getAuthuser(){
		$CI = get_instance();
		$url1 = $CI->uri->segment(2);
		$url2 = $CI->uri->segment(3);
		$url = $url1 . "/" . $url2;
		$otorisasi = $CI->common->otorisasi($url);
		return $otorisasi;
	}
	function generateDivjqx($arrParameter){
		$atas = "";
		$isi = "";
		$save = "";
		$loop = 1;
		$tabwidth = "100%";
		$tabheight = "100%";
		$width = "800";
		$margintop = "25px";
		$style = "";
		$fontstyle ="";
		$animation = "none";
		// debug_array($arrParameter);
		foreach ($arrParameter as $detail=>$valueAwal){
			${$detail} = $valueAwal;
		}
		$content ="";
		$dimensi = "height:".$tabheight.",width:".$tabwidth.";";
		foreach($arrTabs as $key=>$nilai){
			if(strpos($key,"^")==0){
				$content .= "<div " . $style . " id='" . $key ."'>";
			}else{
				$arrKey = explode("^", $key);

				$idents = $arrKey[0];
				if(isset($arrKey[1])){
					$style = $dimensi . $arrKey[1];	
				}

				$content .= "<div id='".$idents."' style='".$style."'>";
			}
			// debug_array($nilai);
			foreach($nilai as $keyval => $value){
				if($keyval=="data"){
					// $content .= "<div id=\"content" . $id . $loop . "\" style='" . $fontstyle . " height:100%'><div class=row style='width:100%;height:".$margintop."'></div>" .  $value. "</div>";	
					$content .= $value;	
				}
			}
			$content .="</div>";
			$loop++;
		}
		$content .= "</div></center>";
		return $content;
	}
	function windowSize($type=null){
		$script = "<script></script>";
		echo $script;
	}
 	function showReport($types,$opt,$rpt){
  	$ort = "P";
  	$descre = $types;
  	$string = read_file("temp/$rpt.rpcx");
  	unlink("temp/$rpt.rpcx");
  	switch ($opt) {
  		case 1:
  	  	echo $string;
  			break;
  		case 2:
	  	  // Fungsi header dengan mengirimkan raw data excel
	  	  header("Content-type: application/vnd-ms-excel");    
	  	  // Mendefinisikan nama file ekspor "Laporan-HRD.xls"
	  	  header("Content-Disposition: attachment; filename=Laporan-$descre.xls");
	  	  header("Expires: 0");
	  	  header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	  	  header("Pragma: public");
	  	  echo $string;
  			break;
  		default:
  			pdf_create($string,$ort,"Laporan $descre.pdf");
  			break;
  	}
	}