<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- Plugin API hook - Sets up Header and prepairs page-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header>

				<?php if (has_custom_logo()) {
					the_custom_logo();
				}
				if (get_theme_mod('header_text', true)) :

				?>
				<?php endif; ?>

			<!-- <h1>Welcome to the ShinDig</h1> -->

			<!-- Displays Wordpresses nav menu -->
				<?php  wp_nav_menu(array('theme_location' => 'primary')); ?>

	</header>

	<?php
	wp_body_open();
	?>