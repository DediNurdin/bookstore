<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">

    <title>Edit User</title>
</head>

<body>
    <!-- As a heading -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Edit User</h2>
                <br>
                <br>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" value="<?= $user['id']; ?>" name="id">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user['username']; ?>">
                                <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" disabled value="<?= $user['password']; ?>">
                                <?= form_error('password', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="number" class="form-control" id="role" name="role" value="<?= $user['role']; ?>" placeholder="<?= $user['role']; ?>">
                                <?= form_error('role', '<small class="pl-3 text-danger">', '</small>'); ?>
                                <small>Masukan Kode Role: 1 Untuk Admin, 2 Untuk Operator</small>
                            
                            </div>
                            <button type="submit" class="btn btn-primary float-right" name="Ubah">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>