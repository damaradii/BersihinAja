<?php 
class Pekerja extends CI_Controller{

	function __construct()
	{
		parent::__construct();

		//jk tidak ada tiket bioskop, maka suruh login
		if(!$this->session->userdata("id_admin")){
			redirect('/', 'refresh');
		}
	}


	function index(){

		//panggil model Mpekerja
		$this->load->model("Mpekerja");

		$data["pekerja"] = $this->Mpekerja->tampil();

		$this->load->view("header");
		$this->load->view("pekerja_tampil", $data);
		$this->load->view("footer");
	}

	function detail($id_pekerja){

		$this->load->model('Mpekerja');
		$data["pekerja"] = $this->Mpekerja->detail($id_pekerja);

		// $this->load->model('Mtransaksi');
		// $data['jual'] = $this->Mtransaksi->transaksi_member_jual($id_pekerja);
		// $data['beli'] = $this->Mtransaksi->transaksi_member_beli($id_pekerja);

		$this->load->view('header');
		$this->load->view('pekerja_detail', $data);
		$this->load->view('footer');
	}

}
?>
