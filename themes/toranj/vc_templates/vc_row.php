<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'row_content_width' => 'fullwidth'
), $atts));

// wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
// wp_enqueue_style('js_composer_custom_css');

$inner_div_open = '';
$inner_div_close = '';


if ( is_page_template( 'template-normal-full.php' ) || is_page_template( 'template-dark-full.php' )){
	switch ($row_content_width) {
		case 'contained':
			$inner_class = "tj-contained";
			break;
		
		default:
			$inner_class = "tj-fullwidth";
			break;
	}
	$inner_div_open = '<div class="toranj-inner '.$inner_class.'">';
	$inner_div_close = '</div><!-- /toranj-inner -->';
}
	

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_row wpb_row '. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$output .= '<div class="toranj-vc-row-wrapper"><div class="'.$css_class.'"'.$style.'>';
$output .= $inner_div_open;
$output .= wpb_js_remove_wpautop($content);
$output .= $inner_div_close;
$output .= '</div></div>';

echo $output;