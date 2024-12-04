<?php 
class Mcustomer extends CI_Model{
	function tampil(){
		//melakukan query
		$q = $this->db->get("user");
		$d = $q->result_array();
		
		return $d;
	}
	function detail($id_user): mixed{
		$this->db->where('Id_User', $id_user);

		//melakukan query
		$q = $this->db->get("user");
        

		//dipecah
		$d = $q->result_array();

		return $d;
	}

}
?>
