<?php
/*
Template Name: Next Page
*/

get_header(); ?>
<?php get_sidebar(); ?>
<?php
$content_post = get_post('63');
echo $content_post->post_content;
 ?>

<?php get_footer(); ?>