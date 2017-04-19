<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>


	 <div>
  				<?php if ( have_posts()) : ?>
 				
 				<article id="post-<?php the_ID(); ?>" class="singleProduct"  <?php post_class(); ?>>
					<header class="flex">
						<div class="productImage">
						<?php if ( has_post_thumbnail() ) : ?>
							<img class=""
								src=<?php echo the_post_thumbnail();?>
							
						<?php endif; ?>
						
						</div>

						<div class="productData">
						<h1> <?php echo the_title()?></h1>
						<h4> <?php 
							$num = get_field('price');
							setlocale(LC_MONETARY,"en_US");
							$number = money_format("%.2n", $num);
								echo ($number);
							?> 
						</h4>
						 <p> <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?> </p>
						 <div class="flex icons2 caps" >
        					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i> Like</a>
			                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i> Tweet</a>
			         <a href="https://www.pinterest.com"><i class="fa fa-pinterest" style="padding-top: 2px;"> Pin</i></a>
        				</div>


					
						</div>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->

				<?php   endif; ?>

			</div>






<?php get_footer(); ?>