<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<p>I am on content-post.php</p>
<div class="flex findUs">

	<div id="primary" class="content-area mainBody">
		<main id="main" class="site-main" role="main">

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
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer-content caps">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<div class="flex icons2 caps" >
        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i> Like</a>
		<a href="https://www.twitter.com"><i class="fa fa-twitter"></i> Tweet</a>
		<a href="https://www.pinterest.com"><i class="fa fa-pinterest" style="padding-top: 2px;"> Pin</i></a>
    </div>

   
    		<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>


	</article><!-- #post-## -->



	</main><!-- #main -->
	</div><!-- #primary -->
<div class="mainSideBar ">
		<?php get_sidebar() ?>
	</div>
</div>

<?php get_sidebar(); ?>