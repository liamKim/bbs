<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_list($table='ci_board')
	{
		$sql = "SELECT * FROM ".$table." ORDER BY board_id DESC";
		$query = $this->db->query($sql);
		$result = $query->result_array();

		return $result;
	}


}