<?php
/*
Template Name: About
*/

get_header(); ?>
<?php get_sidebar('easy'); ?>
<?php
$content_post = get_post('52');
echo $content_post->post_content;
 ?>

<?php get_footer(); ?>