
<div class="pull-right">
    <a href="<?= base_url('page/add/'); ?>" class="btn btn-success">ADD USER</a>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">User</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
        <?php $no = 1; ?>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Name</th>
                <th>Role</th>
                <?php
                if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <th style="width: 80px;">Action</th>
                <?php
            }
            ?>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($user as $m) : ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $m['username']; ?></td>
            <td><?= $m['password']; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['role']; ?></td>
            <?php
                if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
            <td>
                <a href="<?= base_url('page/edit/'); ?><?= $m['id']; ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="<?= base_url('page/delete/'); ?><?= $m['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this data?');"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php
            }
            ?>
        </tr>
        <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
