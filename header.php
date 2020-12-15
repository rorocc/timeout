<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">

    <?php 
       wp_head(); 
    ?>

</head>
<body>

    <header class="header">

    <?php
        if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
    ?>
        <img class="logo" src='<?php echo $logo[0] ?>'>
        <p><?php the_title(); ?></p>
        <p>hi</p>

        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul>%3$s</ul>'
                )
            );
        ?>
    </header>
    