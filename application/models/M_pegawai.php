<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_all() {
        $this->db->select('*');
		$query = $this->db->get('pegawai');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	public function get_jabatan() {
        $this->db->select('*');
		$query = $this->db->get('jabatan');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	public function get_kontrak() {
        $this->db->select('*');
		$query = $this->db->get('kontrak');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	function get_detail($params){
		$sql = "SELECT *
				FROM pegawai
				WHERE id_pegawai = ?";
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
		$this->db->where('id_pegawai', $id);
		$this->db->delete('pegawai');
	}

}