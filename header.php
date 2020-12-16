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

    
        

        <nav class="topnav">
            <div class="container">

            <div class="row align-items-center">
            
                <div class="col col-2">
                    <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <!-- <img class="logo navbar-brand" src='<?php echo $logo[0] ?>'> -->
                    <h1>TimeOut</h1>
                </div>
                <div class="col">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="nav ">%3$s</ul>'
                            )
                        );
                    ?>
                </div>
            
            </div>
                
                
                
            </div>
        </nav>
        
    </header>
    