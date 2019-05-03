
<?php
/**
 * Template Name: Home
 * 
 * @package kllr
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="intro">
				<svg width="311" height="77" viewBox="0 0 311 77" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M106.989 0L92.7012 0V76.9953H139.78V64.503H106.989V0Z" fill="#101010"/>
				<path d="M187.725 0L173.438 0V77H220.519V64.5077H187.725V0Z" fill="#101010"/>
				<path d="M43.7362 0L14.2968 51.7198V0.00234685H0L0 76.9953H14.2921L28.6616 52.107L42.675 76.9977L58.7311 77L58.7287 76.9977H58.7311L36.514 38.5L58.7311 0.00234685L43.7362 0Z" fill="#101010"/>
				<path d="M311.001 76.9979L292.679 45.2497C302.05 41.7905 308.663 33.3395 308.663 23.4616C308.663 11.258 298.121 -0.00683594 283.236 -0.00683594H254.172V77.0002H268.462V47.0498L278.535 47.038L295.572 76.9979H311.001ZM268.462 11.2533H281.346C288.652 11.2533 294.577 16.7191 294.577 23.4569C294.577 29.7606 288.648 35.6371 282.22 35.6371L282.18 35.6652H268.462V11.2533Z" fill="#101010"/>
				</svg>
			</section>


			<div class="portfolio">
					
				<?php
				$args = array(
					'post_type'     => 'portfolio',
					'category_name' => 'eyeso',
					'posts_per_page' => 1,
					'order' => 'ASC',
				);
				$query = new WP_Query( $args ); 
				
				while ( $query->have_posts() ) : $query->the_post();
				?>

					<a href="<?php the_permalink(); ?>" class="portfolio-item-right">
						<img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

						<h3><?php the_title(); ?></h3>
						<p>UX, UI Design</p>
					</a>
				<?php
				endwhile;						
				wp_reset_query();
				?>
							

				<?php
				$args = array(
					'post_type'     => 'portfolio',
					'category_name' => 'comobranco',
					'posts_per_page' => 1,
					'order' => 'ASC',
				);
				$query = new WP_Query( $args ); 
				
				while ( $query->have_posts() ) : $query->the_post();
				?>

					<a href="<?php the_permalink(); ?>" class="portfolio-item">
						<img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

						<h3><?php the_title(); ?></h3>
						<p>UX, UI Design</p>
					</a>
				<?php
				endwhile;						
				wp_reset_query();
				?>
						
					
				<?php
				while ( have_posts() ) :
					the_post();

				endwhile; // End of the loop.
				?>

			</div><!-- .portfolio -->


			<div class="home-about">
				<p>KLLR* is a design agency based in Portugal with experience across UI/UX design, brand identity, web development and WordPress.</p>
			</div><!-- -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
