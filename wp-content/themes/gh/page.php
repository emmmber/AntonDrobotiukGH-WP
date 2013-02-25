<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header('home'); ?>

<div class="content">
	<p><strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися </a>слухачем!</p>
	<h2>Наши курсы</h2>
	<ul class="course-title">
		<li class="frontend-cms">
			<h3>Frontend + CMS</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>	
		<li class="advanced-cms">
			<h3>Advanced CMS</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="advanced-php">
			<h3>Advanced PHP</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="basic-java">
			<h3>Basic Java</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="java-for-android">
			<h3>Java for Android</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="project-managment">
			<h3>Project Management</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="qualite-assurance">
			<h3>Quality Assurance</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
		<li class="technecal-english">
			<h3>Technical English</h3>
			<p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
		</li>
	</ul>
		<ul class="adv">
			<li><a href="http://www.facebook.com"><img src="images/soc_fb.png" alt="facebook" /></a></li>
			<li><a href="http://www.vk.com"><img src="images/soc_vk.png" alt="vk" /></a></li>
			<li><a href="http://www.twitter.com"><img src="images/soc_twitter.png" alt="twitter" /></a></li>
			<li><a href="http://www.youtube.com"><img src="images/soc_youtube.png" alt="youtube" /></a></li>
			<li><a href="http://vimeo.com/geekhub"><img src="images/soc_vimeo.png" alt="vimeo" /></a></li>
			<li><a href="http://vimeo.com/geekhub"><img src="images/soc_vimeo.png" alt="vimeo" /></a></li>
		</ul>
        <div class="facebook">
            <img src="wp-content/themes/gh/images//content_links.jpg" alt="facebook" />
        </div>
        <div class="sponsors">
            <h3>Наши спонсоры</h3>
            <ul>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsor-1.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsor-2.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsor-3.png" alt="спонсор" /></a></li>
                <li class="pre-last"><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsor-4.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsor-5.png" alt="спонсор" /></a></li>
            </ul>
        </div>
        <div class="certificate">
            <img src="wp-content/themes/gh/images/certificate.png" alt="certificates" />
        </div>
</div>

<!--content_end-->
<?php get_footer(); ?>