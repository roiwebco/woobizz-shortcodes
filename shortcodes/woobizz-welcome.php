<?php
//WELCOME MESSAGE
function woobizz_welcome_message($atts = [], $content = null){
		if ( is_user_logged_in() ) {
		$current_user = wp_get_current_user();
			$welcomemessage= 'Hola,' .'<strong>'.' '. $current_user->user_firstname.'</strong> | <a href="/mi-cuenta/">Mi Cuenta</a>';
		} else {
			$welcomemessage='Hola,<strong>Visitante!</strong> | <a href="/mi-cuenta/">Conectarse</a>';
		}
		return $welcomemessage;
	}
add_shortcode('woobizz_welcome_message', 'woobizz_welcome_message');