<main style="margin-top: 58px">
  <div class="container">

        <h5>Data layanan</h5>

        <table class="table table-bordered" id="tabelku">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Deskripsi</th>
              <th>Image</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($layanan as $k => $v): ?>

            <tr>
              <td><?php echo $k +1; ?></td>
              <td><?php echo $v['Nama_Layanan']; ?></td>
              <td><?php echo $v['Harga']; ?></td>
              <td><?php echo $v['Deskripsi']; ?></td>
              <td>
                <img src="<?php echo $this->config->item("url_layanan").$v["Foto_Layanan"] ?>" width="200">
              </td>
              <td>
                <a href="<?php echo base_url("layanan/edit/".$v["Id_Layanan"]) ?>"  class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url("layanan/hapus/".$v["Id_Layanan"]) ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <a href="<?php echo base_url("layanan/tambah") ?>" class="btn btn-primary">Tambah Data</a>
  </div>
</main>