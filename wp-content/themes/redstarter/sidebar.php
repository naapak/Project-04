<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php (is_active_sidebar( 'sidebar-1' )) ?>
	

	 <?php dynamic_sidebar( 'sidebar-1' ); ?> 

