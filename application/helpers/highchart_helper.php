<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * CKEditor helper for highchart
 * 
 * @author detanto
 * @package CodeIgniter
 * 
 */

 /** initialize highchart
  * based on type call highchart type
  * */
function highchart_initialize($data = array()) {
	$return = '';
	//print_r(get_defined_constants());
	if(!defined('HIGHCHART_HELPER_LOADED')) {
		define('HIGHCHART_HELPER_LOADED', TRUE);
		$return =  "<script>
		if (window.Highcharts === undefined) {
			var hc = $(\"<script type='text/javascript' src='". base_url(JS."highcharts.js") ."'>\");
			$(\"head\").append(hc);
			var exp = $(\"<script type='text/javascript' src='". base_url(JS."exporting.js") ."'>\");
			$(\"head\").append(exp);
			};
		</script>
		<script src='". base_url(JS."themes/grid-light.js") ."'></script>
		";
		//<script type=\"text/javascript\" src=\"".base_url(JS."highcharts.js"). "\"></script>";
		//$return .=  "<script type=\"text/javascript\" src=\"".base_url(JS."exporting.js"). "\"></script>

	}
	return $return;
}

function highchart_create_instance($data = array()){
	$CI =& get_instance();
	$dataset = "";
	$click="";
	$legend = ",
				legend: {
            enabled: true,
            layout: 'horizontal',
            align: 'right',
            width: 220,
            verticalAlign: 'top',
            borderWidth: 0,
						y:100,
            useHTML: true,
            labelFormatter: function() {
                return '<div style=\"top:100px;width:200px\"><span style=\"float:left\">' + this.name + '</span><span style=\"float:right\">' + this.y + '</span></div>';
            },
        }	
	";
	//$legend = "";
	$total = 0;
	if(isset($data['click'])){
		$click = $data['click'];
	}
	$rc = false;
	switch ($data['chart']){
		case "pie" :
			$field = explode("~", $data['fields']);
			foreach($data['resultset']->result() as $value){
				if ($rc) $dataset .= ",";
				$rc = true;
				$PIE_DESCRE = $value->{$field[0]};
				$PIE_VALUES = $value->{$field[1]};
				$total = $total + $PIE_VALUES;
				if(isset($data['arrValue'])){
					if(is_array($data['arrValue'])){
						foreach($data['arrValue'] as $akey=>$avalue){
							if(isset($field[2])){
								$PIE_ADDTIN = $value->{$field[2]};
								if($akey==$PIE_ADDTIN){	
									$PIE_DESCRE = $avalue;
								}								
							}else{
								if($akey==$PIE_DESCRE){	
									$PIE_DESCRE = $avalue;
								}							
							}
						}
					}
				}
				// $dataset .= "['" . $PIE_DESCRE . "', " . $PIE_VALUES . "]";
				if($PIE_DESCRE==""){
					$PIE_DESCRE = "Tidak Ada";
				}
				if(isset($field[2])){
					$PIE_ADDTIN = $value->{$field[2]};	

					if($PIE_ADDTIN=="")	{
						$PIE_ADDTIN = "0";
					}
					$dataset .= "{name:'" . $PIE_DESCRE . "', y:" . $PIE_VALUES . ",additional:'".$PIE_ADDTIN."'}";		
				}else{
					$dataset .= "['" . $PIE_DESCRE . "', " . $PIE_VALUES . "]";	
				}				
			}			
			$script = "	
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: false
					},
					series: {
						dataLabels: {
							enabled: true,
							padding: 1,
							format: '{point.name}: {point.y}'
						}
					}
				}" . $legend . ",
				series: [{
					type: 'pie',
					name: '" . $data["legend"]."',
					data: [" . $dataset . "],
					point: {
						events: {
							click: function(e) {
								// ". $click. "
							}
						}
					}
				}],
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
			";
			break;
		case "line" :
			$dataset = "";
			$xaxis = "";
			$categories = "";
			$descr = "[";
			$rc = false;
			$loop = 1;
			$field = explode("~", $data['fields']);
			foreach($data['resultset']->result() as $value){
				if ($rc) {
					$dataset .= ",";
					$categories .= ",";
					$descr .= ",";
				}
				$rc = true;
				$fieldnya = $value->{$field[0]};
				// $dataset .= "" . $value->{$field[1]} . "";
				if(isset($field[2])){
					$ADDTION = $value->{$field[2]};		
					$dataset .= "{y:" . $value->{$field[1]} . ",a:'".$ADDTION ."'}";
				}else{
					$dataset .= "" . $value->{$field[1]} . "";
				}
				$total = $total + $value->{$field[1]};
				$categories .= "'" . $fieldnya . "'";
				$loop++;
			}

			$descr .= "]";
			$data['dataset'] = $dataset;
			$data['xaxis'] = $xaxis;
			$data['descr'] = $descr;
			$rotation = "0";
			$fontsize = 10;
			$xAxistitle ="";
			$yAxistitle = "";
			$desclegend = "";
			$font = "Verdana, sans-serif";
			if(isset($data["xAxistitle"])){
				$xAxistitle = $data["xAxistitle"];
			}
			if(isset($data["yAxistitle"])){
				$yAxistitle = $data["yAxistitle"];
			}else{
				if(isset($data["legend"])){
					$yAxistitle = $data["legend"];
				}
			}
			if(isset($data["fontsize"])){
				$fontsize=$data["fontsize"];
			}
			if(isset($data["rotation"])){
				$rotation=$data["rotation"];
			}
			if(isset($data["font"])){
				$font=$data["font"];
			}

			if(isset($data['total'])==true){
				$desclegend = "
				legend: {
					 labelFormatter: function() {
							var total = 0;
							for(var i=this.yData.length; i--;) { total += this.yData[i]; };
							return this.name + ' - Total: ' + total;
					 }
				},";
			}else{
				$desclegend = "";
			}
			$script = "
				chart: {
						type: 'line'
				},".$desclegend."
				xAxis: {
					title: {
							text: '".$xAxistitle."'
					},
					categories: [" . $categories . "],
					labels: {
						rotation: " . $rotation . ",
						style: {
							fontSize: '" . $fontsize . "px',
							fontFamily: '" . $font . "'
						}
					}
				},
				yAxis: {
					title: {
						text: '".$yAxistitle."'
					}
				},
				plotOptions: {
					line: {
						dataLabels: {
							enabled: true
						},
						enableMouseTracking: false
					}
				},
				series: [{";
				if(isset($data["warna"])){
					$script .= "color: '" . $data["warna"]."',";	
				}
				
				$script .= "
						name: '" . $yAxistitle. "',
						data: [" . $dataset . "]
				}],
				plotOptions: {
					series: {
						cursor: 'pointer',
						point: {
							events: {
							click: function(e) {
									" . $click . "
								}
							}
						},
						marker: {
							lineWidth: 1
						}
					}
				}
			";
			break;

		case "bar" :
			$dataset = "";
			$xaxis = "";
			$categories = "";
			$descr = "[";
			$rc = false;
			$loop = 1;
			$field = explode("~", $data['fields']);
			foreach($data['resultset']->result() as $value){
				if ($rc) {
					$dataset .= ",";
					$categories .= ",";
					$descr .= ",";
				}
				$rc = true;
				$fieldnya = $value->{$field[0]};
				// $dataset .= "" . $value->{$field[1]} . "";
				if(isset($field[2])){
					$ADDTION = $value->{$field[2]};		
					$dataset .= "{y:" . $value->{$field[1]} . ",a:".$ADDTION ."}";
				}else{
					$dataset .= "" . $value->{$field[1]} . "";
				}				
				$categories .= "'" . $fieldnya . "'";
				$total = $total + $value->{$field[1]};
				$loop++;
			}
			$descr .= "]";
			$data['dataset'] = $dataset;
			$data['xaxis'] = $xaxis;
			$data['descr'] = $descr;
			$rotation = "0";
			$fontsize = 8;
			$font = "Verdana, sans-serif";
			if(isset($data["fontsize"])){
				$fontsize=$data["fontsize"];
			}
			if(isset($data["rotation"])){
				$rotation=$data["rotation"];
			}
			if(isset($data["font"])){
				$font=$data["font"];
			}
			
			$script = "
				chart: {
					type: 'column'
				},
				xAxis: {
					title: {
							text: '".$data["xAxistitle"]."'
					},
					categories: [" . $categories . "],
					labels: {
						rotation: " . $rotation . ",
						style: {
							fontSize: '" . $fontsize . "px',
							fontFamily: '" . $font . "'
						}
					}
				},
				yAxis: {
					title: {
						text: '".$data["yAxistitle"]."'
					}
				},
				plotOptions: {
					column: {
						dataLabels: {
								enabled: true
						},
						enableMouseTracking: false
					} 
				},
				series: [{";
				if(isset($data["warna"])){
					$script .= "color: '" . $data["warna"]."',";	
				}
				
				$script .= "
					name: '" . $data["yAxistitle"]. "',
					data: [" . $dataset . "]
				}],
				plotOptions: {
					series: {
							cursor: 'pointer',
							point: {
								events: {
									click: function() {
								". $click. "
									}
								}
							},
							marker: {
								lineWidth: 1
							}
					},
					column: {
						colorByPoint: true
					}
				}
			";
			break;		
	}
	
	if(isset($data['totalvalu'])){
		if($data['totalvalu']!=0){
			$total = $data['totalvalu'];	
		}
	}
	
	$descTotal = ", Total Data : " . $total;
	
	if(isset($data['totaldesc'])){		
		if($data['totaldesc']!=""){
			$descTotal = "";//"," . $data['totaldesc'] . " : " .$total;	
		}else{
			$descTotal = " (" .$total . ")";
		}
		
	}
	
	if(isset($data['total'])){
		if($data['total']==true){
			$total = $descTotal;
		}else{
			$total = "";
		}
	}else{
		$total = "";
	}

	$title = "";
	if(isset($data['title'])){
		$title = $data['title'];
	}
	$return = "
	<script type=\"text/javascript\">
		$(document).ready(function(){
			$('#" . $data["id"]. "').highcharts({
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
				},
				title: {
						text: '" . $title . $total . "'
				}, " . $script . "";
	$style = "";
	if(isset($data["width"])){
		$style .= "min-width: " . $data["width"] .";";
	}
	if(isset($data["height"])){
		$style .= "height: " . $data["height"] .";";
	}
	if($style==""){
		$style = "width:100%;";
	}
	$return .= "
			});
		});
	</script>
	<div id=\"" . $data["id"] . "\" style=\"" . $style . "max-width: 600px; margin: 0 auto\"></div>
	";
	return	$return;
}
function display_highchart($data = array(), $defined=false){
	// Initialization
	//
	$return = highchart_initialize($data);
	$return .= highchart_create_instance($data);
	return $return;
}