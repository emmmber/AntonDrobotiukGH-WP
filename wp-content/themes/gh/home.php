<?php
/*
Template Name: Home
*/

get_header('home'); ?>

<?php
$content_post = get_post('2');
echo $content_post->post_content;
?>

<?php get_footer(); ?>