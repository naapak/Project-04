<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<?php if ( has_post_thumbnail() ) : ?>

		<?php if ( has_post_thumbnail() ) : $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); endif; ?>

		<header>
		
		<?php endif; ?>
		<h2 class=" teal caps"> <?php the_title() ?></h2>
		<?php if ( 'post' === get_post_type() ) : ?>
	
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_excerpt(); ?>
		<a class="textNone" href="<?php echo get_permalink(); ?>">
		<p class="caps readMore">Read More<i class="fa fa-long-arrow-right"></i> </p>
		</a>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
