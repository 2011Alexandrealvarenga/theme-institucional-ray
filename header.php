
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
  

</head>
<?php wp_head(); ?>
<body>
    <header>
        <?php get_template_part('template-parts/header') ;?>
    </header>
    <hr class="line_yellow">
    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'primary-menu-container',
            'menu_id'           => 'collapseExample', 
            'items_wrap'      => '
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
            'fallback_cb'     => false,
            // 'walker' => new jsc_wp_nav_menu_walker(),
        )
    );
    ?>