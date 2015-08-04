<?php
/*
Template Name: PREVIOUS-LITTERS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="previous_litters_container">
            <div class="col span_3_of_3" id="previous_litters_content">
                <?php if ( is_active_sidebar( 'previous-litters-widget-area' ) ) : ?>
                  <div class="bdr grd-vt-main rnd shdw-centered"> 
                    <?php dynamic_sidebar( 'previous-litters-widget-area' ); ?>
                  </div>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>