<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leigroundworks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'leigroundworks' ); ?></a>
	<hr style="margin:0;" class="yellow">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="container">
				<div class="row">
				<div class="col-md-6 col-sm-12">
					<?php the_custom_logo();?>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="contact-info">
						<div class="phone-no">01234 567890</div>
						<div class="email"><a href="https://ryan.riverdog.net/?page_id=32">enquiries@lgservices.com</a></div>
					</div>
				</div>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<hr style="margin:0;">
