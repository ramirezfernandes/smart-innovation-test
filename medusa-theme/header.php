<!DOCTYPE html>

<html <?php language_attributes();?>>
    <head>
        <meta <?php bloginfo('charset');?>>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

        <?php wp_head ();?>

    </head>
    <body>
       <!-- BARRA DE PESQUISA/LOGIN -->
        <div class="uk-background-primary search">
            <div>
                <a class="uk-overlay uk-button uk-position-right" href="#" >LOGIN</a>
            </div>
        </div>

        <!-- BARRA DE NAVEGAÇÃO -->
        <div>
            <nav class="uk-navbar-container, uk-background-primary"	 uk-navbar>
                <div class="logo">
                    <img src="http://localhost/testemedusa/wp-content/uploads/2021/03/imag-logo1.png" width="400px" height="300px" alt="" uk-img>
                </div>
                
                <div class=" uk-position-right">
                    <ul class="uk-navbar-nav central">
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="#">SOFTWARE</a></li>
                        <li><a href="#">CONTAC US</a></li>
                    </ul>
                </div>
    
            </nav>
        </div>
       