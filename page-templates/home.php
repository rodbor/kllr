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
				<div class="logo-intro">
				<svg width="739px" height="198px" viewBox="0 0 739 198" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="KLLR-W" fill="#101010">
            <polygon id="Path" points="255.258 0.485352 218.699 0.485352 218.699 197.503 339.166 197.503 339.166 165.537 255.258 165.537"></polygon>
            <polygon id="Path" points="442.563 0.485352 406.004 0.485352 406.004 197.515 526.477 197.515 526.477 165.549 442.563 165.549"></polygon>
            <polygon id="Path" points="112.694 0.486084 37.3643 132.828 37.3643 0.492089 0.7812 0.492089 0.7812 197.503 37.3523 197.503 74.121 133.819 109.979 197.51 151.064 197.516 151.058 197.51 151.064 197.51 94.214 99.0008 151.064 0.492089"></polygon>
            <path d="M738.712,197.509 L691.831,116.271 C715.808,107.419 732.73,85.7947 732.73,60.5189 C732.73,29.2921 705.755,0.467285 667.668,0.467285 L593.297,0.467285 L593.297,197.515 L629.862,197.515 L629.862,120.877 L655.637,120.847 L699.234,197.509 L738.712,197.509 Z M629.862,29.2801 L662.83,29.2801 C681.527,29.2801 696.686,43.2661 696.686,60.5069 C696.686,76.6368 681.515,91.6737 665.066,91.6737 L664.964,91.7458 L629.862,91.7458 L629.862,29.2801 Z" id="Shape" fill-rule="nonzero"></path>
        </g>
    </g>
</svg>
					<!--<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-large.png' ?>" />-->
				</div>
			</section>

			<section class="about-home">
				<div class="desc">
					<p class="h-text">KLLR* is a design agency based in Portugal with experience across UX design, app design, brand identity, web development and WordPress. We have worked with a diverse range of well-known and established clients.</p>
					<p class="v-text">* Pronounced as killer</p>
				</div>
			</section>

			<section class="services scroll-left">
				<p>user experience <span></span> user interface design <span></span> branding</p>
			</section>

			<div class="portfolio">

				<h2>Selected Work</h2>
				
					<ul>
						<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'DES', 'posts_per_page' => 50 ) ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						
							<li>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">
								</a>
							</li>

						<?php endwhile; ?>
					</ul>
				

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
