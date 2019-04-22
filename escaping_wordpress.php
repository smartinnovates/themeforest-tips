<?php 
// Use anytime HTML element encloses a section of data:
echo esc_html( $no_html );
// Use on all URLs, including those in the 'src' and 'href' attributes of an HTML element:
<img src="<?php echo esc_url( $escaped_url ); ?>" />
// Use for inline Javascript:
<a href="#" onclick="<?php echo esc_js( $escaped_js ); ?>"><?php esc_html__( 'Click Here', 'text-domain' ); ?></a>

// Use for an HTML attribute:
<div class="<?php echo esc_attr( $escaped_class ); ?>">
