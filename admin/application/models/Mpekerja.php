<?php 
class Mpekerja extends CI_Model{
	function tampil(){
		//melakukan query
		$q = $this->db->get("pekerja");
		$d = $q->result_array();
		
		return $d;
	}
	function detail($id_pekerja): mixed{
		$this->db->where('Id_Pekerja', $id_pekerja);

		//melakukan query
		$q = $this->db->get('pekerja');

		//dipecah
		$d = $q->row_array();

		return $d;
	}

}
?>
