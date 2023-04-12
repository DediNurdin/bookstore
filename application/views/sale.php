<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
<div class="pull-right">
    <a href="<?= base_url('page/tambahSale/'); ?>" class="btn btn-success">ADD SALE</a>
</div>
<?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Sale</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
        <?php $no = 1; ?>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Book Id</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
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
        <?php foreach ($sale as $m) : ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $m['date']; ?></td>
            <td><?= $m['book_id']; ?></td>
            <td><?= $m['quantity']; ?></td>
            <td><?= $m['price']; ?></td>
            <td><?= $m['total_price']; ?></td>
            <?php
                if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
            <td>
                <a href="<?= base_url('page/ubahSale/'); ?><?= $m['transaction_id']; ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="<?= base_url('page/hapusSale/'); ?><?= $m['transaction_id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete this data?');"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php
            }
            ?>
        </tr>
        <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
