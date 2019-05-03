
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

	<nav class="site-nav">

		<svg width="21" height="27" viewBox="0 0 21 27" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0)">
		<path d="M6.99227 26.1087C5.4 25.1909 4.00483 23.9674 2.88693 22.5086C1.76904 21.0498 0.950467 19.3844 0.478266 17.6083V17.6083C-0.479788 14.023 0.0256376 10.204 1.88335 6.99139C3.74107 3.77878 6.79891 1.43573 10.3842 0.477673V0.477673C12.1591 0.00082592 14.0107 -0.120556 15.8326 0.120505C17.6546 0.361566 19.411 0.960315 21.0008 1.88234L6.99227 26.1087Z" fill="#101010"/>
		</g>
		<defs>
		<clipPath id="clip0">
		<rect width="21" height="26.1085" fill="white"/>
		</clipPath>
		</defs>
		</svg>
		

		<!--<div class="main-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
		</div>-->

		<div class="logo-header">
			<svg width="61" height="15" viewBox="0 0 61 15" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M20.984 0H18.1816V14.9991H27.4158V12.5655H20.984V0Z" fill="#101010"/>
			<path d="M36.8199 0H34.0176V15H43.2522V12.5664H36.8199V0Z" fill="#101010"/>
			<path d="M8.57848 0L2.8042 10.0753V0.000457178H0V14.9991H2.80328L5.62173 10.1507L8.37033 14.9995L11.5196 15L11.5191 14.9995H11.5196L7.1619 7.5L11.5196 0.000457178L8.57848 0Z" fill="#101010"/>
			<path d="M61 14.999L57.4064 8.81427C59.2443 8.14039 60.5414 6.49409 60.5414 4.56983C60.5414 2.1925 58.4738 -0.00195312 55.5543 -0.00195312H49.8535V14.9994H52.6563V9.16493L54.6321 9.16264L57.9739 14.999H61ZM52.6563 2.19159H55.1835C56.6166 2.19159 57.7786 3.25636 57.7786 4.56891C57.7786 5.79689 56.6157 6.94167 55.3548 6.94167L55.347 6.94715H52.6563V2.19159Z" fill="#101010"/>
			</svg>
		</div><!-- .logo-header -->
	</nav>

	<div id="content" class="site-content">
