<?php 
class Produk extends CI_Controller{


	function __construct()
	{
		parent::__construct();

		//jk tidak ada tiket bioskop, maka suruh login
		if(!$this->session->userdata("id_admin")){
			redirect('/', 'refresh');
		}
	}


	function index(){

		// //panggil model Mproduk
		// $this->load->model("Mproduk");

		// $data["produk"] = $this->Mproduk->tampil();

		$this->load->view("header");
		$this->load->view("produk_tampil");
		// hapus ,data
		$this->load->view("footer");

	}
}
?>
