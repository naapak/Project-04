<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

			<?php if (is_front_page())  { $class = "banner";} elseif (is_page("About")) {$class = "bannerAbout";}  elseif (is_singular("adventures")) { $class ="journalHeader";
			} else { $class= "teal-navi teal-border"; $logo_teal= "logoTeal"; } ?>
			<?php $thumb=wp_get_attachment_image_src(get_post_thumbnail_id(),'full' ); ?>
				<div class="<?php echo $class ?>" 
					<?php if (is_singular("adventures")) :?>
				style="background:linear-gradient(rgba(0,0,0,0.2) 100%,transparent), url('<?php echo $thumb['0'];?>') center !important; background-size: cover,cover !important;"	
						<?php endif; ?> ">				
	
				    <div class="flex logonavi ">  <!-- main navigation -->
				    		<?php if (is_front_page() || is_page("About") || is_singular("adventures")): ?>
					      <div>
					        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/logos/inhabitent-logo-tent-white.svg" class="logo <?php echo $logo_teal ?>" ></a>
					      </div>
					      <?php else : ?>
					      	<div>
					        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/logos/inhabitent-logo-tent.svg" class="logo <?php echo $logo_teal ?>" ></a>
					      </div> <!-- #logo -->
					      	
					      <?php endif ?>

					      <div class="navigation flex <?php echo $navigation ?> " id="container">
					        <nav id="site-navigation" class=" main-navigation" role="navigation">
								<button class="  menu-toggle " aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav><!-- #site-navigation -->
					      </div>

				    </div>
				    
				     <?php if (is_page("About")): ?>
				     	<div class="aboutText">
					      	<h1 class="caps bold textCenter white ">About</h1>
					     </div>
					      	<?php endif ?>
					   <?php if (is_singular("adventures")): ?>
				     	<div class="aboutText">
					      	
					     </div>
					      	<?php endif ?>
					
				</div>
				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
