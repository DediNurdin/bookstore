<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="<?= base_url('page/tambah/'); ?>" class="btn btn-success">ADD BOOK</a>
    </div>
    <?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Book</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
        <?php $no = 1; ?>
            <tr>
                <th>No</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Book Category</th>
                <th>Price</th>
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
        <?php foreach ($book as $m) : ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $m['book_title']; ?></td>
            <td><?= $m['author']; ?></td>
            <td><?= $m['publisher']; ?></td>
            <td><?= $m['book_category']; ?></td>
            <td><?= $m['price']; ?></td>
            <?php
                if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
            <td>
                <a href="<?= base_url('page/ubah/'); ?><?= $m['book_id']; ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="<?= base_url('page/hapus/'); ?><?= $m['book_id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this data?');"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php
            }
            ?>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
