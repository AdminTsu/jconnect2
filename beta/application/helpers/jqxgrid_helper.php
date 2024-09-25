<?php
function gGrid($pass){
  $CI = get_instance();
  // $CI->common->debug_array($pass);
  $table = null;
  // ======= Function for CRUD
  $jvAdd = "";
  $jvAdd_text = "Tambah";
  $jvEdit = "";
  $jvEdit_text = "Ubah";
  $jvView = "";
  $jvView_text = "Lihat";
  $jvDelete = "";
  $jvDelete_text = "Hapus";
  $scriptadd = "";
  $pinned = "";
  $width = "95%";
  $script = "";
  // ===================================
  // =================================== for script

	$jvscript = "";
	$grid = "grid";

  // =================================== grid display related
  $tooltip = true;
  $gridcenter = true;
  $bisaedit = false;
  $aggregate = "";
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
  $autoheight = false;
  $showToolbar = true; // if false toolbar will not show
  $showaggregates = false;
  $showGridbar = false; // if false toolbar will not show
  $autoshowfiltericon = false; //if false then filter icon will not show, user have to do mouse over on grid header
  $filtermode = "default"; // you can set this to excel so filter dialog will be more like excel type
  $rowsheight = ""; // if set rowheight will follow this variable value
  $pageable = true; // will set grid's paging, if false then grid will use virtual scrolling
  $editable = ""; // whether grid editable or not
  $pagesize = ""; // pagesize
  $pagesizeoptions = ""; // page size option only work for grid, will not work with treegrid
  $sumber = 'server'; // source : data from server or from raw json 
  $scrollmode = "scrollmode : 'logical',";
  $scrollmode = "";
  $theme = $CI->config->item('app_grids'); // grid theme, the value came from config.php
  $USR_THEMES = $CI->session->userdata("USR_THEMES");
  if($USR_THEMES!=""){
	$theme = $USR_THEMES;
  }
	$lebar = ""; // grid width
	$height = "full"; // gridheight
	$colgroup = array(); // for colspan in grid header
	$columnsheight = ""; // grid header height
	$pagermode = 'default';
	$virtualmode = false;
	$rowdetails = false;
	$initrowdetails = "";
	// =================================== treegrid
	$hirarki = ""; // hirarchy for treegrid
	$autoexpand = true;
	$expand = "";
  $modul = ""; // module name, function will need this variable
  $folder = $CI->router->fetch_directory();
  $divluar = "contentBody";
  $gridpadding = "padding:2px 0px 0px 0px";
  $startscript = true;
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
	// $CI->common->debug_array($pass);
  // ======================== ambil parameter

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
  	$pagesize = "pagesize : 13, ";	
  }else{
  	$pagesize = "pagesize : " . $pagesize . ", ";
  }
	if(isset($width)){
		$lebar = "width:'".$width . "',";
	}
	if(isset($height) && $height!=""){
		if($height!="full"){
			$height = "height:'".$height."',";	
		}else{
			if(isset($treegrid)){
				if($filterable){
					$height = "height:gridheight,";	
				}else{
					$height = "height:treeheight,";
				}
			}else{
				$height = "height:'100%',";	
			}
		}
	}

	if($rowsheight!=""){
		$rowsheight = "rowsheight: '" . $rowsheight . "',";
	}
	if($bisaedit){
		$script = "<script src=" . base_url(JS."jqxwidgets/jqxgrid.edit.js") ."></script>";
	}
	if($showaggregates){
		$script = "<script src=" . base_url(JS."jqxwidgets/jqxaggregates.js") ."></script>";
	}	
	if($grid=="html"){
    $CI->load->helper('table');
    return generateTable($pass);
	}else{
		if($grid=="datatable"){
    	$CI->load->helper('datatable');
			return gDatatable($pass);			
		}else{
			if($startscript){
				$script .="
						<script type=\"text/javascript\">
							var height = $('#".$divluar."').height()*0.93;
							var treeheight = height;
							var gridheight = height-35;
				      $(document).ready(function () {
				    ";				
			}

			$script .="
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
							// die();
							// unset($createeditor);
							if(!isset($createeditor)){
								$prop .= ", columntype: '".$ct."', editable:true" ;
								if(isset($initeditor)){
									$prop .= ", initeditor : " . $initeditor ;
								}
								if(isset($cellvalidation)){
									$prop .= ", validation : " . $cellvalidation;
								}
							}
							unset($ct);
						}elseif(isset($ce)){///bisa edit pa gak
							$prop .= ", editable: '" . $ce . "'";
							unset($ce);
						}else{
							$prop .= ", editable:false" ;
						}
					}
					if(isset($cellbeginedit)){
						$prop .= ", cellbeginedit : " . $cellbeginedit ;
						unset($cellbeginedit);
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
					// $colDetail .= "{ text: '". $fd . "' " . $columngroup . ", dataField: '". $namanya . "'" . $prop . ",cellsrenderer: cellsrenderer " . $cellclass ."}";
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

					if($aggregate != "" ){
						$prop .= ", aggregates: ['$aggregate'] ";
					}

					$colDetail .= "{ text: '". $fd . "' " . $columngroup . ", renderer : columnsrenderer, dataField: '". $namanya . "'" . $prop . $cellclass ."" . $propcreate . "" . $cellcontent . "" . $pinned.$filtertype ."}";
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
				// ==================================
				// == penentuan grid atau treegrid ==
				// ==================================
			  if(isset($idCol)){
			  	$IDENTS_COLUMN = $idCol;
			  }

				$tipegrid = "jqxGrid";
				$functionexpand = "";

				if($pageable == true){
					$pageable = "pageable: true,";
				}else{
					$pagesize = "pagesize : 50, ";
				}
				if($toolbarheight!=""){
					$toolbarheight = "toolbarheight : '" . $toolbarheight . "px',";
				}
				if($filterable){
					$filterable = "filterable: ".$filterable.",";	
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

				if(isset($treegrid)){
					if($treegrid){
						$autoshowfiltericon = "";	
						$jvscript .= "<script src=" . base_url(JS."jqxwidgets/jqxtreegrid.js") ."></script>";
						$scrollmode = "";
						$pagesize = "";
						$pageable = "";
						if($height==""){
							$height = "height:treeheight,";	
						}
						
						$tipegrid = "jqxTreeGrid";
						if($virtualmode){
							$virtualmode = "                
							virtualModeCreateRecords: function (expandedRecord, done) {
					      var dataAdapter = new $.jqx.dataAdapter(source,
				          {
			              loadComplete: function()
			              {
			              	done(dataAdapter.records);
			              },
			              loadError: function (xhr, status, error) {
				              done(false);
				              throw new Error(\"http://app.sdm-mkt.com : \" + error.toString());
			              }
				          }
					      );   
						    dataAdapter.dataBind();
						  },
						  virtualModeRecordCreating: function (record) {
			 					if (record.level == 2) {
			            // by setting the record's leaf member to true, you will define the record as a leaf node.
			            record.leaf = true;
			        	}
						  },
							";
						}
						$virtualmode = "";
						$hirarki = "
							hierarchy:{
								keyDataField: { name: '".$keyfield."' },
								parentDataField: { name:'".$keyparent."' }
							}	,
						";
						$functionexpand = "
							function traverseTreeGrid(action) {
			         var treeGrid = \"$('#" . $gridname ."')\";
						    function traverseRows(rows) {
						      var idValue;
						      for(var i = 0; i < rows.length; i++) {
						        if (rows[i].records) {
						          idValue = rows[i][idColumn];
						          $('#" . $gridname ."').jqxTreeGrid(action+'Row',idValue);
						          traverseRows(rows[i].records);
						        };
						      };
						    };

						    var idColumn = $('#" . $gridname ."').jqxTreeGrid('source')._source.id;
						    traverseRows($('#" . $gridname ."').jqxTreeGrid('getRows'));
							};
						";
						if($autoexpand){
							$expand = "
								ready: function()
								{
									var rows = $(\"#" . $gridname . "\").jqxTreeGrid('getRows');
									var traverseTree = function(rows)
									{
										for(var i = 0; i < rows.length; i++){
											if (rows[i].records){
												idValue = rows[i][idColumn];
												$(\"#" . $gridname . "\").jqxTreeGrid('expandRow',idValue);
												traverseTree(rows[i].records);
											}
										}
									};
									var idColumn = $(\"#" . $gridname . "\").jqxTreeGrid('source')._source.id;
									traverseTree(rows);
								},
							";

							$expand = "
								ready: function()
								{
									$(\"#" . $gridname . "\").jqxTreeGrid('expandAll');
								},
							";					
						}


						$selectrow = "
							var id = $(\"#" . $gridname ."\").".$tipegrid."('getSelection');
							";
						$idrow = "var id = id[0].uid;";
						$dscrow = "var descre = $(\"#" . $gridname . "\").".$tipegrid."('getCellValue', id,'".$DESCRE_COLUMN."');";
					}
				}else{
					$pagesizeoptions = "pagesizeoptions: ['10', '20', '30'],";
				}

				if($showaggregates){
					$showaggregates = 'showstatusbar: true, showaggregates: true,';
				}

				// pembuatan toolbar
				$lebartoolbar = $lebar;
				$tinggitoolbar = "height: 35,";

				if(isset($button) && $showToolbar==true){
					// $showToolbar = false;
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
										'text'=>$jvAdd_text, 
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
										'text'=>$jvEdit_text, 
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
										'text'=>$jvDelete_text, 
										'image'=>"<i style='position: relative; top: -2px' class='fa fa-times-circle'></i>",
										'events'=>"jvDelete()",
										'theme'=>'danger',
										'width'=>70
										)
									)
								);

							if($jvDelete==""){
								$expandit = "";
								if($tipegrid=="jqxTreeGrid"){
									$expandit = "traverseTreeGrid(\"expand\");";
								}
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
						// if($oVIW>0){
						// 	$arrButton = array_merge($arrButton, 
						// 		array(
						// 			$indexToolbar=>array(
						// 				'text'=>$jvView_text, 
						// 				'image'=>"<i style='position: relative; top: -2px' class='fa fa-eye'></i>",
						// 				'events'=>"jvView()",
						// 				'theme'=>'inverse',
						// 				'width'=>70
						// 				)
						// 			)
						// 		);
						// 	if($jvView==""){
						// 		$jvView = "
						// 			function jvView(){
						// 				" . $selectrow . "
						// 				if(id=='' || id==null){
						// 					alert('Pilih Data!');	
						// 				}else{
						// 					" . $idrow . "
						// 					self.location.replace('/view/".$modul."/'+id);
						// 				}
						// 			}";
						// 	}				
						// 	$indexToolbar++;
						// }
					}else{
						$buttemp = "";
						$container = "";
						$jqxbutton ="";
						$jqxscript = "";
						if(is_array($button)){
							foreach($button as $keyy=>$butval){
								$ident = $butval[0];				
								$image = "";
								$themebutton = "";
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
										$themebutton = $butval[3];	
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
											'theme'=>$themebutton,
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
								$themebutton = "";
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
										$themebutton = $valother[3];	
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
											'theme'=>$themebutton,
											'width'=>$widthbutton
											)
										)
									)
									;
								$indexToolbar++;
							}
						}			
					}
					// $help=true;
					if(isset($help)){
						if($help){
							$arrButton = array_merge($arrButton, 
								array(
									$indexToolbar=>array(
										'text'=>"", 
										'image'=>"<li class='fa fa-question'></li>&nbsp;",
										'events'=>'jvHelp()',
										'theme'=>"default",
										'width'=>"20"
										)
									)
								)
								;
							$indexToolbar++;
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
				}else{
					$showToolbar = false;
				}

				if(isset($showGridbar)){
					if($showGridbar){
						$txtToolbar = "showToolbar: true,";
					}else{
						$txtToolbar = "";
					}
				}else{
					$txtToolbar = "showToolbar: true,";	
				}
				if($autorowheight!=""){
					$autorowheight = "autorowheight: true, ";
				}
				if($columnsheight!=""){
					$columnsheight = "columnsheight : '" . $columnsheight . "',";
				}
				$detailAdd = "";
				$adapterAdd = "";
				if($autoshowfiltericon==true){
					$autoshowfiltericon = "autoshowfiltericon: false,";	
				}
				if($filtermode=='excel'){
					$filtermode = "filterMode: 'excel',";	
				}else{
					if($filtermode=="filterrow"){
						$filtermode = "showfilterrow: true,";
					}else{
						$filtermode = "filterMode: '".$filtermode."',";		
					}
				}
				if($tipegrid=='jqxTreeGrid'){
					$filtermode = "filterMode: 'simple',";		
				}
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

						if($tipegrid != "jqxTreeGrid"){
							$editable = "editable: true,
									        selectionmode: 'singlerow',
									        editmode: '".$editmode."',
													//editmode: 'click',
													// editmode: 'selectedrow',
													// showeverpresentrow: true,
													// everpresentrowposition: 'top',
									        ";
						}else{
							$editable = "editable: true,
									        ";
						}
					}
			

					// unset($bisaedit);
				}	
				// $detailAdd = "virtualmode: true,";
				if(isset($sumber) && $tipegrid!="jqxTreeGrid"){
					if($sumber=="server"){
						$detailAdd = "virtualmode: true,";
					}
						if(isset($bisaedit)){
							if($bisaedit){
								$detailAdd = "";
							}
						}
						$detailAdd .= "
								rendergridrows: function(obj)
								{
									return obj.data;    
								},
						";
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
					// }		
				}
				$detail ="";
				// $detail ="
				// 		var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties) {
			 //        return '<span style=\"margin: 6px; margin-right: 10px; font-size: 10px; float: ' + columnproperties.cellsalign + ';\">' + value + '</span>';
			 //      }";
				$renderercell = "";
				if(isset($cellsrenderer)){
					$renderercell = "";
					foreach ($cellsrenderer as $keyrender => $valuerender) {
						$renderercell .= $keyrender . " = " . $valuerender ."";
					}
					$renderercell .= "";
				}

				$detail .= $renderercell;
				
			  if($scriptadd!=""){
					$detail .= $scriptadd;
			  }
				
				$colrender ="
				var columnsrenderer = function (value) {
					return '<div style=\"display: table;  width:100%;height: 100%;\"><div style=\"display: table-cell;text-align:center;vertical-align: middle;\">' + value + '</div></div>';
				}";
				if($groupable!=""){
					if($groupable){
						$groupable = "groupable: true,
			                
						";
						// 
						$autoshowfiltericon = "";
						if(isset($groupcol)){
							$groupnya = ", groups: ['".$groupcol."']";
							if($expandgroup){
								$expandgroupnya = ", ready: function()
									{
										// $('#".$gridname."').jqxGrid({ pagesizeoptions: ['10','30']}); 
										// $('#".$gridname."').jqxGrid('expandallgroups');
									}";
							}
						}	
					}
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
				
				$enabletooltips = "";

				if($tipegrid != "jqxTreeGrid"){
					if($autoheight){
						$autorowheight .= "autoheight:true,";
					}else{
						if($pageable!=""){
							// debug_array($pageable);
							$autorowheight .= "autoheight:false,";	
						}else{
							if(!$autoheight){
								$autorowheight .= "autoheight:false,";
							}else{
								$autorowheight .= "autoheight:true,";
							}
						}
						// $autorowheight .= "autoheight:false,";	
						// if($autorowheight!=""){
						// 	$autorowheight .= "autoheight:true,";
						// }else{
						// 	if($pageable){
						// 		$autorowheight .= "autoheight:false,";	
						// 	}else{
						// 		$autorowheight .= "autoheight:true,";
						// 	}
						// }
					}

					if(isset($selectionmode)){
						$selectionmode = "selectionmode: '".$selectionmode."',";
					}else{
						$selectionmode = "selectionmode: 'singlerow',";
					}
					if($tooltip){
						$enabletooltips = "enabletooltips : true, ";
					}
				}else{
					$selectionmode = "";
				}
			// localizationobj.filterstringcomparisonoperators = ['empty', 'not empty', 'berisi', 'berisi(case sensitive)','tidak berisi', 'tidak berisi(case sensitive)', 'dimulai karakter', 'dimulai karakter(case sensitive)','diakhiri karakter', 'diakhiri karakter(case sensitive)', 'sama dengan', 'sama dengan(case sensitive)', 'null', 'not null'];
			// localizationobj.filternumericcomparisonoperators =  ['sama dengan', 'tidak sama dengan', 'lebih kecil', 'lebih kecil sama dengan', 'lebih besar dari', 'lebih besar sama dengan', 'kosong', 'tidak kosong'];
			// localizationobj.filterdatecomparisonoperators = ['sama dengan', 'tidak sama dengan', 'lebih kecil', 'lebih kecil sama dengan', 'lebih besar dari', 'lebih besar sama dengan', 'kosong', 'tidak kosong'];
			// localizationobj.filterorconditionstring= 'Atau';
			// localizationobj.filterandconditionstring= 'Dan';
			// localizationobj.filtershowrowstring = 'Tampilkan data dengan kondisi :';

				$enablebrowserselection = ($tipegrid=="jqxTreeGrid") ? "enableBrowserSelection: true," : "enablebrowserselection: true,";

				if($rowdetails){
					$rowdetails ="
							rowdetails:true,
              rowdetailstemplate: { rowdetails: \"<div id='grid' style='margin: 10px;'></div>\", rowdetailsheight: 120, rowdetailshidden: true },
              ready: function () {
                  $(\"#" . $gridname . "\").jqxGrid('showrowdetails', 1);
              },";
        }
        if($initrowdetails!=""){
        	$detail .= $initrowdetails;
        	$initrowdetails = "initrowdetails: initrowdetails,";
        }
				$detail .= $colrender . "
			      " . $cellclassfunc . "
						var getLocalization = function () {
							var localizationobj ={};
					    localizationobj.groupsheaderstring = 'Pilih Kolom, tarik dan letakkan disini untuk pengelompokan data berdasarkan kolom';		
							return localizationobj
						};


						$(\"#" . $gridname . "\")." . $tipegrid . "(
						{
							" . $virtualmode . "
							" . $selectionmode . "
							" . $rowsheight . "
							" . $lebar . "
							" . $height. "
							" . $toolbarheight . "
							theme : theme,
							source: dataAdapter,
							" . $autorowheight . "
							" . $scrollmode . "
							" . $txtToolbar. "
							" . $groupable . "
							" . $pagermode . "
							columnsResize: true,
			     		localization: getLocalization(),
			     		sortable:true,
			     		" . $enablebrowserselection . "
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
							" . $enabletooltips . "
							" . $pagesizeoptions . "
							" . $rowdetails . "
							" . $initrowdetails . "
							" . $showaggregates . "
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
				$adapter .="	], " . $hirarki . "
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
							# code...
							$script .= "$('#".$gridname."').on('" . $key . "',function(event){ ". $value ." });";
						}
					}
				}
				// $script .= ;
				$script .= $buttonToolbar;
				if($startscript){
					$script .= "});";
				}
				// localizationobj.pagergotopagestring = "Gehe zu:";
				$script .= $jvAdd . $jvEdit . $jvDelete . $jvView;
				if($startscript){
					$script .= "</script>";
				}
				$script .= $cellcss;
				$gridstyle = "";
				if($fontsize!="" || $headerfontsize!=""){
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
				}

				if($gridcenter){
					$awalCenter = "<div style='height:100%;'>";//"<center>";
					$akhrCenter = "</div>";//"</center>";
				}
				$gridview ="";

				if(isset($breadcrumb)){
					$gridview .= "<div style='height:40px;'>".$breadcrumb ."</div>";
				}
				$heightDiv = "99%";
				if($showToolbar){
					$gridview .= "<div style='height:37px'><div id=\"toolbar" . $gridname . "\" style='width:".$width.";margin-bottom:5px'></div></div>";	
					$heightDiv = "94%";
				}
				
				if($creategrid){
					$gridview .= "<div style='".$gridpadding.";height:$heightDiv'><div id=\"" . $gridname . "\"></div></div>";
				}
				return $gridstyle . $script . $gridview;	
			}
		}
}