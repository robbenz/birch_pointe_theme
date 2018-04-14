<?php
/*
Template Name: Home Page
*/

get_header();  ?>


<?php get_template_part('content', 'clubhouse') ; ?>

<?php get_template_part('content', 'optin') ; ?>

<?php get_template_part('content', 'about') ; ?>

<?php get_template_part('content', 'coursefeatures') ; ?>

<?php get_template_part('content', 'scorecard') ; ?>

<?php get_template_part('content', 'photogal') ; ?>

<?php get_template_part('content', 'rates') ; ?>

<?php get_template_part('content', 'location') ; ?>

<?php //get_template_part('content', 'instructor') ; ?>

<?php // get_template_part('content', 'testimonial') ; ?>

<?php get_footer(); ?>
