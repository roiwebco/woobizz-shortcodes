<?php
//WELCOME MESSAGE
function woobizz_cart_widget(){
		
		$woobizz_cart_widget= woocommerce_mini_cart();
		
		return $woobizz_cart_widget;
	}
add_shortcode('woobizz_cart_widget', 'woobizz_cart_widget');