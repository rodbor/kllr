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
			<div class="portfolio">
				<ul>

					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'DES', 'posts_per_page' => 50 ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<li>
							<a href="<?php the_permalink(); ?>" class="image_container">
								<img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">
							</a>
						</li>

					<?php endwhile; ?>

				</ul><!-- .portfolio -->



				<?php
				while ( have_posts() ) :
					the_post();

				endwhile; // End of the loop.
				?>

			</div><!-- .portfolio -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
