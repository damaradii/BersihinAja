<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pekerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        .custom-btn {
            background-color: #89c6b6;
            border: none;
        }

        .custom-btn:hover {
            background-color: #76b3a4;
        }
    </style>
</head>

<body>
    <div class="text-center mb-4 d-flex align-items-center justify-content-center mt-5">
        <img src="/BersihinAja/user/assets/wind.svg" alt="Logo" width="50" height="50" class="me-2">
        <h2 class="text-bold m-0">BersihinAja</h2>
    </div>

    <div class="login-card col-md-4 bg-white rounded-2 shadow p-3 mb-5">
        <div class="text-center mb-4">
            <h4 class="mt-3">Register Pekerja</h4>
        </div>
        <form method="POST" action="<?= base_url('auth/registPekerja') ?>" enctype="multipart/form-data">
            <!-- <div class="mb-3">
                <label for="foto_pekerja" class="form-label">Foto Pekerja</label>
                <input type="file" class="form-control" id="foto_pekerja" name="foto_pekerja" required>
                <?= form_error('foto_pekerja', '<small class="text-danger">', '</small>'); ?>
            </div> -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama" required>
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="email_pekerja" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_pekerja" name="email_pekerja" placeholder="Masukkan email" required>
                <?= form_error('email_pekerja', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="KTP" class="form-label">KTP</label>
                <input type="text" class="form-control" id="KTP" name="KTP" placeholder="Masukkan Nomor KTP" required>
                <?= form_error('KTP', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="alamat_pekerja" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_pekerja" name="alamat_pekerja" placeholder="Masukkan Alamat" required>
                <?= form_error('alamat_pekerja', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="No_Hp" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="No_Hp" name="No_Hp" placeholder="Masukkan Nomor Telepon" required>
                <?= form_error('No_Hp', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    <span class="input-group-text" onclick="togglePassword()">
                        <i class="fa fa-eye" id="togglePasswordIcon"></i>
                    </span>
                </div>
            </div>
            <button type="submit" class="custom-btn btn text-white w-100 mb-3">Register</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePasswordIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>

</html>