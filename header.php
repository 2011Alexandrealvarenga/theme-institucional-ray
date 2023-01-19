
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- geral -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- paginas -->
    <link rel="stylesheet" href="assets/css/header.css">

    <title>Titulo</title>
</head>
<?php wp_head(); ?>
<body>
    <header>
        <div class="header-backup">
            <div class="container">
                <div class="row">
                    <div class="top">
                        <div class="logo">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/logotipo.png" >
                            <!-- <img class="img-lazy-loading" aria-hidden="true" width="32px" height="32px" src="<?= get_template_directory_uri(); ?>/assets/icons/home/icon-banner-left.svg" alt="alerta" title="Alerta"> -->

                        </div>
                        <div class="phone">
                            <p>(11) 3392.3000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <hr class="line_yellow">
    <section class="menu">
        <nav class="navbar ">
            <ul>
                <li>
                    <a href="#home">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/house-svgrepo-com.svg" alt="">
                        <p>Home</p>
                    </a>
                </li>
                <hr class="line_gray">
                <li>
                    <a href="#home">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/house-svgrepo-com.svg" alt="">
                        <p>Home</p>
                    </a>
                </li>
                <hr class="line_gray">
                <li>
                    <a href="#home">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/house-svgrepo-com.svg" alt="">
                        <p>Home</p>
                    </a>
                </li>
                <hr class="line_gray">
                <li>
                    <a href="#home">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/house-svgrepo-com.svg" alt="">
                        <p>Home</p>
                    </a>
                </li>
                <hr class="line_gray">

            </ul>
        </nav>
    </section>