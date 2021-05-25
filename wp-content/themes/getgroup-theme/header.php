<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://jananyonline.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1" id="jquery-core-js"></script>
	<script type="text/javascript" src="https://jananyonline.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
	<script type="text/javascript" src="https://jananyonline.com/wp-content/plugins/indeed-membership-pro/assets/js/jquery-ui.min.js" id="ihc-jquery-ui-js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<h1 class="site-title"><img src="<?php echo home_url(); ?>/wp-content/themes/getgroup-theme/assets/img/logo.png"></h1>

	<nav class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
</header>

<div id="content" class="site-content">
	
