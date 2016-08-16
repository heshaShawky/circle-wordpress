<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package circle_theme
 */

?>

<div class="post clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-head clearfix">
		<div class="col-xs-2">
			<div class="user-image text-center">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 90, null, null, array('class'=>'img-responsive img-circle')); ?>
				<!-- <img src="" class="img-responsive img-circle" alt="" /> -->
				<span class="comments-count"><a href="<?php comment_link() ?>"><?php comments_number(0, 1, "%"); ?></a></span>
				<span>By <?php the_author(); ?></span>
			</div>
		</div>
		<div class="col-xs-10">
			<?php
			if ( is_single() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif; ?>

			<?php if ( 'post' === get_post_type() ) : ?>
				<p>
					<span class="date"><i class="fa fa-clock-o"></i>&nbsp <?php the_date(); ?></span>
					&nbsp&nbsp&nbsp <span class="tags"><i class="fa fa-tags"></i>&nbsp <?php the_category(', '); ?></span>
					&nbsp&nbsp&nbsp  <?php edit_post_link('Edit', '<span><i class="fa fa-pencil"></i> ', '</span>' ); ?>
				</p>
			<?php endif; ?>


		</div>
	</header>

	<article class="post-body">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('full', array('class'=> 'img-responsive post-image')); ?>
		<?php endif; ?>

		<?php if (is_single()) {
			the_content();
		} else { ?>
			<p>
				<?php the_excerpt(); ?>
			</p>
		<?php } ?>
	</article>
	<hr style="border-width:4px"/>

</div>
