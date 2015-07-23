<?php
/*
Template Name: CURRENT LITTERS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="current_litters_container">
            <div class="col span_3_of_3" id="current_litters_content" style="background-color:yellow;">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>