<div class="container py-5">
    <div class="card shadow border-0 p-4">
        <h1 class="fw-bold text-primary mb-4">Nota Pemesanan</h1>

        <!-- Detail Layanan -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="fw-bold">Detail Layanan</h3>
                <p><strong>Nama Layanan:</strong> <?= !empty($detail_layanan['Nama_Layanan']) ? $detail_layanan['Nama_Layanan'] : 'N/A'; ?></p>
                <p><strong>Ukuran:</strong> <?= !empty($detail_layanan['Ukuran_Ruangan']) ? $detail_layanan['Ukuran_Ruangan'] . ' m<sup>2</sup>' : 'N/A'; ?></p>
                <p><strong>Harga:</strong> <?= !empty($detail_layanan['Harga']) ? 'Rp ' . number_format($detail_layanan['Harga'], 0, ',', '.') : 'N/A'; ?></p>
                <p><strong>Estimasi:</strong> <?= !empty($detail_layanan['Estimasi']) ? $detail_layanan['Estimasi'] . ' jam' : 'N/A'; ?></p>
            </div>
        </div>

        <!-- Paket yang Dipilih -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="fw-bold">Paket yang Dipilih</h3>
                <div class="row">
                    <?php if (!empty($paket_detail)): ?>
                        <?php foreach ($paket_detail as $paket): ?>
                            <div class="col-md-6 mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p class="mb-0"><strong><?= $paket['Nama_Paket']; ?></strong></p>
                                        <p class="text-success">Rp <?= number_format($paket['Harga'], 0, ',', '.'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Tidak ada paket yang dipilih</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Pekerja yang Dipilih -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="fw-bold">Pekerja yang Dipilih</h3>
                <div class="row">
                    <?php if (!empty($pekerja_detail)): ?>
                        <?php foreach ($pekerja_detail as $pekerja): ?>
                            <div class="col-md-6 mb-3">
                                <div class="card shadow-sm d-flex align-items-center p-2">
                                    <img src="<?= $this->config->item('url_customer') . $pekerja['Foto_User']; ?>" alt="<?= $pekerja['Nama_User']; ?>" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;">
                                    <p class="mb-0 fw-bold"><?= $pekerja['Nama_User']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Tidak ada pekerja yang dipilih</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Total Harga -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="fw-bold">Total Harga</h3>
                <p class="fs-4 text-success">
                    Rp <?= isset($detail_layanan['Harga']) ? number_format($detail_layanan['Harga'] + array_sum(array_column($paket_detail ?? [], 'Harga')), 0, ',', '.') : 'N/A'; ?>
                </p>
            </div>
        </div>

        <!-- Tombol -->
        <form action="<?= base_url('service_detail/saveOrder'); ?>" method="post">
            <button type="submit" class="btn btn-primary w-100 mb-3">Submit Pesanan</button>
        </form>
        <a href="<?= base_url('services'); ?>" class="btn btn-secondary w-100">Kembali</a>
    </div>
</div>