<?php
global $hoot_theme, $hoot_style_builder;

if ( !isset( $hoot_theme->slider ) || empty( $hoot_theme->slider ) )
	return;

// Ok, so we have a slider to show. Now, lets display the slider.

/* Let developers alter slider via global $hoot_theme */
do_action( 'hoot_slider_start', 'html' );

/* Create Data attributes for javascript settings for this slider */
$atts = $class = $gridstyle = '';
if ( isset( $hoot_theme->sliderSettings ) && is_array( $hoot_theme->sliderSettings ) ) {

	if ( !empty( $hoot_theme->sliderSettings['class'] ) )
		$class .= ' ' . sanitize_html_class( $hoot_theme->sliderSettings['class'] );

	if ( !empty( $hoot_theme->sliderSettings['id'] ) )
		$atts .= ' id="' . sanitize_html_class( $hoot_theme->sliderSettings['id'] ) . '"';
	foreach ( $hoot_theme->sliderSettings as $setting => $value )
		$atts .= ' data-' . $setting . '="' . esc_attr( $value ) . '"';

	if ( !empty( $hoot_theme->sliderSettings['min_height'] ) ) {
		// use height instead of min-height (firefox) http://stackoverflow.com/questions/7790222/
		$gridstylearray = $hoot_style_builder->css_rule_sanitized_array( 'height', $hoot_theme->sliderSettings['min_height'] . 'px' );
		if( is_array( $gridstylearray ) ) {
			foreach ( $gridstylearray as $property => $value ) {
				$gridstyle .= " $property: " . $value['value'] . ';';
			}
		}
	}

}

/* Start Slider Template */
$slide_count = 1; ?>
<div class="hootslider-html-wrapper">
<ul class="lightSlider<?php echo $class; ?>"<?php echo $atts; ?>><?php
	foreach ( $hoot_theme->slider as $slide ) :
		if ( !empty( $slide['image'] ) || !empty( $slide['content'] ) ) :

			$slidestyle = '';
			$slidestylearray = $hoot_style_builder->backgroundarray( $slide['background'] );
			if( is_array( $slidestylearray ) ) {
				foreach ( $slidestylearray as $property => $value ) {
					$slidestyle .= " $property: " . $value['value'] . ';';
				}
			}

			$is_custom_bg = ( isset( $slide['background']['type'] ) && 'custom' == $slide['background']['type'] ) ? ' is-custom-bg ' : '';

			$column = ( !empty( $slide['image'] ) && ( !empty( $slide['content'] ) || !empty( $slide['url'] ) ) ) ? ' column-1-2 ' : ' column-1-1 ';
			$column .= ( !empty( $slide['image'] ) ) ? ' with-featured-image ' : ' no-featured-image ';

			$slide['button'] = empty( $slide['button'] ) ? __('Know More', 'responsive-brix') : $slide['button'];

			// Start Slide
			?><li class="lightSlide hootslider-html-slide hootslider-html-slide-<?php echo $slide_count; $slide_count++; ?> <?php echo $is_custom_bg; ?>" <?php if ( !empty( $slidestyle ) ) echo ' style="' . esc_attr( $slidestyle ) . '"'; ?>>

				<div class="grid"<?php if ( !empty( $gridstyle ) ) echo ' style="' . esc_attr( $gridstyle ) . '"'; ?>>

					<?php if ( !empty( $slide['content'] ) || !empty( $slide['url'] ) ) { ?>
						<div class="<?php echo $column; ?> hootslider-html-slide-column hootslider-html-slide-left">
							<?php if ( !empty( $slide['content'] ) ) { ?>
								<div class="hootslider-html-slide-content linkstyle">
									<?php echo wp_kses_post( wpautop( $slide['content'] ) ); ?>
								</div>
							<?php } ?>
							<?php if ( !empty( $slide['url'] ) ) { ?>
								<div class="hootslider-html-slide-link"><a href="<?php echo esc_url( $slide['url'] ); ?>" <?php hoot_attr( 'hootslider-html-slide-button', 'html-slider', 'button' ); ?>><?php echo $slide['button']; ?></a></div>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ( !empty( $slide['image'] ) ) { ?>
						<div class="<?php echo $column; ?> hootslider-html-slide-column hootslider-html-slide-right">
							<img class="hootslider-html-slide-img" src="<?php echo esc_url( $slide['image'] ); ?>">
						</div>
					<?php } ?>

					<div class="clearfix"></div>
				</div>
			</li><?php

		endif;
	endforeach; ?>
</ul>
</div>