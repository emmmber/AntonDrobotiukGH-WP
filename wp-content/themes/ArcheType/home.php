<?php
/*
Template Name: Home
*/

get_header('home'); ?>
<?php get_sidebar(); ?>
<div class="content">
	<div class="post">
			<?php
				$post = get_post("83");
				echo '<h2>'.$post->post_title.'</h2>';	
				echo '<p>'.$post->post_content.'</p>';	
			?> 		
		<a class="more" href="#">
			<?php
				$post = get_post("4");
				echo $post->post_content;	
			?>
		</a>
	</div>
	<div class="post img-post">
		<img src="../wp-content/themes/ArcheType/images/post_img.jpg" alt="img" />
		<?php
				$post = get_post("87");
				echo '<h2>'.$post->post_title.'</h2>';	
				echo '<p>'.$post->post_content.'</p>';	
		?> 		
	</div>
</div>
<?php get_footer('home'); ?>