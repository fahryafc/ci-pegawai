<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_purchases extends CI_Model {

	public function __construct() {
		parent::__construct();
		// $this->load->model('Product_model', 'm_product');
	}

	public function get_all() {
        $this->db->select('*,supplier.name,');
        $this->db->join('supplier', 'supplier.id_supplier = t_po.id_supplier', 'left');
		$query = $this->db->get('t_po');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	public function get_supplier() {
        $this->db->select('*');
		$query = $this->db->get('supplier');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return false;
	}

	public function get_kode_po() {
        $sql = "SELECT SUBSTR(kode_po, -4) AS nomor
                FROM t_po
                ORDER BY kode_po DESC
                LIMIT 0, 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            // create next number
            $number = intval($result['nomor']) + 1;
            $zero = '';
            for ($i = strlen($number); $i < 4; $i++) {
                $zero .= '0';
            }
            return 'P'. $zero . $number;
        } else {
            // create new number
            return 'P0001';
        }
        
    }

	function get_detail($params){
		$sql = "SELECT a.*, b.*, c.name
				FROM t_po a
				INNER JOIN t_po_detail b on b.id_po = a.id_po
				INNER JOIN supplier c on a.id_supplier = c.id_supplier
				WHERE a.id_po = ?";
	   $query = $this->db->query($sql, $params);
	   if ($query->num_rows() > 0) {
		   $result = $query->row_array();
		   $query->free_result();
		   return $result;
	   } else {
		   return NULL;
	   }
   }

   public function get_search($keyword){
	$this->db->select('*,supplier.name,');
	$this->db->from('t_po');
	$this->db->join('supplier', 'supplier.id_supplier = t_po.id_supplier', 'left');
	$this->db->like('kode_po',$keyword);
	return $this->db->get()->result();
}

 
	public function delete($id) {
		$this->db->where('id_po', $id);
		$this->db->delete('t_po');

		$this->db->where('id_item', $id);
		$this->db->delete('t_po_detail');
	}

}