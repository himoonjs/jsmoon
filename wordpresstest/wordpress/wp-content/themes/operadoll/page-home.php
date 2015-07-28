<?php
/*
Template Name: HOME page template
*/
?>

<?php get_header(); ?>

        <div class="section group first_row_container">
            <div class="col span_1_of_3 circle" id="home_first_row_left" style="background-color:none;">
                <div class="circle_frame" id="circle_frame_ragdolls" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <p class="home_titles" id="home_title_ragdolls">Ragdolls</p>
            </div>
            <div class="col span_1_of_3 circle" style="background-color:none;">
                <div class="circle_frame" id="circle_frame_american_curls" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/american_curl.jpg)"></div>
                <p class="home_titles" id="home_title_american_curls">American Curls</p>
            </div>
            <div class="col span_1_of_3 circle" style="background-color:none;">
                <div class="circle_frame" id="circle_frame_current_litters" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/current_litters.jpg)"></div>
                <p class="home_titles" id="home_title_current_litters">Pennut</p>
            </div>
        </div>
        <div class="section group second_row_container">
            <div class="col span_1_of_2 circle circle_second_row" id="home_second_row_left" style="background-color:none;">
                <div class="circle_frame" id="circle_frame_our_cats" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ourcats.jpg)"></div>
                <p class="home_titles" id="home_title_our_cats">Kissani</p>
            </div>
            <div class="col span_1_of_2 circle circle_second_row" style="background-color:none;">
                <div class="circle_frame" id="circle_frame_previous_litters" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/previous_litters.jpg)"></div>
                <p class="home_titles" id="home_title_previous_litters">Edelliset Pentueet</p>
            </div>
        </div>

<?php get_footer(); ?>