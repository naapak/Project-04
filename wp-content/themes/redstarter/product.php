<?php

/*


Template Name: Shop

*/

?>
<?php get_header() ?>
			



<?php
$query_products = new WP_Query(array(
              "posts_per_page" => 100,
                "post_type" => "products",
                ));
            
            ?>
            <?php
            $tax = get_object_taxonomies (array ("post_type" => "products"));
              $terms = get_terms($tax); 

             ?>

             <h1 class="caps textCenter">Shop Stuff</h1>
			<div class="flex textCenter productsType caps">
 		 		<?foreach ($terms as $term) : ?>

 		 			<!-- <?php 
 		 			echo get_term_link($term); ?> -->
 		 			<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
 		 		<? endforeach; ?>
 		 	</div>



            <div class="ProductsList journal-container flex">
  <?php while ( $query_products->have_posts() ) : $query_products->the_post(); ?>
 				
 				<article id="post-<?php the_ID(); ?>" class="ProductItem"  <?php post_class(); ?>>
					<header class="entry-header journal-header">
						
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="image-wrapper2">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
					
			
						
						<a href="<?php echo get_permalink(); ?>">
						<?php echo the_title()?>.......... <?php 
							$num = get_field('price');
							setlocale(LC_MONETARY,"en_US");
							$number = money_format("%.2n", $num);
								echo ($number);
						?>
						</a>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->

	<?php endwhile; ?>

				</div>

<?php get_footer() ?>