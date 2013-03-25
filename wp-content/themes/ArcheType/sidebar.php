<div class="sidebar">
	<h3><strong>Featured</strong> Links</h3>
	<ul>
		<li class="forum">Forum ellis sed</li>
		<li class="dolor">Magnus dolor sed</li>
		<li class="aestic">Sed dolor aestic</li>
		<li class="menit">Dolor sed menit</li>
		<li class="et">Mag et dolor at</li>
	</ul>
</div>
<?php 
	if (function_exists('register_sidebars'))
	register_sidebars(2, array(
		'before_widget' => '<div>',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => '</div>'
	));
?>