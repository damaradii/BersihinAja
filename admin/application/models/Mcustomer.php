<?php 
class Mcustomer extends CI_Model{
	function tampil(){
		//melakukan query
		$q = $this->db->get("customer");
		$d = $q->result_array();
		
		return $d;
	}
	function detail($id_customer): mixed{
		$this->db->where('Id_Customer', $id_customer);

		//melakukan query
		$q = $this->db->get('customer');

		//dipecah
		$d = $q->row_array();

		return $d;
	}

}
?>
