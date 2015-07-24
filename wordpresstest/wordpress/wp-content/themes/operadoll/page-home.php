<?php
/*
Template Name: HOME page template
*/
?>

<?php get_header(); ?>

        <div class="section group" id="home_container">
            <div class="col span_1_of_3 circle" id="home_first_row_left" style="background-color:gray;">
                <div class="circle_frame" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <em>Ragdolls</em>
            </div>
            <div class="col span_1_of_3 circle" style="background-color:gray;">
                <div class="circle_frame" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <em>American Curls</em>
            </div>
            <div class="col span_1_of_3 circle" style="background-color:gray;">
                <div class="circle_frame" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <em>Current Litters</em>
            </div>
        </div>
        <div class="section group">
            <div class="col span_1_of_2 circle circle_second_row" id="home_second_row_left" style="background-color:gray;">
                <div class="circle_frame" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <em>OUR CATS</em>
            </div>
            <div class="col span_1_of_2 circle circle_second_row" style="background-color:gray;">
                <div class="circle_frame" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/operadoll/images/ragdoll.jpg)"></div>
                <em>PREVIOUS LITTERS</em>
            </div>
        </div>

<?php get_footer(); ?>