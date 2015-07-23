<?php
/*
Template Name: GALLERY page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="gallery_container">
            <div class="col span_3_of_3" id="gallery_content" style="background-color:yellow;">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>