<?php
/*
Template Name: GALLERY-RAGDOLLS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="gallery_container">
            <div class="col span_3_of_3" id="gallery_content">
                <div id="gallery_description">
                <span id="ragdolls_description_text">
                Ragdoll on 1960-luvulla Kaliforniassa kehitetty sinisilmäinen, naamiokuvioinen kissarotu. Se on Suomen suosituin kissarotu.
                </span>
                <p id="ragdolls_read_more"><br />LUE LISÄÄ</p>
                </div>
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>