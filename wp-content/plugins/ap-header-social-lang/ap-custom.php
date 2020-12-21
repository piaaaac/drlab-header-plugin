<?php
/**
 * Plugin Name: Header social and language addons
 * Plugin URI: http://www.alexpiacenitni.com
 * Description: Adds lang selectors and social icons
 * Version: 1.0
 * Author: Alex Piacentini, Ilaria Roglieri
 * Author URI: http://www.alexpiacenitni.com
 */


/*
function wpb_hook_javascript() {
?>
<script>
	jQuery(document).ready(function ($) {		
		var langLinkIt = $(".wpml-ls-link").eq(0).attr("href");
		var langLinkEn = $(".wpml-ls-link").eq(1).attr("href");
		var inkIg = "https://www.instagram.com/design.research.lab/";
		var inkTw = "https://twitter.com/DRLabTrento";
		console.log("-------------------------------------------------MEOWAWE");
		console.log(langLinkIt, langLinkEn);
		console.log("-------------------------------------------------MEOWAWE");
		$(".mob-menu-header-holder").append("<a href='"+ langLinkIt +"'>IT</a>")
	});
</script>
<?php
}
add_action('wp_head', 'wpb_hook_javascript');
*/






// register jquery and style on initialization
add_action('init', 'register_script');
function register_script() {
  wp_register_script( 'custom_jquery', plugins_url('/do-the-things.js', __FILE__), array('jquery'), '2.5.1', true );
  wp_register_style( 'new_style', plugins_url('/new-style.css', __FILE__), false, '1.0.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueue_style(){
	wp_enqueue_script('custom_jquery');
	wp_enqueue_style( 'new_style' );
}





?>
