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
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400' rel='stylesheet' type='text/css'>
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

            var URI = window.location.href;
            if (URI.indexOf("/en/") != -1 ) {
                $( "#svg_logo_link" ).attr("xlink:href", "http://localhost:8888/wordpress/en/");
                $( "#home_title_current_litters" ).replaceWith("<p class='home_titles' id='home_title_current_litters'>Current Litters</p>");
                $( "#home_title_our_cats" ).replaceWith("<p class='home_titles' id='home_title_our_cats'>Our Cats</p>");
                $( "#home_title_previous_litters" ).replaceWith("<p class='home_titles' id='home_title_previous_litters'>Previous Litters</p>");

                $( "#footer_contact_title" ).replaceWith("<p id='footer_contact_title'>CONTACT</p>");

                $( "#ragdolls_description_text" ).replaceWith("<span id='ragdolls_description_text'>The Ragdoll is a cat breed with blue eyes and a distinct colorpoint coat. It is a large and muscular semi-longhair cat with a soft and silky coat.</span>");
                $( "#ragdolls_read_more" ).replaceWith("<p id='ragdolls_read_more'><br />READ MORE</p>");

                $( "#american_curls_description_text" ).replaceWith("<span id='american_curls_description_text'>The American Curl is a breed of cat characterized by its unusual ears, which curl back from the face toward the center of the back of the skull.</span>");
                $( "#american_curls_read_more" ).replaceWith("<p id='american_curls_read_more'><br />READ MORE</p>");

                $( "#fun_pics_description_text" ).replaceWith("<span id='fun_pics_description_text'>Funny moments of our lovely cats</span>");

            }

            $( ".wp-caption" ).css("width", "100%");
            $( ".wp-caption-text" ).wrap("<div class='caption_wrapper'></div>");

            var iframeTag = $( "iframe" );
            if ( iframeTag.parent().is( "p" ) ) {
                iframeTag.unwrap();
            }
            var imgTag = $( "img" );
            if ( imgTag.parent().is( "p" ) ) {
                imgTag.unwrap();
            }
            imgTag.wrap("<div class='img_wrapper'></div>");
            imgTag.addClass( "aligncenter" );

            $( "#gallery_content" ).children("div:last").attr("id", "gallery_circles");

            $( "#menu-second-menu .img_wrapper img" ).each(function() {
                $(this).removeAttr('width');
                $(this).removeAttr('height');
            });

            function getRandomArbitrary(min, max) {
                return Math.random() * (max - min) + min;
            }
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            $( ".link_img_wrapper ").each(function() {
                $(this).css("background-color", "rgba(" + getRandomInt(10, 41) + ",69,113," + getRandomArbitrary(0.6, 1) + ")");
            });

        });
    </script>
</head>
<body>
    <div id="container">
    <div id="header_wrapper">
        <div class="section group header">
            <div class="col span_1_of_3" id="header_logo">
                <header id="svg_logo_wrapper">
                    <svg id="svg_logo" xmlns="http://www.w3.org/2000/svg" width="369.268" height="146.606" viewBox="0 0 369.26791 146.60629"><a id="svg_logo_link" xlink:href="http://localhost:8888/wordpress/" target="_top"><g><path d="M62.47 49.22s3.47-6.002-6.753-6.748c-4.464-.326-9.108 1.792-8.018 6.86 1.09 5.068 11.57 10.7 21.342 7.59 9.773-3.11 7.022-12.478 7.022-12.478-2.19-6.828-9.79-12.9-20.476-13.05-12.446-.178-21.674 9.39-22.795 17.478-1.73 12.49 7.98 21.318 21.222 27.806 15.93 7.804 39.933 10.663 60.327 8.612 13.74-1.383 25.52-7.445 35.113-13.424 6.45-4.02 14.004-14.414 14.004-14.414s8.35 10.396 14.704 14.656c8.862 5.944 16.645 10.093 32.25 12.752 15.11 2.575 68.062 4.91 71.143-10.43 2.19-10.896-18.075-11.265-19.26-27.387-.677-9.18 7.785-14.79 15.865-15.5 11.035.316 16.99 5.424 17.907 11.4 1.502 9.785-8.1 13.658-14.64 14.78-21.006 3.605-45.898.51-63.97-12.615-18.074-13.126-30.71-41.625-54.56-41.06-11.863-.25-21.206 5.04-24.42 14.868-2.33 7.13-.985 15.15 4.224 21.803 4.504 5.75 14.105 8.762 22.05 6.955 7.935-1.805 12.993-5.926 14.53-11.572 2.246-8.243-5.02-17.125-15.627-17.736-10.566-.153-12.504 7.435-8.713 12.915 6.644 5.007 8.164-1.195 8.164-1.195" fill="none" stroke="#294571" stroke-width="8.082"/><path d="M58.335 115.106v-33.33l5.59 1.83c5.08 1.663 5.588-2.902 5.588-.368 0 2.15 4.214 2.067 5.657 1.42 3.83-1.716 7.55 1.76 10.204 3.5 4.04 2.647 6.446 9.084 6.466 17.295.022 9.467-1.496 14.428-5.7 18.633-3.407 3.406-3.638 3.474-10.057 2.96l-6.57-.528V144.333l-4.515 1.137c-2.483.625-4.998 1.136-5.59 1.136-.73 0-1.073-10.04-1.073-31.5zm19.154 2.978c2.317-2.488 3.2-6.302 3.2-13.825 0-9.644-4.398-14.28-9.32-9.827-1.578 1.428-1.857 3.31-1.857 12.498 0 11.13.678 13.257 4.228 13.257.985 0 2.672-.946 3.75-2.103zm-55.35 7.756c-3.943-1.716-7.93-6.88-9.552-12.377-.765-2.59-1.08-8.2-.824-14.734.66-16.876 5.693-25.286 15.137-25.286 3.19 0 3.202.023 1.57 2.514-2.795 4.265-4.742 13.807-4.88 23.906-.2 14.597 3.112 21.845 9.022 19.746 5.522-1.96 9.007-14.255 8.194-28.91-.776-14.005-5.427-20.412-14.683-20.227-13.42.27-22.004 12.197-17.058 23.7.74 1.72.508 1.852-2.132 1.206-4.86-1.19-7.04-4.092-6.93-9.235.367-17.08 32.114-26.643 44.832-13.504 4.738 4.897 6.6 10.255 7.158 20.62.85 15.748-3.62 27.76-11.91 31.987-4.704 2.4-13.15 2.68-17.944.593zm80-.228c-5.2-2.646-7.523-8.732-7.064-18.504.635-13.527 6.27-20.454 16.644-20.454 6.546 0 9.44 2.082 10.293 7.402 1.216 7.593-4.213 14.67-12.616 16.448-2.96.626-3.235.98-2.658 3.412 1.08 4.553 3.302 6.27 8.113 6.27 3.442 0 5.142-.67 7.942-3.127l3.563-3.13.283-13.384.284-13.384 5.843-.304c5.374-.28 5.843-.132 5.843 1.852v2.156l2.677-2.106c5.574-4.384 12.565-1.715 12.565 4.797 0 5.48-4.675 6.328-8.637 1.57-1.91-2.296-2.17-2.345-4.32-.827-2.2 1.556-2.285 2.19-2.285 17.307V127.3h-12.194v-7.209l-4.113 3.306c-3.472 2.79-5.094 3.357-10.415 3.638-4.494.237-7.29-.17-9.75-1.422zm12.783-25.545c2.92-6.987-1.9-12.82-5.248-6.35-1.743 3.373-3.624 11.863-2.807 12.68 1.272 1.272 6.642-2.947 8.055-6.33zm47.945 25.522c-4.992-3.1-6.476-7.02-6.468-17.09.008-10.13 2.02-15.632 7.214-19.717 2.898-2.28 11.907-3.045 13.1-1.113.346.56 1.086 1.017 1.645 1.017.558 0 .733-.458.387-1.017-.392-.634 1.683-1.016 5.53-1.016h6.156v15.715c0 13.932.2 15.82 1.778 16.645 1.05.55 2.758.562 4.16.033 2.18-.822 2.327-1.31 1.738-5.723-1.278-9.565 2.556-21.44 7.994-24.755 3.43-2.09 9.762-2.517 12.85-.864 1.867 1 1.965.645 1.965-7.094 0-8.99-.65-8.197 7.875-9.616l3.303-.55v22.838c0 21.752.1 22.938 2.106 24.945 1.902 1.9 2.325 1.96 4.32.628 1.94-1.296 2.17-2.227 1.86-7.61-.838-14.68 5.85-24.598 16.582-24.59 6.927.005 11.228 2.71 12.835 8.077 1.214 4.052 2.232 4.712 5.4 3.496 1.346-.515 1.608-2.657 1.608-13.14 0-13.928 3.576-22.587 5.987-18.12 1.354 2.512 1.582-3.2 4.718 9.823 1.33 5.53 1.253 17.714 1.253 17.714.35 21.873.41 23.67 2.178 24.615 1.454.778 2.534.526 4.554-1.064l2.65-2.083V72.52l3.81-.612c2.096-.337 4.84-.824 6.097-1.082l2.287-.47V94.22c0 21.694.162 23.948 1.778 24.795 2.72 1.424 5.972-.342 7.22-3.92 1.372-3.94 3.84-3.537 3.383.55-.834 7.457-5.824 11.655-13.855 11.655-4.574 0-8.687-2.456-8.687-5.186 0-.617-1.617.298-3.592 2.032-2.887 2.535-4.495 3.154-8.196 3.154-2.532 0-5.527-.494-6.656-1.098-3.273-1.752-4.927-7.212-4.927-16.263 0-8.092-.053-8.267-2.287-7.668-1.257.337-2.63.62-3.048.627-.42.007-.772 2.642-.785 5.855-.028 7.396-2.825 13.75-7.285 16.547-4.66 2.925-13.914 2.4-17.525-.992l-2.506-2.354-3.176 2.672c-4.536 3.817-11.235 3.757-15.128-.136l-2.807-2.807-2.768 2.807c-3.764 3.82-9.92 3.88-15.415.152-2.44-1.656-4.06-2.222-4.298-1.503-.653 1.956-5.998 4.16-10.087 4.16-4.232 0-8.405-2.3-8.405-4.63 0-2.058-.452-1.876-3.91 1.58-2.46 2.463-3.893 3.044-7.444 3.023-2.418-.015-5.598-.773-7.066-1.684zm96.11-6.034c.903-.348 2.272-1.846 3.04-3.33 1.726-3.34 2.366-12.18.95-13.125-1.81-1.206-2.456-4.32-1.33-6.423 1.3-2.434-.333-4.942-3.222-4.942-3.043 0-5.294 5.744-5.775 14.734-.384 7.194-.18 8.45 1.778 10.922 2.465 3.115 2.292 3.033 4.56 2.164zm-81.757-2.413c.64-1.196.968-6.72.8-13.464l-.29-11.437-2.812-.323c-2.45-.282-3.07.244-4.804 4.064-2.217 4.884-2.816 17.8-.984 21.22 1.438 2.69 6.64 2.65 8.09-.06zm41.84.346c1.58-1.43 1.857-3.313 1.857-12.578 0-8.285-.354-11.19-1.475-12.12-2.315-1.92-4.838-.853-7.107 3.01-2.56 4.356-3.022 18.873-.693 21.685 1.783 2.153 5.04 2.154 7.417.002zm120.946 8.167c-5.552-2.83-8.41-11.597-4.767-14.62 1.528-1.27 5.862-14.485 7.037-21.46.557-3.304 1.007-3.744 4.41-4.306 8.11-1.34 7.6-1.902 11.177 12.308 1.794 7.125 3.38 14.226 3.525 15.78.26 2.803.28 2.81 2.795 1.04 2.693-1.898 5.09-2.6 5.083-1.488-.01 1.238-4.522 5.934-9.484 9.868-4.158 3.296-5.803 3.95-10.67 4.243-3.96.24-6.797-.185-9.108-1.363zm7.45-5.875c2.447-1.79 2.307-8.532-.36-17.378l-1.838-6.096-2.22 6.552c-1.482 4.375-1.882 6.89-1.202 7.57 1.88 1.88 1.2 5.692-1.015 5.692-2.504 0-2.668 2.576-.253 3.983 2.474 1.44 4.614 1.34 6.89-.323zm-27.444-44.49c.9-8.947.908-8.96 5.555-8.96 3.982 0 4.093.09 3.416 2.794-3.15 12.587-2.807 11.92-6.317 12.262l-3.3.323z"fill="#294571" /></g></a></svg>
                </header>
            </div>
            <div class="col span_2_of_3" id="nav_wrapper">
                <div id="language_setting">
                    <a href="<?php echo str_replace('//', '/', str_replace('/en/', '', '/wordpress' . '/' . get_relative_permalink( get_permalink() ) ) ); ?>">
                        <svg id="svg_fi" xmlns="http://www.w3.org/2000/svg" width="51.783" height="40.866" viewBox="0 0 51.782902 40.865824"><path d="M25.892 40.866a25.89 20.433 0 0 1-11.303-2.078l-.006-4.28-.01-8.17-10.21-.01-3.24-.003A25.89 20.433 0 0 1 0 20.433a25.89 20.433 0 0 1 1.29-6.325l3.074-.003 10.21-.01.01-8.17.005-3.858A25.89 20.433 0 0 1 25.89 0a25.89 20.433 0 0 1 .942.037v14.078H50.48a25.89 20.433 0 0 1 1.303 6.318 25.89 20.433 0 0 1-1.107 5.886H26.834V40.838a25.89 20.433 0 0 1-.942.026z" fill="#003580"/></svg>
                    </a>
                    <a href="<?php echo str_replace('/en/en/', '/en/', '/wordpress' . '/' . 'en' . get_relative_permalink( get_permalink() ) ); ?>">
                        <svg id="svg_br" xmlns="http://www.w3.org/2000/svg" width="51.783" height="40.866" viewBox="0 0 51.782902 40.865799"><path d="M25.89 0a25.89 20.433 0 0 0-3.664.227v16.098H.532A25.89 20.433 0 0 0 0 20.432a25.89 20.433 0 0 0 .618 4.32h21.608v15.882a25.89 20.433 0 0 0 3.665.23 25.89 20.433 0 0 0 4.77-.362v-15.75H51.18a25.89 20.433 0 0 0 .6-4.32 25.89 20.433 0 0 0-.557-4.11H30.66V.363A25.89 20.433 0 0 0 25.89 0z" fill="#cf142b"/><path d="M19.392.67A25.89 20.433 0 0 0 7.285 6.256c6.653 3.33 12.082 6.045 12.09 6.047.01 0 .017-2.886.017-6.418V.67zM33.492.902v11.404L44.912 6.6A25.89 20.433 0 0 0 33.493.902z" fill="#00247d"/><path d="M46.044 7.616l-11.728 5.87h6.193l7.437-3.723a25.89 20.433 0 0 0-1.903-2.147zM4.116 9.418a25.89 20.433 0 0 0-1.606 2.296l3.54 1.77h6.194L4.116 9.42zM46.8 27.586h-6.16l7.216 3.61a25.89 20.433 0 0 0 1.572-2.305L46.8 27.58z" fill="#cf142b"/><path d="M50.108 27.597h-.11l.09.045a25.89 20.433 0 0 0 .02-.045z" fill="#294571"/><path d="M12.375 27.597l-8.11 4.058a25.89 20.433 0 0 0 2.02 2.09l12.284-6.148h-6.195z" fill="#cf142b"/><path d="M19.392 28.775L7.428 34.753a25.89 20.433 0 0 0 11.964 5.436V28.775zM33.492 28.775v11.173A25.89 20.433 0 0 0 44.75 34.4L33.49 28.775z" fill="#00247d"/></svg>
                    </a>
                </div>
                <nav id="nav">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<ul id="menu-main-menu">%3$s</ul><a href="#" id="pull"><div id="pull_menu">MENU</div></a>' )
                    ); ?>
                </nav>
            </div>
        </div>
        </div>