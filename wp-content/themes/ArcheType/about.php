<?php
/*
Template Name: About
*/

get_header(); ?>
 	<div class="content">
		<div class="post img-post">
			<img src="images/post_img2.jpg" alt="img" />
			<?php
				$post = get_post("89");
				echo '<h2>'.$post->post_title.'</h2>';	
				echo '<p>'.$post->post_content.'</p>';	
			?> 	
		</div>
		<div class="post little-post left-little-post">
			<?php
				$post = get_post("101");
				echo '<h2>'.$post->post_title.'</h2>';	
				echo '<p>'.$post->post_content.'</p>';	
			?> 	
		</div>
		<div class="post little-post right-little-post">
			<?php
				$post = get_post("104");
				echo '<h2>'.$post->post_title.'</h2>';	
				echo '<p>'.$post->post_content.'</p>';	
			?> 	
		</div>
	</div>

<?php get_footer(); ?>