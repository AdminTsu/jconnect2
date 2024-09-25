<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 ** Common Model
 ** @pacge
 ** CodeIgniter
 *** @subpackage Model
 * @category	 Create-Retrieve-Update-Delete
 * @author		 detanto / detanto[at]gmail.com
 * Modified October 2013.
 */
 
class M_common extends CI_Model {
  var $data = array();
  var $returnArray = TRUE;
  var $table;
  var $fields;
  var $__numRows;
  var $__insertID;
  var $__affectedRows;
  var $id;
  var $primaryKey = 'id';
  var $status_save = 'query_builder';
	var $driver;
	var $prefix;
	var $dbschm;
	var $app_numbr;

  function __construct() {
		parent::__construct();
		include(APPPATH.'config/database'.EXT);
		$this->driver =  $db['default']['dbdriver'];
		$this->prefix =  $db['default']['dbprefix'];
    $this->doc_active = $this->config->item('doc_active');
    $this->doc_approv = $this->config->item('doc_approve');
    $this->app_numbr = $this->config->item('app_numbr');
  }
  function getDivisiDepartemen($type=null, $idents=null, $fieldnya=null){
    
    $this->db->select("SUBSTRING(a.DPR_PATTRN, CHARINDEX('-',a.DPR_PATTRN)+1,
        case CHARINDEX('-',SUBSTRING(a.DPR_PATTRN, CHARINDEX('-',a.DPR_PATTRN)+1,LEN(a.DPR_PATTRN)))
          when 0 then len(a.DPR_PATTRN)
          else
            CHARINDEX('-',SUBSTRING(a.DPR_PATTRN, CHARINDEX('-',a.DPR_PATTRN)+1,LEN(a.DPR_PATTRN)))-1
          end
        ) DPR_DEPTMN,
        DPR_CODESS, DPR_DESCRE, DPR_INTIAL, DPR_UNICOD", false);
    $this->db->from('MAS_DPRTMN a');
    $sql1 = $this->db->get_compiled_select();

    $this->db->select('a.DPR_CODESS, a.DPR_DESCRE DPR_DESCRE, a.DPR_INTIAL DPR_INTIAL, a.DPR_UNICOD DPR_DEPCOD, DPR_DEPTMN, DPR_CDATAS, b.DPR_DESCRE DPR_DEPDIV, b.DPR_INTIAL DPR_INTIAV, b.DPR_UNICOD DPR_DIVCOD');
    $this->db->from('(' . $sql1 . ') a', false);
    $this->db->join('MAS_DPRTMN b', 'a.DPR_DEPTMN = b.DPR_CODESS','INNER');
    if($type=="db"){ //untuk nampilin value, bukan sql
      $this->db->where('a.DPR_CODESS', $idents);
      $result = $this->db->get();
      $sqlF = "";
      if(!isset($fieldnya)){
        $field = "DPR_DESCRE";
      }else{
        $field = $fieldnya;
      }
      if($result->num_rows()>0){
        $row = $result->row();
        return $row->$field;
        // echo $sqlF;  
      }
    }else{
      $sqlF = $this->db->get_compiled_select();
      return $sqlF; 
    }
  }
  function getCommon_idents($type, $idents=null, $headcd=null){
    $data = "";
    $this->db->select('COM_HEADCD, COM_TYPECD, COM_DESCRE, COM_IDENTS');
    $this->db->from('T_MAS_COMMON');
    if($idents!=""){
      $this->db->where('COM_IDENTS',$idents);  
    }

    if($headcd!=""){
      $this->db->where('COM_HEADCD',$headcd);
      $this->db->where("COM_TYPECD <> 0");
    }

    $query = $this->db->get();

    switch($type){
      case "1" :
        $data = ($this->returnArray) ? $query->result_array() : $query->result();
        break;
      case "2" :
        if($query->num_rows()>0){
          $data = $query->row()->COM_DESCRE;  
        }else{
          $data = "Tidak Ada";
        }
        break;
      case "3" :
        $data[''] = '';
        foreach($query->result() as $row){
            $data[$row->COM_TYPECD] = $row->COM_DESCRE;
        }   
        break; 
      case "4" :
        $data[''] = '';
        foreach($query->result() as $row){
            $data[$row->COM_DESCR2] = $row->COM_DESCRE;
        }   
        break;
    }
    return $data;   
  }
  function getKaryawan($txtEMPNOM, $ACTIVE=null){
    $detailKaryawan = $this->getKaryawan_data($txtEMPNOM, $ACTIVE);
    $EMP_PLANTS = "";
    $EMP_FNAMES = "";
    $EMP_DEPTMN = "";
    $EMP_NOMORS = "";
    $EMP_POSISI = "";
    $EMP_UNIORG = "";
    if($detailKaryawan->num_rows()!=null){
      $rowDetail = $detailKaryawan->row();
      // print_r($rowDetail);
      $EMP_PLANTS = $rowDetail->EMP_PLANTS;
      $EMP_FNAMES = $rowDetail->EMP_FNAMES;
      $EMP_DEPTMN = $rowDetail->EMP_DEPTMN;      
      $EMP_NOMORS = $rowDetail->EMP_NOMORS;
      $EMP_POSISI = $rowDetail->EMP_POSISI;
      $EMP_DEPTMN_DESC = $rowDetail->EMP_DEPTMN_DESC;
      $EMP_DIVISI_DESC = $rowDetail->EMP_DVSION_DESC;
      $EMP_SCTION_DESC = $rowDetail->EMP_SCTION_DESC;
      $EMP_UNIORG = $EMP_DEPTMN_DESC . ($EMP_DIVISI_DESC!="" ? '/' .$EMP_DIVISI_DESC : "") . ($EMP_SCTION_DESC!="" ? '/' .$EMP_SCTION_DESC : "");
    }
    $array = array("EMP_PLANTS"=>$EMP_PLANTS,"EMP_FNAMES"=>$EMP_FNAMES, 'EMP_DEPTMN'=>$EMP_DEPTMN, 'EMP_NOMORS'=>$EMP_NOMORS, 'EMP_POSISI'=>$EMP_POSISI, 'EMP_UNIORG'=>$EMP_UNIORG);
    return $array;
  }
  function getKaryawan_data($EMP_NOMORS, $EMP_ACTIVE=null){
    
    $this->db->select('EMP_PLANTS, EMP_FNAMES, a.EMP_DEPTMN, EMP_POSISI, dd.DPR_DESCRE EMP_DEPTMN_DESC');
    $this->db->select('ee.DPR_DESCRE EMP_DVSION_DESC, ff.DPR_DESCRE EMP_SCTION_DESC, EMP_NOMORS, EMP_IDENTS',false);
    $this->db->select('CASE EMP_ACTIVE WHEN 1 then \'Aktif\' ELSE \'Tidak Aktif\' END EMP_ACTIVE');
    $this->db->from('HRD_EMPLOY a');
    $this->db->join('T_MAS_DPRTMN dd','a.EMP_DEPTMN = dd.DPR_CODESS','LEFT',FALSE);
    $this->db->join('T_MAS_DPRTMN ee','a.EMP_DVSION = ee.DPR_CODESS','LEFT',FALSE);
    $this->db->join('T_MAS_DPRTMN ff','a.EMP_SCTION = ff.DPR_CODESS','LEFT',FALSE);
    $this->db->join('T_MAS_DPRTMN gg','a.EMP_UNIORG = gg.DPR_CODESS','LEFT',FALSE);

    $this->db->where('EMP_IDENTS',$EMP_NOMORS);
    if($EMP_ACTIVE!=""){
      $this->db->where('EMP_ACTIVE = 1'); 
    }
    
    $query = $this->db->get();

    return $query;
  }
  function getTotalDokumen($ACTIVE, $APPROV=null){
    $this->db->select('COUNT(*) TOTALDOK');
    $this->db->from('KBS_BIBLIO');
    if($APPROV!=0){
      $this->db->where('BIB_APPROV', $APPROV);  
    }
    if($ACTIVE!=0){
      $this->db->where('BIB_ACTIVE', $ACTIVE);
    }
    $query = $this->db->get();
    $total = 0;
    if ($query->num_rows() > 0)
    {
       $row = $query->row();
       $total = $row->TOTALDOK;
    } 
    return $total;
  }

  function getCommon($type,$jns=null){
    switch ($type) {
      case '1':
          $this->db->select('agamaid id,nama descre');
          $this->db->from('hrd.agama');
          $this->db->order_by('agamaid asc');
        break;
      case '2':
          $this->db->select('eduid id,nama descre');
          $this->db->from('hrd.edu');
          $this->db->order_by('eduid asc');
        break;
      case '3':
          $this->db->select('POS_IDENTS id,POS_DESCRE descre');
          $this->db->from('T_MAS_POSISI');
          if($jns==1){
            $this->db->where('POS_IDENTS IN(31,52,28)');  
          }
          $this->db->order_by('POS_IDENTS asc');
          // $this->db->where("POS_TYPESS",2); // 2 UNTUK SPG
        break;
      case '4':
          $this->db->select('alokid id,nama descre');
          $this->db->from('spg_alokasi');
          $this->db->order_by('alokid asc');
        break;
      case '5':
          $this->db->select('isektorid id,nama descre');
          $this->db->from('MKT.isektor');
          $this->db->where("otc",'Y');
          $this->db->order_by('isektorid asc');
        break;
      case '6':
          $this->db->select("'' as id", false);
          $this->db->select(" '' as descre", false);
          $sqly = $this->db->_compile_select();
          $this->db->_reset_select();

          $this->db->select('grpid id,nama descre');
          $this->db->from('MKT.grp_mt');
          $this->db->where("aktif","Y");
          $sqlz = $this->db->_compile_select();
          $this->db->_reset_select();

          $this->db->select("id,descre");
          $this->db->from("($sqly union all $sqlz) a");
          $this->db->order_by('id asc');

        break;
      default:

        break;
    }
    $query = $this->db->get();   
    foreach($query->result() as $row){
        $data[$row->id] = $row->descre;
    }
    return $data;
  }

  function logAccess($id){
      $array = array("LOG_USERSS" => $id, "LOG_TIMESS" => date('Y-m-d H:i:s'), "LOG_IPADDR" => $this->input->ip_address());

      $this->crud->useTable('T_MAS_ACCLOG');
      $this->crud->save($array);
      $this->crud->unsetMe();
  }

  // function pengunjung(){
  //   return $this->db->query("SELECT * FROM statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY ip");
  // }
  // function totalpengunjung(){
  //     return $this->db->query("SELECT COUNT(hits) as total FROM statistik");
  // }
  // function hits(){
  //     return $this->db->query("SELECT SUM(hits) as total FROM statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
  // }
  // function totalhits(){
  //     return $this->db->query("SELECT SUM(hits) as total FROM statistik");
  // }
  // function pengunjungonline(){
  //     $bataswaktu       = time() - 300;
  //     return $this->db->query("SELECT * FROM statistik WHERE online > '$bataswaktu'");
  // }
  
}
?>