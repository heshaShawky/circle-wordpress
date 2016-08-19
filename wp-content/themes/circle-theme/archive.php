<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package circle_theme
 */

get_header(); ?>
	<section class="hero" style="height: auto; color:#fff; ">
		<div class="container">
			<div class="raw">
				<?php the_archive_title( '<h2 class="text-uppercase" style="font-weight: bold;">', '</h2>' ); ?>
			</div>
		</div>
	</section>

	<section class="main-wrapper clearfix">
		<div class="container">
			<div class="col-md-8">
				<main id="content" role="main" class="main-posts">
					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php

								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</main>

			</div>

			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
