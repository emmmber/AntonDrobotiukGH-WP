<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GeekHub
 * @since GeekHub
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php
        /*
       * Print the <title> tag based on what is being viewed.
       */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'GeekHub' ), max( $paged, $page ) );

        ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    /* We add some JavaScript to pages with the comment form
      * to support sites with threaded comments (when in use).
      */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
      * tag of your theme, or you will break many plugins, which
      * generally use this hook to add elements to <head> such
      * as styles, scripts, and meta tags.
      */
    wp_head();
    ?>
</head>

<body <?php body_class('home'); ?>>
    <div id="wrapper" class="wrapper">
    <div id="header" class="header">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span><img src="wp-content/themes/gh/images/logo.png" alt="logo" /></a></h1>
        <ul class="nav">
            <?php wp_list_pages('sort_column=menu_order&depth=0&title_li=');?>
        </ul>
		<ul class="soc">
			<li><a href="http://www.facebook.com" class="facebook"></a></li>
			<li><a href="http://www.vk.com" class="vk"></a></li>
			<li><a href="http://www.twitter.com" class="twitter"></a></li>
			<li><a href="http://www.youtube.com" class="youtube"></a></li>
			<li><a href="http://vimeo.com/geekhub" class="vimeo" ></a></li>
		</ul>
		<span class="registration">Реєстрація на другий сезон відкрита!</span>
		<a href="#" class="will-reg">Зареєструватися</a>
	</div>
        <!--header_end-->
	<div id="main" class="content">