<main style="margin-top: 58px">
	<div class="container">
		<h5>Edit layanan</h5>

		<form method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label>Nama Layanan</label>
				<input type="text" name="Nama_Layanan" class="form-control" value="<?php echo set_value("Nama_Layanan", $layanan['Nama_Layanan']) ?>">
				<span class="text-danger small">
					<?php echo form_error("Nama_Layanan"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Harga Layanan</label>
				<input type="text" name="Harga" value="<?php echo $layanan['Harga'] ?>" class="form-control" >
				<span class="text-danger small">
					<?php echo form_error("Harga"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Deskripsi</label>
				
				<textarea name="Deskripsi" id="editorku" class="form-control"><?php echo set_value("Deskripsi", $layanan['Deskripsi']) ?>
				</textarea>

				<span class="text-danger small">
					<?php echo form_error("Deskripsi"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Image</label><br>
				<img src="<?php echo $this->config->item("url_layanan").$layanan["Foto_Layanan"] ?>" width="300">
			</div>
			<div class="mb-3">
				<label>Ganti Image layanan</label>
				<input type="file" name="Foto_Layanan" class="form-control">
			</div>
			<button type="submit" class ="btn btn-primary">Simpan</button>
		</form>
	</div>
</main>
