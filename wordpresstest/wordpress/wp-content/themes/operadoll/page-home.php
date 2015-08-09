<?php
/*
Template Name: HOME page template
*/
?>

<?php get_header(); ?>

        <div class="section group first_row_container">
            <div class="col span_1_of_3 circle" id="home_first_row_left" style="background-color:none;">
                <a href="#">
                <div class="circle_frame" id="circle_frame_our_cats" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ourcats.jpg)"></div>
                </a>
                <p class="home_titles" id="home_title_our_cats"><a href="#">Kissani</a></p>
            </div>
            <div class="col span_1_of_3 circle" id="home_first_row_middle" style="background-color:none;">
                <a href="#">
                <div class="circle_frame" id="circle_frame_current_litters" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/current_litters.jpg)"></div>
                </a>
                <p class="home_titles" id="home_title_current_litters"><a href="#">Pennut</a></p>
            </div>
            <div class="col span_1_of_3 circle" id="home_first_row_right" style="background-color:none;">
                <a href="#">
                <div class="circle_frame" id="circle_frame_previous_litters" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/previous_litters.jpg)"></div>
                </a>
                <p class="home_titles" id="home_title_previous_litters"><a href="#">Edelliset Pentueet</a></p>
            </div>
        </div>
        <div class="section group second_row_container">
            <div class="col span_1_of_2 circle circle_second_row" id="home_second_row_left" style="background-color:none;">
                <a href="#">
                <div class="circle_frame" id="circle_frame_ragdolls" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                </a>
                <p class="home_titles" id="home_title_ragdolls"><a href="#">Ragdolls</a></p>
            </div>
            <div class="col span_1_of_2 circle circle_second_row" id="home_second_row_right" style="background-color:none;">
                <a href="#">
                <div class="circle_frame" id="circle_frame_american_curls" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/american_curl.jpg)"></div>
                </a>
                <p class="home_titles" id="home_title_american_curls"><a href="#">American Curls</a></p>
            </div>
        </div>

<?php get_footer(); ?>