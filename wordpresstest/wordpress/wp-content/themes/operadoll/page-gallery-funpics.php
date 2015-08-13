<?php
/*
Template Name: GALLERY-FUNPICS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="gallery_container">
            <div class="col span_3_of_3" id="gallery_content">
                <div id="gallery_description">
                <span id="fun_pics_description_text">
                FINNISH GOES HERE Funny moments of our lovely cats
                </span>
                </div>
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>