<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 ** C-R-U-D Model
 ** @pacge
 ** CodeIgniter
 *** @subpackage Model
 * @category	 Create-Retrieve-Update-Delete
 * *
 * @author	
 * @project owner  lppm
 *
 * Modified October 2013.
 */
 
class Crud extends CI_Model {

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
  var $smsdb;
  var $username;
	var $datesave;
	var $app_numbr;

  function __construct() {
		parent::__construct();
		include(APPPATH.'config/database'.EXT);
		$this->driver =  $db['default']['dbdriver'];
		$this->prefix =  $db['default']['dbprefix'];
	    $this->username = $this->session->userdata('karyawanid');
	    $this->app_numbr = $this->config->item('app_numbr');
		$this->datesave = date('Y-m-d H:i:s');
		// $this->dbschm =  $db['default']['schema'];
  }

	/**
	 * Load the associated database table.
	 *
	 */
  function useTable($table, $protect=true){
	  $this->table  = $table;
	  $prefix = "";
	  if($protect){
	  	$prefix = $this->prefix;	
	  }
	  
	  $this->status_save = 'active_record';
	  $this->fields = $this->db->list_fields($prefix.$table);
  }

  function useTable2($table)
  {
		$this->table  = $table;
		$this->status_save = 'query';
		//$query = $this->db->query('SELECT TOP 1 * FROM '.$table);
		$arrTB = explode('.',$table);
		$sql = "SELECT b.name 
				FROM ".$arrTB[0].".".$arrTB[1].".sysobjects a
				  INNER JOIN ".$arrTB[0].".".$arrTB[1].".syscolumns b
					ON a.id=b.id
				WHERE a.name = '".$arrTB[2]."'";
		$query = $this->db->query($sql);
		foreach ($query->result() as $field)
		{
			$this->fields[] = $field->name;
		}
  }  
  function unsetMe(){
	  $this->crud->id = null;
	  $this->crud->primaryKey = null;
	  $this->crud->data = array();
	  $this->crud->fields = null;
	  $this->crud->table= null;
  }
  
  function showQuery($dbquery=null){
    echo "<pre>";
    echo $this->db->last_query();
    echo "</pre>";
  }
  
  function get_insert_id(){
		return $this->__insertID;
  }
  /**
   *  Update Method
   */
	function save($data, $pk=null, $protected=true, $unsetpk=true){
		if($this->table==""){
			show_error("Tentukan Table terlebih dahulu!");
		}
		if ($data){
			$this->data = $data;
		}
		if ($pk){
			$this->primaryKey = $pk;
		}else{
			$this->primaryKey = "";
		}
		// cek fields ada atau tidak
		if(count($this->fields)==0){
			show_error("Tabel ". $this->table ." tidak ada!");
		}

		foreach ($this->data as $key => $value){
			if (array_search($key, $this->fields) === FALSE){
				unset($this->data[$key]);
			}
		}
		if(count($this->data)==0){
			show_error("Field tidak ditemukan di tabel ". $this->table ."!");
		}
		if(is_array($this->primaryKey)){
			$this->db->where($this->primaryKey);	
			$this->db->from($this->table, $protected);
			$numrows = $this->db->count_all_results();
			foreach($this->primaryKey as $keyf=> $valuef){
				$namafield[] = $keyf;	
			}
			
		}else{
			$numrows = 0;
		}

		if($unsetpk){
			if(isset($namafield) && $numrows<>0){
				$cntNamafield = count($namafield);
				if($cntNamafield>0){
					for($i=0;$i<$cntNamafield;$i++){
						unset($this->data[$namafield[$i]]);
					}
				}
			}			
		}
	
		if($numrows>0){ // ada parameter primary key dan valuenya
			if($this->status_save=='query'){
				$xxx = false;
				$sql = "UPDATE " . $this->table ." SET ";
				foreach ($this->data as $key => $value){
					if ($xxx) $sql .= ",";
					$sql .= $key . "=" . "'".$this->data[$key]."'";
					$xxx = true;
				}
				$xxx = false;
				foreach ($this->primaryKey as $key => $value){
					if ($xxx){
						$sql .= " AND ";
					}else{
						$sql .= " WHERE ";
					}
					// $sql .= $key . "=" . "'".$this->data[$key]."'";
					$sql .= $key . "=" . "'".$value."'";
					$xxx = true;
				}
				$this->db->query($sql);
			}else{
				foreach($this->primaryKey as $key=> $value){
					$this->db->where($key, $value);
				}
				$this->db->update($this->table, $this->data, null, null, $protected);
				$this->__affectedRows = $this->db->affected_rows();
			}
			
			return true;//"update";
		}else{ // insert statement
			if($this->status_save=='query'){
				$xxx = false;
				$sql = "INSERT INTO ".$this->table."
							(";
				foreach ($this->data as $key => $value){
					if ($xxx) $sql .= ",";
					$sql .= $key;
					$xxx = true;
				}
				 
				$xxx = false;
				$sql .= ")VALUES(";
				foreach ($this->data as $key => $value){
					if ($xxx) $sql .= ",";
					$sql .= "'".$this->data[$key]."'";
					$xxx = true;
				}
				$sql .= ")";
				$this->db->query($sql);
				$this->__insertID = $this->db->insert_id();
			}else{
				$this->db->insert($this->table,$this->data, null,$protected);
				$this->__affectedRows = $this->db->affected_rows();
				$this->__insertID = $this->db->insert_id();
			}
			return true;//"insert";
		}
	}

	function delete($pk = null, $protected=true){
		if ($pk != null){
			$this->pk = $pk;
		}
		// $this->db->where($pk);
		// $this->db->delete($this->table,$protected);
		// public function delete($table = '', $where = '', $limit = NULL, $reset_data = TRUE, $protected=TRUE)
		$this->db->delete($this->table,$this->pk,null,TRUE,$protected);
		// $this->common->debug_sql('db', true);
		$this->__affectedRows = $this->db->affected_rows();			
		return true;
	}
  /**
   *  Get row affected from update
   */
  function getAffectedRows(){
		return $this->__affectedRows;
  }

  function getRandomid_detail($types,$values){
    $this->db->select('*');
    $this->db->from('LINKGENERATOR');
    $this->db->where('LNK_VALUES', $values);
    $query = $this->db->get();
    if($query->num_rows()!=0){
	    return $query ;
    }else{
	    return NULL;
    }
  }

	function loginfailed($username){
		$query = $this->db->get_where('MAS_USRAPP', array('USR_LOGINS'=>$username));
		$failed = 0;
		if($query->num_rows()>0){
			$queryx = $this->db->get_where('USR_FAILED', array('USR_LOGINS'=>$username));
			if($queryx->num_rows()==0){
				$failed = 0;
			}else{
				$failed = $queryx->row()->USR_FAILED;
			}
			if($failed ==2){
				$this->unsetme();
				$this->usetable('MAS_USRAPP');
				$array = array('USR_ACCESS'=>2);
				$this->save($array, $username, 'USR_LOGINS');
				$this->unsetme();
				$this->usetable('USRLOG');
				$this->delete($username, 'USR_LOGINS');
			}else{
				$this->unsetme();
				$this->usetable('USR_FAILED');
				$input = array('USR_LOGINS'=>$username, 'USR_FAILED'=>1);
				
				$this->db->set('USR_FAILED', 'USR_FAILED+1', false);
				$this->db->where('USR_LOGINS', $username);
				$this->db->update('USR_FAILED');
				
				if($this->db->affected_rows()==0){
					$this->id=null;
					$this->primarykey = null;
					$this->save($input);
					//echo $this->db->last_query();
				}			
			}
		}
	}
	function cekLogins($value="",$opt=1){
		return $this->db->get_where('MAS_USRAPP', array('USR_LOGINS' => $value));
		//echo $this->db->last_query();
	}
	function getMenu_json($NEW=1,$SEC=1, $USER=null){
		if($USER==""){
			// $USER = $this->session->userdata('jabatanid');	
			$USER = $this->session->userdata('USR_LOGINS');	
		}
		$this->db->where('PRV_POSIDN', $USER);
		$JOIN = "INNER";
		$this->db->select("DISTINCT a.MNU_NOMORS  as MNU_IDENTS, MNU_DESCRE MNU_DESCRE", false); 
		$this->db->select("IFNULL(MNU_REFERS,0)MNU_REFERS");
		$this->db->select("a.MNU_ROUTES MNU_ROUTES, a.MNU_ICONED, a.MNU_NOMORS, MNU_HVCHLD,PRV_RIGHTS MNU_RIGHTS, 0 MNU_CHANGE");
		$this->db->select("CASE IFNULL(MNU_HVCHLD,0) WHEN 0 THEN CASE LOCATE('A', IFNULL(PRV_RIGHTS,'')) WHEN 0 THEN '' ELSE '<li class=\"fa fa-check\"></li>' END END MNU_MNUADD");
		$this->db->select("CASE IFNULL(MNU_HVCHLD,0) WHEN 0 THEN CASE LOCATE('E', IFNULL(PRV_RIGHTS,'')) WHEN 0 THEN '' ELSE '<li class=\"fa fa-check\"></li>' END END MNU_MNUEDT");
		$this->db->select("CASE IFNULL(MNU_HVCHLD,0) WHEN 0 THEN CASE LOCATE('D', IFNULL(PRV_RIGHTS,'')) WHEN 0 THEN '' ELSE '<li class=\"fa fa-check\"></li>' END END MNU_MNUDEL");
		$this->db->select("CASE IFNULL(MNU_HVCHLD,0) WHEN 0 THEN CASE LOCATE('V', IFNULL(PRV_RIGHTS,'')) WHEN 0 THEN '' ELSE '<li class=\"fa fa-check\"></li>' END END MNU_MNUVIW");
		$this->db->from("T_MAS_MENUSS a");
		$this->db->join('T_MAS_PRIACC b', "a.MNU_NOMORS = b.PRV_MNUNOM", $JOIN);
		$this->db->order_by("IFNULL(MNU_NOMORS,0)", null,false);
	    $result = $this->db->get();
	    // $this->common->debug_sql();
	    $hasil= $result;//->result_array();
	    return $hasil;
	}

	function getMenutree_app($APPLIC, $USER, $MENU=null){
		$this->db->select("DISTINCT a.MNU_APPLIC + a.MNU_NOMORS  as id, MNU_DESCRE text", false);
		$this->db->select("MNU_PARENT parentid, MNU_ROUTES nilai, MNU_ICONED iconed");
		$this->db->from("MAS_APPMNU a");
		if($USER!="1"){
			$this->db->join('MAS_USRMNU b', "a.MNU_NOMORS = b.MNU_MENUCD AND a.MNU_APPLIC = b.MNU_APPLIC", "INNER");
			$this->db->where('MNU_FKUSER', $USER);
		}
		$this->db->where("MNU_APPNEW = 1");
		$this->db->where("MNU_REFERS <> 0");
		$this->db->where("a.MNU_APPLIC", $APPLIC);
		switch ($MENU) {
			case 'dashboard':
				$this->db->where("LEFT(a.MNU_NOMORS,4) = '0101'");
				$this->db->where("MNU_PARENT != '109870301001000000'");
				$sql2 = $this->db->get_compiled_select();

				$sql1 = "
				SELECT '109870301001010001' id,'Ekstension Telp' text	,'109870301001000000' parentid,'1' nilai, '' iconed 
				UNION ALL
				SELECT '109870301001010002' id,'Email' text,'109870301001000000' parentid,'2' nilai, '' iconed";

    			$otospb = $this->crud->getOtorisasi('purchase/spb');

    			if($otospb!=""){
					$sql1 .= " UNION ALL 
					SELECT '109870301001010003' id,'Info SPB' text,'109870301001000000' parentid,'3' nilai, '' iconed
					";
				}
				$this->db->from('(' . $sql1 . ' UNION ALL '. $sql2 . ') AS u' ,false);
				break;
			case 'beranda':
				$this->db->where("MNU_PARENT = '109870301001000000'");
				$this->db->where("a.MNU_NOMORS != '01010000'");
					
				break;
		}
    	$result = $this->db->get();
		$hasil['Hasil'] = $result->result();
		return $hasil;
	}

	function getMenu_tree($LOGIN=true){
		$this->db->select("DISTINCT a.MNU_APPLIC + a.MNU_NOMORS  as MNU_IDENTS, MNU_DESCRE", false); 
		$this->db->select("CASE a.MNU_PARENT WHEN 0 THEN '0' ELSE CONVERT(VARCHAR,a.MNU_APPLIC + a.MNU_PARENT) END MNU_PARENT", false);
		$this->db->select("a.MNU_SORTBY, a.MNU_ROUTES, a.MNU_ICONED");
		$this->db->from("MAS_APPMNU a");
		$this->db->order_by("a.MNU_APPLIC + a.MNU_NOMORS, MNU_SORTBY", null,false);
    $result = $this->db->get();
    $hasil= $result;//->result_array();
    return $hasil;
	}	
	function getMenuall($appl, $user, $typemenu, $refers=null){
		$this->db->select('*');
		$this->db->from('MAS_APPMNU a');
		$this->db->join('MAS_USRMNU b', 'a.MNU_NOMORS = b.MNU_MENUCD AND MNU_FKUSER =' .$user, 'LEFT OUTER');
		$this->db->where('MNU_CHILDN', $typemenu);
		$this->db->where('MNU_APPNEW', 1);
		if($refers!=""){
			$this->db->where("MNU_REFERS = '$refers'");
		}
		$this->db->order_by('MNU_NOMORS, MNU_SORTBY');
		$query = $this->db->get();
		return $query;
	}
	function getUsermenu($user, $refers){
		$this->db->select('*');
		$this->db->from('MAS_USRMNU a');
		$this->db->where("MNU_MENUCD = '$refers'");
		$this->db->where("MNU_FKUSER = '$user'");

		$query = $this->db->get();
		if($query->num_rows()>0){
			$return = "ada";
		}else{
			$return = "none";
		}
		return $return;
	}
	function getMenuHeader(){
		$user = $this->session->userdata('USR_LOGINS');	
		$this->db->select('MNU_DESCRE, a.MNU_NOMORS');
	    $this->db->select('MNU_REFERS, MNU_CHILDS');
		$this->db->select('MNU_HVCHLD, MNU_ROUTES, a.MNU_ICONED');
		$this->db->from("T_MAS_MENUSS a");
		$this->db->join('T_MAS_PRIACC b', "a.MNU_NOMORS = b.PRV_MNUNOM", "INNER");
		$this->db->where('PRV_POSIDN', $user);
	    $this->db->where('MNU_CHILDS', 0);
		$this->db->order_by('a.MNU_NOMORS', "asc");
		$query = $this->db->get();
		// $this->common->debug_sql();
	    $this->__numRows = $query->num_rows();		
	    return ($this->returnArray) ? $query->result_array() : $query->result();
  	}

  function getMenu($user, $chld){
		$this->db->distinct();
	    $this->db->select('MNU_DESCRE, b.MNU_NOMORS');
	    $this->db->select('MNU_REFERS, PRV_RIGHTS MNU_RIGHTS, MNU_CHILDS MNU_CHILDN');
	    $this->db->select('MNU_HVCHLD, MNU_ROUTES, b.MNU_ICONED');
	    $this->db->from('T_MAS_PRIACC a');
	    $this->db->join('T_MAS_MENUSS b','a.PRV_MNUNOM = b.MNU_NOMORS','INNER');
	    $this->db->where('MNU_CHILDS', $chld);
    	$this->db->where("a.PRV_POSIDN ='$user'");
	    if($chld==0) {
	      $this->db->where('MNU_REFERS',0);
	    }
		$sql3 = $this->db->get_compiled_select();

		$this->db->select("MNU_DESCRE, MNU_NOMORS", FALSE);
	    $this->db->select('MNU_REFERS, MNU_RIGHTS, MNU_CHILDN');
	    $this->db->select('MNU_HVCHLD, MNU_ROUTES, MNU_ICONED');
		$this->db->from("(" .$sql3 . ") as A",FALSE);
		$this->db->order_by("MNU_REFERS", "asc");
	    $this->db->order_by("MNU_NOMORS", "asc");
	    $query = $this->db->get();

	    $this->__numRows = $query->num_rows();		
	    return ($this->returnArray) ? $query->result_array() : $query->result();
  }

  function getMaxmenu($MNU_APPLIC, $MNU_CHILDN, $MNU_PARENT){
  	if($MNU_PARENT==""){
  		$MNU_PARENT = "0";
  	}
		$this->db->select("max(MNU_NOMORS) MNU_NOMORS");
		$this->db->from("MAS_APPMNU");
		$this->db->where("MNU_PARENT",$MNU_PARENT);
		$query = $this->db->get();
		$NUM_MAX=$query->row()->MNU_NOMORS;
		if($NUM_MAX==""){
			$NUM_MAX=0;
			$NUM_MAX = str_replace($MNU_APPLIC, "", $MNU_PARENT);
		}
		switch ($MNU_CHILDN) {
			case '0':
				$max = substr($NUM_MAX,0,2);
				break;
			case '1':
				$max = substr($NUM_MAX,0,4);
				break;
			case '2':
				$max = substr($NUM_MAX,0,6);
				break;
			case '3':
				$max = substr($NUM_MAX,0,8);
				break;
		}
		$MAX_MENU = $max + 1;
		$MENU = substr("0" . str_pad($MAX_MENU, 8, "0"), 0, 8);
		return $MENU;
  }

  function getOtorisasi($cignit, $show=1){
  	// $appnumero = $this->config->item('app_numbr');
  	$user  = $this->session->userdata('USR_LOGINS');
  	$this->db->select('PRV_RIGHTS MNU_RIGHTS, MNU_DESCRE');
  	$this->db->from('T_MAS_MENUSS a');
  	$this->db->join('T_MAS_PRIACC b', 'a.MNU_NOMORS = b.PRV_MNUNOM','INNER');
  	$this->db->where('MNU_ROUTES', $cignit);
  	// $this->db->where('b.MNU_APPLIC', $this->app_numbr);
  	$this->db->where("PRV_POSIDN ='$user'");
  	$query = $this->db->get();
		// echo $this->db->last_query();
		// die();
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   switch ($show) {
		   	case '2':
		   		$nilai = $row->MNU_DESCRE;
		   		break;
		   	
		   	default:
		   		$nilai = $row->MNU_RIGHTS;
		   		break;
		   }
		   $return = $nilai;
		}else{
			return false;
		}
		return $return;
  }

	function getTableInformation($tablename=null, $schema=null, $column=null, $protected=true, $type=1){
		$driver = $this->driver;
		$prefix = $this->prefix;
		$dbschm = $this->dbschm;
		if($schema!=""){
			$dbschm = $schema; 
		}
		// print_r($prefix);
		// if($protected==true){
		$sql = "";
		$tablename = $prefix . $tablename;
		// }
		switch($driver){
			case "mysql" :
			case "mysqli" :
				$sql = "show full columns from " . $tablename;
				if($column!="") $sql.=" WHERE Field ='" . $column . "'";
				break;
			case "postgre" :
				$sql_old = "
					SELECT c.column_name \"Field\",pgd.description \"Comment\", 
						CASE data_type
							WHEN 'character varying' THEN 'varchar' || '(' || character_maximum_length || ')'
							WHEN 'integer' THEN 'int'
							ELSE data_type
						END \"Type\", c.table_name
					FROM pg_catalog.pg_statio_all_tables as st
						left outer join pg_catalog.pg_description pgd on (pgd.objoid=st.relid)
						left outer join information_schema.columns c on (pgd.objsubid=c.ordinal_position
							and  c.table_schema=st.schemaname and c.table_name=st.relname)";
				$sql = "
					SELECT b.column_name \"Field\",c.description \"Comment\", 
						CASE data_type
							WHEN 'character varying' THEN 'varchar' || '(' || character_maximum_length || ')'
							WHEN 'integer' THEN 'int'
							ELSE data_type
						END \"Type\", a.relname table_name
					FROM pg_catalog.pg_statio_all_tables a
					inner join information_schema.columns b
						on a.relname = b.table_name
					left outer join pg_catalog.pg_description c
						on (c.objoid=a.relid
						and c.objsubid=b.ordinal_position 
						and b.table_schema=a.schemaname 
						and b.table_name=a.relname)				
				";
				// if($column!="") $sql.="WHERE c.column_name ='" . $column . "'";
				if($column!="") $sql.="WHERE b.column_name ='" . $column . "'";
				if($tablename!=$prefix) {
					if($column==""){
						$sql.=" WHERE";
					}else{
						$sql.=" AND";
					}
					$sql.=" table_name = '" . $tablename . "'";
				}

//SELECT c.table_schema,c.table_name,c.column_name,pgd.description, 
//	CASE data_type
//		WHEN 'character varying' THEN 'varchar'
//		WHEN 'integer' THEN 'int'
//		ELSE data_type
//	END,
//	data_type
//,C.*
//FROM pg_catalog.pg_statio_all_tables as st
//  inner join pg_catalog.pg_description pgd on (pgd.objoid=st.relid)
//  inner join information_schema.columns c on (pgd.objsubid=c.ordinal_position
//    and  c.table_schema=st.schemaname and c.table_name=st.relname)
//WHERE table_name = 'T_COMMON'
				
				break;
		}
		$query = $this->db->query($sql);
		// echo "<pre>";
		// print_r($query);
		// die();
		if($type==2){
			if($query->num_rows()>0){
				$query = $query->row();	
			}else{
				$query = array();
			}
		}
		// echo $this->db->last_query();
		// die();
		return $query;
	}
	
	function savemaster($table, $arrOther=null, $pk=null, $debug=false){
		$type = $this->input->post('hidTRNSKS');
		$prefix = $this->prefix;
		$username = $this->session->userdata('USR_LOGINS');
		$datesave = date('Y-m-d H:i:s');
		$statusupload = true;
		$txt = "";
		$txtInput = "$" . "input = array(
";
		if(!$arrOther){
			// ============================================================ //
			// kalau tidak ada definisi kolom, berarti ambil dari database
			// ============================================================ //
			$fielddetail = $this->crud->getTableInformation($table, true);
			//cari prefix field
			if ($fielddetail->num_rows() > 0){
				$onerow = $fielddetail->row();
				$prefixField = substr($onerow->Field,0,3);
			}
			$arrField = $fielddetail->result_array();
			$html2 = "";
			$loop = 1;
			$input = array();
			foreach($arrField as $key=>$value){
				$fldnam = $value["Field"];
				$dattyp = $value["Type"];
				$arrComment = $this->common->extractjson($table, $fldnam);
				$object = str_replace($prefixField . "_", "", $fldnam);//substr($fldnam,4,6);
				if($arrComment!=""){
					foreach($arrComment as $key=>$value){
						if(!is_array($value)){
							${$key}=$value;
						}else{
							if($key=="crud"){
								foreach($value as $keyd=>$valued){
									// print_r($valued);
									foreach($valued as $keye=>$valuede){
										${$keye} = $valuede;
										// echo $keye;
										if($keye=="ct"){
											$prefixElement = $valuede;	
											if($prefixElement!="viw"){
												// ====================================================
												// kalau bukan view, ambil value dari form
												// ====================================================
												$objname = $prefixElement . $object;	
												switch($dattyp){
													case "int" :
														${$objname} = $this->input->post($objname)=="" ? 0 : $this->input->post($objname);
														$txt .= "$". $objname ."=" ." $" . "this->input->post(" . "'". $objname ."')==\"\" ? 0 : $" . "this->input->post(" . "'". $objname ."');
";
														// .")=="" ? 0 : $this->input->post($objname);";
														break;
													case "datetime" :
														if($this->input->post($objname)!=""){
															${$objname} = $this->input->post($objname);		
															$txt .= "$". $objname ."=" ." $" . "this->input->post(" . "'". $objname ."');
";
														}
														break;
													default :
														if($prefixElement=="fil"){
															if(isset($_FILES[$objname]['name'])){
																$filename = $_FILES[$objname]['name'];
																${$objname} = $filename;
																$pathupload = '/assets/documents';
																$allowed_types = 'office';
																$max_size = 10000000;
																$overwrite = true;
															}
															$txt .= "
if(isset($". "_FILES['" . $objname ."']['name'])){
	$" . "filename = $" . "_FILES['" . $objname ."']['name'];
	$" . $objname ." = $" . "filename;
	$" . "pathupload = '/assets/documents';
	$" . "allowed_types = 'office';
	$" . "max_size = 10000000;
	$" . "overwrite = true;
}
";
														}else{
															${$objname} = $this->input->post($objname);
															$txt .= "$". $objname ."=" ." $" . "this->input->post(" . "'". $objname ."');
";

														}
														break;
												}
												$input = array_merge($input, array($fldnam=>${$objname}));
												$txtInput .= "'" . $fldnam ."'=>$". $objname .",
";
											}
										}else{
											if($ct=="fil"){
												if($keye=="cj"){
													$typedoc = $valuede;
												}
												if($keye=="cl"){
													$pathupload = $valuede;
												}
											}
										}
									}
									if($ct=="fil"){
										$arrUpload = array(
												'path' => $pathupload,
												'typedoc' => $typedoc,
												'max_size' => $max_size,
												'field'=>$objname,
												'overwrite' => $overwrite);
										$txt .= "
$" . "arrUpload = array(
		'path' => $" . "pathupload,
		'typedoc' => $" . "typedoc,
		'max_size' => $" . "max_size,
		'field'=> '" . $objname . "',
		'overwrite' => $" . "overwrite);
if($" . "filename!=\"\"){
	$" . "statusupload = $" . "this->common->uploadfile($" . "arrUpload);
	if($" . "statusupload==false){
		break;
	}
}
";
										if($filename!=""){
											$statusupload = $this->common->uploadfile($arrUpload);
											if($statusupload==false){
												break;
											}
										}
									}									
								}
							}
						}
						
					}
				}	
				$loop++;
			}
			if(!is_array($pk)){
				$hidIDENTS = $this->input->post('hidIDENTS');
				$pk = array($prefixField. '_IDENTS'=>$hidIDENTS);
			}
		}else{
			// ====================================================
			// kalau ada definisi kolom, berarti ambil dari definisi
			// ====================================================
			$pk="";
			$hidIDENTS = 1;
			foreach ($arrOther as $key => $value){
				if($key=='COL'){
					foreach ($value as $field=>$nilai){
						$input = array_merge($input, array($field=>$nilai));
					}
					$prefixField = substr($field,0,3);
				}
				if($key=='pk'){
					$pk = $value;
				}
			}
			if(!is_array($pk)){
				$hidIDENTS = 0;
			}
		}

		if($type=="add"){
      $input = array_merge($input, array(
        $prefixField . '_USRNAM'=>$username,
        $prefixField . '_USRDAT'=> $datesave
      ));
      $txtInput .= "'" . $prefixField . "_USRNAM'>$" ."username,
'" . $prefixField . "_UPDDAT'=>$" ."datesave
";
		}
		if($type=="edit"){
      $input = array_merge($input, array(
        $prefixField . '_UPDNAM'=>$username,
        $prefixField . '_UPDDAT'=> $datesave 
      ));
      $txtInput .= "'" . $prefixField . "_USRNAM'=>$" ."username,
'" . $prefixField . "_UPDDAT'=>$" ."datesave	
";
		}

		$txtInput .= ");";
		if($debug==true){
			echo "<pre>";
			echo $txt;			
			echo $txtInput;
			die();

		}
		if($statusupload){
			$this->useTable($table);
			$response = $this->save($input, $pk);
		}else{
			$response = false;
		}
		return $response;
	}

  function getDefReport($application){
  	$this->db->select('*');
  	$this->db->from('MAS_REPORT');
  	$this->db->where('RPT_APPLIC', $application);
  	$query = $this->db->get();
  	return $query;
  }

  function getDeftable($applic=null, $table=null, $protected=true){
		// include(APPPATH.'config/database'.EXT);
		$prefix =  $this->prefix;//$db['default']['dbprefix'];
		$tablename = $prefix . $table;
		if($protected==false){
			$tablename = $table;
		}

    $this->db->select('TBL_APPLIC, TBL_DESCRE, TBL_TABLES,TBL_NOTESS, TBL_NOMORS, TBL_DEVLPR');
    $this->db->from('TABLESS a');
    $this->db->order_by("TBL_IDENTS", "asc");
		if(isset($applic))
		{
			$this->db->where('TBL_APPLIC',$applic);
		}
		if(isset($table))
		{
			$this->db->where('TBL_TABLES', $tablename);
		}
		
    $query = $this->db->get();

    $this->__numRows = $query->num_rows();		
    return $query->result_array();//($this->returnArray) ? $query->result_array() : $query->result();
  }
	

 
  function getJabatan_cmb() {
		$this->db->select('STR_CODESS, STR_PSTION');
		$this->db->from('MAS_STRKTR');

    $query = $this->db->get();
    $data[''] = '';
    foreach($query->result() as $row){
        $data[$row->STR_CODESS] = $row->STR_PSTION;
    }		
		return $data;
  }	

  function getCommon_cmb($comhead, $field=null, $comtype=null,$com_descr2=null) {
  	/*
  	1 -> COM_TYPECD, COM_DESCR1
  	2 -> COM_TYPECD, COM_DESCR2
  	3 -> COM_IDENTS, COM_DESCR1
  	4 -> COM_IDENTS, COM_DESCR2
  	*/
  	switch ($field) {
  		case 2:
  			$this->db->select('COM_TYPECD, COM_DESCR2');
  			break;
  		case 3:
  			$this->db->select('COM_IDENTS, COM_DESCR1');
  			break;
  		case 4:
  			$this->db->select('COM_IDENTS, COM_DESCR2');
  			break;
  		default:
  			$this->db->select('COM_TYPECD, COM_DESCR1');
  			break;
  	}

    if($comtype!=""){
			if($comtype=="0"){
				$this->db->where('COM_TYPECD = 0');
			}else{
				$this->db->where('COM_TYPECD <> 0');
				$this->db->where('COM_TYPECD',$comtype);
			}
    }else{
			$this->db->where('COM_TYPECD <> 0');
		}
    if($com_descr2!=""){
			$this->db->where('COM_DESCR2',$com_descr2);
    }
		$this->db->from('MAS_COMMON');
		if(strpos($comhead,"~")==0){
			$this->db->where('COM_HEADCD', $comhead);
		}else{
			$arrParam = explode("~", $comhead);			
			$this->db->where_in('COM_HEADCD', $arrParam);
		}

    $query = $this->db->get();
    $hasil['type'] = 'cmb';
    $hasil['Hasil'] = $query->result();    
		return $hasil;
  }  
  function getCommon($type, $comhead, $comtype=null, $com_descr2=null, $exception=null) {
		//
		$condition ="";
    if(isset($comtype)){
			if($comtype=="0"){
				$this->db->where('COM_TYPECD = 0');
			}else{
				$this->db->where('COM_TYPECD <> 0');
				$this->db->where('COM_TYPECD',$comtype);	
			}
    }else{
			$this->db->where('COM_TYPECD <> 0');
		}
    if($com_descr2!=""){
			$this->db->where('COM_DESCR2',$com_descr2);
    }
    if($exception!=""){
    	if(!is_array($exception)){
    		$this->db->where('COM_TYPECD <>',$exception);	
    	}
    }

		$this->db->select('COM_HEADCD, COM_TYPECD, COM_DESCRE, COM_IDENTS');
		$this->db->from('T_MAS_COMMON');
		if(isset($comhead)){
			if(strpos($comhead,"~")==0){
				$this->db->where('COM_HEADCD', $comhead);
			}else{
				$arrParam = explode("~", $comhead);
				
				$this->db->where_in('COM_HEADCD', $arrParam);
			}
		}
		$this->db->order_by('COM_TYPECD asc');
	    $query = $this->db->get();
	    $this->__numRows = $query->num_rows();
			switch($type){
				case "1" :
					$data = ($this->returnArray) ? $query->result_array() : $query->result();
					break;
				case "2" :
					$data = $query->row();
					break;
				case "3" :
						$data['0'] = 'Option';	
								
				        foreach($query->result() as $row){
				            $data[$row->COM_TYPECD] = $row->COM_DESCRE;
				        }		
					break; 
				case "4" :
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->COM_IDENTS] = $row->COM_DESCRE;
	        }		
					break;
				case "5" : //json
			    $data['type'] = 'cmb';
			    $data['Hasil'] = $query->result();
			    break;
			}
		return $data;
  }
	function getTable_edit($table, $idents, $param){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($idents, $param);
    $query = $this->db->get();
		$row = $query->row();
		return $row;
	}

	
	function getTaginput($table, $arrfield, $filter, $addfil,$dbsource,$protected,$all=false){
		$db = 'db';
		if($dbsource =='sales'){
			$this->salesdb = $this->load->database('sales', TRUE);
			$db = 'salesdb';
		}

		$field = "*";
		$where = "";
		foreach($arrfield as $key=>$value){
			if($key=="id"){
				$id = $value;
			};
			if($key=="field"){
				$arrValue = explode("^", $value);
				if(count($arrValue)>1){
					$field = $arrValue[0] ;//. " as " . $arrValue[1];
				}else{
					$field = $value;	
				}
			};
			if($key=="where"){
				$arrValue = explode("^", $value);
				if(is_array($arrValue)){
					$where = $arrValue[0];
				}else{
					$where = $value;	
				}
			};
			if($key=="extra"){
				if(is_array($value) <> 0){
					foreach ($value as $idx => $str) {
					# code...
					if($idx != 'id' && $idx != 'name'){///jangan sampe index-nya pake reserved alias
						$this->{$db}->select($str . ' as ' . $idx, false);
						}
					}
				}
			}
		}
		$this->{$db}->select($id . ' as id', false);
		$this->{$db}->select($field .' as name', false);
		$this->{$db}->from($table . ' a', $protected);
		// if($all != true){
			$this->{$db}->limit(20);
		// if(isset($filter)){
			// $this->db->like('UPPER('.$where .')', strtoupper($filter));
			$this->{$db}->where("UPPER(".$where .") like '%" . $_GET["q"] . "%'");
		// }
		// }
		if(isset($filter)){
			if(is_array($filter)){
				foreach ($filter as $field => $value) {
					# code...
					$this->{$db}->where($field,$value,FALSE);	
					
				}
			}
		}

		if($all == 'true'){
			$sqlx = $this->db->_compile_select();
			$this->db->_reset_select();

			$this->db->select("'0' as id", false);
			$this->db->select("'ALL' as name", false);

			$sqly = $this->db->_compile_select();
			$this->db->_reset_select();

			$this->db->select("id,name");
			$this->db->from("($sqlx union all $sqly) a");
			$this->db->limit(20);
			$this->db->where("UPPER(name) like '%" . $_GET["q"] . "%'");
		

			$query = $this->db->get();
		}else{

			$query = $this->{$db}->get();	
		}
		// echo $this->db->last_query();
		return $query;
	}
	function revertcommon($descr, $parameter=null, $insert=false){
		// echo $descr;
		// die();
		$descr = str_replace(" ", "", $descr);
		if($parameter!=""){
			foreach ($parameter as $key => $value) {
				${$key} = $value;
			}
		}
		$this->db->select('COM_IDENTS, COM_TYPECD, COM_HEADCD, COM_DESCR1');
		$this->db->from('MAS_COMMON');
		if($descr!=""){
			if(isset($format)){
				switch ($format) {
					case '1':
						$this->db->where('replace(upper(COM_DESCR1),\' \',\'\')=',strtoupper($descr));
						break;
					case '2':
						$this->db->where('upper(COM_DESCR2)', strtoupper($descr));
						break;
					default:
						$this->db->where('upper(COM_DESCR1)', strtoupper($descr));
						break;
				}			
			}else{
				$this->db->where('upper(COM_DESCR1)', strtoupper($descr));			
			}			
		}
		if(isset($headcd)){
			$this->db->where('COM_HEADCD', $headcd);
		}
		if(isset($typecd)){
			$this->db->where('COM_TYPECD', $typecd);
		}		
		$revert = $this->db->get();
		if($revert->num_rows()>0){
			$rowrev = $revert->row();
			if(isset($hasil)){
				switch ($hasil) {
					case '1':
						$return = $rowrev->COM_TYPECD;
						break;
					case '2':
						$return = $rowrev->COM_HEADCD;
						break;	
					case '99':
						$return = $rowrev->COM_IDENTS;
						break;						
					default:
						$return = $rowrev->COM_DESCR1;
						break;
				}
			}else{
				$return = $rowrev->COM_HEADCD;
			}
			
			// }
		}else{
			$return = 0;
			if($insert){
				$this->db->select_max('"COM_TYPECD"');
				$this->db->from('COMMON');
				$this->db->where('COM_HEADCD', $headcd);
				
				$comtypecd = $this->db->get()->row()->COM_TYPECD+1;
				$input = array('COM_HEADCD'=>$headcd, 'COM_TYPECD'=> $comtypecd , 'COM_DESCR1'=>$descr);
				$this->db->insert('COMMON', $input);
				$return = $comtypecd ;			
			}
		}
		return $return;
	}	
	function getMaxcommon($headcd){
		$this->db->select_max('COM_TYPECD');
		$this->db->from('MAS_COMMON a');
		$this->db->where('COM_HEADCD', $headcd);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$common = $query->row();
			return $common->COM_TYPECD;
		}	
	}
	
	function login($username){
		// $this->db->select("karyawanid,nama,jabatanid,username,pin,icabangid,areaid,posisi,md_otc");
		// $this->db->from('hrd.karyawan a');
		// $this->db->where('karyawanid', substr("0000000000".$username,-10,10));	
		// $this->db->where('aktif','Y');

		$this->db->select("a.*,PKR_IDENTS PEKERJAID,CLI_IDENTS CLIENTID");
		$this->db->from('T_MAS_USERSS a');
		$this->db->join('T_MAS_PEKRJA b','a.USR_IDENTS = b.PKR_LOGNID','LEFT');
		$this->db->join('T_MAS_CLIENT c','a.USR_IDENTS = c.CLI_LOGNID','LEFT');
		$this->db->where('USR_LOGINS', $username);	
		$this->db->where('USR_ACTIVE',1);

		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return $query;
	}

	function returnforexcel($parameter=null, $paramdb="db"){

		if(isset($parameter)){
			foreach ($parameter as $key => $value) {
				${$key}=$value;
			}			
		}		
    $sql1 = $this->db->get_compiled_select();
    
    $this->db->select('*');
    $this->db->from('(' . $sql1 .') as u', false);
    // $this->common->debug_array($queryrelated);
    
    foreach ($queryrelated as $key => $value) {
      if(strpos("X".$key,"FILTER")>0){
        $arrValue = explode("<@>", $value);
        $fieldwhere = $arrValue[0]; 
        $valuewhere = $arrValue[1];
        if(strpos($valuewhere,"<@h@>")!==FALSE){
        	$arrField = explode("<@e@>", $valuewhere);
        	for($e=0;$e<count($arrField);$e++){
        		$arrFilter = explode("<@h@>", $arrField[$e]);
        		$valField = $arrFilter[0];
        		$valTypes = "";
        		$valCondt = "";
        		if(isset($arrFilter[1])){
        			$valTypes = $arrFilter[1];	
        		}
        		if(isset($arrFilter[2])){
        			$valCondt = $arrFilter[2];
        		}
        		if($valCondt!=""){
        			$this->filterparameter($paramdb, $valCondt, $fieldwhere, $valField);	
        		}
        	}
        }else{
        	$this->db->like($fieldwhere,$valuewhere);
        }
      }
      if(strpos("X".$key,"SORT")>0){
        $arrSortby = explode("<@>", $value);
        $fieldsort = $arrSortby[0];
        if($arrSortby[1]=='true'){
            $direcsort = 'ASC';
        }else{
            $direcsort = 'DESC';
        }
        // $this->db->order_by($fieldsort,$direcsort);
      }

      if($key=="where"){
      	$this->db->where($value);
      }        
    }
    if(isset($order_by)){
    	if(!is_array($order_by)){
    		$this->db->order_by($order_by);	
    	}else{
    		for($i=0;$i<count($order_by);$i++){
    			$this->db->order_by($order_by[$i]);
    		}
    	}
    }
    $sqlxx = $this->db->get_compiled_select();
    $hasil = $this->db->query($sqlxx);
    // $this->common->debug_sql();
    return $hasil;	
	}
	function returnforjson($parameter=null, $paramdb="db"){
		$pagenum = $this->input->post('pagenum');
		$pagesize = $this->input->post('pagesize');	
		$start = $pagenum * $pagesize;
		if($paramdb!="db"){
			$this->smsdb= $this->load->database('sms', TRUE);
		}
		if(isset($parameter)){
			foreach ($parameter as $key => $value) {
				${$key}=$value;
			}			
		}
		$totalrows = 0;
		if(!isset($sql)){
			$orderby = $this->db->_compile_order_by();
			$sql = $this->{$paramdb}->get_compiled_select();
			if(!empty($orderby)){
				$sql = trim(substr($sql, 0, strrpos($sql, $orderby)));
				$order_by = trim(substr($orderby, strlen('ORDER BY') + 1, strlen($orderby)));
			}
			// $this->db->_reset_select();
		}
		
		// ============== start sort 
		if ($this->input->post('sortdatafield')!==null){
			$sortfield = $this->input->post('sortdatafield');
			$sortorder = $this->input->post('sortorder');
			if($sortfield=="EMP_NOMORS"){
				$sortfield = "(EMP_NOMORS+0)";
			}
			if ($sortorder != ''){
				if ($sortorder == "desc"){
					$this->{$paramdb}->order_by($sortfield, 'DESC');
				}else {
					if ($sortorder == "asc"){
						$this->{$paramdb}->order_by($sortfield, 'ASC');
					}
				}	
			}			
		}else{
			if(isset($order_by)){
				if(!is_array($order_by)){
					if($order_by!=""){
						$this->{$paramdb}->order_by($order_by);	
					}
				}else{
					foreach ($order_by as $key) {
						$this->{$paramdb}->order_by($key);
					}
				}
			}else{
				// $sql2 = trim(substr($sql, 0, strpos($sql, ',')));
				$sqlcut = substr($sql, 0, 200);
				$arrSQL = explode(",", $sqlcut);
				for($x=0;$x<count($arrSQL);$x++){
					if(strpos($arrSQL[$x],'*')==0){
						$string = trim(str_replace("]", "", str_replace("[", "", $arrSQL[$x]))); 
						$order = explode(" ", $string);
						if(count($order)>1){
							$ordernya = $order[1];
						}else{
							$ordernya = $order[0];	
						}
						$this->{$paramdb}->order_by($ordernya);
						break;
					}
				}
			}
		}
		// ============== end sort
		$this->filtergrid($paramdb);
		$this->{$paramdb}->select('*');
		$this->{$paramdb}->from('(' .  $sql . ') a', false);
		$this->{$paramdb}->limit($pagesize, $start);
		// $this->{$paramdb}->get_compiled_select();
    $result = $this->{$paramdb}->get();
    // $this->common->debug_array($result);
    // $this->common->debug_sql();
		if($paramdb!="db"){
			$this->{$paramdb}->start_cache();
			$this->{$paramdb}->select('*');
			$this->{$paramdb}->from('(' . $sql . ') as u');
			$this->{$paramdb}->stop_cache();
			$totalrows = $this->{$paramdb}->count_all_results();
			// echo $this->{$paramdb}->last_query();
			// die();
		}else{
			$this->db->flush_cache();
			$this->db->select('COUNT(*) TotalRows');
			$this->db->from('(' .  $sql . ') a', false);
			$this->filtergrid($paramdb);
			$qTotalrows = $this->db->get();
			if($qTotalrows->num_rows()>0){
				$qrows = $qTotalrows->row();
				$totalrows = $qrows->TotalRows;				
			}
		}
		// $this->common->debug_sql();
		$hasil['TotalRows'] = $totalrows;
		$hasil['Hasil'] = $result->result();

		return $hasil;
	}
	function filtergrid($paramdb){

		// ============== start filter
		if ($this->input->post('filterscount')!==null){	
			$filterscount = $this->input->post('filterscount');
			if ($filterscount > 0){
				for ($i=0; $i < $filterscount; $i++){
					$filtervalue = $this->input->post("filtervalue" . $i);
					$filtercondition 	= $this->input->post("filtercondition" . $i);
					$filterdatafield 	= $this->input->post("filterdatafield" . $i);
					$filteroperator 	= $this->input->post("filteroperator" . $i);

					$istanggal = strtotime($filtervalue);
					
					//tempat filterfatafield
					switch($filtercondition){
						case "EMPTY" :
							$this->{$paramdb}->where($filterdatafield . " is null");
							break;
						case "NOT_EMPTY" :
							$this->{$paramdb}->where($filterdatafield . " is not null");
							break;
						case "CONTAINS_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " like '%" . $filtervalue . "%'");
							break;
						case "CONTAINS" :
							if($istanggal){
								$this->{$paramdb}->where($filterdatafield . " like UPPER('%" . $filtervalue . "%')");
							}else{
								$this->{$paramdb}->where("UPPER(".$filterdatafield.") like UPPER('%" . $filtervalue . "%')");
							}
							break;
						case "DOES_NOT_CONTAIN" :
							$this->{$paramdb}->where("UPPER(".$filterdatafield.") not like UPPER('%" . $filtervalue . "%')");
							break;
						case "DOES_NOT_CONTAIN_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " not like '%" . $filtervalue . "%'");
							break;							
						case "EQUAL" :
							if($istanggal){
								$this->{$paramdb}->where($filterdatafield ." = UPPER('" . $filtervalue . "')");
							}else{
								$this->{$paramdb}->where("UPPER(".$filterdatafield.") = UPPER('" . $filtervalue . "')");
							}
							break;
						case "EQUAL_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " = '" . $filtervalue . "'");
							break;							
						case "NOT_EQUAL" :
							$this->{$paramdb}->where("UPPER(".$filterdatafield.")  <> UPPER('" . $filtervalue . "')");
							break;
						case "NOT_EQUAL_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " <> '" . $filtervalue . "'");
							break;							
						case "GREATER_THAN" :
							$this->{$paramdb}->where($filterdatafield . " > '" . $filtervalue . "'");
							break;
						case "LESS_THAN" :
							$this->{$paramdb}->where($filterdatafield . " < '" . $filtervalue . "'");
							break;
						case "GREATER_THAN_OR_EQUAL" :
							$this->{$paramdb}->where($filterdatafield . " >= '" . $filtervalue . "'");
							break;
						case "LESS_THAN_OR_EQUAL" :
							$this->{$paramdb}->where($filterdatafield . " <= '" . $filtervalue . "'");
							break;
						case "STARTS_WITH" :
							$this->{$paramdb}->where("UPPER(".$filterdatafield . ") like UPPER('" . $filtervalue . "%')");
							break;
						case "STARTS_WITH_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " like '" . $filtervalue . "%'");
							break;
						case "ENDS_WITH" :
							$this->{$paramdb}->where("UPPER(".$filterdatafield . ") like UPPER('%" . $filtervalue . "')");
							break;
						case "ENDS_WITH_CASE_SENSITIVE" :
							$this->{$paramdb}->where($filterdatafield . " like '%" . $filtervalue . "'");
							break;
					}
				}
			}						
		}
		// ======= end of filtering
	}
	function filterparameter($paramdb, $filtercondition, $filterdatafield, $filtervalue=null){
			switch($filtercondition){
				case "EMPTY" :
					$this->{$paramdb}->where($filterdatafield . " is null");
					break;
				case "NOT_EMPTY" :
					$this->{$paramdb}->where($filterdatafield . " is not null");
					break;
				case "CONTAINS_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " like '%" . $filtervalue . "%'");
					break;
				case "CONTAINS" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield.") like UPPER('%" . $filtervalue . "%')");
					break;
				case "DOES_NOT_CONTAIN" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield.") not like UPPER('%" . $filtervalue . "%')");
					break;
				case "DOES_NOT_CONTAIN_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " not like '%" . $filtervalue . "%'");
					break;							
				case "EQUAL" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield.") = UPPER('" . $filtervalue . "')");
					break;
				case "EQUAL_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " = '" . $filtervalue . "'");
					break;							
				case "NOT_EQUAL" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield.")  <> UPPER('" . $filtervalue . "')");
					break;
				case "NOT_EQUAL_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " <> '" . $filtervalue . "'");
					break;							
				case "GREATER_THAN" :
					$this->{$paramdb}->where($filterdatafield . " > '" . $filtervalue . "'");
					break;
				case "LESS_THAN" :
					$this->{$paramdb}->where($filterdatafield . " < '" . $filtervalue . "'");
					break;
				case "GREATER_THAN_OR_EQUAL" :
					$this->{$paramdb}->where($filterdatafield . " >= '" . $filtervalue . "'");
					break;
				case "LESS_THAN_OR_EQUAL" :
					$this->{$paramdb}->where($filterdatafield . " <= '" . $filtervalue . "'");
					break;
				case "STARTS_WITH" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield . ") like UPPER('" . $filtervalue . "%')");
					break;
				case "STARTS_WITH_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " like '" . $filtervalue . "%'");
					break;
				case "ENDS_WITH" :
					$this->{$paramdb}->where("UPPER(".$filterdatafield . ") like UPPER('%" . $filtervalue . "')");
					break;
				case "ENDS_WITH_CASE_SENSITIVE" :
					$this->{$paramdb}->where($filterdatafield . " like '%" . $filtervalue . "'");
					break;
			}		
	}


	function delete_builder($pk)
	 {
	  	$prefix = $this->db->dbprefix;
	  	$this->db->set_dbprefix("");

			if ($pk){
				$this->primaryKey = $pk;
				$this->db->where($this->primaryKey);
			}
	  	$sql = $this->db->get_compiled_delete($this->table);

	  	// echo $sql;
	  	
		$this->db->query($sql);
  		$this->db->set_dbprefix($prefix);
	 }

	 function save_builder($data,$pk=null){
	  	$prefix = $this->db->dbprefix;
	  	$this->db->set_dbprefix("");

			if ($data){
				$this->data = $data;
			}
			if ($pk){
				$this->primaryKey = $pk;
				$this->db->where($this->primaryKey);
				$sql = $this->db->set($this->data)->get_compiled_update($this->table);
				$this->db->query($sql);
			}else{
				$sql = $this->db->set($this->data)->get_compiled_insert($this->table);
				$this->db->query($sql);
				$this->__insertID = $this->db->insert_id();
				// echo "hasil::" . $this->__insertID;
			}

			// $this->db->where($this->primaryKey);
			// $this->db->from($this->table);
			// $numrows = $this->db->count_all();
			// echo "hasil::" . $numrows . "<BR>";
						
			// echo $sql;

			$this->db->reset_query();
			$this->db->set_dbprefix($prefix);
			return true;

	  }

  
  function getDropdownlist($jenis,$extra=null){

		if(is_array($extra)){
			foreach ($extra as $key => $value) {
				# code...
				if(is_array($value)){
					$this->db->where_in($key,$value);
				}else{
					$this->db->where($key,$value);
				}
			}
		}

  	switch ($jenis) {
  		case 'common':
  			# code...
					$this->db->select('COM_IDENTS, COM_HEADCD, COM_TYPECD, COM_DESCR1');
					$this->db->from('MAS_COMMON');
			    $query = $this->db->get();
			    // echo $this->db->last_query();
			    // die();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->COM_TYPECD] = $row->COM_DESCR1;
	        }		
  			break;
  		
  		case 'person':
  			# code...
					$this->db->select('EMP_IDENTS, EMP_NOMORS, EMP_FNAMES, EMP_DEPTMN, EMP_POSISI');
					$this->db->from('HRD_EMPLOY_PSTION a');
					$this->db->join('HRD_EMPLOY b','a.PST_EMPLOY = b.EMP_IDENTS','INNER');
			    $query = $this->db->get();
			    // echo $this->db->last_query();
			    // die();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->EMP_IDENTS] = $row->EMP_FNAMES;
	        }		
  			break;
  		
  		case 'currency':
					$this->db->from('dbo.TB_CURRENCY',FALSE);
			    $query = $this->db->get();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->CURR_CODE] = $row->CURR_NAME;
	        }		
  			break;

  		case 'term':
					$this->db->from('dbo.TB_TERM',FALSE);
			    $query = $this->db->get();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->TERM_CODE] = $row->TERM_NAME;
	        }		
  			break;

  		case 'uom':
					$this->db->from('TB_UM',FALSE);
			    $query = $this->db->get();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->UM_CODE] = $row->UM_NAME;
	        }		
  			break;
  		case 'customercurrency':
  				$this->db->select('a.CURR_CODE,a.ID,b.CURR_NAME,b.COUNTRY_CODE');
					$this->db->from('MARKETING.dbo.TB_CUSTOMER_CURR a',FALSE);
					$this->db->join('MARKETING.dbo.TB_CURRENCY b','a.CURR_CODE = b.CURR_CODE','INNER',FALSE);
			    $query = $this->db->get();
			    $data = $query;//($query->num_rows() <> 0) ? $query->result_array() : array();
  			break;

  		case 'vendorcurrency':
  				$this->db->select('a.CURR_CODE,b.CURR_NAME,b.COUNTRY_CODE');
					$this->db->from('PURCHASE.dbo.TB_VENDOR_CURR a',FALSE);
					$this->db->join('PURCHASE.dbo.TB_CURRENCY b','a.CURR_CODE = b.CURR_CODE','INNER',FALSE);
			    $query = $this->db->get();
			    $data = $query;//($query->num_rows() <> 0) ? $query->result_array() : array();
  			break;

  		case 'uomitm':
					$this->db->from('TB_UM',FALSE);
			    $query = $this->db->get();
	        $data[''] = '';
	        foreach($query->result() as $row){
	            $data[$row->UM_CODE] = $row->UM_CODE;
	        }		
  			break;

  		default:
  			# code...
  			break;
  	}

		return $data;
  }

	function set_MaxNomor($CODE=null, $TYPES=null, $YEAR=NULL) {
		$FRCODE = $TYPES;
		if($FRCODE == 'HRD'){
			$BLNTHN = $YEAR;
        	$BULN = substr($BLNTHN,5,2);
        	$BULN = $this->common->konv_bulan($BULN,3);
        	$YEAR = substr($BLNTHN,0,4);
        	// echo $BULN.'~'.$YEAR;die();
		}
		
		$this->db->select('NUM_SEQNCE');
		$this->db->from('T_MAS_NUMBER');
		$this->db->where('NUM_SYSCLS', $FRCODE);
		$this->db->where('NUM_DATESS', $YEAR);
		$query  = $this->db->get();
		// $this->common->debug_sql();
		$arrMax = $query->row();
		
		if($query->num_rows()==0){
			$baru = true;
			$num_max=1;
		}else{
			$baru = false;
			$num_max=$arrMax->NUM_SEQNCE;
			$num_max=$num_max+1;
		}
		
		switch ($CODE) {
			case 'PKR':
			  	$nomor = $CODE. substr($YEAR,2,2) . "-" .substr("0000".$num_max,-4,4);
				break;

			case 'CLI':
			  	$nomor = $CODE. substr($YEAR,2,2) . "-" .substr("0000".$num_max,-4,4);
				break;

			case 'JOB':
			  	$nomor = $CODE.substr($YEAR,2,2) . "-" .substr("0000".$num_max,-4,4);
				break;

			case 'REK':
			  	$nomor = $CODE.substr($YEAR,2,2) . "-" .substr("0000".$num_max,-4,4);
				break;
			default:
				# code...
				break;

			// case 'SPG':
			// 	$nomor = 'SAL/'. $FRCODE . "/" . substr($YEAR,2,2) . "/" . substr("0000".$num_max,-4,4);
			// 	break;
			// case 'PR':
			//   	$nomor = $CODE . "/" . $FRCODE . "/" . substr($YEAR,2,2) . "/" . substr("0000".$num_max,-4,4);
			// 	break;
			// //  untuk report HRD sampai casee PKT
			// case 'SKM':
			// 	$nomor =   substr("00".$num_max,-2,2) . "/". $CODE ."/". $FRCODE. "/" . $BULN . "/" . substr($YEAR,2,2);
			// 	$FRCODE = $CODE;
			//   break;
			// case 'BDV':
			//   	$nomor = $CODE . "/" . substr($YEAR,2,2) . "/" . substr("0000".$num_max,-4,4);
			// 	$FRCODE = $CODE;
			//   break;
			// case 'FRM':
			//   	$nomor = $CODE.substr("0000".$num_max,-4,4);
			// 	break;
			// case 'UOM':
			//   	$nomor = $CODE.substr("0000".$num_max,-4,4);
			// 	break;
			// case 'PRM':
			//   	$nomor = $CODE.substr("0000".$num_max,-4,4);
			// 	break;
			// case 'PRD':
			//   	$nomor = $CODE.substr("0000".$num_max,-4,4);
			// 	break;
		}
		
		$input = array(
			"NUM_SYSCLS"=> $FRCODE,
			"NUM_DATESS"=> $YEAR,
			"NUM_SEQNCE"=> $num_max,
			"NUM_UCREAT"=> $this->username,
			"NUM_DCREAT"=> $this->datesave
		);
		
		$this->useTable('T_MAS_NUMBER');
		if($baru){
			$this->save($input);
		}else{
			$this->save($input, array("NUM_SYSCLS"=>$FRCODE, "NUM_DATESS"=>$YEAR));
		}
		
		return $nomor;
	}
	
	function findAll($conditions = NULL, $fields = '*', $order = NULL, $start = 0, $limit = NULL){
		if ($conditions != NULL) {
			 $this->db->where($conditions);
		}
		 
		if ($fields != NULL) {
			 $this->db->select($fields);
		}
		 
		if ($order != NULL) {
			 $this->db->order_by($order);
		}
		 
		if ($limit != NULL) {
			 $this->db->limit($limit, $start);
	 	}
	 	
	 	$query = $this->db->get($this->table);
	 	//echo $this->db->last_query();
	 	$this->__numRows = $query->num_rows();
	 	return ($this->returnArray) ? $query->result_array() : $query->result();
	}

 
  	function getDepartement($TYPE=NULL,$filter=NULL,$condition=NULL){
		if($filter){
			$level=$filter;//array(1,2,3);
			$this->db->where_in('DPR_LEVELS',$level);
		}
		if($condition){
			foreach($condition as $key => $value){
				$this->db->where($key,$value,FALSE);
			}
		}
		$this->db->select('DPR_CODESS, DPR_LEVELS, DPR_DESCRE,DPR_CDATAS, DPR_UNICOD, DPR_CLASSS, DPR_INTIAL');
		$this->db->from('T_MAS_DPRTMN');
		$this->db->where("DPR_ACTIVE",1);
		$this->db->order_by("DPR_LEVELS");
		
		$query=$this->db->get();

		if($TYPE == NULL){
			foreach($query->result() as $row){		  
			$data[$row->DPR_CODESS.'" level="'.$row->DPR_LEVELS] = $row->DPR_DESCRE."&nbsp;";
			}	 
			return $data;
		}else{
			$return['records'] = $query->result();
			$return['record_count'] = $query->num_rows();
			return $return;
		}
	}
  	function getPosisi($TYPE=NULL,$filter=NULL,$condition=NULL){
		$this->db->select("STR_PATTRN,STR_CODESS,STR_PSTION,STR_CLASSS,STR_CDATAS,STR_LEVELS");
		$this->db->select("STR_FCTORY,STR_ENTITY,STR_DVSION,STR_SCTION,STR_UNICOD,STR_LEADER");
		$this->db->select("STR_MNGMNT,STR_NAMASS");
		$this->db->from('T_MAS_STRKTR');
		$this->db->where("STR_ACTIVE", 1);
		$this->db->order_by("STR_FCTORY, STR_ENTITY, STR_DVSION, STR_SCTION");
		$query=$this->db->get();
		if($TYPE == NULL){
			foreach($query->result() as $row){		  
				$data[$row->STR_CODESS.'" level="'.$row->STR_LEVELS] = $row->STR_PSTION."&nbsp;";
			}	 
			return $data;
		}else{
			$return['records'] = $query->result();
			$return['record_count'] = $query->num_rows();
			return $return;
		}
	}	
	function getEmailuser($str_codess){//$opt,$param=null) {
		//$this->db->select('EMP_FNAMES,EMP_EMAILS,EMP_SEXESS');
		//$this->db->from('HRD_EMPLOY a');
		//$this->db->join('MAS_STRKTR b','a.EMP_POSISI = b.STR_CODESS','INNER');

		$this->db->select('EMP_FNAMES, EMP_EMAILS,IFNULL(EMP_APPEML,EMP_EXTEML) EMP_EXTEML, EMP_SEXESS, USR_LOGINS, EMP_DEPTMN EMP_DPRTMN,c.STR_PSTION');
		$this->db->from('HRD_EMPLOY a');
		$this->db->join('MAS_USRAPP b', 'a.EMP_IDENTS = b.USR_FKEMPL', 'LEFT OUTER'); // SEHARUSNYA INNER
		$this->db->join('MAS_STRKTR c', 'a.EMP_POSISI = c.STR_CODESS', 'LEFT OUTER'); // SEHARUSNYA INNER
		$this->db->where('EMP_POSISI',$str_codess);
		$this->db->where('EMP_ACTIVE',1);
		$query = $this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows()>0){            
			return $query->row_array();
		}else{            
			return 0;
		}
	
		//if($opt == 'extruder_head') {
		//	$this->db->where('STR_CODESS = 202');
		//} else if ($opt == 'ppic_manager') {
		//	
		//}
		//
		//$query = $this->db->get();
	}
	function get_Common($COMHEAD, $COMTYPE=null, $COM_DESCR2=null) {
		if($COMHEAD == 206){
			$this->db->select('COM_HEADCD, COM_TYPECD');
			$this->db->select('CASE WHEN COM_TYPECD = 0 THEN \'\' ELSE COM_DESCR1 END COM_DESCR1, COM_DESCR2');
		}else{
			$this->db->select('COM_HEADCD, COM_TYPECD, COM_DESCR1, COM_DESCR2');	
		}
		$this->db->from('MAS_COMMON');
		$this->db->where('COM_TYPECD <> 0');
		$this->db->where('COM_HEADCD', $COMHEAD);

    if($COMTYPE!=""){
			$this->db->where('COM_TYPECD',$COMTYPE);
    }
    if($COM_DESCR2!=""){
			$this->db->where('COM_DESCR2',$COM_DESCR2);
    }
		
    $query = $this->db->get();
    $this->__numRows = $query->num_rows();
    //echo $this->db->last_query();
    return ($this->returnArray) ? $query->result_array() : $query->result();
  }  

  	
	function exeHapuslink($NOMORS,$APPLIC){
		$this->crud->useTable("RND_RNDGEN");
		$this->crud->delete(array("RND_NOTRAN"=>$NOMORS,"RND_APPLIC"=>$APPLIC));
		$this->crud->unsetMe();
	}

	function _generateKodeStruktur($PARAM)
	{
		switch($PARAM){
			case 1 :
			  $preKode="UO";
			  $tbl = "MAS_DPRTMN";
			  $fld = "DPR_UNICOD";
			  $len = 3;
			  break;
			default :
			  $preKode="KIM";
			  $tbl = "MAS_STRKTR";
			  $fld = "STR_UNICOD";
			  $len = 4;
			  break;
		}

		$this->db->select('IFNULL(MAX(RIGHT(IFNULL('.$fld.',0),'.$len.')),0) UNICOD',FALSE);
		$this->db->from($tbl);
		
		$query = $this->db->get();
		$row = $query->row_array();
		$maxNumber = abs($row['UNICOD']) + 1;
		$NUM_SEQNCE = substr('0000' . $maxNumber, -$len);
		$kodenya = $preKode . $NUM_SEQNCE;
		return $kodenya;
	}
	
}
/* End of file crud.php */
/* Location: ./application/model/crud.php */



?>