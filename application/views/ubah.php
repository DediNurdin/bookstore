<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">

    <title>Edit Data</title>
</head>

<body>
    <!-- As a heading -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Edit Data</h2>
                <br>
                <br>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" value="<?= $book['book_id']; ?>" name="book_id">
                            <div class="form-group">
                                <label for="book_title">Book Title</label>
                                <input type="text" class="form-control" id="book_title" name="book_title" value="<?= $book['book_title']; ?>">
                                <?= form_error('book_title', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author" value="<?= $book['author']; ?>">
                                <?= form_error('author', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" value="<?= $book['publisher']; ?>">
                                <?= form_error('publisher', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="book_category">Book Category</label>
                                <input type="text" class="form-control" id="book_category" name="book_category" value="<?= $book['book_category']; ?>">
                                <?= form_error('book_category', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?= $book['price']; ?>">
                                <?= form_error('price', '<small class="pl-3 text-danger">', '</small>'); ?>
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