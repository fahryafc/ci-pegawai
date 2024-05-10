<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontrak extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_all() {
        $this->db->select('*');
		$query = $this->db->get('kontrak');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	function get_detail($params){
		$sql = "SELECT *
				FROM kontrak
				WHERE id_kontrak = ?";
	   $query = $this->db->query($sql, $params);
	   if ($query->num_rows() > 0) {
		   $result = $query->row_array();
		   $query->free_result();
		   return $result;
	   } else {
		   return NULL;
	   }
   }

 
	public function delete($id) {
		$this->db->where('id_kontrak', $id);
		$this->db->delete('kontrak');
	}

}