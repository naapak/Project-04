<?php

// Template modification Hook
do_action( 'hoot_template_before_menu', 'primary' );

if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location.

	?>
	<h3 class="screen-reader-text"><?php _e( 'Primary Navigation Menu', 'responsive-brix' ); ?></h3>
	<nav <?php hoot_attr( 'menu', 'primary' ); ?>>
		<div class="menu-toggle"><span class="menu-toggle-text"><?php _e( 'Menu', 'responsive-brix' ); ?></span><i class="fa fa-bars"></i></div>

		<?php
		/* Create Menu Args Array */
		$menu_args = array(
			'theme_location'  => 'primary',
			'container'       => false,
			'menu_id'         => 'menu-primary-items',
			'menu_class'      => 'menu-items sf-menu menu',
			'fallback_cb'     => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);

		/* Display Main Menu */
		wp_nav_menu( $menu_args ); ?>

	</nav><!-- #menu-primary -->
	<?php

endif; // End check for menu.

// Template modification Hook
do_action( 'hoot_template_after_menu', 'primary' );