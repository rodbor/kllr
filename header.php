<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kllr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kllr' ); ?></a>

	<nav>
		<div class="logo-header">
			<svg width="74" height="19" viewBox="0 0 74 19" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0)">
				<path d="M25.4572 0H22.0576V18.3204H33.2597V15.348H25.4572V0Z" fill="#101010"/>
				<path d="M44.6681 0H41.2686V18.3215H52.4712V15.3491H44.6681V0Z" fill="#101010"/>
				<path d="M10.4067 0L3.40182 12.3063V0.000558413H0V18.3204H3.4007L6.8198 12.3985L10.1542 18.321L13.9746 18.3215L13.974 18.321H13.9746L8.68821 9.16077L13.9746 0.000558413L10.4067 0Z" fill="#101010"/>
				<path d="M73.9995 18.3209L69.6401 10.7667C71.8697 9.94363 73.4432 7.93279 73.4432 5.58242C73.4432 2.67868 70.9349 -0.00170898 67.3932 -0.00170898H60.4775V18.3215H63.8777V11.195L66.2745 11.1922L70.3285 18.3209H73.9995ZM63.8777 2.67756H66.9434C68.6819 2.67756 70.0916 3.9781 70.0916 5.58131C70.0916 7.08121 68.6808 8.47947 67.1513 8.47947L67.1418 8.48617H63.8777V2.67756Z" fill="#101010"/>
				</g>
				<defs>
				<clipPath id="clip0">
				<rect width="74" height="18.3215" fill="white"/>
				</clipPath>
				</defs>
			</svg>
			<p>A multidisciplinary design agency based in Portugal</p>
		</div><!-- .logo-header -->

		<div class="main-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
		</div>
	</nav>

	<div id="content" class="site-content">
