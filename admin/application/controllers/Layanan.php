<?php 
class Layanan extends CI_Controller{


	function __construct()
	{
		parent::__construct();

		//jk tidak ada tiket bioskop, maka suruh login
		if(!$this->session->userdata("id_admin")){
			redirect('/', 'refresh');
		}
	}

	function index(){



		//panggil model Mlayanan
		$this->load->model("Mlayanan");

		$data["layanan"] = $this->Mlayanan->tampil();

		$this->load->view("header");
		$this->load->view("layanan_tampil", $data);
		$this->load->view("footer");
	}
	function tambah(){

		//mendapatkan inputan dari forumulir pakai $this->input->post()
		$inputan = $this->input->post();

		//pasang form_validation
		$this->form_validation->set_rules("Nama_Layanan", "Nama Layanan", "required");

		//atur pesan dalam b.indo
		$this->form_validation->set_message("required", "%s wajib diisi");

		//jika ada inputan
		if ($this->form_validation->run()==TRUE ){
			//panggil model Mlayanan
			$this->load->model('Mlayanan');

			//jalankan fungsi simpan ()
			$this->Mlayanan->simpan($inputan);

			//pesan dilayar
			$this->session->set_flashdata('pesan_sukses', 'Data layanan tersimpan');

			//redirect ke fitur layanan utk tampil layanan
			redirect('layanan','refresh');
		}

		$this->load->view("header");
		$this->load->view("layanan_tambah");
		$this->load->view("footer");
	}

	function hapus($id_layanan){
		echo $id_layanan;

		//panggil model Mlayanan
		$this->load->model('Mlayanan');

		//jalankan fungsi hapus();
		$this->Mlayanan->hapus($id_layanan);

		//pesan di layar
		$this->session->set_flashdata('pesan_sukses', 'layanan telah hapus');

		//redirect ke layanan utk tampil data
		redirect('layanan', 'refresh');
	}

	function edit($id_layanan){


		//1. Tmapilkan dulu layanan yang lama
		$this->load->model("Mlayanan");
		$data['layanan'] = $this->Mlayanan->detail($id_layanan);

		//2. baru mikir ngubah data
		$inputan = $this->input->post();

		//pasang form_validation
		$this->form_validation->set_rules("Nama_Layanan", "Nama Layanan", "required");

		//atur pesan dalam b.indo
		$this->form_validation->set_message("required", "%s wajib diisi");

		//jk adad inputan
		if ($this->form_validation->run()==TRUE ){
			//jalankan fungsi edit()
			$this->Mlayanan->edit($inputan, $id_layanan);

			//pesan
			$this->session->set_flashdata('pesan_sukses', 'layanan telah diubah');

			//redirect
			redirect('layanan', 'refresh');
		}



		$this->load->view("header");
		$this->load->view("layanan_edit", $data);
		$this->load->view("footer");
	}
}
?>