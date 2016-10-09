<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name') ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<img src="http://localhost/wp_secretchest/wp-content/uploads/2016/10/title-banner.png">
			<nav class="site-nav">
				<ul class="col-news">
					<li><a href="#">Nyheter</a></li>
				</ul>
				<ul class="col-pages">
					<li><a href="#videos">Videoer</a></li>
					<li><a href="#articles">Artikler</a></li>
					<li><a href="#podcasts">Podcasts</a></li>
					<li><a href="#events">Events</a></li>
				</ul>
				<ul class="col-about">
					<li><a href="#about-us">Om oss</a></li>
				</ul>
				<ul class="col-links">
					<li><a href="#facebook">Facebook</a></li>
					<li><a href="#youtube">YouTube</a></li>
				</ul>
			</nav>
		</header>