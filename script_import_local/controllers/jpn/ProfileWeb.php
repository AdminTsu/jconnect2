<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileWeb extends MY_Controller {
    var $tables;
    var $modul;
    var $identcolumn;
    var $username;
    var $datesave;
    var $adminpage;
    var $userid;
    var $level;
    var $loginid;
    var $menuid;
    var $types;

    function ProfileWeb()
    {
        parent::__construct();
        $this->load->helper(array('ginput','jqxgrid'));
        $this->load->model(array('m_common','m_master','m_pekerja','m_client'));

        $this->modul = $this->router->fetch_class();
        $this->adminpage = $this->config->item('adminpage');
        $this->username = $this->session->userdata('USR_NAMESS');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->types = $this->session->userdata('USR_TYPESS');
        $this->datesave = date('Y-m-d H:i:s');
    }

    function vchange()
    {
        $username = $this->userid;

        $formname = 'formgw';
        $content = '
            <div class="col-lg-8">
                <form form-group mt-3 method="post" action="/profileweb/save" id="'.$formname.'">
                    <div class="row">
                        <div class="col-12">
                            <div style="text-align: left;"><b><h4>パスワードの変更</h4></b></div>
                        </div><br><br>
                        <div class="col-4">
                            <div style="text-align: right;">ユーザー名</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"  onblur="this.placeholder = "名前を入力してください" placeholder="名前を入力してください" value='.$username.' readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">パスワード</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control valid" name="txtPass1" id="txtPass1" type="password" onfocus="this.placeholder = """ onblur="this.placeholder = パスワードの入力" placeholder="パスワードの入力">
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">合格確認</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control" name="txtPass2" id="txtPass2" type="password" onfocus="this.placeholder = """ onblur="this.placeholder = パスワード入力の検証" placeholder="パスワード入力の検証">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <center><button type="submit" class="button button-contactForm boxed-btn" onclick="jvSave()">保存</button></center>
                        </div>
                    </div>
                </form>
            </div>
        ';
        $script = "
        <script>
            // function jvValidate(){
            //     $('#".$formname."').jqxValidator('validate');
            //  }

            function jvSave(){
                alert('coba tombol');return;

                var a  = $('#txtPass1' ).val();
                var b  = $('#txtPass2').val();

                alert(a +'~'+ b +'~'+ a.length +'~'+ a+'='+b);
                return;

                if(a.length < 4){
                    alert('最小4文字');
                    return;
                }

                if(a != b){
                    alert('パスワードが違う');
                    return;
                }else{
                   if(confirm('データ保存?')){
                        document.".$formname.".submit();
                   } 
                }
            }
        </script>
        
        ";
            
        $content .= $script;
        $data['title'] = 'パスワードの変更';
        $data['content'] = $content;

        $this->load->view('jpn/v_info',$data);
    }

    function save(){
        $pass1 = $this->input->post('txtPass1');
        echo md5($pass1);die();

        $input = array(
            'USR_PASSWD' => md5($this->input->post('txtPass1')),
        );

        $this->crud->useTable('T_MAS_USERSS');
        $this->crud->save($input, array('USR_LOGINS '=> $this->session->userdata('USR_LOGINS')));
        $this->crud->unsetMe();

        $redirect = '/home/welcome';
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect); 
        }
    }

    function vinfo()
    {
        $userid = $this->userid;
        $username = $this->username;
        $level = $this->level;

        if($level == 1){
            $level = '管理者';
        }elseif($level == 2){
            $level = 'ユーザー';
        }else{
            $level = 'スーパーアドミン';
        }
         
        $content = '
            <div class="col-lg-8">
                <form form-group mt-3>
                    <div class="row">
                        <div class="col-12">
                            <div style="text-align: left;"><b><h4>ユーザー情報</h4></b></div>
                        </div><br><br>
                        <div class="col-4">
                            <div style="text-align: right;">ユーザー名</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"  onblur="this.placeholder = "名前を入力してください" placeholder="名前を入力してください" value='.$userid.' readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">ユーザー名</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="name" onblur="this.placeholder = "氏名住所入力" placeholder="氏名住所入力" value='.$username.' readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="text-align: right;">レベル</div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onblur="this.placeholder = "レベル入力" placeholder="レベル入力" value='.$level.' readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        ';

        $data['title'] = 'プロフィール情報';
        $data['content'] = $content;

        $this->load->view('jpn/v_info',$data);
    }

    function info_pekerja()
    {
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'ホーム'),
            array('link'=>'#','text'=> '労働者情報'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vinfo_pekerja(),'admin',$bc);
    }

    function vinfo_pekerja()
    {
        $param = $this->loginid;
        $arrColumn = array(
            'txtLOGINS' =>'PKR_LOGNID',
            'txtNOMPKR' =>'PKR_NOMPKR',
            'txtNAMESS' =>'PKR_NAMESS',
            'txaADDRES' =>'PKR_ADDRES',
            'txtBIRTHP' =>'PKR_TMPLHR',
            'datBIRTHD' =>'PKR_TGLLHR',
            'txtFOTOSS' =>'PKR_FOTOSS',
            'txtNOMKTP' =>'PKR_NOMKTP',
            'cmbSEXESS' =>'PKR_JNSKLM',
            'cmbRELIGN' =>'PKR_RELIGN',
            'cmbEDUCTN' =>'PKR_EDUCID',
            'cmbMARRID' =>'PKR_MARRID',
            'txtNOMTLP' =>'PKR_NOMTLP',
            'txtNOMRHP' =>'PKR_NOMRHP',
            'txtWALINM' =>'PKR_WALINM',
            'txtWALIHP' =>'PKR_WALIHP',
            'cmbACTIVE' =>'PKR_ACTIVE',
            'txtEXPRNC' =>'PKR_EXPRNC',
            'txtEXPNPT' =>'PKR_EXPNPT',
            'txtEXPBDG' =>'PKR_EXPBDG',
            'txtEXPPOS' =>'PKR_EXPPOS',
            'txtSRTKT1' =>'PKR_SRTKT1',
            'txtSRTKT2' =>'PKR_SRTKT2'
        );

        $clientid = $this->m_pekerja->getPekerjaID($param,1);
        foreach($clientid as $baris=>$kolom){
            $idnya = $kolom;
        }

        $column = $this->m_pekerja->getPekerja_edit($idnya,1);
        $readonly = true;

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        $arrNamanya = array(
            'txtBIRTHP'=>array(
                'size'=> '160',
                'value'=> $txtBIRTHP,
                ),
            'datBIRTHD'=>array(
                'type'=>'dat',
                'size'=> '280',
                'value'=> $datBIRTHD
                )
        );

        $optActive = $this->crud->getCommon(3,6);
        $optSEXESS = array(''=>'','1'=>'Pria','2'=>'Wanita');
        $optRLGION = $this->crud->getCommon(3,1);
        $optLSTEDU = $this->crud->getCommon(3,3);
        $optSTATUS = $this->crud->getCommon(3,4);
        $optMERRID = $this->crud->getCommon(3,14);
        $optEXPRNC = array('0'=>'--Pilih--','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun','6'=>'Lebih Dari 5 Tahun');

        $onSuccess = 'jvSave()';

        $ruleFNAMES = array(array('rule'=>'empty','message'=>'名前が未記入です'));
        $ruleNOMKTP = array(array('rule'=>'empty','message'=>'ID番号未記入'));
        $ruleSEXESS = array(array('rule'=>'empty','message'=>'性別はまだ決まっていません'));
        $ruleRELIGN = array(array('rule'=>'empty','message'=>'宗教は選ばれていない!'));
        $ruleEDUCTN = array(array('rule'=>'empty','message'=>'教育は、まだ選ばれていない!'));
        $ruleMARRID = array(array('rule'=>'empty','message'=>'配偶者の有無はまだ決まっていません'));
        $ruleADDRES = array(array('rule'=>'empty','message'=>'家の状況が埋まっていない！'));
        $ruleRMHSTS = array(array('rule'=>'empty','message'=>'アドレスが選択されていません'));
        $rulePHONE1 = array(array('rule'=>'empty','message'=>'電話機が埋まっていません', 'onSuccess'=>$onSuccess));

        if($txtFOTOSS == ''){
            $txtFOTOSS = '';
            $txtFOTOSS_bc = '';
        }else{
            $txtFOTOSS_bc = $txtFOTOSS;
            $txtFOTOSS = 'upload/pekerja/'.$param.'/'.$txtFOTOSS;
        }

        if($txtSRTKT1 == ''){
            $txtSRTKT1 = '';
            $txtSRTKT1_bc = '';
        }else{
            $txtSRTKT1_bc = $txtSRTKT1;
            $txtSRTKT1 = 'upload/pekerja/'.$param.'/'.$txtSRTKT1;
        }

        if($txtSRTKT2 == ''){
            $txtSRTKT2 = '';
            $txtSRTKT2_bc = '';
        }else{
            $txtSRTKT2_bc = $txtSRTKT2;
            $txtSRTKT2 = 'upload/pekerja/'.$param.'/'.$txtSRTKT2;
        }

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMPKR','label'=>'N.I.P (労働者ID番号)',  'size'=>'150','value'=> isset($column) ? $txtNOMPKR : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNAMESS','label'=>'名称',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtFOTOSS', 'label'=>'写真', 'size'=>'150','value'=>isset($column) ? $txtFOTOSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>$arrNamanya,'label'=>'tempat/tanggal Lahir',  'size'=>'100','value'=> isset($column) ? $txtBIRTHP : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMKTP', 'masked'=>'999999-999999-9999','label'=>'IDカード','size' => '150','value'=> isset($column) ? $txtNOMKTP : "", 'validator'=>$ruleNOMKTP);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbSEXESS', 'size'=>'150','label'=>'性別','option'=>$optSEXESS, 'value'=> isset($column) ? (isset($status) ? $cmbSEXESS_DESC : $cmbSEXESS) : "",'validator'=>$ruleSEXESS);    
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbRELIGN', 'size'=>'150', 'label'=>'宗教','option'=>$optRLGION,  'value'=> isset($column) ? (isset($status) ? $cmbRELIGN_DESC : $cmbRELIGN) : "",'validator'=>$ruleRELIGN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbEDUCTN', 'size'=>'150','label'=>'教育','option'=>$optLSTEDU,  'value'=> isset($column) ? (isset($status) ? $cmbEDUCTN_DESC : $cmbEDUCTN)  : "",'validator'=>$ruleEDUCTN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbMARRID', 'size'=>'150','label'=>'配偶者の有無','option'=>$optMERRID, 'value'=> isset($column) ? (isset($status) ? $cmbMARRID_DESC : $cmbMARRID) : "",'validator'=>$ruleMARRID);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txa', 'namanya' =>'txaADDRES','label'=>'住所',  'size'=>'300','value'=> isset($column) ? $txaADDRES : "",'validator'=>$ruleADDRES);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMTLP', 'masked'=>'999-999999999','label'=>'電話番号','size' => '150','value'=> isset($column) ? $txtNOMTLP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMRHP', 'masked'=>'9999-9999-999999','label'=>'携帯電話番号','size' => '150','value'=> isset($column) ? $txtNOMRHP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbACTIVE','label'=>'ステータス',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'txtEXPRNC','label'=>'仕事・インターン経験',  'size'=>'150','value'=> isset($column) ? $txtEXPRNC : "",'option'=>$optEXPRNC);
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPNPT','label'=>'会社名',  'size'=>'300','value'=> isset($column) ? $txtEXPNPT : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPBDG','label'=>'会社分野',  'size'=>'300','value'=> isset($column) ? $txtEXPBDG : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPPOS','label'=>'ポジション',  'size'=>'300','value'=> isset($column) ? $txtEXPPOS : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtSRTKT1', 'label'=>'サーティフィケート1', 'size'=>'150','value'=>isset($column) ? $txtSRTKT1 : '');
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtSRTKT2', 'label'=>'サーティフィケート2', 'size'=>'150','value'=>isset($column) ? $txtSRTKT2 : '');

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtFOTOSS_bc','label'=>'写真キャプション', 'value'=> $txtFOTOSS_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT1_bc','label'=>'証明書の説明 1', 'value'=> $txtSRTKT1_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT2_bc','label'=>'証明書の説明 2', 'value'=> $txtSRTKT2_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidLOGNID','label'=>'', 'value'=> $idnya);
        
        $formname = 'formgw';
        $formcommand = "/profile/save_pekerja";
        $button = "";
        $arrForm =
          array(
            'type'=>'edit',
            'param'=>$idnya,
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            'ftinggi' => '100%',
            'createtab'=>true,
            'tabname'=> array(
                '1'=>'Data Pekerja',
                '2'=>'Pengalaman dan Sertifikasi'
            )
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){
            });

            function jvSave(){
                if(confirm('Simpan Data?')){
                    document.".$formname.".submit();
                }
            }
            
        </script>
        ";
            
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        $data['title'] = 'Edit Profil '.$this->username;
        $data['content'] = $content;

        $this->load->view('v_info',$data);
    }

    function save_pekerja(){
        $PKR_IDENTS = $this->input->post('hidIDENTS');
        $PKR_LOGNID = $this->input->post('hidLOGNID');
        $PKR_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $PKR_ACTIVE = $this->input->post('cmbACTIVE');
        $PKR_ADDRES = $this->input->post('txaADDRES');
        $PKR_TMPLHR = $this->input->post('txtBIRTHP');
        $PKR_TGLLHR = $this->input->post('datBIRTHD');
        $PKR_NOMKTP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMKTP'))));
        $PKR_JNSKLM = $this->input->post('cmbSEXESS');
        $PKR_RELIGN = $this->input->post('cmbRELIGN');
        $PKR_EDUCID = $this->input->post('cmbEDUCTN');
        $PKR_MARRID = $this->input->post('cmbMARRID');
        $PKR_NOMTLP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMTLP'))));
        $PKR_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $PKR_WALINM = $this->input->post('txtWALINM');
        $PKR_WALIHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtWALIHP'))));
        $PKR_ACTIVE = $this->input->post('cmbACTIVE');
        $PKR_EXPRNC = $this->input->post('txtEXPRNC');
        $PKR_EXPNPT = $this->input->post('txtEXPNPT');
        $PKR_EXPBDG = $this->input->post('txtEXPBDG');
        $PKR_EXPPOS = $this->input->post('txtEXPPOS');
        $PKR_SRTKT1 = $this->input->post('txtSRTKT1');
        $PKR_SRTKT2 = $this->input->post('txtSRTKT2');

        $input = array(
            'PKR_LOGNID' => $PKR_LOGNID,
            'PKR_NAMESS' => $PKR_NAMESS,
            'PKR_ACTIVE' => $PKR_ACTIVE,
            'PKR_ADDRES' => $PKR_ADDRES,
            'PKR_TMPLHR' => $PKR_TMPLHR,
            'PKR_TGLLHR' => $PKR_TGLLHR,
            'PKR_NOMKTP' => $PKR_NOMKTP,
            'PKR_JNSKLM' => $PKR_JNSKLM,
            'PKR_RELIGN' => $PKR_RELIGN,
            'PKR_EDUCID' => $PKR_EDUCID,
            'PKR_MARRID' => $PKR_MARRID,
            'PKR_NOMTLP' => $PKR_NOMTLP,
            'PKR_NOMRHP' => $PKR_NOMRHP,
            'PKR_WALINM' => $PKR_WALINM,
            'PKR_WALIHP' => $PKR_WALIHP,
            'PKR_ACTIVE' => $PKR_ACTIVE,
            'PKR_EXPRNC' => $PKR_EXPRNC,
            'PKR_EXPNPT' => $PKR_EXPNPT,
            'PKR_EXPBDG' => $PKR_EXPBDG,
            'PKR_EXPPOS' => $PKR_EXPPOS
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'PKR';
            $TYPES = 'PKR';
            $YEAR = date('Y');
            $PKR_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'PKR_NOMPKR'=>$PKR_CODESS,
                'PKR_USRCRT'=>$this->userid,
                'PKR_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'PKR_USRUPD'=>$this->userid,
                'PKR_DATUPD'=>$this->datesave
            ));
        }
        
        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }

        // upload foto user
        if($_FILES['txtFOTOSS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_FOTOSS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_FOTOSS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }
            
            $img_info          = pathinfo($_FILES['txtFOTOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
    
            move_uploaded_file($_FILES['txtFOTOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FOTOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
            $this->crud->unsetMe();
        }

        // upload sertifikat 1
        if($_FILES['txtSRTKT1']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_SRTKT1',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_SRTKT1',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }
            
            $img_info          = pathinfo($_FILES['txtSRTKT1']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
    
            move_uploaded_file($_FILES['txtSRTKT1']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SRTKT1'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
            $this->crud->unsetMe();
        }

        // upload sertifikat 2
        if($_FILES['txtSRTKT2']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_SRTKT2',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','PKR_SRTKT2',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }
            
            $img_info          = pathinfo($_FILES['txtSRTKT2']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
    
            move_uploaded_file($_FILES['txtSRTKT2']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SRTKT2'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/home/welcome';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function info_rekanan()
    {
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Info Rekanan'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vinfo_rekanan(),'admin',$bc);
    }

    function vinfo_rekanan()
    {
        $param = $this->loginid;
        $arrColumn = array(
            'txtNOMORS' =>'CLI_NOMORS',
            'cmbASPECS' =>'CLI_ASPECS',
            'txtNAMESS' =>'CLI_NAMESS',
            'txtCONTRY' =>'CLI_CONTRY',
            'txtADDRES' =>'CLI_ADDRES',
            'txaDESCRE' =>'CLI_DESCRE',
            'txtPHONES' =>'CLI_PHONES',
            'txtFAXNUM' =>'CLI_FAXNUM',
            'txtMOBILE' =>'CLI_MOBILE',
            'txtCONTRY_DESC' =>'CONTRY',
            'txtPROVNC' =>'CLI_PROVNC',
            'txtPROVNC_DESC' =>'PROVNC',
            'txtCITYSS' =>'CLI_CITYSS',
            'txtCITYSS_DESC' =>'CITY',
            'cmbACTIVE' =>'CLI_ACTIVE'
        );

        $clientid = $this->m_client->getClientID($param,1);
        foreach($clientid as $baris=>$kolom){
            $idnya = $kolom;
        }

        $column = $this->m_client->getClient_edit($idnya,1);
        $readonly = true;

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        // ----------------- Combobox atau Autotag START
        $CountryTag = array(
            'limit'=>1,
            'data'=>$txtCONTRY.'~'.$txtCONTRY_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/country";}'
        );

        $ProvinceTag = array(
            'limit'=>1,
            'data'=>$txtPROVNC.'~'.$txtPROVNC_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/province/"+ $("#txtCONTRY").val();}'
        );

        $CityTag = array(
            'limit'=>1,
            'data'=>$txtCITYSS.'~'.$txtCITYSS_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/city/"+ $("#txtCONTRY").val()+"/"+$("#txtPROVNC").val();}'
        );

        $optASPECS = $this->m_client->getComboBidang();
        $optActive = $this->crud->getCommon(3,6);

        $disabled_des = false;

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMORS','label'=>'N.I.C (Nomor Induk Client)',  'size'=>'100','value'=> isset($column) ? $txtNOMORS : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Client',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbASPECS', 'size'=>'250','label'=>'Bidang Pekerjaan','option'=>$optASPECS, 'value'=> isset($column) ? (isset($status) ? $cmbASPECS_DESC : $cmbASPECS) : ""); 

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCONTRY', 'label'=>'Negara', 'size'=>'300','value'=>isset($column) ? $txtCONTRY : "",'tagsinput' => $CountryTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPROVNC', 'label'=>'Provinsi', 'size'=>'300','value'=>isset($column) ? $txtPROVNC : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCITYSS', 'label'=>'Kota', 'size'=>'300','value'=>isset($column) ? $txtCITYSS : "",'tagsinput' => $CityTag,'disabled'=>$disabled_des);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txa', 'namanya' =>'txtADDRES','label'=>'Alamat',  'size'=>'200','value'=> isset($column) ? $txtADDRES : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPHONES', 'masked'=>'999-999999999','label'=>'No. Telp.','size' => '150','value'=> isset($column) ? $txtPHONES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtFAXNUM', 'masked'=>'999-999999999','label'=>'No. Fax.','size' => '150','value'=> isset($column) ? $txtFAXNUM : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtMOBILE', 'masked'=>'9999-9999-999999','label'=>'No. HP','size' => '150','value'=> isset($column) ? $txtMOBILE : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCONTRY_bc', 'label'=>'Country BC', 'size'=>'200','value'=> isset($column) ? $txtCONTRY : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtPROVNC_bc', 'label'=>'Province BC', 'size'=>'200','value'=>isset($column) ? $txtPROVNC : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCITYSS_bc', 'label'=>'cITY BC', 'size'=>'200','value'=>isset($column) ? $txtCITYSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $idnya);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidLOGNID','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/profile/save_rekanan";
        $button = "";
        $arrForm =
          array(
            'type'=>'edit',
            'param'=>$idnya,
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            'source'=>'app'
            
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){

            });

            function jvSave(){
                lognid = $('#hidLOGNID').val();
                nomors = $('#txtNOMORS').val();
                namess = $('#txtNAMESS').val();
                aspecs = $('#cmbASPECS').val();
                contry = $('#txtCONTRY').val();
                provnc = $('#txtPROVNC').val();
                cityss = $('#txtCITYSS').val();
                addres = $('#txtADDRES').val();
                phones = $('#txtPHONES').val();
                faxnum = $('#txtFAXNUM').val();
                mobile = $('#txtMOBILE').val();
                active = $('#cmbACTIVE').val();

                if(namess == '' || namess == null){
                    alert('Nama Client harus diisi!');
                    $('#txtNAMESS').focus();
                    return;
                }

                if(aspecs == '' || aspecs == null){
                    alert('Bidang Pekerjaan harus dipilih!');
                    $('#cmbASPECS').focus();
                    return;
                }

                if(contry == '' || contry == null){
                    alert('Country harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(provnc == '' || provnc == null){
                    alert('Province harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(cityss == '' || cityss == null){
                    alert('Kota harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(addres == '' || addres == null){
                    alert('Alamat harus diisi!');
                    $('#txtADDRES').focus();
                    return;
                }

                if(phones == '' || phones == null){
                    alert('Nomor Telepon harus diisi!');
                    $('#txtPHONES').focus();
                    return;
                }

                if(mobile == '' || mobile == null){
                    alert('Nomor Handphone harus diisi!');
                    $('#txtPHONES').focus();
                    return;
                }

                if(confirm('Simpan Data?')){
                    document.".$formname.".submit();
                }
            }
            
        </script>
        ";
            
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        $data['title'] = 'Edit Profil '.$this->username;
        $data['content'] = $content;

        $this->load->view('v_info',$data);
    }

    function save_rekanan(){
        $CLI_IDENTS = $this->input->post('hidIDENTS');
        $CLI_LOGNID = $this->input->post('hidLOGNID');
        $CLI_NOMORS = $this->input->post('txtNOMORS');
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_CONTRY = $this->input->post('txtCONTRY');
        $CLI_PROVNC = $this->input->post('txtPROVNC');
        $CLI_CITYSS = $this->input->post('txtCITYSS');
        $CLI_ADDRES = $this->input->post('txtADDRES');
        $CLI_PHONES = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtPHONES'))));
        $CLI_FAXNUM = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtFAXNUM'))));
        $CLI_MOBILE = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtMOBILE'))));
        $CLI_ACTIVE = $this->input->post('cmbACTIVE');
        
        $input = array(
            'CLI_LOGNID' => $CLI_LOGNID,
            'CLI_NOMORS' => $CLI_NOMORS,
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_PHONES' => $CLI_PHONES,
            'CLI_FAXNUM' => $CLI_FAXNUM,
            'CLI_MOBILE' => $CLI_MOBILE,
            'CLI_ACTIVE' => $CLI_ACTIVE
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'CLI';
            $TYPES = 'CLI';
            $YEAR = date('Y');
            $CLI_NOMORS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'CLI_NOMORS'=>$CLI_NOMORS,
                'CLI_USRCRT'=>$this->userid,
                'CLI_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'CLI_USRUPD'=>$this->userid,
                'CLI_DATUPD'=>$this->datesave
            ));
        }

        $this->crud->useTable('T_MAS_CLIENT');
        $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        
        $redirect = '/home/welcome';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function lihat()
    {
        // echo $this->session->userdata('nama');
        // echo "<br>";
        echo json_encode($this->organization);
    }
}