<main style="margin-top: 58px">
  <div class="container">
        <h5>Workers</h5>
        <table class="table table-bordered" id="tabelku">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No. Hp</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pekerja as $k => $v): ?>

            <tr>
              <td><?php echo $k +1; ?></td>
              <td><?php echo $v['Username']; ?></td>
              <td><?php echo $v['Email_Pekerja']; ?></td>
              <td><?php echo $v['No_Hp']; ?></td>
              <td>
                <a href="<?php echo base_url("pekerja/detail/".$v['Id_Pekerja']) ?>" class="btn btn-info">Detail</a>
              </td>
            </tr>
            <?php endforeach ?>

          </tbody>
        </table>
  </div>

</main>
