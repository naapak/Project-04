<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

<div id="primary" class="content-area2">
		<main id="main" class="site-main" role="main">

			<?php
            $tax = get_object_taxonomies (array ("post_type" => "products"));
              $terms = get_terms($tax); 

             ?>
			<div class="flex textCenter productsType caps teal-navi">
 		 		<?foreach ($terms as $term) : ?>

 		 			<!-- <?php 
 		 			echo get_term_link($term); ?> -->
 		 			<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
 		 		<? endforeach; ?>
 		 	</div>



			<?php if ( have_posts() ) : ?>

			<header class="page-header textCenter">
				<?php
					$taxonomies = $wp_query->get_queried_object();
					// echo $tax->name;
					// print_r($taxonomies);
				?>
					<h1 class="caps"><?php echo $taxonomies->name?></h1>
 		 			<p><?php echo $taxonomies->description?></p>
 		 			
			</header><!-- .page-header -->
			<?php endif; ?>
		



            <div class="ProductsList journal-container flex">
  				<?php while ( have_posts() ) : the_post(); ?>
 				
 				<article id="post-<?php the_ID(); ?>" class="ProductItem "  <?php post_class(); ?>>
					<header class="entry-header journal-header textCenter">
						
						<?php if ( has_post_thumbnail() ) : ?>
							<img class="image-wrapper2 pictureHeight "
								src=<?php echo the_post_thumbnail("small");?>
							
						<?php endif; ?>
					
						<a href="<?php echo get_permalink(); ?>" class="">
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
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>