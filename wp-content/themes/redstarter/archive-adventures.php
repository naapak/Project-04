<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>
<?php
	$query_adventure = new WP_Query(array(
               
                "order" => "ASC"
                ));
            
            ?>
            <h2 class="textCenter black categories caps"> Latest Adventures </h2>
      
            <div class="flex adventure-container2">
 <?php while ($query_adventure-> have_posts() ) :$query_adventure-> the_post(); ?>

 				
 				<article class="adventure-header2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
 				  >
 						
 						<div class="contentdiv">
							<h2 class="caps white"><?php echo the_title()?></h2>
							
							<a href="<?php echo get_permalink(); ?>">
							<button class=" caps">Read More</button>
							</a>
						</div>
 						<?php if ( has_post_thumbnail() ) : ?>
							<img class="image-wrapper3 pictureHeight "
								src=<?php echo the_post_thumbnail("small");?> 
							
						<?php endif; ?>
						
						
						
				</article><!-- #post-## -->
	
 	
				<?php endwhile; ?>
			</div>

<?php get_footer(); ?>