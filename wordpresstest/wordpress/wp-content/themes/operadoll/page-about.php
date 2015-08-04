<?php
/*
Template Name: ABOUT page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="about_container">
            <div class="col span_3_of_3" id="about_content">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>