<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_Customer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcustomer');
	}

	public function index()
	{
		// Validasi form
		$this->form_validation->set_rules("Username", "Username", "required|trim");
		$this->form_validation->set_rules("Email_Customer", "Email", "required|valid_email|trim|is_unique[customer.Email_Customer]", ['is_unique' => 'Email sudah digunakan']);
		$this->form_validation->set_rules("Alamak_Customer", "Alamat", "required|trim");
		$this->form_validation->set_rules("No_Hp", "No Telepon", "required|numeric|trim");
		$this->form_validation->set_rules("Password", "Password", "required|min_length[3]|trim");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register_customer');
		} else {
			$data = [
				'Username' => $this->input->post('Username'),
				'Email_Customer' => $this->input->post('Email_Customer'),
				'Alamak_Customer' => $this->input->post('Alamak_Customer'),
				'No_Hp' => $this->input->post('No_Hp'),
				'Password' => sha1($this->input->post('Password'))
			];


			if ($this->Mcustomer->register($data)) {
				redirect('/', 'refresh');
			} else {
				redirect('register_customer', 'refresh');
			}
		}
	}
}
