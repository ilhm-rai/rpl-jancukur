<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 custom-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.svg" width="150" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(''); ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('book'); ?>">Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Merchandice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonial</a>
                    </li>
                </ul>
                <?php if (logged_in()) : ?>
                    <a class="btn btn-royal-blue custom-btn my-2 my-sm-0" href="/logout">Logout</a>
                <?php else : ?>
                    <div class="nav-item">
                        <a class="nav-link" href="/register">Daftar</a>
                    </div>
                    <a class="btn btn-royal-blue custom-btn my-2 my-sm-0" href="/login">Masuk</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 90px;">