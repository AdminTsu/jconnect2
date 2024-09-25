<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Loader extends CI_Loader {
	public function database($params = '', $return = FALSE, $active_record = NULL)
	{
		// Grab the super object
		$CI =& get_instance();
 
		// Do we even need to load the database class?
		if (class_exists('CI_DB') AND $return == FALSE AND $active_record == NULL AND isset($CI->db) AND is_object($CI->db))
		{
			return FALSE;
		}
 
		// Check if custom DB file exists, else include core one
		if (file_exists(APPPATH.'core/'.config_item('subclass_prefix').'DB'.EXT))
		{
			require_once(APPPATH.'core/'.config_item('subclass_prefix').'DB'.EXT);
		}
		else
		{
			require_once(BASEPATH.'database/DB'.EXT);
		}
 
		if ($return === TRUE)
		{
			return DB($params, $active_record);
		}
/*
 * 
		// Initialize the db variable. Needed to prevent
		// reference errors with some configurations
		$CI->db = '';
 
		// Load the DB class
		$CI->db =& DB($params, $active_record);
*/
		$CI->db =& DB($params, $active_record);
		$db =& DB($params, $active_record);
		$my_driver = config_item('subclass_prefix').'DB_'.$db->dbdriver.'_driver';
		//echo $my_driver;
		$my_driver_file = APPPATH.'core/'.$my_driver.EXT;
		if (file_exists($my_driver_file))
		{
			require_once($my_driver_file);
			$db = new $my_driver(get_object_vars($db));
		}
		
		if ($return === TRUE)
		{
			return $db;
		}
		// Grab the super object
		$CI =& get_instance();
		
		// Initialize the db variable.  Needed to prevent
		// reference errors with some configurations
		$CI->db = '';
		$CI->db = $db;		
	}
}
 
/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */