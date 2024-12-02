<?php 
class Mlayanan extends CI_Model{
	function tampil(){

		//melakukan query
		$q = $this->db->get("layanan");

		// pecah ke array
		$d = $q->result_array();
		
		return $d;
	}

	function simpan($inputan){
		//kita urusi dulu upload foto_layanan
		$config['upload_path'] = $this->config->item("assets_layanan");
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		
		$this->load->library('upload', $config);

		//adegan ngupload foto_layanan
		$ngupload = $this->upload->do_upload("Foto_Layanan");

		//jika ngupload, maka dapatkan nama fotoyna untuk ditampung ke db
		if ($ngupload){
			$inputan['Foto_Layanan'] = $this->upload->data("file_name");
		}

		//query simpan data ke tabel layanan
		//insert into layanan bla bla bla
		$this->db->insert('layanan', $inputan);
	}
	function hapus($id_layanan){
		//delete from layanan where id_layanan=5
		$this->db->where('Id_Layanan', $id_layanan);
		$this->db->delete('layanan');

	}

	function detail($id_layanan){
		//select * from layanan where id_layanan=4
		$this->db->where('Id_Layanan', $id_layanan);
		$q = $this->db->get('layanan');
		$d = $q->row_array();

		return $d;
	}

	function edit($inputan, $id_layanan){
		//ngurusi foto_layanan jika user upload foto

		$config['upload_path'] = $this->config->item("assets_layanan");
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$this->load->library("upload", $config); 

		//adegan ngupload
		$ngupload = $this->upload->do_upload("foto_layanan");

		//jika ngupload
		if ($ngupload){
			$inputan['foto_layanan'] = $this->upload->data("file_name");
		}

		//query update data sesuai id_layanan
		$this->db->where('Id_Layanan', $id_layanan);
		$this->db->update('layanan', $inputan);
	}
}
?>
