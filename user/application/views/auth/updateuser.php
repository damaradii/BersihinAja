<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile User</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="text-center mb-4 d-flex align-items-center justify-content-center">
        <img src="/BersihinAja/user/assets/wind.svg" alt="Logo" width="50" height="50" class="me-2">
        <h2 class="text-bold m-0">BersihinAja</h2>
    </div>

    <div class="login-card col-md-4 bg-white rounded-2 shadow p-3">
        <div class="text-center mb-4">
            <h4 class="mt-3">Edit Profile</h4>
        </div>
        <?= $this->session->flashdata('pesan_error'); ?>
        <form method="POST" action="<?php echo base_url('auth/updateUser'); ?>" enctype="multipart/form-data" class="m-4">
            <div class="h-28 w-28 rounded-full overflow-hidden mx-auto mb-3">
                <img src="<?php echo $this->config->item('url_customer') . $user['Foto_User']; ?>"
                    alt="Foto User" class="object-cover w-full h-full">
            </div>

            <div class="mb-3">
                <label for="email_User" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_User" name="email_User" value="<?= $user['Email_User']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="KTP" class="form-label">KTP</label>
                <input type="email" class="form-control" id="KTP" name="KTP" value="<?= $user['KTP']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="foto_User" class="form-label">Foto User</label>
                <input type="file" class="form-control" id="foto" name="foto" value="<?= $user['Foto_User']; ?>">
                <?php echo form_error('foto', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="Nama_User" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="Nama_User" name="Nama_User" value="<?= $user['Nama_User']; ?>">
                <?php echo form_error('Nama_User', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="Alamat_User" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat_User" name="Alamat_User" value="<?= $user['Alamat_User']; ?>">
                <?php echo form_error('Alamat_User', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="No_Hp" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="No_Hp" name="No_Hp" value="<?= $user['No_Hp']; ?>">
                <?php echo form_error('No_Hp', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru (opsional)">
                    <span class="input-group-text" onclick="togglePassword()">
                        <i class="fa fa-eye" id="togglePasswordIcon"></i>
                    </span>
                </div>
            </div>
            <button type="submit" class="custom-btn btn text-white w-100 mb-3">Submit</button>
        </form>
    </div>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>

</html>