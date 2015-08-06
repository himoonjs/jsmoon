<?php
/*
Template Name: SECOND-MENU page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="menu_previous_litters_container">
            <div class="col span_3_of_3" id="menu_previous_litters_content">
                <?php 

                    $walker = new my_nav_walker;

                    wp_nav_menu( array(
                        'theme_location' => 'second-menu',
                        'items_wrap' => '<ul id="menu-second-menu">%3$s</ul>',
                        'walker' => $walker )
                    ); 
                ?>
            </div>
        </div>

<?php get_footer(); ?>