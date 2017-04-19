<?php
/**
 * Template part for displaying adventure single posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<div class="flex icons2 caps" >
        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i> Like</a>
		<a href="https://www.twitter.com"><i class="fa fa-twitter"></i> Tweet</a>
		<a href="https://www.pinterest.com"><i class="fa fa-pinterest" style="padding-top: 2px;"> Pin</i></a>
    </div>
</article><!-- #post-## -->