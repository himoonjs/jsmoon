<?php
/*
Template Name: LINKS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="link_container">
            <div class="col span_3_of_3" id="link_content" style="background-color:yellow;">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>