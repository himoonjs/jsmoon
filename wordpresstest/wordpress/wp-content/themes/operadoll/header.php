<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <title>Operadoll | Ragdoll and American Curl</title>
        
    <meta name="author" content="Operadoll" />
    <meta name="description" content="Kasvatamme Ragdolleja ja American Curleja pienimuotoisena kotikasvatuksena. Kaikki kissamme ovat ensisijaisesti rakkaita perheenjäseniämme. Kissat ovat meille myös koko perheen yhteinen harrastus. Kasvatuksemme tavoitteena on terveiden, kauniiden ja rodunomaisten kissojen kasvatus.">
    <meta property="og:description" content="Kasvatamme Ragdolleja ja American Curleja pienimuotoisena kotikasvatuksena. Kaikki kissamme ovat ensisijaisesti rakkaita perheenjäseniämme. Kissat ovat meille myös koko perheen yhteinen harrastus. Kasvatuksemme tavoitteena on terveiden, kauniiden ja rodunomaisten kissojen kasvatus."/>   
    <meta property="og:image" content="">    
    <meta property="og:site_name" content="Operadoll">
    <meta property="og:title" content="Operadoll | Ragdoll and American Curl">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.operadoll.com/">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php echo site_url(); ?>/wp-content/themes/operadoll/js/prefixfree.min.js"></script>
    <?php wp_head(); ?>
    <script>
        // Prevent GALLERY menu from clicking, leading users to select sub menus.
        // Solution for problems caused when using :hover on mobile devices.
        $(document).ready(function(){
            $( "li.menu-item-has-children" ).children( "a" ).click(function( event ) {
                event.preventDefault();
                $(this).parent().toggleClass('tap');
            });

            $(function() {
                var pull        = $('#pull');
                    menu        = $('#menu-main-menu');
             
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            }); 

        });
    </script>
</head>
<body>
    <div id="container">
        <div class="section group" id="language_setting">
            <div class="col span_3_of_3" style="background-color:gray;">
                <a href="<?php echo str_replace('//', '/', str_replace('/en/', '', '/wordpress' . '/' . get_relative_permalink( get_permalink() ) ) ); ?>">FI</a>
                <a href="<?php echo str_replace('/en/en/', '/en/', '/wordpress' . '/' . 'en' . get_relative_permalink( get_permalink() ) ); ?>">EN</a>
            </div>
        </div>
        <div class="section group" id="header">
            <div class="col span_1_of_3" id="logo_wrapper" style="background-color:red;">
                <header>
                    <em>Header:</em>
                </header>
            </div>
            <div class="col span_2_of_3" id="menu_wrapper" style="background-color:orange;">
                <nav id="nav">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<ul id="menu-main-menu">%3$s</ul><a href="#" id="pull">MENU</a>' )
                    ); ?>
                </nav>
            </div>
        </div>