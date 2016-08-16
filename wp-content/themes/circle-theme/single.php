<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package circle_theme
 */

get_header(); ?>
	<section class="hero" style="height: auto; color:#fff; ">
		<div class="container">
			<div class="raw">
				<h2 style="font-weight: bold;">BLOG</h2>
			</div>
		</div>
	</section>
	<section class="main-wrapper clearfix" id="primary">
		<div class="container">
			<div class="col-md-8">
				<main id="main" class="post" role="main">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-page', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</main>
			</div>

			<div class="col-md-4 hidden-xs">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
