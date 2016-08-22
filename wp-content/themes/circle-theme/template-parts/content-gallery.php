<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package circle_theme
 */

?>


	<main class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article class="post-body">
            <div class="col-sm-8">
                <?php if ( has_post_thumbnail() ): ?>
    				<?php the_post_thumbnail('full', array('class'=> 'img-responsive post-image')); ?>
    			<?php endif; ?>
            </div>
            <div class="col-sm-4">
                <div class="info">
                    <p>
        				<?php the_content();  ?>
        			</p>
                </div>
            </div>
			<br />

	    </article>

	</main>
