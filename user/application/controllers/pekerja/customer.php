<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pekerja/Mcustomer');
        $this->load->library('session');
        $this->load->helper('url');

        // //jk tidak ada tiket bioskop, maka suruh login
        // 	if(!$this->session->userdata("id_admin")){
        // 		redirect('/', 'refresh');
        // 	}
    }

    public function index()
    {
        //panggil model Mcustomer
        $this->load->model("Mcustomer");

        $data['user'] = $this->Mcustomer->tampilCustomer();
        $this->load->view('pekerja/header', $data);
        $this->load->view('pekerja/customer', $data);
    }

    function detail($id_customer)
    {
        $this->load->model('Mcustomer');
        $data["user"] = $this->Mcustomer->detail($id_customer);

        // Debugging untuk memastikan data user tidak kosong
        if (empty($data["user"])) {
            show_error('Data customer tidak ditemukan', 404);
        }

        $this->load->view('pekerja/header');
        $this->load->view('pekerja/customer_detail', $data);
    }
}
