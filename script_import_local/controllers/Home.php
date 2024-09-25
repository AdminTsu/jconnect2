<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
  var $deptmn;
  var $levels;

  function __construct(){
    parent::__construct();
		$this->load->model(array('m_jconnect'));
    $this->load->helper(array('ginput','dashboard','jqxgrid'));
    $username = $this->session->userdata('USR_NAMESS');
    $usr_logins = $this->session->userdata('USR_LOGINS');
    $levels = $this->session->userdata('USR_LEVELS');
    $loginid = $this->session->userdata('USR_IDENTS');
    $menuid = $this->session->userdata('USR_MENUID');
    $types = $this->session->userdata('USR_TYPESS');
    $usr_leveld = $this->m_common->getCommon_idents(2, $levels);
  }	
	public function index(){
    $this->level = $this->session->userdata('USR_LEVELS');
    $this->menuid = $this->session->userdata('USR_MENUID');
    // $this->load->view('v_login');
    $this->welcome();
	}
 	function welcome(){
    if($this->session->userdata('USR_LEVELS') == 99){
      $content = $this->dashboard();
      $content = '';
    }else{
      $content = '';
    }
    
    // $content = '';  
    $arrbread = array(
      array('link'=>'#','text'=>'Beranda'),
    );
    $link = "#";
    $url = $this->uri->segment(2);
    // $bc = generateBreadcrumb($arrbread);  
    $bc = '';  
    $this->_render('pages/home', $content, 'admin', $bc);
	}
  
  function notauthorized(){
    $content = "<br><br><br><br><br><center><h1><i class='fa fa-exclamation-triangle'></i>&nbsp;&nbsp;Maaf, anda tidak mempunyai akses ke aplikasi tersebut</h1>";
    $this->_render('pages/home', $content);
  }

  function dashboard(){
    $gridname = "jqxkpilist";
    $url ='/nosj/getSalesOTC/';

    $urut=0;
    $col[] = array('lsturut'=>$urut++,'namanya'=>  'idents', 'aw'=>100,'ah'=>true,'label'=>'Identitas');
    $col[] = array('lsturut'=>$urut++,'namanya' => 'CABANG', 'label' => 'Cabang', 'aw'=>'50%','adtype'=>'text');
    $col[] = array('lsturut'=>$urut++,'namanya' => 'SALES', 'label' => 'Sales',   'aw'=>'25%', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right');
    $col[] = array('lsturut'=>$urut++,'namanya' => 'TARGET', 'label' => 'Target', 'aw'=>'25%', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right');

    $optYEARSS = array(date('Y') => date('Y'));
    $cmbYEARSS = date('Y');
    $optMONTHS = array('01' =>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli',
              '08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'
    );
    $cmbMONTHS = date('m');


    $arrCombo = array(
      'tahun'=>array('width'=>'120','idents'=>'cmbYEARSS','source'=>$optYEARSS,'value'=>$cmbYEARSS, 'placeHolder'=>'Tahun'),
      'bulan'=>array('width'=>'120','idents'=>'cmbMONTHS','source'=>$optMONTHS,'value'=>$cmbMONTHS, 'placeHolder'=>'Bulan')
      );
    $button = array();
    $script = '';
    $content = $script;
    $content .= gGrid(array(  
                'url'=>'/nosj/getNosjnull' , 
                'gridname'=>$gridname,
                'width'=>'100%',
                'height'=>'90%',
                'col'=>$col, 
                'button'=> $button,
                'fontsize'=>11,
                'toolbarCombo'=>$arrCombo,
                'selectionmode'=>'singlecell',
                'columnsheight'=>30,
                'toolbarheight'=>60,
                'pageable'=>true,
                'sumber'=>'server'
              ));
    
    
    return $content;    
    
  }


  function dashboardx(){
    $segment1 = $this->uri->segment(1);
    $theme = $this->config->item('app_theme'); 
    $USR_THEMES = $this->session->userdata("USR_THEMES");

    if($USR_THEMES!=""){
      $theme = $USR_THEMES;
    }
    $returnnya = "
     <script type=\"text/javascript\">
      $(document).ready(function () {
        var layout = [{
            type: 'layoutGroup',
            orientation: 'horizontal',
            items: [{
              type: 'layoutGroup',
              orientation: 'vertical',
              width: '15%',
              items: [{
                type: 'documentGroup',
                height: '100%',
                minHeight: '25%',
                items: [{
                  type: 'documentPanel',
                  title: 'List',
                  contentContainer: 'ListGrafikPanel'
                  // initContent: function () {
                  //   initTeamDataTable();
                  // }
                }]
              }]
            },{
              type: 'layoutGroup',
              orientation: 'vertical',
              width: '85%',
              items: [{
                type: 'documentGroup',
                height: '100%',
                minHeight: '25%',
                items: [{
                  type: 'documentPanel',
                  title: 'Informasi',
                  contentContainer: 'Document1Panel'
                }]
              }]
            }]
          }];
        $('#jqxLayout').jqxLayout({ theme: '".$theme."', width: '100%', height: '100%', layout: layout });
        var source =
        {
          datatype: 'json',
          datafields: [
            { name: 'id' },
            { name: 'parentid' },
            { name: 'text' },
            { name: 'icon' },
            { name: 'nilai' }
          ],
          id: 'id',
          async: false,
          url: '/nosj/getGrafik_list'
        };
        var dataAdapter = new $.jqx.dataAdapter(source);
        dataAdapter.dataBind();
        var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
        $('#jqxTreeMenu').jqxTree({ source: records, height: '99%', width: '99%'});
        $('#jqxTreeMenu').jqxTree('expandAll');
        $('#jqxTreeMenu').on('select', function (event) {
          var args = event.args;
          var item = $('#jqxTreeMenu').jqxTree('getItem', args.element);
          var id = args.element.id;

          var ip;
          var recursion = function (object) {
            for (var i = 0; i < object.length; i++) {
              if (id == object[i].id) {
                nilai = object[i].nilai;
                break;
              } else if (object[i].items) {
                recursion(object[i].items);
              };
            };
          };
          recursion(records);
          $('#divgrafik').empty();
          $('#divgrafik').load('/home/showgrafik/'+nilai);
        });
        $('#jqxTreeMenu').jqxTree('selectItem', $('#jqxTreeMenu').find('li:nth-child(1)')[0]); 
      });
    </script>
    <div id=\"jqxLayout\">
      <div data-container='ListGrafikPanel'>
        <div id='jqxTreeMenu' style='overflow:none'></div>          
      </div>
      <div data-container=\"Document1Panel\">
        <div id=divgrafik style='padding:5px 0px 0px 0px; height:100%; width:100%'></div>
      </div>
    </div>
    ";
    $arrTabs = array(
          'fa fa-bar-chart^Dashboard'=>array('data'=>$returnnya)
        );

    if($this->usrlevel!=1){
      $user = $this->username;
    }else{
      $user = 1;
    }
    $result = $this->crud->getMenutree_app('1098703010', $user, 'beranda');
    foreach ($result['Hasil'] as $key => $value) {
                // $return = $CI->{$model}->{$function}(${$key_p});
      $function = $value->nilai;
      $arrTabs = array_merge($arrTabs, array($value->iconed ."^" . $value->text => array('data'=>$function())));
    }
    $content = "
    <style>
    .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
    .jqx-grid-column-header{text-align:center};
    </style>
    ";
    $content .= generateTabjqx(array(
                  'id'=>'Dashboard',
                  'width'=>'100%',
                  'tabwidth'=>'100%',
                  'arrTabs'=> $arrTabs,
                  'mepet'=>true
                  ));
                    // 'fa fa-check-square^Jadwal Kedatangan'=>array('data'=>scheduleEtd($segment1))
    $content .= generateWindowjqx(array('window'=>'Detailgrafik','title'=>'Info Detail','height'=>'200', 'minWidth'=>100, 'widths'=>'1000px','overflow'=>'auto'));
    return $content;

  }
  function old_dashboard(){
    $segment1 = $this->uri->segment(1);
    $theme = $this->config->item('app_theme'); 
    $USR_THEMES = $this->session->userdata("USR_THEMES");
    if($USR_THEMES!=""){
      $theme = $USR_THEMES;
    }    
    $returnnya = "
     <script type=\"text/javascript\">
      $(document).ready(function () {
        var layout = [{
            type: 'layoutGroup',
            orientation: 'horizontal',
            items: [{
              type: 'layoutGroup',
              orientation: 'vertical',
              width: '15%',
              items: [{
                type: 'documentGroup',
                height: '100%',
                minHeight: '25%',
                items: [{
                  type: 'documentPanel',
                  title: 'List',
                  contentContainer: 'ListGrafikPanel'
                  // initContent: function () {
                  //   initTeamDataTable();
                  // }
                }]
              }]
            },{
              type: 'layoutGroup',
              orientation: 'vertical',
              width: '85%',
              items: [{
                type: 'documentGroup',
                height: '100%',
                minHeight: '25%',
                items: [{
                  type: 'documentPanel',
                  title: 'Informasi',
                  contentContainer: 'Document1Panel'
                }]
              }]
            }]
          }];
        $('#jqxLayout').jqxLayout({ theme: '".$theme."', width: '100%', height: '100%', layout: layout });
        var source =
        {
          datatype: 'json',
          datafields: [
            { name: 'id' },
            { name: 'parentid' },
            { name: 'text' },
            { name: 'icon' },
            { name: 'nilai' }
          ],
          id: 'id',
          async: false,
          url: '/nosj/getGrafik_list'
        };
        var dataAdapter = new $.jqx.dataAdapter(source);
        dataAdapter.dataBind();
        var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
        $('#jqxTreeMenu').jqxTree({ source: records, height: '99%', width: '99%'});
        $('#jqxTreeMenu').jqxTree('expandAll');
        $('#jqxTreeMenu').on('select', function (event) {
          var args = event.args;
          var item = $('#jqxTreeMenu').jqxTree('getItem', args.element);
          var id = args.element.id;

          var ip;
          var recursion = function (object) {
            for (var i = 0; i < object.length; i++) {
              if (id == object[i].id) {
                nilai = object[i].nilai;
                break;
              } else if (object[i].items) {
                recursion(object[i].items);
              };
            };
          };
          recursion(records);
          $('#divgrafik').empty();
          $('#divgrafik').load('/home/showgrafik/'+nilai);
        });
        $('#jqxTreeMenu').jqxTree('selectItem', $('#jqxTreeMenu').find('li:nth-child(1)')[0]); 
      });
    </script>
    <div id=\"jqxLayout\">
      <div data-container='ListGrafikPanel'>
        <div id='jqxTreeMenu' style='overflow:auto'></div>          
      </div>
      <div data-container=\"Document1Panel\">
        <div id=divgrafik style='padding:5px 0px 0px 0px; height:100%; width:100%'></div>
      </div>
    </div>
    ";
    // <div id=divgrafik style='padding-top:15px'>".spboutstanding()."</div>
    // <div data-container=\"Document1Panel\"><div id=divgrafik style='padding-top:15px'>".spboutstanding()."</div></div>
// ".scheduleEtd($segment1)."
    // $arrSPB = array(
    //     'fa fa-check-square^Jadwal Kedatangan'=>array('data'=>$returnnya)
    //   );

    $arrJadwal = array(
        'fa fa-check-square^Jadwal Kedatangan'=>array('data'=>scheduleEtd($segment1))
      );

    $arrDashboard = array(
          'fa fa-bar-chart^Dashboard'=>array('data'=>$returnnya)
        );
    // $arrPurchasing = array(
    //       'fa fa-bar-chart^Grafik'=>array('data'=>grafikSPB())
    //     );

    $arrProduksi = array(
          'fa fa-calendar^Jadwal Produksi'=>array('data'=>scheduleproduksi()),
        );

    $arrEmailpo = array(
          'fa fa-envelope^Mail PO'=>array('data'=>emailPO())
        );

    switch ($this->empdeptmn) {
      case '22':
        $arrTabs = array_merge($arrEmailpo, $arrDashboard, $arrJadwal);
        break;      
      default:
        $arrTabs = $arrDashboard;
        break;
    }
    if($this->usrlevel==1){
      // $arrEmailpo, 
      $arrTabs = array_merge($arrDashboard, $arrJadwal);
    }
    $content = generateTabjqx(array(
                  'id'=>'Dashboard',
                  'width'=>'100%',
                  'tabwidth'=>'100%',
                  'arrTabs'=> $arrTabs,
                  'mepet'=>true
                  ));
                    // 'fa fa-check-square^Jadwal Kedatangan'=>array('data'=>scheduleEtd($segment1))
    $content .= generateWindowjqx(array('window'=>'Detailgrafik','title'=>'Info Detail','height'=>'200', 'minWidth'=>100, 'widths'=>'1000px','overflow'=>'auto'));
    return $content;
  }
  function showgrafik($parameter=0, $other=null, $other2=null){
    $return = "";        
    switch ($parameter) {
      case '1':
        $return = getInfoextension_list();
        break;
      case '2':
        $return = getInfoemail_list();
        break;
      case '3':
        $return = spboutstanding('home');
        break;
      case '211':
        $return = grafikSPB();
        break;
      case '212':
        $return = $this->grafikPurchasing($parameter,$other);
        break;
      case '213':
        $return = $this->grafikPOSummary($parameter,$other);
        break;
      case '501':
      case '502':
      case '503':
        $return = $this->getSms_list($parameter);
        break;
      case '511':
      case '512':
      case '513':
      case '521':
      case '522':
      case '523':
      case '524':
      case '525':
      case '531':
        $return = grafikHRM($parameter, $other, $other2);
        break;
      
      default:
        # code...
        break;
    }
    echo $return;
  }
  function getSms_list($parameter){
    $this->load->helper('jqxgrid');

    $col[] = array('lsturut'=>1, 'namanya'=>'ID','ah'=>true);
    $col[] = array('lsturut'=>2, 'namanya'=>'ReceivingDateTime','aw'=>'12%','label'=>'Tanggal', 'cellclassname'=>true);
    $col[] = array('lsturut'=>3, 'namanya'=>'EMP_PLANTS',       'aw'=>'4%','label'=>'Plant', 'cellclassname'=>true);
    $col[] = array('lsturut'=>4, 'namanya'=>'NIK',              'aw'=>'6%','label'=>'NIK', 'cellclassname'=>true);
    $col[] = array('lsturut'=>5, 'namanya'=>'EMP_FNAMES',       'aw'=>'15%','label'=>'Nama', 'cellclassname'=>true);
    $col[] = array('lsturut'=>6, 'namanya'=>'EMP_UNIORG',       'aw'=>'19%','label'=>'Unit Organisasi', 'cellclassname'=>true);
    $col[] = array('lsturut'=>7, 'namanya'=>'SenderNumber',     'aw'=>'12%','label'=>'Nomor', 'cellclassname'=>true);
    $col[] = array('lsturut'=>8, 'namanya'=>'Alasan',           'aw'=>'16%','label'=>'Alasan', 'cellclassname'=>true);
    $col[] = array('lsturut'=>9, 'namanya'=>'TextDecoded',      'aw'=>'16%','label'=>'Pesan', 'cellclassname'=>true);
    $cellclassfunc_content ="
    if (rowData.Alasan == '' || rowData.EMP_UNIORG == '' || rowData.NIK == '' || rowData.EMP_PLANTS == '' || isNaN(rowData.EMP_PLANTS)==true) {
        return 'red';
    }
    ";
    foreach ($col as $key=>$value) {
      $fieldnya[]=$value['namanya'];
    }
    $paramurl = array('col'=>json_encode($fieldnya),'prosesdi'=>json_encode(array('NIK'=>array('EMP_PLANTS','EMP_FNAMES', 'EMP_UNIORG'),'Alasan'=>4)));

    switch ($parameter) {
      case '502':
        $param  = "TRL";
        break;
      case '503':
        $param  = "ABS";
        break;
      default:
        $param  = "";
        unset($col);
        $col[] = array('lsturut'=>1, 'namanya'=>'ID','ah'=>true);
        $col[] = array('lsturut'=>2, 'namanya'=>'SenderNumber',     'aw'=>'15%','label'=>'Nomor');
        $col[] = array('lsturut'=>3, 'namanya'=>'ReceivingDateTime','aw'=>'15%','label'=>'Tanggal');
        $col[] = array('lsturut'=>3, 'namanya'=>'TextDecoded',      'aw'=>'70%','label'=>'Pesan');
        $paramurl = "";
        $cellclassfunc_content = "";
        break;
    }
    $url = '/nosj/getSMS_list/'.$param;

    $button = array("Excel"=>array('Excel','fa-file-excel-o','jvExcelSms()','success',100));
    $gridname = "jqxSms";
    $grid = gGrid(array(  
                          'url'=>$url, 
                          'gridname'=>$gridname,
                          'width'=>'100%',
                          'col'=>$col,
                          'fromdb'=>false,
                          'button'=>$button,
                          'cellclassfunc_content'=>$cellclassfunc_content,
                          'showtoolbar'=>true,
                          'gridpadding'=>'padding: 0px 5px 35px 0px',
                          'filtermode'=>'filterrow',
                          'paramurl'=>$paramurl
                        )
            );
    return $grid;
  }
  function grafikPurchasing($YEAR, $MONTH){
    $this->load->model('m_grafik');
    $this->load->helper('jqxchart');

    $start = 2013;
    $ended = date('Y');

    for($e=$start;$e<=$ended;$e++){
      $optTAHUNS[$e] = $e;
    }
    $arrTags = array(
      'url'=>'/master/vendor/tag',
      'limit'=>1,
      'tokenvalue'=>'id'
    );
    $arrTagsItem = array(
      'url'=>'/master/item/tag/null/1',
      'tokenvalue'=>'id',
      'tambah'=>true,
      'limit'=>1,
      'zindex'=>'18002',
      'size'=>'500'
    );    
    $urutan = 0;
    $optFILTER = array('1'=>'Kode Item', '2'=>'Nama Item');
    $optBULANS = array(
      '0'=>'Semua',
      '1'=>'Januari',
      '2'=>'Februari',
      '3'=>'Maret',
      '4'=>'April',
      '5'=>'Mei',
      '6'=>'Juni',
      '7'=>'Juli',
      '8'=>'Agustus',
      '9'=>'September',
      '10'=>'Oktober',
      '11'=>'November',
      '12'=>'Desember');
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya'=>"cmbTAHUNS", 'size'=>100, 'label'=>'Tahun', 'option'=>$optTAHUNS,'value'=> date('Y'));
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb' ,'label'=>'Bulan', 'namanya' =>'cmbBULANS','size' => '100', 'option'=>$optBULANS, 'value'=>'');
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'label'=>'Nama Vendor','namanya' =>'txtVENDOR','size' => '300','value'=>'','tagsinput' => $arrTags);
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'label'=>'Filter','namanya' =>'cmbFILTER','size' => '120','option' => $optFILTER);
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'label'=>'Kode Item',  'namanya' =>'txtITMCOD','size' => '400','value'=>'','tagsinput' => $arrTagsItem);

    $arrForm =
        array(
          'arrTable'=>$arrTable,
          'param' =>null,
          'width' => 710
        );


    $content = "<script type=\"text/javascript\">";
    $content .= "
      function jvGrafik(){
        var tinggi=520;
        var param = {};
        param['TAHUNS'] = $('#cmbTAHUNS').val();
        param['BULANS'] = $('#cmbBULANS').val();
        param['VENDOR'] = $('#txtVENDOR').val();
        param['ITMCOD'] = $('#txtITMCOD').val();
        param['FILTER'] = $('#cmbFILTER').val();
        var selectedIndex = $('#cmbBULANS').jqxComboBox('selectedIndex');
        var item = $('#cmbBULANS').jqxComboBox('getItem', selectedIndex);
        param['BULAND'] = item.label;
        $(\"#jqwDetailgrafik\").jqxWindow('open');
        $.post('/home/getGrafik',param,function(datax){
          // $('#placeholder').remove();
          // $('#jqxchartX').append(datax);
          var lebar = $(window).width();
          var tinggi = $(window).height();
          $('#jqwDetailgrafik').jqxWindow({isModal: true, showCollapseButton: false, autoOpen: false,width: lebar, height:tinggi,position:'middle', resizable:true,title: 'Detail Grafik'});  
          $(\"#jqwDetailgrafik\").jqxWindow('setContent', datax);
        });
      }      
    ";
    $content .= "</script>";

    $arrButton = array(
      "save"=>array("Grafik", "jvGrafik()","inverse","backward","","fa-signal")
    );

    $content .= "<div style='height:10px'></div>";
    $content .= generateForm($arrForm,false);
    $content .= generateButton(array('posisi'=>'float','createToolbar'=>false,'button'=>$arrButton),"width:'80%',");
    $content .= "<div class='col-md-12'><div id=jqxchartX style='width:100%;height:100%'></div></div>";
        return $content;
  }  
  function grafikPOSummary(){
    // $optTAHUNS = array(
    //   '2013'=>'2013',
    //   '2014'=>'2014',
    //   '2015'=>'2015',
    //   '2016'=>'2016');      

    $start = 2013;
    $ended = date('Y');

    for($e=$start;$e<=$ended;$e++){
      $optTAHUNS[$e] = $e;
    }
    $arrTags = array(
      'url'=>'/master/vendor/tag',
      'limit'=>1,
      'tokenvalue'=>'id'
    );
    $arrTagsItem = array(
      'url'=>'/master/item/tag/null/1',
      'tokenvalue'=>'id',
      'tambah'=>true,
      'limit'=>1,
      'zindex'=>'18002',
      'size'=>'500'
    );    
    $urutan = 0;
    $optFILTER = array('1'=>'Kode Item', '2'=>'Nama Item');
    $optVALUES = array('1'=>'Qty PO', '2'=>'Nilai PO');
    $optBULANS = array(
      '0'=>'Semua',
      '1'=>'Januari',
      '2'=>'Februari',
      '3'=>'Maret',
      '4'=>'April',
      '5'=>'Mei',
      '6'=>'Juni',
      '7'=>'Juli',
      '8'=>'Agustus',
      '9'=>'September',
      '10'=>'Oktober',
      '11'=>'November',
      '12'=>'Desember');
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya'=>"cmbTAHUNS", 'size'=>100, 'label'=>'Tahun', 'option'=>$optTAHUNS,'value'=> date('Y'));
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb' ,'label'=>'Bulan', 'namanya' =>'cmbBULANS','size' => '100', 'option'=>$optBULANS, 'value'=>'');
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'label'=>'Nama Vendor','namanya' =>'txtVENDOR','size' => '300','value'=>'','tagsinput' => $arrTags);
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'label'=>'Filter','namanya' =>'cmbFILTER','size' => '120','option' => $optFILTER);
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'label'=>'Nilai','namanya' =>'cmbVALUES','size' => '120','option' => $optVALUES);
    $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'label'=>'Kode Item',  'namanya' =>'txtITMCOD','size' => '400','value'=>'','tagsinput' => $arrTagsItem);

    $script = "<script type=\"text/javascript\">";
    $script .= "
      function jvGrafik(){
        var tinggi=520;
        var param = {};
        param['TAHUNS'] = $('#cmbTAHUNS').val();
        param['BULANS'] = $('#cmbBULANS').val();
        param['VENDOR'] = $('#txtVENDOR').val();
        param['ITMCOD'] = $('#txtITMCOD').val();
        param['FILTER'] = $('#cmbFILTER').val();
        param['VALUES'] = $('#cmbVALUES').val();
        // var item = $('#cmbBULANS').jqxComboBox('getItem', selectedIndex);
        var selectedIndex = $('#cmbBULANS').jqxComboBox('selectedIndex');
        var item = $('#cmbBULANS').jqxComboBox('getItem', selectedIndex);
        param['BULAND'] = item.label;
        $(\"#jqwDetailgrafik\").jqxWindow('open');
        $.post('/home/getGrafik',param,function(datax){
          // $('#placeholder').remove();
          // $('#jqxchartX').append(datax);
          var lebar = $(window).width();
          var tinggi = $(window).height();
          $('#jqwDetailgrafik').jqxWindow({isModal: true, showCollapseButton: false, autoOpen: false,width: lebar, height:tinggi,position:'middle', resizable:true,title: 'Detail Grafik'});  
          $(\"#jqwDetailgrafik\").jqxWindow('setContent', datax);
        });
      }

      function jvExcel(){
        var param = {};
        param['TAHUNS'] = $('#cmbTAHUNS').val();
        param['BULANS'] = $('#cmbBULANS').val();
        param['VENDOR'] = $('#txtVENDOR').val();
        param['ITMCOD'] = $('#txtITMCOD').val();
        param['FILTER'] = $('#cmbFILTER').val();
        param['VALUES'] = $('#cmbVALUES').val();
        // var item = $('#cmbBULANS').jqxComboBox('getItem', selectedIndex);
        var selectedIndex = $('#cmbBULANS').jqxComboBox('selectedIndex');
        var item = $('#cmbBULANS').jqxComboBox('getItem', selectedIndex);
        param['BULAND'] = item.label;
        
        url = '/purchase/laporan/exportdata';
        var newWindow = window.open(url, name);
        if(param!=''){
          param = JSON.stringify(param);
        }
        var html = \"\";
        html += \"<html><head></head><body><form id='myform' method='post' action='/purchase/laporan/exportdata'>\";
        html += \"<input type='hidden' name='param' id='param' value='\"+param+\"'/>\";
        html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</sc\"+\"ript></body></html>\";
        newWindow.document.write(html);
        window.close();
        return newWindow;
      }      
    ";
    $script .= "</script>";
    
    $arrForm =
        array(
          'arrTable'=>$arrTable,
          'param' =>null,
          'width' => 710
        );
    $content = $script;
    $arrButton = array(
      "save"=>array("Grafik", "jvGrafik()","inverse","backward","","fa-signal"),
      "excel"=>array("Excel", "jvExcel()","success","backward","","fa-file-excel-o")
    );

    $content .= "<div style='height:10px'></div>";
    $content .= generateForm($arrForm,false);
    $content .= generateButton(array('posisi'=>'float','createToolbar'=>false,'button'=>$arrButton),"width:'80%',");
    $content .= "<div class='col-md-12'><div id=jqxchartX style='width:100%;height:100%'></div></div>";
    $content .= generateWindowjqx(array('window'=>'Detailgrafik','title'=>'Info Detail','height'=>'200', 'widths'=>'1440px', 'maxWidth'=>'1500px','overflow'=>'auto'));                         
    // $content .= "
    //         <div id=\"jqwDetailgrafik\">
    //             <div id=\"windowHeader\">
    //             </div>
    //             <div style=\"overflow: hidden;\" id=\"windowContent\">
    //             </div>
    //         </div>
    // ";
    return $content;
  }
  function getGrafik(){
    $this->load->model('m_grafik');
    $this->load->helper('jqxchart');
    $TAHUNS = $this->input->post('TAHUNS');
    $BULANS = $this->input->post('BULANS');
    $BULAND = $this->input->post('BULAND');
    $VENDOR = $this->input->post('VENDOR');
    $ITMCOD = $this->input->post('ITMCOD');
    $FILTER = $this->input->post('FILTER');
    $VALUES = $this->input->post('VALUES');
    if($TAHUNS==""){
      $YEAR = date('Y');  
    }else{
      $YEAR = $TAHUNS;
    }
    if($VENDOR=="" && $ITMCOD==""){
      $resultLine = $this->m_grafik->grfPchLocation($YEAR, $BULANS, $VALUES);
      $typeGrafik = "pie";
      $judul = "Data Pembelian ";
      $arrTable[] = array('group'=>6, 'urutan'=>98, 'type'=> 'hid', 'readonly'=>true,'namanya'=>"hidOTHERS", 'size'=>'100');
      $arrForm =
          array(
            'arrTable'=>$arrTable,
            'param' =>null,
            'width' => 710
          );

      $showtotal = false;
      $click = "";
      $additional = "";

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
          'showLegend'=>true,
          'showPercent'=>true,
          'fields'=>'GRF_DESCRE~GRF_VALUES~'.$additional
      );

      $line1 = display_jqxchart($flotarea);
      $arrButton = array(
        "save"=>array("Grafik", "jvGrafik()","inverse","backward","","fa-signal")
      );
      $html = generateForm($arrForm,false);
      // $content .= generateButton(array('posisi'=>'float','createToolbar'=>false,'button'=>$arrButton),"width:'80%',");
      $html .= "<div class='col-md-12'><div id=jqxchartX style='width:100%;height:100%'>".$line1."</div></div>";      
      // $html = $this->grafikPurchasing($YEAR, $BULANS);
    }else{
      if($VENDOR!=""){
        $JUDULS = "Summary PO by VENDOR" ;
        $AXIS = 'BULAN';
        $FIELDS[] = array("field"=>"BULAN");
        $FIELDNYA = $this->m_grafik->grfPOSummary('ITEM', $YEAR, $BULANS, $VENDOR, $ITMCOD, $FILTER, $VALUES);
        foreach ($FIELDNYA->result() as $key) {
          $FIELDS[] = array('field'=>$key->ITEM_CODE);
        }
      $customTooltip = "function (value, itemIndex, serie, group, categoryValue, categoryAxis) { 
  var kodeItem = serie.dataField;
  var jsonData = JSON.parse(jsonItem);
  var itemName = jsonData[kodeItem];
  return '<div style=\"text-align:left;z-index:99999\">'+ itemName +' : ' + value.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, \"$1,\"); +'</div>';
}";
      }else{
        $JUDULS = "Summary PO by ITEM" ;
        $AXIS = 'VENDOR';
        $FIELDS[] = array("field"=>"VENDOR");
        $FIELDS[] = array("field"=>"VENDOR_NAME");
        $FIELDNYA = $this->m_grafik->grfPOSummary('ITEM', $YEAR, $BULANS, $VENDOR, $ITMCOD, $FILTER, $VALUES);
        foreach ($FIELDNYA->result() as $key) {
          $FIELDS[] = array('field'=>$key->ITEM_CODE);
        }
        $customTooltip = "function (value, itemIndex, serie, group, categoryValue, categoryAxis) { 
  var kodeItem = serie.dataField;
  var dataItem = dataAdapter.records[itemIndex];
  var jsonData = JSON.parse(jsonItem);
  var itemName = jsonData[kodeItem];
  return '<div style=\"text-align:left\"><b>'+ dataItem.VENDOR_NAME +'</b><br/>'+ itemName +' : ' + value.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, \"$1,\"); +'</div>';
}";        
      }

      if($VENDOR!=""){
        $FIELDNYA = $this->m_grafik->grfPOSummary('BULAN', $YEAR, $BULANS, $VENDOR, $ITMCOD, $FILTER, $VALUES);
        foreach ($FIELDNYA->result() as $key => $value) {
          $arrITEM[$value->ITEM_CODE] = $value->PRODUCT_NAME;
        }        
      }else{
        $FIELDNYA = $this->m_grafik->grfPOSummary('VENDOR', $YEAR, $BULANS, $VENDOR, $ITMCOD, $FILTER, $VALUES);  
        foreach ($FIELDNYA->result() as $key => $value) {
          $arrITEM[$value->ITEM_CODE] = $value->PRODUCT_NAME;
        }        
      }
      $json = "var jsonItem = '{";
      $rc = false;
      if(isset($arrITEM)){
        foreach ($arrITEM as $e => $n) {
          if($rc) $json .= ",";
          $json .= '"' . $e . '" : "' . $n .'"';
          $rc=true;
        }      
      }
      $json .= "}';";

      $tooltip = array("toolTipCustom"=>$customTooltip);

      $flotarea = array(
          'id'  =>  'placeholder',
          'title' => $JUDULS,
          'chart' =>  "column",
          'xAxistitle'=> $BULANS!=0 ? $BULAND : "Bulan",
          'yAxistitle'=> "Qty PO",
          'width' =>  "100%",  //Setting a custom width
          'height' => '500px',  //Setting a custom height,
          'legend' => 'User akses',
          'total'=>true,
          'method'=>'POST',
          'textRotationAngle'=>'-45',
          'data'=>"ITMCOD:'". $ITMCOD . "',VENDOR:'".$VENDOR."',YEAR:'".$YEAR."',BULAN:'".$BULANS."',FILTER:'".$FILTER."', VALUES:'".$VALUES."'",
          'totaldesc'=>"Total Dokumen",
          // 'totalvalu'=>$TOTVAL,
          'url'=>'/nosj/posummaryjson',
          'passfirst'=>true,
          'showvalue'=> 'false',
          'fields'=>$FIELDS,
          'rotation'=>'-90',
          'axis'=>$AXIS,
          'showLabels'=>false,
          'additionalscript'=>$json,
          'tooltip'=>$tooltip,
          'showBorderLine'=>false
      );
      $html = display_jqxchart($flotarea);       
    }
    // $this->_render('pages/home', $html, 'admin', $bc);
    echo $html;
  }
  function detailhrm(){
    $JENISS = $this->input->post('JENISS');
    $IDENTS = $this->input->post('IDENTS');
    $OTHERS = $this->input->post('OTHERS');
    $gridname = "jqxDetailinfo";
    //====== grid
    $CI = get_instance();
    $CI->load->helper('jqxgrid');

    $url ='/nosj/getKaryawangrafikgrid_list/'.$JENISS.'/'.$IDENTS."/".$OTHERS;

    $urut=0;
    $arrCol = array(
      array('lsturut'=>$urut++, 'aw'=>80,  'namanya' =>  'EMP_IDENTS'    ,'label'=> 'Nomor PO', 'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>'60',  'namanya' =>  'EMP_NOMORS'    ,'label'=> 'NIK'),
      array('lsturut'=>$urut++, 'aw'=>'275', 'namanya' =>  'EMP_FNAMES'    ,'label'=> 'Nama'),
    );
    $combine = false;
    switch ($JENISS) {
      case '522':
        $descre = "Usia";
        $tahun = '80';
        $align = 'right';
        $combine = true;
        break;      
      case '521':
        $descre = "Masa Kerja";
        $tahun = '135';
        $align = 'left';
        $combine = true;
        break;
      
      default:
        # code...
        break;
    }
    if($combine){
      $arrCol = array_merge($arrCol, array(array('lsturut'=>$urut++, 'aw'=>$tahun,  'namanya' =>  'EMP_TAHUNS'    ,'label'=> $descre, 'ga'=>$align)));
    }

    $col = $arrCol;

    $content = "
    ";
    $html = gGrid(array('url'=>$url . "/", 
                            'gridname'=>$gridname,
                            'width'=>'100%',
                            'col'=>$col,
                            'modul'=>'molding/mld_schedule',
                            'showToolbar'=>false,
                            'creategrid'=>true
                            ));
    $content .="<div id=ContentPanel1 style='position:relative;top:0px;text-align:center'><div id=content1>" . $html ."</div></div>";
    echo $content;
  }

  function detailinfospb(){
    $DESCRE = str_replace(" ", "", $this->input->post('DESCRE'));
    $gridname = "jqxDetailinfo";
    //====== grid
    $CI = get_instance();
    $CI->load->helper('jqxgrid');
    $url ='/purchase/nosj/getSpboutstanding_list/outstanding/'.$DESCRE.'/detail';

    $urut=0;
    $col = array(
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'CI_rownum'     ,'label'=> 'Nomor PO', 'ah'=>true),
      array('lsturut'=>$urut++, 'aw'=>120,  'namanya' =>  'NO_SPB'        ,'label'=> 'Nomor SPB', 'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'SPB_DATE'      ,'label'=> 'Tanggal SPB', 'cf'=>'yyyy-MM-dd','adtype'=>'date', 'cellpinned'=>true),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'DUE_DATE'      ,'label'=> 'Due Date', 'cf'=>'yyyy-MM-dd','adtype'=>'date', 'cellpinned'=>true),      
      array('lsturut'=>$urut++, 'aw'=>155,  'namanya' =>  'REQUESTER'     ,'label'=> 'Peminta'),
      array('lsturut'=>$urut++, 'aw'=>200,  'namanya' =>  'DPR_DESCRE'    ,'label'=> 'Departemen'),
      array('lsturut'=>$urut++, 'aw'=>100,  'namanya' =>  'STATUS'        ,'label'=> 'Status'),
      array('lsturut'=>$urut++, 'aw'=>416,  'namanya' =>  'PRODUCT_NAME'  ,'label'=> 'Item'),
      array('lsturut'=>$urut++, 'aw'=>60,   'namanya' =>  'QTY_SPB'       ,'label'=> 'Jumlah SPB', 'cf'=>'f', 'adtype'=>'number', 'ga'=>'right'),
      array('lsturut'=>$urut++, 'aw'=>80,   'namanya' =>  'UM_CODE'       ,'label'=> 'Satuan'),
      array('lsturut'=>$urut++, 'aw'=>280,  'namanya' =>  'NOTE'          ,'label'=> 'Catatan')
    );

    $content = "
    <style>
    .jqx-widget-content {-moz-box-sizing: content-box; box-sizing: content-box; -ms-touch-action: none; -moz-background-clip: padding; -webkit-text-size-adjust: none; background-clip: padding-box; -webkit-background-clip: padding-box; -webkit-tap-highlight-color: rgba(0,0,0,0); font-family: Verdana,Arial,sans-serif; font-style: normal; font-size: 10px; border-color: #c7c7c7; background: #fff; }
    .jqx-grid-column-header{text-align:center};
    </style>
    <script>
      function jvExceloutstanding(){
        var param = {};
        var filter = $(\"#".$gridname."\").jqxGrid('getfilterinformation');
        var sortby = $(\"#".$gridname."\").jqxGrid('getsortinformation');
        var status = 'outstanding';
        var descre = '".$DESCRE."';
        for (e = 0; e < filter.length; e++) {
          param['FILTER'+e] = filter[e].filtercolumn +'<@>'+filter[e].filter.getfilters()[0].value;;
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
        html += \"<input type='hidden' name='descre' id='param' value='\"+descre+\"'/>\";
        html += \"</form><script type='text/javascript'>document.getElementById('myform').submit()</sc\"+\"ript></body></html>\";
        newWindow.document.write(html);
        window.close();
        return newWindow;
      }
    </script>    
    ";
    $button = array("Excel"=>array('Excel','fa-file-excel-o','jvExceloutstanding()','success',80));    
    $html = gGrid(array('url'=>$url . "/", 
                            'gridname'=>$gridname,
                            'width'=>'100%',
                            'autorowheight'=>true,
                            'col'=>$col,
                            'button'=> $button,
                            'modul'=>'molding/mld_schedule',
                            'groupable'=>true,
                            'showToolbar'=>true,
                            'creategrid'=>true
                            ));
    
                            // 'groupcol'=>'VENDOR_NAME',
    $content .="<div id=ContentPanel1 style='position:relative;top:0px;text-align:center'><div id=content1>" . $html ."</div></div>";
    echo $content;
  }
  function showjob(){
    $this->load->model('m_ppic');
    $IDENTS = $this->input->post('IDENTS');
    $resultset = $this->m_ppic->getSchedule_detail($IDENTS)->row();

    $arrTable[] = array('group'=>1, 'urutan'=>1, 'type'=> 'hid', 'namanya' =>'ID', 'label'=>'Identitas', 'size' => '300','value'=> $IDENTS);
    if(isset($resultset)){
      $arrTable[] = array('group'=>1, 'urutan'=>1, 'type'=> 'udf', 'namanya' =>'CUSTOMER', 'value'=> "<kbd><kbd>Info Customer</kbd></kbd>");
      $arrTable[] = array('group'=>1, 'urutan'=>2, 'type'=> 'view', 'namanya' =>'CUSTOMER', 'label'=>'Customer', 'size' => '300','value'=> $resultset->CUSTOMER_NAME);
      $arrTable[] = array('group'=>1, 'urutan'=>3, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Nomor CO', 'size' => '300','value'=> $resultset->NO_CO);
      $arrTable[] = array('group'=>1, 'urutan'=>4, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Nomor PO', 'size' => '300','value'=> $resultset->NO_PO_CUS);
      $arrTable[] = array('group'=>1, 'urutan'=>5, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Item', 'size' => '300','value'=> $resultset->ITEM_NAME_CO);
      $arrTable[] = array('group'=>1, 'urutan'=>6, 'type'=> 'udf', 'namanya' =>'CUSTOMER', 'value'=> "<kbd><kbd>Info JO</kbd></kbd>");
      $arrTable[] = array('group'=>1, 'urutan'=>7, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Job Order', 'size' => '300','value'=> $resultset->ODR_JOBNUM);
      $arrTable[] = array('group'=>1, 'urutan'=>8, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Item', 'size' => '300','value'=> $resultset->ITEM_NAME_JO);
      $arrTable[] = array('group'=>1, 'urutan'=>9, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Jumlah', 'size' => '300','value'=> number_format($resultset->ODR_PLNQTY));
      $arrTable[] = array('group'=>1, 'urutan'=>10, 'type'=> 'view', 'namanya' =>'JOBNUM', 'label'=>'Status', 'size' => '300','value'=> $resultset->ODR_STATUS);
    }
    $arrForm1 =
        array(
          'type'=>'view',
          'arrTable'=>$arrTable,
          'width' => 410,
          'modul' => 'konfirm',
          'nameForm' => 'formgw',
          'ftinggi' => '100%'
        );
    $form1 = generateForm($arrForm1, false);

    echo $form1;
  }
}