<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	public function __construct() {
		parent::__construct();
		// $this->load->model('Product_model', 'm_product');
	}

	public function get_all() {
        $this->db->select('*');
		$query = $this->db->get('jabatan');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	function get_detail($params){
		$sql = "SELECT *
				FROM jabatan
				WHERE id_jabatan = ?";
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
		$this->db->where('id_jabatan', $id);
		$this->db->delete('jabatan');
	}

}