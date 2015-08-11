<?php
/*
Template Name: GALLERY-AMERICANCURLS page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="gallery_container">
            <div class="col span_3_of_3" id="gallery_content">
                <div id="gallery_description">
                <span id="american_curls_description_text">
American curl on uusimpia kissarotuja, sillä se syntyi vuonna 1981 Kaliforniassa. Suomeen ensimmäinen curl tuotiin vuonna 2001. 
                </span>
                <p id="american_curls_read_more"><br />LUE LISÄÄ</p>
                </div>
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?> 
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>