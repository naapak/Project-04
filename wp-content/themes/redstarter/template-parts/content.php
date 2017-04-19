<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php if ( has_post_thumbnail() ) : ?>

		<?php if ( has_post_thumbnail() ) : $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); endif; ?>

		<header class="contentPictures flex" style="background: url('<?php echo $thumb['0'];?>') center no-repeat !important; background-size: cover !important;" >
		
		<?php endif; ?>
		<h1 class="contentTitles white"> <?php the_title() ?></h1>
		

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<p class="white">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			</p>
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a class="textNone" href="<?php echo get_permalink(); ?>">
		<p class="caps readMore">Read More<i class="fa fa-long-arrow-right"></i> </p>
		</a>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
