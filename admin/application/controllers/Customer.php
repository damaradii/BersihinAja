<?php 
class Customer extends CI_Controller{

	function __construct()
	{
		parent::__construct();

		//jk tidak ada tiket bioskop, maka suruh login
		if(!$this->session->userdata("id_admin")){
			redirect('/', 'refresh');
		}
	}


	function index(){

		//panggil model Mcustomer
		$this->load->model("Mcustomer");

		$data["customer"] = $this->Mcustomer->tampil();

		$this->load->view("header");
		$this->load->view("customer_tampil", $data);
		$this->load->view("footer");
	}

	function detail($id_customer){

		$this->load->model('Mcustomer');
		$data["customer"] = $this->Mcustomer->detail($id_customer);

		// $this->load->model('Mtransaksi');
		// $data['jual'] = $this->Mtransaksi->transaksi_member_jual($id_customer);
		// $data['beli'] = $this->Mtransaksi->transaksi_member_beli($id_customer);

		$this->load->view('header');
		$this->load->view('customer_detail', $data);
		$this->load->view('footer');
	}

}
?>
