<?php
function gDatatable($pass){
  $CI = get_instance();
  // $CI->common->debug_array($pass);
  $table = null;
  // ======= Function for CRUD
  $jvAdd = "";
  $jvEdit = "";
  $jvView = "";
  $jvDelete = "";
  $scriptadd = "";
  $pinned = "";
  $width = "95%";
  $script = "";
  // ===================================
  // =================================== for script

	$jvscript = "";
	$grid = "grid";

  // =================================== grid display related
$gridcenter = true;
$bisaedit = false;
$awalCenter = "";
$akhrCenter = "";
$buttonToolbar = "";
$creategrid = true;
$filterable = true;
$groupable = "";
$groupnya = "";
$expandgroup = true;
$expandgroupnya = "";
$buttontop = "";
$toolbarcontainer = "";
$toolbarheight = "";
$fontsize = "";
$headerfontsize = "";
$autorowheight=""; // if set then row height will depends on content
$showToolbar = true; // if false toolbar will not show
$autoshowfiltericon = false; //if false then filter icon will not show, user have to do mouse over on grid header
$filtermode = ""; // you can set this to excel so filter dialog will be more like excel type
$rowsheight = ""; // if set rowheight will follow this variable value
$pageable = true; // will set grid's paging, if false then grid will use virtual scrolling
$editable = ""; // whether grid editable or not
$pagesize = ""; // pagesize
$sumber = 'server'; // source : data from server or from raw json 
$scrollmode = "scrollmode : 'logical',";
$scrollmode = "";
$theme = $CI->config->item('app_grids'); // grid theme, the value came from config.php
$lebar = ""; // grid width
$height = "450"; // gridheight
$colgroup = array(); // for colspan in grid header
$columnsheight = ""; // grid header height
$pagermode = 'default';
// =================================== treegrid
$hirarki = ""; // hirarchy for treegrid
$autoexpand = true;
$expand = "";
$modul = ""; // module name, function will need this variable
$folder = $CI->router->fetch_directory();

  // =================================== database related, this is to get value
	$DESCRE_COLUMN = "DESCRE";
	$IDENTS_COLUMN = "IDENTS";

	// =================================== authorization check
	$check = true;

  $expand = "";
  
  $columngroupdesc = "";  
  
	$fromdb = false;

	$jstinggi = "";
	$buttong = "";
	$cellclassfunc = "";
	$cellclassfunc_content = "";
	$cellcss = "";
	$rc = false;
	
	$scripteditor = "";

  foreach ($pass as $param=>$value){
    ${$param}=$value;
  }

  if(!isset($url)){
  	$url = "/" . $folder . "nosj/get".ucfirst($modul)."_list";
  }else{
  	if($url==""){
  		$url = "/" . $folder . "nosj/get".ucfirst($modul)."_list";	
  	}
  }
  if($pagesize==""){
  	$pagesize = "pageSize : 13, ";	
  }else{
  	$pagesize = "pageSize : " . $pagesize . ", ";
  }
	if(isset($width)){
		$lebar = "width:'".$width . "',";
	}
	if(isset($height) && $height!=""){
		$height = "height:'".$height."',";
	}
	
	if($rowsheight!=""){
		$rowsheight = "rowsheight: '" . $rowsheight . "',";
	}	
	$script .="
		<script type=\"text/javascript\">
      $(document).ready(function () {
			var url = \"" . $url . "\";
      var theme = '" . $theme . "';
    ";

	$adapter = "
			var source =
				{
					type:\"POST\",
					datatype: \"json\",
					datafields: [
						";
	// ===================================================================================
	// == kalau tidak ada definisi kolom, maka col akan dibentuk dari json T_MAS_TABLES ==
	// ===================================================================================
	// 
	if(!isset($col)){
		// $fielddetail = $CI->crud->getTableInformation($table);
		$loop =1;
		$col="";
		
		foreach($fielddetail->result() as $key=>$value){
			$fieldname = $value->Field;
			$arrComment = $CI->common->extractjson($table, $fieldname);
			if($arrComment!=""){
				$gs="";
				$lao ="1";
				// echo $arrComment;
				foreach($arrComment as $key=>$value){
					if(!is_array($value)){
						${$key}=$value;
					}else{
						//print_r($value);
						if($key=="grid"){
							foreach($value as $keyd=>$valued){
								foreach($valued as $keyd=>$valuede){
									${$keyd} = $valuede;
								}
							}
						}
					}
				}
				/*
				gs : grid show
				gh : grid hidden
				gt : grid sort
				gc : grid search (cari)
				gw : grid width
				gu : grid urutan
				*/
				if($gs){
					$col = array('lsturut'=>$loop, 'namanya'=>$fieldname, 'label'=>$fd);
					
					if($gh==true){
						$col = array_merge($col, array('ah'=>$gh));
					}
					if($gt==false){
						$col = array_merge($col, array('at'=>$gt));
					}
					
					if($gc!=""){
						$col = array_merge($col, array('ac'=>$gc));
					}
					if($gw!=""){
						$col = array_merge($col, array('aw'=>$gw));
					}
					if($gu!=""){
						$col = array_merge($col, array('au'=>$gu));
					}
					$column[] = $col;
				}
			}
			$loop++;
		}
		// die();
		$fromdb = true;
		$col = $column;
	}
	// ======================================================================================
	// == looping kolom ($col) (didapat dari parameter atau database di proses sebelumnya) ==
	// ======================================================================================
	$colDetail = "";
	$loop=1;
	$urutan = array();		 
	foreach ($col as $arrUrut) {
		$urutan[] = $arrUrut['lsturut'];
	}
	array_multisort($urutan, SORT_ASC, $col);

	if($cellclassfunc_content!=""){
		$cellclassfunc = "
			var cellclass = function (row, columnfield, value, rowData) {
				". $cellclassfunc_content . "
	    }
		";
		if($cellcss==""){
			$cellcss = "
			<style>
	        .red {
	            color: black\9;
	            background-color: #e83636\9;
	        }	
	        .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
	            color: black;
	            background-color: #e83636;
	        }        	
			</style>
			";		
		}
	}
	$genscriptcreate = true; 
	$genscriptedit = true;

	foreach($col as $key=>$val){
		//deklarasi awal
		$ah="";
		$aw="";
		$at="";
		$ac="";
		$aa="";
		$align = "";
		$hidden ="";
		$type="";
		
		if($rc) {
			$adapter .= ",";
			$colDetail .= ",";
		}
		foreach($val as $val1=>$val2){
			${$val1}=$val2;

			if($loop==1){
				if($val1=="namanya"){
					$IDENTS_COLUMN = $val2;	
				}
			}
			if($loop==2){
				if($val1=="namanya"){
					$DESCRE_COLUMN = $val2;
				}
			}		
		}	
		
		if($fromdb){
			$fielddetail = $CI->crud->getTableInformation($table,null,$namanya,null,2);
			if($fielddetail){
				$arrComment = $CI->common->extractjson($table, $fielddetail->Field);
				if($arrComment!="x"){
					foreach($arrComment as $key=>$value){
						if(!is_array($value)){
							${$key}=$value;
						}else{
							foreach($value as $valued){
								foreach($valued as $keyd=>$valuede){
									${$keyd} = $valuede;
								}
							}
						}
					}					
				}
			}			
		}

		$adaptertype="";
		$filtertype="";
		if(isset($adtype)){
			if($adtype != ""){
				$adaptertype = ", type : '".$adtype."'";
				if($adtype=="date"){
					$filtertype = ", filtertype : 'date'";	
				}
			}
			unset($adtype);
		}
		//script pembentuk jqx adapter (sumber data)
		$adapter .= "{ name: '" . $namanya . "',datafield:'" . $namanya . "'".$adaptertype."}";
		if(isset($label)){
			$fd = $label;
		}
		$prop = "";
		//hidden
		if(isset($gh) && $ah==""){
			if($gh){
				$prop .= ", hidden: true" ;	
			}
			unset($gh);
		}else{
			if($ah){
				$prop .= ", hidden: true";
			}
			unset($ah);
		}
		//lebar kolom
		if(isset($gw) && $aw==""){
			$prop .= ", width: '" . $gw . "'";
		}else{
			if($aw!=""){
				$prop .= ", width: '" . $aw . "'";	
			}
		}
		//lebar kolom
		if(isset($ga) && $aa==""){
			$prop .= ", cellsalign: '" . $ga . "'";
			unset($ga);
		}else{
			if($aa!=""){
				$prop .= ", cellsalign: '" . $aa . "'";	
			}
		}		
		//sortable
		if(isset($gt) && $at==""){
			if(!$gt){
				$prop .= ", sortable: false" ;
			}
		}else{
			if($at=="n"){
				$prop .= ", sortable: false";
			}else{
				$prop .= ", sortable: true";
			}
		}
		// $prop .= ", sortable: true";
		//filterable
		if($ac=="" || $ac==false){
			$ac=="s";
		}
		if(isset($gc) && $ac==""){
			if(!$gc){
				$prop .= ", filterable: false" ;
			}
			unset($gc);
		}else{
			// echo $ac;/
			if($ac=='false'){
				$prop .= ", filterable: false";
			}
		}
		if(isset($cf)){
			$prop .= ", cellsformat: '".$cf."'" ;
			unset($cf);
		}		
		if($bisaedit){
			if(isset($ct)){///tipe cell edit
				unset($createeditor);
				if(!isset($createeditor)){
					$prop .= ", columntype: '".$ct."', editable:true," ;
				}
				unset($ct);
			}
			if(isset($ce)){///bisa edit pa gak
				$prop .= ", editable: '" . $ce . "'";
				unset($ce);
			}else{
				$prop .= ", editable:false" ;
			}
		}

		if(isset($cv)){///tipe cell edit
			$prop .= ", validation: function(cell,value){
				".$cv."
			}
			" ;
			unset($cv);
		}		

		// kalau image tidak bisa sort/filter
		if($type=="image"){
			$prop .= ", sortable: false, filterable: false";
		}
		if(!isset($fd)){
			$fd = "Judul";
		}
		$columngroup = "";
		//script pembentuk jqx grid
		if(isset($group)){
			$columngroup = ",columnGroup:'" . $group . "'";
			$colgroup = array_merge($colgroup, array($group));
			unset($group);
		}
		$cellclass="";
		if(isset($cellclassname)){
			if($cellclassname==true){
				$cellclass = ", cellclassname:cellclass";	
			}
			$cellclassname = false;
		}
		$propcreate = "";
		if(isset($createeditor)){
			$propcreate = ", columntype: 'custom', createeditor:".$createeditor;
			if($genscriptcreate){
				$scripteditor .= "
					var " . $createeditor . " = function(row, cellValue, editor, cellText, width, height)
					{
				" . $scriptcreateeditor . "
					}
				";
				$genscriptcreate = false;
			}
			unset($createeditor);
		}
		if(isset($geteditorvalue)){
			if(isset($geteditorvalue)){
				$propcreate .= ", geteditorvalue:".$geteditorvalue;
				if($genscriptedit){
					$scripteditor .= "
						var " . $geteditorvalue . " = function (rowID, cellValue, editor)
						{
					" . $scriptediteditor . "
						}
					";
					$genscriptcreate = false;
				}				
			}
			unset($geteditorvalue);
		}
		if(isset($cellcontent)){
			$cellcontent = ', cellsrenderer:' .$cellcontent;
		}else{
			$cellcontent ="";
		}

		if(isset($cellpinned)){
			if($cellpinned){
				$pinned = ', pinned:true';	
			}
			unset($cellpinned);
		}else{
			$pinned ="";
		}		
		$colDetail .= "{ text: '". $fd . "' " . $columngroup . ", dataField: '". $namanya . "'" . $prop . $cellclass ."" . $propcreate . "" . $cellcontent . "" . $pinned.$filtertype ."}";
		unset($cellcontent);
		
		$rc=true;
		$loop++;	
	}
	// =======================================================
	// == untuk colspan atas menggunakan parameter colgroup ==
	// =======================================================
  if(count($colgroup)>0){
  	$colgroup = array_unique($colgroup);
  	$columngroupdesc = ",columnGroups: [";
  	$rc = false;
		foreach ($colgroup as $key => $valuegroup) {
			if($rc) $columngroupdesc .=",";
			$columngroupdesc .= "{ text: '". $valuegroup . "', name: '". $valuegroup . "', 'align':'center'}";
			$rc=true;
		}
		$columngroupdesc .= "]";
  }
  if(isset($idCol)){
  	$IDENTS_COLUMN = $idCol;
  }

	$tipegrid = "jqxDataTable";
	$functionexpand = "";

	if($pageable == true){
		$pageable = "pageable: true,";
	}else{
		$pagesize = "pageSize : 50, ";
	}
	if($toolbarheight!=""){
		$toolbarheight = "toolbarHeight : '" . $toolbarheight . "px',";
	}
	if($filterable){
		$filterable = "filterable: true,";	
	}
	if($filtermode!=''){
		$filtermode = "filterable:true, filterMode: '".$filtermode."',";		
	}	
	$selectrow = "
		var selectedrowindex = $(\"#" . $gridname ."\").".$tipegrid."('getselectedrowindex');
		var id = $(\"#" . $gridname . "\").".$tipegrid."('getrowid', selectedrowindex);
		// var id = $(\"#" . $gridname . "\").".$tipegrid."('getcellvalue', row, '".$IDENTS_COLUMN."');
		// alert(row);
		// return false;
		";
	$idrow = "";
	if(!isset($dscrow)){
		$dscrow = "var descre = $(\"#" . $gridname . "\").".$tipegrid."('getcellvalue', selectedrowindex,'".$DESCRE_COLUMN."');";	
	}
	

	// pembuatan toolbar
	$lebartoolbar = $lebar;
	$tinggitoolbar = "height: 35,";

	if(isset($button) && $showToolbar==true){
		$showToolbar = false;
		$arrButton = array();
		$indexToolbar = 0;
		if($button=="standar"){
			$url = uri_string();
			$otorisasi = $CI->common->otorisasi($url, $check);
			$oADD = strpos("N".$otorisasi,"A");
			$oEDT = strpos("N".$otorisasi,"E");
			$oDEL = strpos("N".$otorisasi,"D");
			$oVIW = strpos("N".$otorisasi,"V");
			if($oADD>0){
				$arrButton = array_merge($arrButton, 
					array(
						$indexToolbar=>array(
							'text'=>'Tambah', 
							'image'=>"<i style='position: relative; top: -2px' class='fa fa-plus-circle'></i>",
							'events'=>"jvAdd()",
							'theme'=>'info',
							'width'=>70
							)
						)
					);

				if($jvAdd==""){
					if(isset($bisaedit)){
						if($bisaedit){
							$jvAdd = "
							function jvAdd(){
								var commit = $(\"#" . $gridname . "\").jqxGrid('addrow', null, {})	;
							}
							";
						}
						
					}else{

					}
				  $jvAdd = "
							function jvAdd(){
								self.location.replace('/add/" . $modul . "');
							}
					";
				}
				$indexToolbar++;
			}
			if($oEDT>0){
				$arrButton = array_merge($arrButton, 
					array(
						$indexToolbar=>array(
							'text'=>'Ubah', 
							'image'=>"<i style='position: relative; top: -2px' class='fa fa-pencil-square'></i>",
							'events'=>"jvEdit()",
							'theme'=>'success',
							'width'=>70
							)
						)
					);

				if($jvEdit==""){
					$jvEdit = "
						function jvEdit(){
							" . $selectrow . "
							if(id=='' || id==null){
								alert('Pilih Data!');	
							}else{
								" . $idrow . "
								self.location.replace('/edit/".$modul."/'+id);
							}
						}";
				}				
				$indexToolbar++;
			}
			if($oDEL>0){				
				$arrButton = array_merge($arrButton, 
					array(
						$indexToolbar=>array(
							'text'=>'Hapus', 
							'image'=>"<i style='position: relative; top: -2px' class='fa fa-times-circle'></i>",
							'events'=>"jvDelete()",
							'theme'=>'danger',
							'width'=>70
							)
						)
					);

				if($jvDelete==""){
					$expandit = "";
				  $jvDelete = "
						function jvDelete(){
							" . $selectrow . "
							if(id==null){
								alert('Pilih Data');	
							}else{
								" . $idrow . "
								" . $dscrow . "
			          if(confirm('Hapus ' + descre + '?'))
			          {
			            var prm = {};
			            prm['idents'] = id;
			            $.post('/delete/". $modul . "',prm,function(rebound){
			              if(rebound){
			              	var clearFilters = false;
			              	alert(descre + ' ' + rebound + '!');
											$('#" . $gridname  . "').".$tipegrid."('clearfilters');
			                $('#" . $gridname  . "').".$tipegrid."('updateBoundData');
			                " . $expandit . "
			              }
			            });
			          }						
							}
						}

						";
												// " . $functionexpand . " -> untuk expandall, yg lama tidak support
				}				
				$indexToolbar++;
			}
			if($oVIW>0){
				$arrButton = array_merge($arrButton, 
					array(
						$indexToolbar=>array(
							'text'=>'Lihat', 
							'image'=>"<i style='position: relative; top: -2px' class='fa fa-eye'></i>",
							'events'=>"jvView()",
							'theme'=>'inverse',
							'width'=>70
							)
						)
					);
				if($jvView==""){
					$jvView = "
						function jvView(){
							" . $selectrow . "
							if(id=='' || id==null){
								alert('Pilih Data!');	
							}else{
								" . $idrow . "
								self.location.replace('/view/".$modul."/'+id);
							}
						}";
				}				
				$indexToolbar++;
			}
		}else{
			$buttemp = "";
			$container = "";
			$jqxbutton ="";
			$jqxscript = "";
			if(is_array($button)){
				foreach($button as $keyy=>$butval){
					$ident = $butval[0];				
					$image = "";
					$theme = "";
					$widthbutton = "";
					$events = "";
					if(isset($butval[1])){
						$image = $butval[1];
						//==================== check font-awesome ====================
						if(strpos("A".$image,"fa-")>0){
							$imgbutton = "<i style='position: relative; top: -2px;left:4px' class='fa " . $image . "'></i>&nbsp;";
						}else{
							$imgbutton = "<img style='position: relative; margin-top: -4px;width:15px;' src='/resources/img/". $image ."'/>";
						}
					}
					//============================================================
					$events = $butval[2];
					//==================== check theme ====================
					if(isset($butval[3])){
						if($butval[3]!=""){
							$theme = $butval[3];	
						}
					}
					//==================== check width ====================
					if(isset($butval[4])){
						$widthbutton = $butval[4];
					}
					$arrButton = array_merge($arrButton, 
						array(
							$indexToolbar=>array(
								'text'=>$keyy, 
								'image'=>$imgbutton,
								'events'=>$events,
								'theme'=>$theme,
								'width'=>$widthbutton
								)
							)
						)
						;
					$indexToolbar++;
				}
			}
		}
		if(isset($buttonother)){
			if(is_array($buttonother)){
				foreach($buttonother as $keyother=>$valother){
					$ident = $valother[0];				
					$image = "";
					$theme = "";
					$widthbutton = "";
					$events = "";
					if(isset($valother[1])){
						$image = $valother[1];
						//==================== check font-awesome ====================
						if(strpos("A".$image,"fa-")>0){
							$imgbutton = "<i style='position: relative; top: -2px' class='fa " . $image . "'></i>&nbsp;";
						}else{
							$imgbutton = "<img style='position: relative; margin-top: -4px;width:15px;' src='/resources/img/". $image ."'/>";
						}
					}
					//============================================================
					$events = $valother[2];
					//==================== check theme ====================
					if(isset($valother[3])){
						if($valother[3]!=""){
							$theme = $valother[3];	
						}
					}
					//==================== check width ====================
					if(isset($valother[4])){
						$widthbutton = $valother[4];
					}
					if(strpos("N".$keyother,"notext")>0){
						$keyother ="";
					}
					$arrButton = array_merge($arrButton, 
						array(
							$indexToolbar=>array(
								'text'=>$keyother, 
								'image'=>$imgbutton,
								'events'=>$events,
								'theme'=>$theme,
								'width'=>$widthbutton
								)
							)
						)
						;
					$indexToolbar++;
				}
			}			
		}

		if(isset($arrButton) || isset($toolbarCombo)){
			$CI->load->helper('ginput');
			$arrToolbar = array('toolbarname'=>"toolbar" . $gridname, 'lebartoolbar'=>$lebartoolbar, 'tinggitoolbar'=>$tinggitoolbar);
			if(isset($arrButton)){
				if(is_array($arrButton)){
					$arrToolbar = array_merge($arrToolbar, array('arrButton'=>$arrButton));
				}				
			}
			if(isset($toolbarCombo)){
				if(is_array($toolbarCombo)){
					$arrToolbar = array_merge($arrToolbar, array('toolbarCombo'=>$toolbarCombo));
				}				
			}
			$buttonToolbar = generateToolbar($arrToolbar);
		}
	}

	if(isset($showToolbar)){
		if($showToolbar==true){
			$showToolbar = "showToolbar: true,";
		}else{
			$showToolbar = "";
		}
	}else{
		$showToolbar = "showToolbar: true,";	
	}
	if($autorowheight!=""){
		$autorowheight = "autoRowHeight: true, ";
	}
	if($columnsheight!=""){
		$columnsheight = "columnsHeight : '" . $columnsheight . "',";
	}
	$detailAdd = "";
	$adapterAdd = "";

	if($pagermode!="default"){
		$pagermode = "pagermode: '".$pagermode."',";
	}else{
		$pagermode = "";
	}
	if(isset($bisaedit)){
		if($bisaedit){
			if(isset($editmode)){
				$editmode = $editmode;
			}else{
				$editmode = 'selectedrow';
			}			

			$editable = "editable: true,
					        selectionMode: 'singlerow',
					        editmode: '".$editmode."',
									//editmode: 'click',
									// editmode: 'selectedrow',
									// showeverpresentrow: true,
									// everpresentrowposition: 'top',
					        ";
		}


		// unset($bisaedit);
	}	
	// $detailAdd = "virtualmode: true,";
	if(isset($sumber)){
		if($sumber=="server"){
			if(isset($bisaedit)){
				if($bisaedit){
					$detailAdd = "";
				}
			}
			$adapterAdd = "
					filter: function()
					{
						// update the grid and send a request to the server.
						$(\"#" . $gridname . "\").jqxGrid('updatebounddata', 'filter');
					},
					sort: function()
					{
						// update the grid and send a request to the server.
						$(\"#" . $gridname . "\").jqxGrid('updatebounddata', 'sort');
					},					
					root: 'Rows',
					beforeprocessing: function(data)
					{		
						if (data != null)
						{
							source.totalrecords = data[0].TotalRows;					
						}
					}
			";
		}		
	}
	$detail ="";
	// $detail ="
	// 		var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties) {
 //        return '<span style=\"margin: 6px; margin-right: 10px; font-size: 10px; float: ' + columnproperties.cellsalign + ';\">' + value + '</span>';
 //      }";
  if($scriptadd!=""){
		$detail .= $scriptadd;
  }
	
	if(isset($gridparam)){
		$arrGridparam = "";
		if(is_array($gridparam)){
			$arrGridparam = "data : {";
			$rg = false;
			for($e=0;$e<count($gridparam);$e++){
				if($rg) $arrGridparam .= ",";
				$arrGridparam .= $gridparam[$e].":''";
				$rg = true;
			}
			$arrGridparam .= "},";
		}
		$gridparam = $arrGridparam;
	}else{
		$gridparam = "";
	}
	
	if(isset($selectionMode)){
		$selectionMode = "selectionMode: '".$selectionMode."',";
	}else{
		$selectionMode = "selectionMode: 'singlerow',";
	}
// localizationobj.filterstringcomparisonoperators = ['empty', 'not empty', 'berisi', 'berisi(case sensitive)','tidak berisi', 'tidak berisi(case sensitive)', 'dimulai karakter', 'dimulai karakter(case sensitive)','diakhiri karakter', 'diakhiri karakter(case sensitive)', 'sama dengan', 'sama dengan(case sensitive)', 'null', 'not null'];
// localizationobj.filternumericcomparisonoperators =  ['sama dengan', 'tidak sama dengan', 'lebih kecil', 'lebih kecil sama dengan', 'lebih besar dari', 'lebih besar sama dengan', 'kosong', 'tidak kosong'];
// localizationobj.filterdatecomparisonoperators = ['sama dengan', 'tidak sama dengan', 'lebih kecil', 'lebih kecil sama dengan', 'lebih besar dari', 'lebih besar sama dengan', 'kosong', 'tidak kosong'];
// localizationobj.filterorconditionstring= 'Atau';
// localizationobj.filterandconditionstring= 'Dan';
// localizationobj.filtershowrowstring = 'Tampilkan data dengan kondisi :';
	$detail .= "
      " . $cellclassfunc . "
			$(\"#" . $gridname . "\")." . $tipegrid . "(
			{
				" . $selectionMode . "
				" . $rowsheight . "
				" . $lebar . "
				" . $height. "
				" . $toolbarheight . "
				theme : theme,
				source: dataAdapter,
				" . $autorowheight . "
				" . $scrollmode . "
				" . $showToolbar. "
				" . $groupable . "
				" . $pagermode . "
				columnsResize: true,
     		sortable:true,
				" . $filtermode ."
				" . $autoshowfiltericon ."
      	" . $columnsheight . "
				" . $detailAdd . "
				" . $pageable . "
				" . $editable . "
				" . $pagesize . "
				" . $filterable	. "
				" . $expand . "
				" . $buttong . "
				columns: [" . $colDetail . "] " . $columngroupdesc . "
				" . $groupnya . $expandgroupnya . "
      });";
			    
	$urlparam = "";
	if(isset($paramurl)){
		if(is_array($paramurl)){
			$urlparam = "data: {";
			$rcin = false;
			foreach ($paramurl as $key => $value) {
				if($rcin) $urlparam .= ",";
				$urlparam .= $key . ":" . $value;
				$rcin = true;
			}
			$urlparam .="},";			
		}
	}
	$adapter .="	], 
					id: '". $IDENTS_COLUMN . "',
					url: url,
					" . $gridparam . "
					" . $urlparam . "
					" . $adapterAdd . "
				};
				var dataAdapter = new $.jqx.dataAdapter(source);";
	$script .= $adapter . $scripteditor . $detail;
	// $script .= $adapter . $detail;
	if(isset($event)){
		if(is_array($event)){
			foreach ($event as $key => $value) {
				$script .= "$('#".$gridname."').on('" . $key . "',function(event){ ". $value ." });";
			}
		}
	}
	// $script .= ;
	$script .= $buttonToolbar;
	$script .= "});";
	// localizationobj.pagergotopagestring = "Gehe zu:";
	$script .= $jvAdd . $jvEdit . $jvDelete . $jvView . "
	</script>
	" . $cellcss;
		$gridstyle = "
		<style>";	
	if($fontsize!=""){
		$gridstyle .= "
			.jqx-grid-cell{
				font-size: ".$fontsize."px;
			}
		";
	}
	if($headerfontsize!=""){
		$gridstyle .= "
			.jqx-grid-column-header, .jqx-grid-columngroup-header {
					font-size: ".$headerfontsize."px;
			 }		
		";
	}
		$gridstyle .= "
		</style>";
	if($gridcenter){
		$awalCenter = "<center>";
		$akhrCenter = "</center>";
	}
	
	$gridview = $awalCenter . "<div id=\"toolbar" . $gridname . "\" style='width:".$width.";margin-bottom:5px'></div>".$akhrCenter;
	if($creategrid){
		$gridview .= $awalCenter . "<div id=\"" . $gridname . "\"></div>".$akhrCenter;
	}
	return $gridstyle . $script . $gridview;
}