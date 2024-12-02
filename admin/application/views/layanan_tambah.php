<main style="margin-top: 58px">
	<div class="container">
		<h5>Tambah layanan</h5>

		<form method="post" enctype="multipart/form-data">

			<div class="mb-3">
				<label>Nama layanan</label>
				<input type="text" name="Nama_Layanan" class="form-control" >
				<span class="text-danger small">
					<?php echo form_error("Nama_Layanan"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Harga Layanan</label>
				<input type="number" name="Harga" class="form-control" >
				<span class="text-danger small">
					<?php echo form_error("Harga"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Deskripsi</label>
				<textarea class="form-control" id="editorku" name="Deskripsi"><?php echo set_value("Deskripsi") ?>
				</textarea>
				<span class="text-danger small">
					<?php echo form_error("Deskripsi"); ?>
				</span>
			</div>

			<div class="mb-3">
				<label>Image</label>
				<input type="file" name="Foto_Layanan" class="form-control">
			</div>
			<button type="submit" class ="btn btn-primary">Simpan</button>
		</form>
	</div>
</main>