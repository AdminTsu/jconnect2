<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  function grafikHRM($param, $other=null, $other2=null){
    $CI = get_instance();
    $CI->load->model('m_grafik');
    $CI->load->helper('highchart');
    $click = "";
    $additional = "GRF_DESCRE";
    $rangenya = "";
    $legend = "";
    $judul = "";
    $typeGrafik = "pie";
    $showtotal = true;
    $rangeTahun = false;
    switch ($param) {
      case '511':
        if($other==null){
          $other=date("Y");
        }
        if($other2==""){
          $typeGrafik = "line";
          $additional = "GRF_BULANS";
          $click = "
              var idents = this.a;
              if(idents!=''){
                $('#hidOTHERS').val(idents);
                $('#placeholder').empty();
                $('#placeholder').load('/home/showgrafik/".$param."/".$other."/'+idents);
              }
              e.preventDefault();   
          ";
          $resultLine = $CI->m_grafik->grfKaryawanpenambahan($other);
        }else{
          $typeGrafik = "pie";
          $additional = "DPR_CODESS";
          $resultLine = $CI->m_grafik->grfKaryawanpenambahan_detail($other, $other2);
          $click = "
            var idents = e.point.additional;
            if(idents!=1){
              var param = {};
              param['JENISS'] = '".$param."';
              param['IDENTS'] = idents;
              param['OTHERS'] = '".$other."-'+$('#hidOTHERS').val();
              $('#jqwDetailgrafik').jqxWindow('open');
              $.post('/home/detailhrm',param,function(data){
                $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'500px', height:'450px',position:'middle', resizable:false,title: 'Detil Info'});  
                $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
              });        
            }
          ";             
        }
        // die();
        $judul = "Karyawan Baru";
        $rangeTahun = true;
        break;
      case '512':
        if($other==null){
          $other=date("Y");
        }
        if($other2==""){
          $typeGrafik = "line";
          $additional = "GRF_BULANS";
          $click = "
              var idents = this.a;
              if(idents!=''){
                $('#hidOTHERS').val(idents);
                $('#placeholder').empty();
                $('#placeholder').load('/home/showgrafik/".$param."/".$other."/'+idents);
              }
              e.preventDefault();   
          ";
          $resultLine = $CI->m_grafik->grfKaryawankeluar($other);
        }else{
          $typeGrafik = "pie";
          $additional = "DPR_CODESS";
          $resultLine = $CI->m_grafik->grfKaryawankeluar_detail($other, $other2);
          $click = "
            var idents = e.point.additional;
            if(idents!=1){
              var param = {};
              param['JENISS'] = '".$param."';
              param['IDENTS'] = idents;
              param['OTHERS'] = '".$other."-'+$('#hidOTHERS').val();
              $('#jqwDetailgrafik').jqxWindow('open');
              $.post('/home/detailhrm',param,function(data){
                $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'500px', height:'450px',position:'middle', resizable:false,title: 'Detil Info'});  
                $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
              });        
            }
          ";             
        }
        $judul = "Karyawan Keluar";
        $rangeTahun = true;
        break;
      case '513':
        $resultLine = $CI->m_grafik->grfKaryawanpertumbuhan($other);
        $typeGrafik = "line";
        $judul = "Pertumbuhan Karyawan";
        $click = "";
        $additional = "GRF_BULANS";
        $showtotal = false;
        $rangeTahun = true;
        break;
      case '521':
        // die();
        $resultLine = $CI->m_grafik->grfKaryawanmasakerja($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){
              idents = idents.substring(0, 2).trim();
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
        }else{
          switch ($other) {
            case "0":
              $rangenya = "(Dibawah 1 tahun)";
              break;
            case '30':
              $rangenya = "(Diatas 30 tahun)";
              break;
            default:
              $other = substr($other, 0,1)=="0" ? substr($other, 1,1) : $other;
              $rangenya = "(".$other." - " . ($other + 4). " tahun)";
              break;
          }
          $additional = "DPR_CODESS";
          $click = "
            var idents = e.point.additional;
            if(idents!=1){
              var param = {};
              param['JENISS'] = '".$param."';
              param['IDENTS'] = idents;        
              param['OTHERS'] = $('#hidOTHERS').val();
              $('#jqwDetailgrafik').jqxWindow('open');
              $.post('/home/detailhrm',param,function(data){
                $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'500px', height:'450px',position:'middle', resizable:false,title: 'Detil Info'});  
                $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
              });        
            }
          ";          
        }
        $judul = "Masa Kerja Karyawan " . $rangenya;
        break;
      case '522' :
        $resultLine = $CI->m_grafik->grfKaryawanusia($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){
              idents = idents.substring(0, 2);
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
        }else{
          switch ($other) {
            case '50':
              $rangenya = "(diatas 50 tahun)";
              break;
            case '18':
              $rangenya = "(18 - 30 tahun)";
              break;        
            default:
              $rangenya = "(".$other." - " . ($other + 9). "tahun)";
              break;
          }
          $additional = "DPR_CODESS";
          $click = "
            var idents = e.point.additional;
            if(idents!=1){
              var param = {};
              param['JENISS'] = '".$param."';
              param['IDENTS'] = idents;        
              param['OTHERS'] = $('#hidOTHERS').val();
              $('#jqwDetailgrafik').jqxWindow('open');
              $.post('/home/detailhrm',param,function(data){
                $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'500px', height:'450px',position:'middle', resizable:false,title: 'Detil Info'});  
                $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
              });        
            }
          ";          
        }
        $judul = "Usia Karyawan " . $rangenya;
        break;
      case '7':
      case '531':
        $resultLine = $CI->m_grafik->grfKaryawanlembur($other);
        $typeGrafik = "line";
        $judul = "Lembur Karyawan";
        $showtotal = false;
        $click = "";
        $rangeTahun = true;
        break; 
      case '523':
        $resultLine = $CI->m_grafik->grfKaryawanjeniskelamin($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){
              idents = idents.substring(0, 2);
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
        }else{
          switch ($other) {
            case '2':
              $rangenya = "(Laki-laki)";
              break;
            default:
              $rangenya = "(Perempuan)";
              break;
          }
          $click = "";          
        }
        $additional = "EMP_SEXESS";
        $judul = "Jenis Kelamin Karyawan " . $rangenya;
        break;
      case '524':
        $resultLine = $CI->m_grafik->grfKaryawanstatus($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){
              idents = idents.substring(0, 2);
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
        }else{
          switch ($other) {
            case '1':
              $rangenya = "(Tetap)";
              break;
            case '2':
              $rangenya = "(Kontrak)";
              break;
            case '3':
              $rangenya = "(Yayasan)";
              break;
          }
          $click = "";          
        }
        $additional = "EMP_STAKRY";
        $judul = "Status Karyawan " . $rangenya;
        break;

      case '525':
        $resultLine = $CI->m_grafik->grfKaryawandistribusi($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){
              idents = idents.substring(0, 2);
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
        }else{
          $rangenya = "(Plant " . $other . ")";
          $click = "";          
        }
        $additional = "EMP_PLANTS";
        $judul = "Distribusi Karyawan " . $rangenya;
        break;
      default:
        break;
    }
    
    $flotarea = array(
        'id'  =>  'placeholder',
        'title' => $judul,
        'chart' =>  $typeGrafik,
        'total'=> $showtotal,
        'height' => '460px',  //Setting a custom height,
        'legend' => $judul,
        'showvalue'=> 'true',
        'warna'=>'#38a43d',
        'click'=> $click,
        'resultset'=>$resultLine,
        'fields'=>'GRF_DESCRE~GRF_VALUES~'.$additional
    );

    $line1 = display_highchart($flotarea);
    $script = "";
    if($rangeTahun){//$param==511 && $param==512 && $param!=513 && $param!=531){

      $start = 2013;
      $ended = date('Y');

      for($e=$start;$e<=$ended;$e++){
        $optTAHUNS[$e] = $e;
      }

      $js = "   $('#divgrafik').empty();";
      $js .= "   $('#divgrafik').load('/home/showgrafik/".$param."/'+value);";
      $arrTable[] = array('group'=>6, 'urutan'=>1, 'type'=> 'cmb', 'namanya'=>"cmbTAHUNS", 'size'=>100, 'label'=>'Tahun', 'events'=>array('select'=>$js), 'option'=>$optTAHUNS,'value'=> $other=="" ? date('Y') : $other);  
      // $script = "<script>";
      // $inside = "function jvChangeyear(){";
      // $inside .= "   var YEARS = $('#cmbTAHUNS').val();";
      // $inside .= "   $('#placeholder').empty();";
      // $inside .= "   $('#placeholder').load('/home/showgrafik/".$param."/'+YEARS);";
      // $inside .= "}";

    }
    $script = "<script>";
    $script .= "function jvBack(){";
    $script .= "   $('#divgrafik').empty();";
    $script .= "   $('#divgrafik').load('/home/showgrafik/".$param."');";
    $script .= "}";
    $script .= "</script>";
    $arrTable[] = array('group'=>6, 'urutan'=>98, 'type'=> 'hid', 'readonly'=>true,'namanya'=>"hidOTHERS", 'size'=>'100', 'value'=> $other);
    $arrTable[] = array('group'=>6, 'urutan'=>99, 'type'=> 'udf', 'namanya'=>"cmbTAHUNX", 'value'=> $line1);
    $arrForm =
        array(
          'arrTable'=>$arrTable,
          'param' =>null,
          'width' => 710,
          'height' => 410,
          'multicolumn'=>2,
          'form_create'=>false
        );
    $content = $script;
    $arrButton = array(
      "save"=>array("Kembali", "jvBack()","warning","backward","","fa-backward")
    );
    $content .= "<div style='height:10px'></div>";
    $content .= generateForm($arrForm,false);
    $content .= generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'80%',");
    // $content .= "<div class='col-md-12'><div class=chart-inner>" . $line1 ."</div></div>";
    return $content;    
  }

  function x_grafikPurchasing($param, $other=null, $button=true){
    $CI = get_instance();
    $CI->load->model('m_grafik');
    $CI->load->helper('highchart');
    $click = "";
    $additional = "GRF_DESCRE";
    $rangenya = "";
    $legend = "";
    $judul = "";
    $typeGrafik = "pie";
    $showtotal = true;
    $rangeTahun = false;
    switch ($param) {
      case '212':
        $resultLine = $CI->m_grafik->grfPchLocation($other);
        $typeGrafik = "pie";
        if($other==""){
          $click = "
            var idents = e.point.additional;
            if(idents!=''){  
              idents = idents.substring(0, 2).trim();
              $('#hidOTHERS').val(idents);
              $('#placeholder').empty();
              $('#placeholder').load('/home/showgrafik/".$param."/'+idents);
            }
          ";
           $click = "";
        }else{
          switch ($other) {
            case "0":
              $rangenya = "(Dibawah 1 tahun)";
              break;
            case '30':
              $rangenya = "(Diatas 30 tahun)";
              break;
            default:
              $other = substr($other, 0,1)=="0" ? substr($other, 1,1) : $other;
              $rangenya = "(".$other." - " . ($other + 4). " tahun)";
              break;
          }
          $additional = "DPR_CODESS";
          $click = "
            var idents = e.point.additional;
            if(idents!=1){
              var param = {};
              param['JENISS'] = '".$param."';
              param['IDENTS'] = idents;        
              param['OTHERS'] = $('#hidOTHERS').val();
              $('#jqwDetailgrafik').jqxWindow('open');
              $.post('/home/detailhrm',param,function(data){
                $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'500px', height:'450px',position:'middle', resizable:false,title: 'Detil Info'});  
                $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
              });        
            }
          ";          
        }
        $judul = "Data Pembelian " . $rangenya;
        break;

      default:
        break;
    }
    
    $flotarea = array(
        'id'  =>  'placeholder',
        'title' => $judul,
        'chart' =>  $typeGrafik,
        'total'=> $showtotal,
        'height' => '460px',  //Setting a custom height,
        'legend' => $judul,
        'showvalue'=> 'true',
        'warna'=>'#38a43d',
        'click'=> $click,
        'resultset'=>$resultLine,
        'fields'=>'GRF_DESCRE~GRF_VALUES~'.$additional
    );

    $line1 = display_highchart($flotarea);
    $script = "";
    if($rangeTahun){//$param==511 && $param==512 && $param!=513 && $param!=531){
      $optTAHUNS = array(
        '2013'=>'2013',
        '2014'=>'2014',
        '2015'=>'2015',
        '2016'=>'2016');      
      $js = "   $('#divgrafik').empty();";
      $js .= "   $('#divgrafik').load('/home/showgrafik/".$param."/'+value);";
      $arrTable[] = array('group'=>6, 'urutan'=>1, 'type'=> 'cmb', 'namanya'=>"cmbTAHUNS", 'size'=>100, 'label'=>'Tahun', 'events'=>array('select'=>$js), 'option'=>$optTAHUNS,'value'=> $other=="" ? date('Y') : $other);  
    }
    $script = "<script>";
    $script .= "function jvBack(){";
    $script .= "   $('#divgrafik').empty();";
    $script .= "   $('#divgrafik').load('/home/showgrafik/".$param."');";
    $script .= "}";
    $script .= "</script>";
    $arrTable[] = array('group'=>6, 'urutan'=>98, 'type'=> 'hid', 'readonly'=>true,'namanya'=>"hidOTHERS", 'size'=>'100', 'value'=> $other);
    $arrTable[] = array('group'=>6, 'urutan'=>99, 'type'=> 'udf', 'namanya'=>"cmbTAHUNX", 'value'=> $line1);
    $arrForm =
        array(
          'arrTable'=>$arrTable,
          'param' =>null,
          'width' => 710,
          'height' => 410,
          'multicolumn'=>2,
          'form_create'=>false
        );
    $content = $script;
    $arrButton = array(
      "save"=>array("Kembali", "jvBack()","warning","backward","","fa-backward")
    );
    $content .= "<div style='height:10px'></div>";
    $content .= generateForm($arrForm,false);
    if($button){
      $content .= generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'80%',");  
    }
    
    return $content;    
  }  

  function grafikSPB(){
    $CI = get_instance();
    $CI->load->model('m_purchase');
    $CI->load->helper('highchart');
    // $TYPESS = $this->input->post('TYPESS')=="" ? 1 : $this->input->post('TYPESS');
    // $AUDITS = $this->input->post('AUDITS');
    // if($AUDITS==""){
    //   $AUDITS = $this->m_audit->getAudit_last();
    // }
    // param['AUDITS'] = '".$AUDITS."';

    $click = "
      var idents = e.point.additional;
      if(idents!=1){
        var param = {};
        param['IDENTS'] = idents;        
        param['DESCRE'] = e.point.name;
        $('#jqwDetailgrafik').jqxWindow('open');
        $.post('/home/detailinfospb',param,function(data){
          $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'800px', height:(0.75*screen.height),position:'middle', resizable:false,title: 'Detil Info'});  
          $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
        });        
      }
    ";
    $resultLine = $CI->m_purchase->getSPBOutstanding_list('outstanding', null, 'grafik');
    $flotarea = array(
        'id'  =>  'placeholder',
        'title' => 'SPB Outstanding',
        'chart' =>  "pie",
        'height' => '460px',  //Setting a custom height,
        'legend' => 'SPB Outstanding',
        'showvalue'=> 'false',
        'warna'=>'#38a43d',
        'click'=> $click,
        'resultset'=>$resultLine,
        'fields'=>'GRF_DESCRE~GRF_VALUE~GRF_DESCRE'
    );
    $line1 = display_highchart($flotarea);
    $TYPESS = 1;
    $content = "
        <div class='col-md-6'><div class=chart-inner>" . $line1 ."</div></div>
        <div class='col-md-6'>
          <div class=chart-inner>
            <div id='placeGrafik'>
              <table class='table table-striped'>
                <tr>
                  <th>Legend</th>
                  <th>Keterangan</th>
                </tr>
                <tr>
                  <td>0-3</td>
                  <td>Jatuh Tempo : 0 - 3 Hari</td>
                </tr>
                <tr>
                  <td>4-7</td>
                  <td>Jatuh Tempo : 4 - 7 Hari</td>
                </tr>
                <tr>
                  <td>8-10</td>
                  <td>Jatuh Tempo : 8 - 10 Hari</td>
                </tr>
                <tr>
                  <td>Belum Jatuh Tempo</td>
                  <td>Jatuh Tempo diatas 10 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 0-3</td>
                  <td>Terlambat : 0 - 3 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 4-7</td>
                  <td>Terlambat : 4 - 7 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 8-10</td>
                  <td>Terlambat : 8 - 10 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat diatas 10 hari</td>
                  <td>Terlambat diatas 10 Hari</td>
                </tr>
              </table>
            </div>
          </div>
        </div>";

    return $content;
  }  
  function grafikSPBs(){
    $CI = get_instance();
    $CI->load->model('m_purchase');
    $CI->load->helper('jqxchart');
    $click = "
      var idents = e.point.additional;
      if(idents!=1){
        var param = {};
        param['IDENTS'] = idents;        
        param['DESCRE'] = e.point.name;
        $('#jqwDetailgrafik').jqxWindow('open');
        $.post('/home/detailinfospb',param,function(data){
          $('#jqwDetailgrafik').jqxWindow({autoOpen: false,width:'800px', height:(0.75*screen.height),position:'middle', resizable:false,title: 'Detil Info'});  
          $(\"#jqwDetailgrafik\").jqxWindow('setContent', data);
        });        
      }
    ";
    $resultLine = $CI->m_purchase->getSPBOutstanding_list('outstanding', null, 'grafik');
    $flotarea = array(
        'id'  =>  'placeholder',
        'title' => 'SPB Outstanding',
        'chart' =>  "pie",
        'height' => '460px',  //Setting a custom height,
        'legend' => 'SPB Outstanding',
        'showvalue'=> 'false',
        'warna'=>'#38a43d',
        'click'=> $click,
        'resultset'=>$resultLine,
        'serieslabel'=>false,
        'showLabels'=>false,
        'layoutLegend'=>'right',
        'fields'=>'GRF_DESCRE~GRF_VALUE~GRF_DESCRE',
        'showPercent'=>false
    );
    $line1 = display_jqxchart($flotarea);
    $TYPESS = 1;
    $content = "<div class='col-md-12'>".$line1."</div>";
    $contentx = "
        <div class='col-md-6'><div class=chart-inner>" . $line1 ."</div></div>
        <div class='col-md-6'>
          <div class=chart-inner>
            <div id='placeGrafik'>
              <table class='table table-striped'>
                <tr>
                  <th>Legend</th>
                  <th>Keterangan</th>
                </tr>
                <tr>
                  <td>0-3</td>
                  <td>Jatuh Tempo : 0 - 3 Hari</td>
                </tr>
                <tr>
                  <td>4-7</td>
                  <td>Jatuh Tempo : 4 - 7 Hari</td>
                </tr>
                <tr>
                  <td>8-10</td>
                  <td>Jatuh Tempo : 8 - 10 Hari</td>
                </tr>
                <tr>
                  <td>Belum Jatuh Tempo</td>
                  <td>Jatuh Tempo diatas 10 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 0-3</td>
                  <td>Terlambat : 0 - 3 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 4-7</td>
                  <td>Terlambat : 4 - 7 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat 8-10</td>
                  <td>Terlambat : 8 - 10 Hari</td>
                </tr>
                <tr>
                  <td>Terlambat diatas 10 hari</td>
                  <td>Terlambat diatas 10 Hari</td>
                </tr>
              </table>
            </div>
          </div>
        </div>";

    return $content;
  }

  function emailPO(){
    $gridname = "jqxMasterpo";
    //====== grid
    $CI = get_instance();
    $CI->load->helper('jqxgrid');
    $url ='/purchase/nosj/getPOmail_list';;

    $button = array(
        "Send E-mail"=>array('Email','fa-envelope','jvSendemail()','warning','110')
      );
    $urutan=0;
    $hide=false;
    $col = array();
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'NO_PO',        'aw'=>'5%','label'=>'No.PO');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'VENDOR_NAME',  'aw'=>'15%','label'=>'Vendor','gc'=>true);
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'PO_DATE',      'aw'=>'6%','ga'=>'center','cf'=>'yyyy-MM-dd','adtype'=>'date','gc'=>true,'gt'=>true,'label'=>'Tgl.PO');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'STATUS',       'aw'=>'6%','label'=>'Status');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'CURR_CODE',    'aw'=>'3%','label'=>'Curr','group'=>'Nilai','ga'=>'center','gc'=>false,'gt'=>false);
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'TotalAkhir',   'aw'=>'7%','label'=>'Jumlah','group'=>'Nilai','ah'=>$hide,'ga'=>'right','gc'=>false,'gt'=>false,'cf'=>'f','adtype'=>'number');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'TotalRupiah',  'aw'=>'9%','label'=>'Jumlah(Rp)','group'=>'Nilai','ah'=>$hide,'ga'=>'right','gc'=>false,'gt'=>false,'cf'=>'f2','adtype'=>'number');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'COM_TERMSS',   'aw'=>'8%','label'=>'T.O.P','ah'=>$hide,'gc'=>false);
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'APPROVER',     'aw'=>'10%','label'=>'Disetujui Oleh','gc'=>false);
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'APPROVE_DATE', 'aw'=>'10%','label'=>'Tgl.Disetujui','cf'=>'yyyy-MM-dd HH:mm:ss','adtype'=>'date','gt'=>true,'gc'=>false);
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'user_input',   'aw'=>'10%','label'=>'Diinput Oleh');
    $col[] = array('lsturut'=>$urutan++, 'namanya'=>'VND_EMAILS',   'aw'=>'10%','label'=>'E-mail Vendor');

    $html = gGrid(array('url'=>$url, 
      'gridname'=>$gridname,
      'width'=>'100%',
      'autorowheight'=>true,
      'col'=>$col,
      'headerfontsize'=>10,
      'fontsize'=>10,
      'groupable'=>true,
      'button'=>$button,
      'showToolbar'=>true,
      'gridpadding'=>'padding:0px 5px 5px 5px'
    ));

    $content = "
    <style>
    .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
    .jqx-grid-column-header{text-align:center};
    </style>
    <script type='text/javascript'>
      function jvSendemail(){
        var selectedrowindex = $(\"#" . $gridname ."\").jqxGrid('getselectedrowindex');
        if(selectedrowindex == -1){
          alert('Pilih Data!');
          return;
        }
        var IDENTS = $(\"#" . $gridname . "\").jqxGrid('getrowid', selectedrowindex);
        var NOPO = $(\"#" . $gridname . "\").jqxGrid('getcellvalue', selectedrowindex,'NO_PO');
        var MAIL = $(\"#" . $gridname . "\").jqxGrid('getcellvalue', selectedrowindex,'VND_EMAILS');
        // window.location.href = 'mailto:'+MAIL+'?subject=[PO]'+NOPO+'&body=Dear%20Mr./Mrs.%2C';
        $.post('/purchase/purchaseorder/tagMail',{nopo:NOPO},function(pingpong){
          if(pingpong){
            alert(pingpong);
            var isinya = 'Dear%20Bapak%20/%20Ibu,%0D%0A%0D%0ATerlampir%20adalah%20PO%20dari%20PT%20Kemas%20kepada%20bapak%20/%20ibu,%0D%0A%0D%0AMohon%20dicek%20kembali%20dan%20ditanda%20tangani%20kolom%20konfirmasinya%20serta%20di%20email%20kembali%20ke%20kami.%0D%0A%0D%0ADitunggu%20konfirmasinya.%0D%0A%0D%0AJam%20terima%20barang%20di%20Gudang%20PT.Kemas%20sbb:%0D%0ASenin%20-%20Jumat%20:%20Pkl.%2009.00%20sd%2016.00%20WIB%0D%0ASabtu%20:%20Pkl.%2009.00%20sd%2012.00%20WIB%0D%0A%0D%0A%0D%0A%0D%0A%0D%0ADear%20Sir%20/%20Madam,%0D%0A%0D%0APlease%20find%20attached%20our%20PO%20for%20your%20reference,%0D%0A%0D%0APlease%20help%20re-check%20and%20email%20back%20to%20us%20with%20your%20signature%20and%20company%20stamp.%0D%0AFor%20import%20purpose,%20Please%20ALWAYS%20send%20us%20email%20of%20the%20COPY%20DOCUMENTS%20(%20Invoice,%20BL,%20packing%20list,%20commercial%20invoice,%20and/or%20AWB,%20Form%20E%20/%20AK%20if%20any%20)%20after%20your%20shipment,%20to%20avoid%20any%20discrepancies%20and%20late%20pick%20up.%0D%0A%0D%0ALook%20Forward%20to%20hear%20from%20you%20soon.%0D%0A%0D%0AThank%20you%20for%20your%20support.';
            window.location.href = 'mailto:'+MAIL+'?subject=[PO]'+NOPO+'&body='+isinya;
          }
        });
      }
    </script>
    ";
    $content .="<div id=contentMailpo style='position:relative;top:0px;text-align:center;height:100%'>" . $html ."</div>";

    return $content;
  }

  function scheduleEtd(){
    $CI = get_instance();
    $segment1 = $CI->uri->segment(1);
    $source = $segment1;
    $gridname = "jqxMoldschedule";
    //====== grid
    $CI = get_instance();
    $CI->load->helper('jqxgrid');
    $url ='/purchase/nosj/getKedatangan_list';

    $urut=0;
    $button = array(
        "Calendar"=>array('Print','fa-calendar','jvChangeView()','info'),
        "Excel"=>array('Excel','fa-file-excel-o','jvExcelKedatangan()','success','80')
      );
    $col = array(
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' => 'CI_rownum'        ,'label'=> 'Nomor PO',    'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' => 'ID_PO_DETAIL'     ,'label'=> 'Nomor PO',    'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>200,  'namanya' => 'NO_LINE_PO'       ,'label'=> 'No Line Po',  'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>'9%', 'namanya' => 'NO_SPB'           ,'label'=> 'Nomor SPB',   'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>'6%', 'namanya' => 'SPB_DATE'         ,'label'=> 'Tanggal SPB', 'cf'=>'yyyy-MM-dd','adtype'=>'date', 'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>'5%', 'namanya' => 'NO_PO'            ,'label'=> 'Nomor PO',    'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>'6%', 'namanya' => 'PO_DATE'          ,'label'=> 'Tanggal PO',  'cellpinned'=>true,'cf'=>'yyyy-MM-dd','adtype'=>'date'),
      array('lsturut'=>$urut++, 'aw'=>'15%','namanya' => 'VENDOR_NAME'      ,'label'=> 'Supplier'),
      array('lsturut'=>$urut++, 'aw'=>'31%','namanya' => 'PRODUCT_NAME'     ,'label'=> 'Item', 'adtype'=>'string'),
      array('lsturut'=>$urut++, 'aw'=>'4%', 'namanya' => 'SCH_QUANTY'       ,'label'=> 'Jumlah', 'group'=>'Jadwal', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>'4%', 'namanya' => 'UM_CODE'          ,'label'=> 'UoM', 'group'=>'Jadwal'),
      array('lsturut'=>$urut++, 'aw'=>'6%', 'namanya' => 'SCH_NUMETD'       ,'label'=> 'Kirim', 'group'=>'Jadwal'),
      array('lsturut'=>$urut++, 'aw'=>'6%', 'namanya' => 'SCH_NUMETA'       ,'label'=> 'Datang', 'group'=>'Jadwal','cf'=>'yyyy-MM-dd','adtype'=>'date'),
      array('lsturut'=>$urut++, 'aw'=>'4%', 'namanya' => 'QTY_MASUK'        ,'label'=> 'Masuk', 'group'=>'Informasi', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>'4%', 'namanya' => 'QTY_LPB_DITERIMA' ,'label'=> 'Diterima', 'group'=>'Informasi', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
    );

      // array('lsturut'=>$urut++, 'aw'=>50,  'namanya' =>  'VENDOR_CODE'   ,'label'=> 'Kode', 'group'=>'Supplier'),, 'group'=>'Supplier'
      // array('lsturut'=>$urut++, 'aw'=>184, 'namanya' =>  'ITEM_CODE'   ,'label'=> 'Kode Item', 'group'=>'Item'),
    $content = "
    <style>
    .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
    .jqx-grid-column-header{text-align:center};
    </style>
    <script>
      function jvExcelKedatangan(){
        var param = {};
        var filter = $(\"#".$gridname."\").jqxGrid('getfilterinformation');
        var sortby = $(\"#".$gridname."\").jqxGrid('getsortinformation');
        var rc = false;
        for (e = 0; e < filter.length; e++) {
          var filcol = '';
          for(x=0;x<filter[e].filter.getfilters().length;x++){
            if(rc){
              filcol += '<@e@>';
            }
            varValue = filter[e].filter.getfilters()[x].value;
            varTypes = filter[e].filter.getfilters()[x].type;
            varCondt = filter[e].filter.getfilters()[x].condition;
            finalFilter = varValue + '<@h@>' + varTypes + '<@h@>' + varCondt;
            filcol += finalFilter;
            rc = true;
          }
          param['FILTER'+e] = filter[e].filtercolumn +'<@>'+ filcol;
        }
        if(sortby.sortcolumn!=undefined){
          param['SORT'] = sortby.sortcolumn +'<@>'+sortby.sortdirection;  
        }
        // $('#parameter').val(param);
        url = '';
        var newWindow = window.open(url, name);
        if(param!=''){
          param = JSON.stringify(param);
        }
        var html = \"\";
        html += \"<html><head></head><body><form id='jadwalform' method='post' action='/purchase/order/exportdata'>\";
        html += \"<input type='hidden' name='param' id='param' value='\"+param+\"'/>\";
        html += \"</form><script type='text/javascript'>document.getElementById('jadwalform').submit()</sc\"+\"ript></body></html>\";
        newWindow.document.write(html);
        window.close();
        return newWindow;
      }
      function jvChangeView(){";
    $from = "app";
    if($source!="home"){
      if($source=='homeapp'){
        $from = "home";
      }      
    }else{
      $from = "home";
    }
    if($from!="home"){
      $content .= "self.location.replace('/purchase/order/calendar/vendor');";   
    }else{
      $content .="
        $('#content1').remove();
        var param = {};
        param['jenis'] = 1;
        param['parameter'] = id;
        urlgrid = '/purchase/order/calendar/vendor/home';
        $.post(urlgrid, param, function (data) {
            $('#contentJadwal').html('<div id=content1 style=\"overflow: auto; width: 100%; height: 100%;\">' + data + '</div>');
        });      
      ";
    }
    $content .= "
      }
    </script>
    ";

    $fn_dobelklik = "
      var args = event.args;
      var boundIndex = args.rowindex;
      var NO_PO = $('#".$gridname."').jqxGrid('getcellvalue', boundIndex, 'NO_PO');
      var NO_LINE_PO = $('#".$gridname."').jqxGrid('getcellvalue', boundIndex, 'NO_LINE_PO');
      var QTY_MASUK = $('#".$gridname."').jqxGrid('getcellvalue', boundIndex, 'QTY_MASUK');
      if(QTY_MASUK!='0'){
        var param = {};
        param['NO_PO'] = NO_PO;
        param['NO_LINE_PO'] = NO_LINE_PO;
        $('#jqwDetailkedatangan').jqxWindow('open');
        $.post('/purchase/lpb/detaillpb',param,function(data){
          $('#jqwDetailkedatangan').jqxWindow({isModal: true, showCollapseButton: true, autoOpen: false,width:(0.98 * screen.width) + 'px', height:(0.55*screen.height),position:'middle', resizable:false,title: 'Detail LPB'});  
          $(\"#jqwDetailkedatangan\").jqxWindow('setContent', data);
        });      
      }  
    ";

    $event = array(
      "rowdoubleclick" => $fn_dobelklik
    );    
    $html = gGrid(array('url'=>$url . "/", 
                            'gridname'=>$gridname,
                            'width'=>'100%',
                            'autorowheight'=>true,
                            'col'=>$col,
                            'headerfontsize'=>10,
                            'fontsize'=>10,
                            'groupable'=>true,
                            'event'=> $event,
                            'button'=>$button,
                            'showToolbar'=>true,
                            'gridpadding'=>'padding:0px 5px 0px 0px'
                            ));
    $content .="<div id=contentJadwal style='position:relative;top:0px;text-align:center;height:100%'>" . $html ."</div>";
    $content .= generateWindowjqx(array('window'=>'Detailkedatangan','title'=>'Detail Kedatangan','overflow'=>'auto'));
    if($source=="homeapp"){
      echo $content;
    }else{
      return $content;  
    }
  }

function calendarEtd($parameter, $source){
    $CI = get_instance();
    if($parameter=="vendor"){
      $SUBJECT = "VENDOR_NAME";
      $title = "Supplier :: '  + appointment.subject + '";
    }else{
      $title = "Informasi Kedatangan";
    }
    $url = '/purchase/nosj/getKedatangan_schedule/' . $parameter;
    $col[] = array('namanya' =>  'CI_Number','type'=> 'string');
    $col[] = array('namanya' =>  'VENDOR_NAME','type'=> 'string', 'subject'=>true);
    $col[] = array('namanya' =>  'ODR_STARTS'  ,'type'=> 'date', 'format'=>'yyyy-MM-dd HH:mm', 'fromdate'=>true);
    $col[] = array('namanya' =>  'ODR_ENDEDS'  ,'type'=> 'date', 'format'=>'yyyy-MM-dd HH:mm', 'todate'=>true);
    $col[] = array('namanya' =>  'SCH_NUMETA'  ,'type'=> 'string', 'include'=>true);
    $col[] = array('namanya' =>  'NO_PO'  ,'type'=> 'string', 'include'=>true);
    $col[] = array('namanya' =>  'VENDOR_CODE'  ,'type'=> 'string', 'include'=>true);
    $col[] = array('namanya' =>  'background'  ,'type'=> 'string', 'include'=>true);
    $col[] = array('namanya' =>  'calendar'  ,'type'=> 'string', 'include'=>true);
    $dateChange = "
                var args = event.args;
                var from = args.from.toString();
                var arrFrom = from.split('-');
                var fromdate = arrFrom[0] + '-' + arrFrom[1] + '-' + arrFrom[2].substr(0,2);
                var to = args.to.toString();
                var arrTo = to.split('-');
                var todate = arrTo[0] + '-' + arrTo[1] + '-' + arrTo[2].substr(0,2);
                var date = args.date;
              var sourcex =
              {
                dataType: 'json',
                dataFields: [
                  { name: 'CI_Number', type: 'string' },
                  { name: 'VENDOR_NAME', type: 'string' },
                  { name: 'ODR_STARTS', type: 'date', format: 'yyyy-MM-dd HH:mm' },
                  { name: 'ODR_ENDEDS', type: 'date', format: 'yyyy-MM-dd HH:mm' },
                  { name: 'SCH_NUMETA', type: 'string' },
                  { name: 'NO_PO', type: 'string' },
                  { name: 'VENDOR_CODE', type: 'string' },
                  { name: 'background', type: 'string' }
                ],
                id: 'CI_Number',
                url: '/purchase/nosj/getKedatangan_schedule/".$parameter."/' + fromdate +'/' + todate
              };
              var adapterx = new $.jqx.dataAdapter(sourcex);
              $('#scheduler').jqxScheduler('source', adapterx);       
    ";
    $cellClick = "
    alert('detanto');
    ";

    $appointmentClick = "
      var args = event.args;
      var appointment = args.appointment;
      var param = {};
      // param['PORNUM'] = appointment.NO_PO;
      param['JENISS'] = '".$parameter."';
      param['VENDOR'] = appointment.VENDOR_CODE;
      param['DATESS'] = appointment.SCH_NUMETA;
      $('#jqwDetailkedatangan').jqxWindow('open');
      $.post('/purchase/order/showKedatangan/',param,function(data){
        $('#jqwDetailkedatangan').jqxWindow({
          isModal: true, 
          showCollapseButton: true, 
          autoOpen: false, 
          height:'500px',
          width:'900px',
          position:'middle', 
          resizable:true,
          title: '&laquo; ".$title." &raquo;'});  
        $('#jqwDetailkedatangan').jqxWindow('setContent', data);
      });     
    ";
    if($parameter=="vendor"){
      $text = "SPB";
      $events = "jvSPB()";
    }else{
      $text = "Vendor";
      $events = "jvVendor()";
    }
    // $arrButton = array(
    //   '0'=>array(
    //     'text' => 'Kembali',
    //     'image'=> "<i style='position: relative; top: -2px' class='fa fa-backward'></i>",
    //     // 'events'=> "self.location.replace('/purchase/order')",
    //     'events'=> "jvKembali()",
    //     'theme'=> 'info',
    //     'width'=> 80),
    //   '1'=>array(
    //     'text' => 'Vendor',
    //     'image'=> "<i style='position: relative; top: -2px' class='fa fa-truck'></i>",
    //     // 'events'=> "self.location.replace('/purchase/order/calendar/vendor')",
    //     'events'=> "jvVendor()",
    //     'theme'=> 'danger',
    //     'width'=> 120),
    //   '2'=>array(
    //     'text' => 'SPB',
    //     'image'=> "<i style='position: relative; top: -2px' class='fa fa-file-text'></i>",
    //     // 'events'=> "self.location.replace('/purchase/order/calendar/spb')",
    //     'events'=> "jvSPB()",
    //     'theme'=> 'warning',
    //     'width'=> 80)      
    // );

    $arrButton = array(
      '0'=>array(
        'text' => 'Tabel SPB',
        'image'=> "<i style='position: relative; top: -2px' class='fa fa-backward'></i>",
        // 'events'=> "self.location.replace('/purchase/order')",
        'events'=> "jvKembali()",
        'theme'=> 'info',
        'width'=> 100),
      '1'=>array(
        'text' => $text,
        'image'=> "<i style='position: relative; top: -2px' class='fa fa-truck'></i>",
        // 'events'=> "self.location.replace('/purchase/order/calendar/vendor')",
        'events'=> $events,
        'theme'=> 'danger',
        'width'=> 120)     
    );    
    $arrToolbar = array('createToolbar'=>true,'toolbarname'=>"toolbarScheduler", 'arrButton'=>$arrButton);
    $html = generateToolbar($arrToolbar);
    $html .= scheduler(
      array(
        'col'=>$col, 
        'id'=>'CI_Number',
        'url'=>$url,
        'height'=>'92%',
        'defaultview'=>'monthView',
        'optionview'=>array('timelineMonthView',array('monthView', 'monthRowAutoHeight: true')),
        'events'=>array('appointmentClick'=>$appointmentClick, 'dateChange'=>$dateChange),
      )
    );
    // $html .= "<script>";
    // $html .= "$(document).ready(function () {";
    // $html .= "$('#scheduler').jqxScheduler({ height: 800 });";
    // $html .= "});";
    // $html .= "</script>";
    $html .= generateWindowjqx(array('window'=>'Detailkedatangan','title'=>'Detail Kedatangan','overflow'=>'auto'));
    // $this->_render('pages/home', $html);

    if($source=="home"){
      $html .= "
      <script>
        function jvKembali(){
          $('#content1').remove();
          var param = {};
          param['jenis'] = 1;
          param['parameter'] = id;
          urlgrid = '/purchase/order/listschedule/homeapp';
          $.post(urlgrid, param, function (data) {
              $('#contentJadwal').html('<div id=content1 style=\"overflow: auto; width: 100%; height: 100%;\">' + data + '</div>');
          });
          // self.location.replace('/purchase/order')
        }
        function jvVendor(){
          $('#content1').remove();
          var param = {};
          param['jenis'] = 1;
          param['parameter'] = id;
          urlgrid = '/purchase/order/calendar/vendor/home';
          $.post(urlgrid, param, function (data) {
              $('#contentJadwal').html('<div id=content1 style=\"overflow: auto; width: 100%; height: 100%;\">' + data + '</div>');
          });
          // self.location.replace('/purchase/order/calendar/vendor')
        }
        function jvSPB(){
          $('#content1').remove();
          var param = {};
          param['jenis'] = 1;
          param['parameter'] = id;
          urlgrid = '/purchase/order/calendar/spb/home';
          $.post(urlgrid, param, function (data) {
              $('#contentJadwal').html('<div id=content1 style=\"overflow: auto; width: 100%; height: 100%;\">' + data + '</div>');
          });
          // self.location.replace('/purchase/order/calendar/spb')
        }
     </script>   
      ";
      echo $html;
    }else{

      $html .= "
      <script>
        function jvKembali(){
          self.location.replace('/purchase/order')
        }
        function jvVendor(){
          self.location.replace('/purchase/order/calendar/vendor')
        }
        function jvSPB(){
          self.location.replace('/purchase/order/calendar/spb')
        }
     </script>   
      ";      
      return $html;
    }
}
function spboutstanding($source=null){
    $gridname = "jqxoutstanding";
    $CI = get_instance();
    //====== grid
    $CI->load->helper('jqxgrid');
    $url ='/purchase/nosj/getSpboutstanding_list';
    $urut=0;
    $col = array(
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'CI_rownum'       ,'label'=> 'Nomor PO', 'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>120,  'namanya' =>  'NO_SPB'          ,'label'=> 'Nomor SPB', 'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'SPB_DATE'        ,'label'=> 'Tanggal SPB', 'cf'=>'yyyy-MM-dd','adtype'=>'date', 'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'DUE_DATE'        ,'label'=> 'Due Date', 'cf'=>'yyyy-MM-dd','adtype'=>'date', 'cellpinned'=>true),      
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'APPROVE_DATE'    ,'label'=> 'Tanggal Setuju', 'cf'=>'yyyy-MM-dd','adtype'=>'date'),
      array('lsturut'=>$urut++, 'aw'=>155,  'namanya' =>  'REQUESTER'       ,'label'=> 'Peminta'),
      array('lsturut'=>$urut++, 'aw'=>200,  'namanya' =>  'DPR_DESCRE'      ,'label'=> 'Departemen'),
      array('lsturut'=>$urut++, 'aw'=>100,  'namanya' =>  'STATUS'          ,'label'=> 'Status'),
      array('lsturut'=>$urut++, 'aw'=>416,  'namanya' =>  'PRODUCT_NAME'    ,'label'=> 'Item'),
      array('lsturut'=>$urut++, 'aw'=>300,  'namanya' =>  'SPB_SPECSF'      ,'label'=> 'Spesifikasi'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_SPB'         , 'group'=>'Jumlah', 'label'=> 'SPB', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_PO'          , 'group'=>'Jumlah', 'label'=> 'PO', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_SPBPOS'      , 'group'=>'Jumlah', 'label'=> 'PO - SPB', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_MASUK'       , 'group'=>'Jumlah', 'label'=> 'Masuk', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_LPB_DITERIMA', 'group'=>'Jumlah', 'label'=> 'Diterima', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_LPBPOS'      , 'group'=>'Jumlah', 'label'=> 'LPB - PO', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'UM_CODE'         ,'label'=> 'Satuan'),
      array('lsturut'=>$urut++, 'aw'=>280,  'namanya' =>  'NOTE'            ,'label'=> 'Catatan')
    );

    $html = "
    <style>
      .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
      .jqx-grid-column-header{text-align:center};
    </style>
    <script>
      function jvChangeStatus(){
        var STATUS = $('#cmbSTATUS').val();
        var tmpS = $('#" . $gridname  . "').jqxGrid('source');
        tmpS._source.url = '" . $url . "/' + STATUS;
        $('#" . $gridname  . "').jqxGrid('source', tmpS);       
      }   
      function jvExcel(){
        var param = {};           
        var filter = $(\"#".$gridname."\").jqxGrid('getfilterinformation');
        var sortby = $(\"#".$gridname."\").jqxGrid('getsortinformation');
        var status = $('#cmbSTATUS').val();
        var rc = false;
        for (e = 0; e < filter.length; e++) {
          var filcol = '';
          for(x=0;x<filter[e].filter.getfilters().length;x++){
            if(rc){
              filcol += '<@e@>';
            }
            varValue = filter[e].filter.getfilters()[x].value;
            varTypes = filter[e].filter.getfilters()[x].type;
            varCondt = filter[e].filter.getfilters()[x].condition;
            finalFilter = varValue + '<@h@>' + varTypes + '<@h@>' + varCondt;
            filcol += finalFilter;
            rc = true;
          }
          // param['FILTER'+e] = filter[e].filtercolumn +'<@>'+filter[e].filter.getfilters()[0].value +'<@>'+filter[e].filter.getfilters()[0].type+'<@>'+filter[e].filter.getfilters()[0].condition;
          param['FILTER'+e] = filter[e].filtercolumn +'<@>'+ filcol;
        }
        if(sortby.sortcolumn!=undefined){
          param['SORT'] = sortby.sortcolumn +'<@>'+sortby.sortdirection;  
        }
        // $('#parameter').val(param);
        url = '/purchase/spb/exportdata';
        var newWindow = window.open(url, name);
        if(param!=''){
          param = JSON.stringify(param);
        }
        var html = \"\";
        html += \"<html><head></head><body><form id='myform' method='post' action='/purchase/spb/exportdata'>\";
        html += \"<input type='hidden' name='param' id='param' value='\"+param+\"'/>\";
        html += \"<input type='hidden' name='cmbSTATUS' id='param' value='\"+status+\"'/>\";
        html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</sc\"+\"ript></body></html>\";
        newWindow.document.write(html);
        window.close();
        return newWindow;
       }
    </script>
    ";
        // html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</script></body></html>\";
    $optSTATUS = array(
        '0'=>'Semua SPB',
        'Void'=>'Void',
        'outstanding'=>'Belum Ada PO',
        'Filled'=>'Filled',
        'Canceled'=>'Canceled',
        'Ordered'=>'Ordered',
        'Completed'=>'Completed',
        'Requested'=>'Requested');
    $arrCombo = array(
      'saring'=>array('width'=>'120','idents'=>'cmbSTATUS','source'=>$optSTATUS, 'value'=>'outstanding', 'placeHolder'=>'Status SPB','events'=>array('change'=>'jvChangeStatus()')),
      );    
    $button = array("Excel"=>array('Excel','fa-file-excel-o','jvExcel()','success',150));
    $content = gGrid(array( 'url'=>$url, 
                            'gridname'=>$gridname,
                            'width'=>'100%',
                            'col'=>$col,
                            'columnsheight'=>20,
                            'headerfontsize'=>10,
                            'fontsize'=>9,
                            'button'=> 'standar',
                            'toolbarCombo'=>$arrCombo,
                            'modul'=>'molding/mld_schedule',
                            'showToolbar'=>false,
                            'button'=>$button,
                            'showToolbar'=>true,
                            'groupable'=>true,
                            'gridpadding'=>'padding: 0px 10px 35px 10px'
                            ));
    
                            // 'groupcol'=>'VENDOR_NAME',
    // $content .="<div style='position:relative;top:0px;text-align:center'>" . $html ."</div>";  
    $content .= $html;  
    if($source!=""){
      echo $content;
    }else{
      return $content;
    }
}
function scheduleproduksi(){
  $url = '/nosj/getGeneralplanning_schedule';
  $col = array(
    array('namanya' =>  'ODR_IDENTS','type'=> 'string'),
    array('namanya' =>  'PRODUCT_NAME','type'=> 'string', 'subject'=>true),
    array('namanya' =>  'ODR_STARTS'  ,'type'=> 'date', 'format'=>'yyyy-MM-dd HH:mm', 'fromdate'=>true),
    array('namanya' =>  'ODR_ENDEDS'  ,'type'=> 'date', 'format'=>'yyyy-MM-dd HH:mm', 'todate'=>true),
    array('namanya' =>  'background'  ,'type'=> 'string', 'include'=>true)
  );
  $appointmentClick = "
    var args = event.args;
    var appointment = args.appointment;
    var param = {};
    param['IDENTS'] = appointment.id;
    $('#jqwJoborder').jqxWindow('open');
    $.post('/home/showjob/',param,function(data){
      $('#jqwJoborder').jqxWindow({
        isModal: true, 
        showCollapseButton: true, 
        autoOpen: false, 
        height:'500px',
        width:'700px',
        position:'middle', 
        resizable:true,
        title: 'Job Order'});  
      $('#jqwJoborder').jqxWindow('setContent', data);
    });     
  ";

  $dateChange = "
      var args = event.args;
      var from = args.from.toString();
      var arrFrom = from.split('-');
      var fromdate = arrFrom[0] + '-' + arrFrom[1] + '-' + arrFrom[2].substr(0,2);
      var to = args.to.toString();
      var arrTo = to.split('-');
      var todate = arrTo[0] + '-' + arrTo[1] + '-' + arrTo[2].substr(0,2);
      var date = args.date;
      var sourcex =
      {
          dataType: 'json',
          dataFields: [
              { name: 'ODR_IDENTS', type: 'string' },
              { name: 'PRODUCT_NAME', type: 'string' },
              { name: 'ODR_STARTS', type: 'date', format: 'yyyy-MM-dd HH:mm' },
              { name: 'ODR_ENDEDS', type: 'date', format: 'yyyy-MM-dd HH:mm' },
              { name: 'background', type: 'string' }
          ],
          id: 'ODR_IDENTS',
          url: '/nosj/getGeneralplanning_schedule/' + fromdate +'/' + todate
      };
      var adapterx = new $.jqx.dataAdapter(sourcex);
      $('#scheduler').jqxScheduler('source', adapterx);       
  ";

  $html = scheduler(
    array(
      'col'=>$col, 
      'id'=>'ODR_IDENTS',
      'url'=>$url,
      'defaultview'=>'timelineMonthView',
      'optionview'=>array('timelineMonthView','monthView'),
      'events'=>array('appointmentClick'=>$appointmentClick, 'dateChange'=>$dateChange),
    )
  );
  $html .= generateWindowjqx(array('window'=>'Joborder','title'=>'Detail Job Order','height'=>'200', 'maxwidths'=>'1350','overflow'=>'auto'));
  return $html;
}
function getInfoextension_list(){
  $source = "";
  $gridname = "jqxExtension";
  $CI = get_instance();
  //====== grid
  $CI->load->helper('jqxgrid');

  $url ="/master/nosj/getExtentiondashboard_list";
  $urutan = 0;
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_IDENTS','aw'=>120,'label'=>'idents','ah'=>true);
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_PLANTS','aw'=>'5%','label'=>'Plant','ga'=>'center');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_ROOMSS','aw'=>'14%','label'=>'Ruangan');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_DESCRE','aw'=>'18%','label'=>'PIC/Catatan');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_EXTTLP','aw'=>'5%','label'=>'Extention','ga'=>'center','adtype'=>'string','ga'=>'center');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EMP_EMAILC','aw'=>'43%','label'=>'Email');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EMP_JENISD','aw'=>'15%','label'=>'Lokasi');

  $html = "
  <script>
    function jvChangeUnit(){
      var PLANTS = $('#cmbPLANTS').val();
      if(PLANTS==''){
        PLANTS = 0;
      }
      var TIPESS = $('#cmbTIPESS').val();
      
      var tmpS = $('#" . $gridname  . "').jqxGrid('source');
      tmpS._source.url = '" . $url . "/' + PLANTS + '/' + TIPESS;
      $('#" . $gridname  . "').jqxGrid('source', tmpS);

      $('#" . $gridname  . "').jqxGrid('clearselection');
    }

    function jvChangeJenis(){
      var PLANTS = $('#cmbPLANTS').val();
      var TIPESS = $('#cmbTIPESS').val();
      var tmpS = $('#". $gridname . "').jqxGrid('source');
      tmpS._source.url = '" . $url . "/' + JENIS ;
      $('#" . $gridname  . "').jqxGrid('source', tmpS);

      $('#" . $gridname  . "').jqxGrid('clearselection');
    }
    function jvExcelExtension(){
      var param = {};           
      var filter = $(\"#".$gridname."\").jqxGrid('getfilterinformation');
      var sortby = $(\"#".$gridname."\").jqxGrid('getsortinformation');
      var cmbTIPESS = $('#cmbTIPESS').val();
      var cmbPLANTS = $('#cmbPLANTS').val();
      var rc = false;
      for (e = 0; e < filter.length; e++) {
        var filcol = '';
        for(x=0;x<filter[e].filter.getfilters().length;x++){
          if(rc){
            filcol += '<@e@>';
          }
          varValue = filter[e].filter.getfilters()[x].value;
          varTypes = filter[e].filter.getfilters()[x].type;
          varCondt = filter[e].filter.getfilters()[x].condition;
          finalFilter = varValue + '<@h@>' + varTypes + '<@h@>' + varCondt;
          filcol += finalFilter;
          rc = true;
        }
        // param['FILTER'+e] = filter[e].filtercolumn +'<@>'+filter[e].filter.getfilters()[0].value +'<@>'+filter[e].filter.getfilters()[0].type+'<@>'+filter[e].filter.getfilters()[0].condition;
        param['FILTER'+e] = filter[e].filtercolumn +'<@>'+ filcol;
      }
      if(sortby.sortcolumn!=undefined){
        param['SORT'] = sortby.sortcolumn +'<@>'+sortby.sortdirection;  
      }

      url = '/master/extention/exportdata';
      var newWindow = window.open(url, name);
      if(param!=''){
        param = JSON.stringify(param);
      }
      var html = \"\";
      html += \"<html><head></head><body><form id='myExtension' method='post' action='/master/extention/exportdata'>\";
      html += \"<input type='hidden' name='param' id='param' value='\"+param+\"'/>\";
      html += \"<input type='hidden' name='cmbTIPESS' id='param' value='\"+cmbTIPESS+\"'/>\";
      html += \"<input type='hidden' name='cmbPLANTS' id='param' value='\"+cmbPLANTS+\"'/>\";
      html += \"</form><script type='text/javascript'>document.getElementById('myExtension').submit()</sc\"+\"ript></body></html>\";
      newWindow.document.write(html);
      window.close();
      return newWindow;
     }
  </script>
  ";
      // html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</script></body></html>\";

  $optTIPESS = $CI->crud->getCommon(3,808);
  $cmbPLANTS = 0;
  $cmbTIPESS = 1;
  $optPLANTS = $CI->crud->getCommon(3,15);
  unset($optPLANTS['99']);

  $arrCombo = array(
    'jeniss'=>array('width'=>'180','idents'=>'cmbTIPESS','source'=>$optTIPESS, 'placeHolder'=>'Jenis','value'=>$cmbTIPESS,    'events'=>array('change'=>'jvChangeUnit()')),
    'plants'=>array('width'=>'120','idents'=>'cmbPLANTS','source'=>$optPLANTS, 'placeHolder'=>'Plant','value'=>$CI->empplants,'events'=>array('change'=>'jvChangeUnit()')),
  );

  $button = array("Excel"=>array('Excel','fa-file-excel-o','jvExcelExtension()','success',100));

  $html .= gGrid(array('url'=>$url ."/" . $CI->empplants ."/1",
    'gridname'=>$gridname,
    'width'=>'100%',
    'col'=>$col,
    'button'=>$button,
    'sumber'=>'server',
    'modul'=>'master/extention',
    'showToolbar'=>true,
    'gridpadding'=>'padding: 0px 5px 35px 0px',
    'filtermode'=>'filterrow',
    'toolbarCombo'=>$arrCombo
  ));

  $content =$html;  
  if($source!=""){
    echo $content;
  }else{
    return $content;
  }
}

function getInfoemail_list(){
  $source = "";
  $gridname = "jqxExtension";
  $CI = get_instance();
  //====== grid
  $CI->load->helper('jqxgrid');

  $url ="/master/nosj/getEmaildashboard_list";
  $urutan = 0;
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EXT_IDENTS','aw'=>120,'label'=>'idents','ah'=>true);
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EML_DESCRE','aw'=>'15%','label'=>'Keterangan');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EML_ADDRES','aw'=>'25%','label'=>'Alamat email');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EMP_FNAMES','aw'=>'30%','label'=>'Pengguna');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EML_JENISS','aw'=>'10%','label'=>'Jenis','ga'=>'center');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EML_TYPESS','aw'=>'8%','label'=>'Tipe');
  $col[] = array('lsturut'=>$urutan++,'namanya'=>'EML_LOCATN','aw'=>'12%','label'=>'Lokasi');

  $html = "
  <style>
    .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
    .jqx-grid-column-header{text-align:center};
  </style>
  <script>
    function jvChangeUnit(){

      varTIPESS = $('#cmbTIPESS').val();
      varJENISS = $('#cmbJENISS').val();
      varPLANTS = $('#cmbPLANTS').val();

      var tmpS = $('#" . $gridname  . "').jqxGrid('source');
      tmpS._source.url = '" . $url . "/' + varTIPESS + '/' + varJENISS + '/' + varPLANTS;
      $('#" . $gridname  . "').jqxGrid('source', tmpS);

      $('#" . $gridname  . "').jqxGrid('clearselection');
    }
    
    function jvExcelEmail(varFORMAT){
      var param = {};           
      var filter = $(\"#".$gridname."\").jqxGrid('getfilterinformation');
      var sortby = $(\"#".$gridname."\").jqxGrid('getsortinformation');

      varTIPESS = $('#cmbTIPESS').val();
      varJENISS = $('#cmbJENISS').val();
      varPLANTS = $('#cmbPLANTS').val();

      var rc = false;
      for (e = 0; e < filter.length; e++) {
        var filcol = '';
        for(x=0;x<filter[e].filter.getfilters().length;x++){
          if(rc){
            filcol += '<@e@>';
          }
          varValue = filter[e].filter.getfilters()[x].value;
          varTypes = filter[e].filter.getfilters()[x].type;
          varCondt = filter[e].filter.getfilters()[x].condition;
          finalFilter = varValue + '<@h@>' + varTypes + '<@h@>' + varCondt;
          filcol += finalFilter;
          rc = true;
        }
        // param['FILTER'+e] = filter[e].filtercolumn +'<@>'+filter[e].filter.getfilters()[0].value +'<@>'+filter[e].filter.getfilters()[0].type+'<@>'+filter[e].filter.getfilters()[0].condition;
        param['FILTER'+e] = filter[e].filtercolumn +'<@>'+ filcol;
      }
      if(sortby.sortcolumn!=undefined){
        param['SORT'] = sortby.sortcolumn +'<@>'+sortby.sortdirection;  
      }

      url = '/master/email/exportdata';
      var newWindow = window.open(url, name);
      if(param!=''){
        param = JSON.stringify(param);
      }
      var html = \"\";
      html += \"<html><head></head><body><form id='myExtension' method='post' action='/master/email/exportdata'>\";
      html += \"<input type='hidden' name='param' id='param' value='\"+param+\"'/>\";
      html += \"<input type='hidden' name='cmbTIPESS' id='param' value='\"+varTIPESS+\"'/>\";
      html += \"<input type='hidden' name='cmbJENISS' id='param' value='\"+varJENISS+\"'/>\";
      html += \"<input type='hidden' name='cmbPLANTS' id='param' value='\"+varPLANTS+\"'/>\";
      html += \"<input type='hidden' name='hidFORMAT' id='param' value='\"+varFORMAT+\"'/>\";
      html += \"</form><script type='text/javascript'>document.getElementById('myExtension').submit()</sc\"+\"ript></body></html>\";
      newWindow.document.write(html);
      window.close();
      return newWindow;
     }
  </script>
  ";
      // html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</script></body></html>\";

  $optTIPESS = array('0'=>'Semua','1'=>'Kemas','2'=>'Starpack','3'=>'Kotindo');
  $optJENISS = array('0'=>'Semua','1'=>'Internal','2'=>'External');
  $optPLANTS = $CI->crud->getCommon(3,15);
  unset($optPLANTS['99']);

  $arrCombo = array(
    'jeniss'=>array('width'=>'90','idents'=>'cmbTIPESS','source'=>$optTIPESS, 'placeHolder'=>'Jenis','value'=>1,'events'=>array('change'=>'jvChangeUnit()')),
    'tipess'=>array('width'=>'90','idents'=>'cmbJENISS','source'=>$optJENISS, 'placeHolder'=>'Tipe','value'=>1,'events'=>array('change'=>'jvChangeUnit()')),
    'plants'=>array('width'=>'80','idents'=>'cmbPLANTS','source'=>$optPLANTS, 'placeHolder'=>'Plant','value'=>$CI->empplants,'events'=>array('change'=>'jvChangeUnit()')),
  );
  $button = array("Excel"=>array('Excel','fa-file-excel-o','jvExcelEmail(1)','success',80),"CSV"=>array('Csv','fa-list-alt','jvExcelEmail(2)','warning',80));
  $html .= gGrid(array('url'=>$url ."/1/1/".$CI->empplants,
    'gridname'=>$gridname,
    'width'=>'100%',
    'col'=>$col,
    'button'=>$button,
    'sumber'=>'server',
    'modul'=>'master/extention',
    'showToolbar'=>true,
    'filtermode'=>'filterrow',
    'gridpadding'=>'padding: 0px 5px 35px 0px',
    'toolbarCombo'=>$arrCombo
  ));
  $content =$html;  
  if($source!=""){
    echo $content;
  }else{
    return $content;
  }
}   