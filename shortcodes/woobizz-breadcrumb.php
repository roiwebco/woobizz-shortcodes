<?php
//CREATE THE HEADER BREADCRUMB SHORTCODE
//CHECK IF WOOCOMMERCE IS ACTIVE
	function woobizz_header_breadcrumb($atts = [], $content = null){
		woocommerce_breadcrumb();
		return;
	}
    add_shortcode('woobizz_breadcrumb', 'woobizz_header_breadcrumb');
