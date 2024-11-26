<?php 
class Mproduk extends CI_Model{
	function tampil(){
		//melakukan query
		$q = $this->db->get("produk");
		$d = $q->result_array();
		
		return $d;
	}
}
?>
