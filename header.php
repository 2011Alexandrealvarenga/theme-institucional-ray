
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Titulo</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto);a {text-shadow: none;color: #0d638f;}ul {margin: 0px;padding: 0px;}.ace-responsive-menu {list-style: none;margin: 0;padding: 0;background: #f9f9f9;float:left;width:100%;font-family: 'Roboto', sans-serif;border-bottom: 3px solid #000;}.ace-responsive-menu li{list-style: none;}.ace-responsive-menu li ul {display:none;}.ace-responsive-menu > li {display: block;margin: 0;padding: 0;border: 0px;float: left;}.ace-responsive-menu li a {color:#c0c0c0;}.ace-responsive-menu > li > a {display: block;position: relative;margin: 0;border: 0px;padding: 18px 20px 18px 12px;text-decoration: none;font-size: 15px;font-weight: 300;color: #c0c0c0;}.ace-responsive-menu li a i {padding-right: 5px;color: #FF5737;}.ace-responsive-menu > li > a i {font-size: 16px;text-shadow: none;color: #FF5737;}.ace-responsive-menu li ul.sub-menu li a i {padding-right: 10px;}.ace-responsive-menu li.menu-active > a {background: #272727 !important;color:#fff;}.ace-responsive-menu li .menu-active {position: relative;}.ace-responsive-menu > li > a > .arrow:before {margin-left: 15px;display: inline;font-size: 16px;font-family: FontAwesome;height: auto;content: "\f107";font-weight: 300;text-shadow: none;width: 10px;display: inline-block;}.ace-responsive-menu li ul.sub-menu li > a > .arrow:before {content: "\f105" !important;}.ace-responsive-menu > li > ul.sub-menu {display: none;list-style: none;clear: both;margin: 0;position: absolute;}.ace-responsive-menu li ul.sub-menu {background: #333;}.ace-responsive-menu li ul.sub-menu > li {width: 185px;}.ace-responsive-menu li ul.sub-menu li a {display: block;margin: 0px 0px;padding: 18px 20px 18px 15px;text-decoration: none;font-size: 13px;font-weight: normal;background: none;}.ace-responsive-menu > li > ul.sub-menu > li {position: relative;}.ace-responsive-menu > li > ul.sub-menu > li ul.sub-menu {position: absolute;left: 185px;top: 0px;display: none;list-style: none;}.ace-responsive-menu > li > ul.sub-menu > li ul.sub-menu > li ul.sub-menu {position: absolute;left: 185px;top: 0px;display: none;list-style: none;}.ace-responsive-menu > li > ul.sub-menu li > a > .arrow:before {float: right;margin-top: 1px;margin-right: 0px;display: inline;font-size: 16px;font-family: FontAwesome;height: auto;content: "\f104";font-weight: 300;text-shadow: none;}.menu-toggle {display: none;float: left;width: 100%;background: #333;}.menu-toggle h3 {float: left;color: #FFF;padding: 0px 10px;font-weight: 600;font-size: 16px;}.menu-toggle .icon-bar {display: block !important;width: 18px;height: 2px;background-color: #f9f9f9 !important;-webkit-border-radius: 1px;-moz-border-radius: 1px;border-radius: 1px;-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);margin: 3px;}.menu-toggle .icon-bar:hover {background-color: #f9f9f9 !important;}.menu-toggle #menu-btn {float: right;background: #202020;border: 1px solid #0C0C0C;padding: 8px;border-radius: 5px;cursor: pointer;margin: 10px;}.hide-menu {display: none;}ul[data-menu-style="accordion"] {width: 250px;}ul[data-menu-style="accordion"] > li {display: block;margin: 0;padding: 0;border: 0px;float: none !important;}ul[data-menu-style="accordion"] > li:first-child {border-top: 2px solid #FD5025;}ul[data-menu-style="accordion"] li ul.sub-menu > li {width: 100%;}ul[data-menu-style="accordion"] > li > a > .arrow:before {float: right;content: "\f105";}ul[data-menu-style="accordion"] li.menu-active > a > .arrow:before {content: "\f107" !important;}ul[data-menu-style="accordion"] > li > ul.sub-menu {position: static;}ul[data-menu-style="accordion"] > li > a i {padding-right: 10px;color: #FF5737;}ul[data-menu-style="accordion"] > li > ul.sub-menu > li ul.sub-menu {position: static;}ul[data-menu-style="accordion"] > li > ul.sub-menu > li ul.sub-menu > li ul.sub-menu {position: static;}ul[data-menu-style="accordion"] > li {border-bottom: 1px solid #242424;}ul[data-menu-style="accordion"] li a:hover {background: #f9f9f9 !important;}ul[data-menu-style="accordion"] ul.sub-menu li.menu-active > a > .arrow:before {content: "\f107" !important;}ul[data-menu-style="vertical"] {width: 120px;}ul[data-menu-style="vertical"] > li {float: none;}ul[data-menu-style="vertical"] > li:first-child {border-top: 2px solid #FD5025;}ul[data-menu-style="vertical"] li ul.sub-menu > li {width: 100%;}ul[data-menu-style="vertical"] > li > a > .arrow:before {float: right;content: "\f105";}ul[data-menu-style="vertical"] > li.menu-active {position:relative;}ul[data-menu-style="vertical"] > li > ul.sub-menu {position: absolute;left:120px;top:0px;width:120px;}ul[data-menu-style="vertical"] > li > a i {padding-right: 10px;color: #FF5737;}ul[data-menu-style="vertical"]> li > ul.sub-menu > li ul.sub-menu {position: absolute;width:200px;left: 200px;}ul[data-menu-style="vertical"] > li > ul.sub-menu > li ul.sub-menu > li ul.sub-menu {position: absolute;width:200px;left: 200px;}ul[data-menu-style="vertical"] > li {border-bottom: 1px solid #242424;}ul[data-menu-style="vertical"] li a:hover {background: #f9f9f9 !important;}@media screen and (max-width: 768px) {.demo {width:96%;padding:2%;}ul[data-menu-style="vertical"] , ul[data-menu-style="accordion"], ul[data-menu-style="vertical"] li ul.sub-menu {width: 100% !important;}.ace-responsive-menu {float: left;width:100%;}.ace-responsive-menu > li {border-bottom: 1px solid #242424;float: none;}.ace-responsive-menu li a:hover {background: #272727 !important;}.ace-responsive-menu > li:first-child {border-top: 2px solid #FD5025;}.ace-responsive-menu > li > a i {padding-right: 10px;color: #FF5737;}.ace-responsive-menu > li > a > .arrow:before {float: right;content: "\f105";}li.menu-active > a > .arrow:before {content: "\f107" !important;}.ace-responsive-menu li ul.sub-menu > li {width: 100%;}.ace-responsive-menu li ul.sub-menu li ul.sub-menu li a {padding-left: 30px;}.ace-responsive-menu li ul.sub-menu li ul.sub-menu li ul.sub-menu li a {padding-left: 50px;}.ace-responsive-menu > li > ul.sub-menu {position: static;}.ace-responsive-menu > li > ul.sub-menu > li ul.sub-menu {position: static;}.ace-responsive-menu > li > ul.sub-menu > li ul.sub-menu > li ul.sub-menu {position: static;}.ace-responsive-menu li ul.sub-menu li.menu-active > a > .arrow:before {content: "\f107" !important;}}
    </style>
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
        <!-- <section class="menu">
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
        </section> -->
        <!-- <nav>
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="vertical">
                <li class="">
                    <a href="javascript:;">
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <span class="title">About Us 1</span>

                    <ul class="sub-menu">
                        <li>
                            <a href="#">Sub Item One</a>
                        </li>
                        <li>
                            <a href="#">Sub Item Two</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <span class="title">Products</span>
                    </a>
                </li>
                <li class="last ">
                    <a href="javascript:;">
                        <span class="title">Contact Us</span>
                    </a>
                </li>
            </ul>            
        </nav> -->
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                // 'menu' => ''
                'container' => 'nav',
                'container_class' => '',
                'menu_id' => 'collapseExample',             // %1$s
                'menu_class' => '', // %2$s .... %3$s = list items.
                'add_li_class' => 'px-3',
                'items_wrap' => '

                <div class=" %2$s" id="%1$s">
                    <div class="menu-toggle">
                        <h3>Menu</h3>
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="vertical">
                        %3$s
                    </ul> 
                </div>
                ',
                'walker' => new jsc_wp_nav_menu_walker()
            ))

        ?>