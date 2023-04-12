<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">

    <title>Edit Sale</title>
</head>

<body>
    <!-- As a heading -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Edit Sale</h2>
                <br>
                <br>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" value="<?= $sale['transaction_id']; ?>" name="transaction_id">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="<?= $sale['date']; ?>">
                                <?= form_error('date', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="book_id">Book Id</label>
                                <input type="text" class="form-control" id="book_id" name="book_id" value="<?= $sale['book_id']; ?>">
                                <?= form_error('book_id', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $sale['quantity']; ?>">
                                <?= form_error('quantity', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?= $sale['price']; ?>">
                                <?= form_error('price', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total Price</label>
                                <input type="text" class="form-control" id="total_price" name="total_price" value="<?= $sale['total_price']; ?>">
                                <?= form_error('total_price', '<small class="pl-3 text-danger">', '</small>'); ?>
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