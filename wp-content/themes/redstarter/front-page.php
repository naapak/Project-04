<?php
/**
 * The main template file.
 */



get_header(); ?>


          <h2 class="textCenter black categories caps"> shop stuff </h2>
 		 <?php 
 	

 		 	$terms = get_terms(array("productType")); ?>
 		
 		 	<div class="flex textCenter">
 		 		<?foreach ($terms as $term) : ?>
 		 		<div class="shopCategories">
 		 			
 		 			<img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/product-type-icons/<?php echo $term->name?>.svg">
 		 			<p ><?php echo $term->description?></p>

 		 			<a href="<?php echo get_term_link($term); ?>">
 		 			<button class="greenButton caps"><?php echo $term->name?> stuff</button>
 		 			</a>
 		 		</div>
 		 		<? endforeach; ?>
 		 	</div>
 	


<?php
$query_posts = new WP_Query(array(
                "posts_per_page" => 3,
                "post_type" => "Post",
                ));
            
            ?>
            <h2 class="textCenter black categories caps"> Inhabitent Journal </h2>
            <div class="flex journal-container">
 <?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
 				
 				<article id="post-<?php the_ID(); ?>" class="journal-item"  <?php post_class(); ?>>
					<header class="entry-header journal-header ">
						
						<?php if ( has_post_thumbnail() ) : ?>
							<img class="image-wrapper pictureHeight" 
								src=<?php echo the_post_thumbnail()?> 
							
						<?php endif; ?>
						<span class="post-date"><?php echo get_the_date();?></span>
						<span class="byline">/ <?php echo get_comments_number();?> comments</span>
						<h2 class="caps journal-text"><?php echo the_title()?></h2>
						
						<a href="<?php echo get_permalink(); ?>">
						<button class=" caps">Read Entry</button>
						</a>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->

				<?php endwhile; ?>

				</div>

<?php
$query_adventure = new WP_Query(array(
                "posts_per_page" => 4,
                "post_type" => "Adventures",
                "order" => "ASC"
                ));
            
            ?>
            <h2 class="textCenter black categories caps"> Latest Adventures </h2>
            <?php $i=0;  ?> 
            <div class="flex adventure-container">
 <?php while ( $query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
 				<?php $i++;  ?>
 				<?php if ( has_post_thumbnail() ) : $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); endif; ?>
 			<?php if($i == 1) : ?>
 				<div class="firstDiv" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
 			<?php endif ?>
 			 <?php if($i == 2) : ?>
 			<div class="divSecond">
 					<div class="secondDivtop" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
 			<?php endif ?>
 			<?php  if($i == 3) : ?>
 				<div class="thirdDiv">
 				<div class="thirdDivtop" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
 			<?php endif ?>
 			<?php  if($i == 4) : ?>
 				<div class="fourthDiv" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
 			<?php endif ?>
 				
 				<article class="adventure-header" id="post-<?php the_ID(); ?>" <?php post_class(); ?>  >
						<div class="adventure-text">
							<h2 class="caps white"><?php echo the_title()?></h2>
							
							<a href="<?php echo get_permalink(); ?>">
							<button class=" caps">Read More</button>
							</a>
						</div>
						
						
				</article><!-- #post-## -->
				<?php if($i == 1) : ?>
 				</div>
 				<?php endif ?>
 				<?php if($i == 2) : ?>
 				</div>
 				<?php endif ?>
 				<?php if($i == 3) : ?>
 				</div>
 				<?php endif ?>
				<?php if($i == 4) : ?>
				</div>
 				</div>
 				</div>
 			<?php endif ?>
				<?php endwhile; ?>
			</div>
<a href="http://localhost:8888/project01/adventures">
<button class="greenButton caps adventureButton ">more adventures</button> 
</a>

<?php get_footer(); ?>