<!DOCTYPE html>
<html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/../assets/bootstrap.min.css.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/../assets/style.css">

    <title>Website Menu #10</title>
</head>

<body>


    <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-4">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li><a href="#" class="nav-link">Home</a></li>
                            <li class="active"><a href="<?= base_url('gallery') ?>" class="nav-link">Gallery</a></li>
                            <li><a href="#" class="nav-link">My Post</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="site-logo">
                        <a href="index.html">Gallery</a>
                    </div>


                    <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
                </div>
                <div class="col-lg-4">
                    <nav class="site-navigation text-left mr-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li><a href="<?= base_url('news') ?>" class="nav-link">News</a></li>
                            <a href="<?= base_url('login') ?>"><button type="button" class="btn btn-success">Login</button></a>
                            <a href="<?= base_url('register') ?>"><button type="button" class="btn btn-danger">Daftar</button></a>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </header>

    <?= $this->renderSection('content') ?>
</body>

</html>