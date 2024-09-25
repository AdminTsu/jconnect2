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
function jqxchart_initialize($data = array()) {
	$return = '';
	//print_r(get_defined_constants());
	if(!defined('JQXCHART_HELPER_LOADED')) {
		define('JQXCHART_HELPER_LOADED', TRUE);
		$return =  "<script>
		if (window.Jqxcharts === undefined) {
			var chartcore = $(\"<script type='text/javascript' src='". base_url(JS."jqwidgets/jqxchart.core.js") ."'>\");
			$(\"head\").append(chartcore);
			var drawcore = $(\"<script type='text/javascript' src='". base_url(JS."jqwidgets/jqxdraw.js") ."'>\");
			$(\"head\").append(drawcore);
			};
		</script>
		";
		$return = "<script type='text/javascript' src='". base_url(JS."jqxwidgets/jqxchart.js") ."'></script>";
		$return .= "<script type='text/javascript' src='". base_url(JS."jqxwidgets/jqxchart.core.js") ."'></script>";
		$return .= "<script type='text/javascript' src='". base_url(JS."jqxwidgets/jqxdraw.js") ."'></script>";
	}
	return $return;
}
function jqxchart_source($fields){

  return $adapter;
}
function jqxchart_create_instance($chart=array()){
	$datatype = "json";
	$url = "/nosj/testjson";
	$animate = true;
	$showLegend = true;
	$createobject = true;
	$showGridLines = true;
	$method = "GET";
	$width = "98%";
	$height = "98%";
	$xAxistitle = "";
	$yAxistitle = "";
	$passfirst = false;
	$showLabels = true;
	$additionalscript = "";
	$labelRadius	= 170;
	$initialAngle	= 15;
	$radius	= 145;
	$centerOffset	= 0;
	$labelsvisible = 'true';
	$labelsverticalAlignment = 'top';
	$showBorderLine = true;
	$valueAxissize = "auto";
	$valueAxistick = "#888888";
	$legendLayoutflow = "vertical";
	$displayValueAxis = "true";
	$xAxisPosition = "top";
	$serieslabel = true;
	$serieslabel1 = "";
	$serieslabel2 = "";
	$layoutLegend = "bawah";
  $paddingleft = 0;
  $paddingtop = 5;
  $paddingright = 5;
  $paddingbottom = 5;
  $showlegendvalue = true;
  $legendformat = "value";
  $textRotationAngle = "0";
  $tooltip = "";
  $showPercent = false;
	$legendleft = 900;
	$legendtop = 160;
	$legendwidth = 300;
	$legendheight = 200;


  foreach ($chart as $param=>$value){
    ${$param}=$value;
  }	
  // $col = array(array('field'=>'BULAN', 'type'=>'date'),'ITEM1','ITEM2', 'ITEM3');
  if(!is_array($fields)){
  	$arrFields = explode("~", $fields);
  	$fields = array();
  	for($e=0;$e<count($arrFields);$e++){
  		$fields[] = array('field'=>$arrFields[$e]);
  	}
  }
  $GRF_DESCRE = "";
  $GRF_VALUES = "";
  if(isset($fields[0])){
  	$GRF_DESCRE = $fields[0]['field'];	
  }
  if(isset($fields[1])){
  	$GRF_VALUES = $fields[1]['field'];
  }
  
  $rc=false;
	$rs=false;
	$dataField = "[";
	$seriesdata = "[";
	$loop=1;
	foreach ($fields as $key => $value) {
		if($rc) $dataField .= ",";
		if($rs) $seriesdata .= ",";
		$dataField .= "{";
		// if($loop!=1){
			$seriesdata .= "{";	
		// }
		
		foreach($value as $val1=>$val2){
			${$val1}=$val2;
			if($val1=="field"){
				$dataField .= " name: '" . $val2 . "'";
				// if($loop!=1){
					$seriesdata .= " dataField: '" . $val2 . "', displayText:'" . $val2 . "'";		
				// }
			}
			if($val1=="type"){
				$dataField .= ", type: '" . $val2 . "'";	
			}
		}
		$dataField .= "}";
		
		// if($loop!=1){
			$seriesdata .= "}";
			$rs = true;
		// }
		$rc = true;
		$loop++;
	}
	$dataField .= "],";	
	$seriesdata .= "]";

	if(isset($resultset)){
		$adapter = "var dataAdapter = [";
		$rc=false;
		foreach ($resultset->result() as $key => $value) {
			if($rc) $adapter .= ",";
			$adapter .= "{";
			$rd = false;
			for($i=0;$i<count($arrFields);$i++){
				
				if($arrFields[$i]!=""){
					if($rd) $adapter .=",";
					$adapter .= $arrFields[$i] . ":'".$value->$arrFields[$i]."'";
					$rd=true;
				}else{
					$rd=false;
				}
			}
			$adapter .= "}";
			$rc=true;
		}
		$adapter .= "]";
	}else{
		$adapter = "var source ={
datatype: 'json',
datafields: ";
		$adapter .= $dataField;
	  $adapter .= "url:'".$url."',";
	  if($method=="POST"){
	  	$adapter .= "type:'POST'";
	  }
	  if(isset($data)){
	  	$adapter .= ", data : {";
	  	$adapter .= $data;
	  	$adapter .= "}";
	  }
		$adapter .="};
var dataAdapter = new $.jqx.dataAdapter(source,{
autoBind: true,
async: false});
	  ";
	}
	$setting = "
	var toolTipCustom = function (value, itemIndex, serieGroup, group, categoryValue, categoryAxis) {
		// return function (value, itemIndex, serieGroup, group, categoryValue, categoryAxis) {
      return '<DIV><b>Value: '+ dataAdapter[0].VENDOR_NAME +'</b><br />';
    // }    
  };
	";
	$setting = "";
	$func = "";
	if(is_array($tooltip)){
		foreach ($tooltip as $tool => $tip) {
			$func = $tool;
			$setting = "var " . $func . " = " .$tip . ";";
		}
	}

  $setting .= "var settings = {";
  if(isset($title)){
  	$setting .= "title: \"".$title."\",";
  }
 	$setting .= "description: \"".$xAxistitle."\",";
  if(!$animate){
  	$setting .= "enableAnimations: false,";
  }
  if($showLegend){
  	$setting .= "showLegend: true,";
  }
  if($layoutLegend == "right"){
	  $setting .= "
	legendLayout: {
	         left: ".$legendleft.",
	         top: ".$legendtop.",
	         width: ".$legendwidth.",
	         height: ".$legendheight.",
	         flow: 'vertical'
	     },      
	  ";
  }

  if(!$showLabels){
  	$showLabels = "showLabels: false,";
  	$labelsvisible = 'false';
  }else{
  	$showLabels = "showLabels: true,";
  	$labelsvisible = 'true';
  }  

	if(!$showBorderLine){
		$setting .= "showBorderLine:false,";
	}  
  if(isset($padding)){
  	$setting .= "padding: { " . $padding. "},";
  }else{
		$setting .= "padding: { 
left : " . $paddingleft .",
top : " . $paddingtop .",
right : " . $paddingright .",
bottom : " . $paddingbottom ." 
},";  	
  }


  if(isset($titlePadding)){
  	$setting .= "titlePadding: { " . $titlePadding. "},";
  }else{
  	$setting .= "titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },";
  }
  $percentage = "";
  $setting .= "source: dataAdapter,";
  $setting .= "
                categoryAxis:{
                  textRotationAngle: ".$textRotationAngle.",
                  dataField: '".$GRF_DESCRE."',
                  showGridLines: true,
                  flip: false
                },
  ";
  if($chart=="pie"){
  	$showdetail = "";
  	$formatfunction = "value";
  	// if($serieslabel){
	  	$serieslabel1 = "var label = dataAdapter[itemIndex].".$GRF_DESCRE.";";
  	// }

  	if($showPercent){
	  	$percentage = "
	  		sumValue = 0;
				$.each(dataAdapter, function(index, value) {
		     	sumValue += parseInt(dataAdapter[index].".$GRF_VALUES.");	
				});
	  	";

			if($showlegendvalue){
				$legendformat = "value + ' - ' + (dataAdapter[itemIndex].".$GRF_VALUES." / sumValue * 100).toFixed(2)+ '%'";
			}
			$formatfunction = "(value / sumValue * 100).toFixed(0) + '%'";
	  	$showdetail = "	,formatSettings: { sufix: '%', decimalPlaces: 2 }";
  	}
/*

*/
  	$series = "
  		series:[{ 
        dataField: '".$GRF_VALUES."',
        displayText: '".$GRF_DESCRE."',
        labelRadius: ".$labelRadius.",
        initialAngle: ".$initialAngle.",
        radius: ".$radius.",
        centerOffset: ".$centerOffset.",
        labels: { 
          visible: ".$labelsvisible.",
          verticalAlignment: '".$labelsverticalAlignment."',
          offset: { x: 0, y: -50 },
        },
        formatFunction: function (value, itemIndex) {
        	".$serieslabel1."
          return label + ':'+ ". $formatfunction .";
        },
				legendFormatFunction: function(value, itemIndex, serie, group) {
					return ".$legendformat.";
				}" . $showdetail . "
      }]
  	";

// formatFunction: function (value, itemIndex) {
// 	if (isNaN(value))
// 	 return value;
// 	return parseFloat(value) + '%';          
// },
  }else{
  	/*
  	
          angle: 55,
          horizontalAlignment: 'right',
          verticalAlignment: 'center',
          rotationPoint: 'right',
          offset: { x: 0, y: -5 }          
		*/
  	$setting .= "
      xAxis:{
      	position:'".$xAxisPosition."',
      	dataField: '".$axis."',";
    if($showGridLines){
    	$setting .= "	showGridLines: true";
    }
		$setting .= "
				},
  	";

	  $series = "	
      valueAxis:{
        displayValueAxis: ".$displayValueAxis.",
        description: '".$yAxistitle."',
        axisSize: '".$valueAxissize."',
        tickMarksColor: '".$valueAxistick."'
      },
      series: ".$seriesdata."
	  ";  	
  }

  if(isset($warna)){
  	$setting .= "colorScheme: '".$warna."',";
  }
  $setting .= "seriesGroups:[{";
  $setting .= "type:'".$chart."',";
  // $setting .= "mouseover: function (event) {
  //                $('.jqx-chart-tooltip-text').parent().parent().css('z-index', 12345);
  //        }";

  if($func!=""){
  	$setting .= "toolTipFormatFunction: ".$func.",";	
  }
 	$setting .= $showLabels;
  $setting .= $series;
	$setting .= "}]";
  $setting .= "}";

  $content = "
  <style>
 #contentDiv { z-index: 100005 }
  </style>
	<script type=\"text/javascript\">
		$(document).ready(function(){
			".$additionalscript."
			".$adapter."
			".$percentage."
			".$setting."
			$('#".$id."').jqxChart(settings);
		});
	</script>
	";
	if($createobject){
		$content .= "<div id='".$id."' style=\"width:".$width."; height:".$height."; position: relative; left: 0px; top: 0px;\"></div>";
	}
	return $content;
}
function display_jqxchart($data = array(), $defined=false){
	$return = jqxchart_initialize($data);
	$return .= jqxchart_create_instance($data);
	return $return;
}
