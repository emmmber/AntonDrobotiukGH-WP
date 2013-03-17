    <div class="sidebar">
		<ul class="sidebar-box">
		<li class="v-o">
			<h4>Denver Virtual Offices</h4>
			<span>303.501.1801</span>
		</li>
		<li class="skype">
			<h4>Skype</h4>
			<span>denver.vo</span>
		</li>
		<li class="mail">
			<span>info@denvervirtualoffices.com</span>
		</li>
		</ul>
		<ul class="services">
			<li class="mailboxes">
				<span></span>
				<h4>Mailboxes</h4>
				<p>Rostrud tionsequat. Met lan et, vullummy.</p>
			</li>
			<li class="phone">
				<span></span>
				<h4>Phone Service</h4>
				<p>Rostrud tionsequat. Met lan et, vullummy.</p>
			</li>
			<li class="rooms">
				<span></span>
				<h4>Conference Room</h4>
				<p>Rostrud tionsequat. Met lan et, vullummy.</p>
			</li>			
			<li class="office">
				<span></span>
				<h4>Office</h4>
				<p>Rostrud tionsequat. Met lan et, vullummy.</p>
			</li>
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