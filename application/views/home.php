<h2 style="margin-top: 0;">
    <small>Welcome</small>
    <br />
    <?php echo $this->session->userdata('nama') ?>
</h2>
<hr />

<div class="form-group">
    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>
</div>

<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu Book. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu User. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu Sale. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
    <?php
}else{ // Jika role-nya operator
    ?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu Book. Aksi yang diperbolehkan : Read
            <li>
                Akses menu Sale. Aksi yang diperbolehkan : Read
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
    <?php
}
?>
