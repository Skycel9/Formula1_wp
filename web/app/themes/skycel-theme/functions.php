<?php
function ms_custom_assets() {
	wp_enqueue_style("all-css", get_template_directory_uri() . "/assets/css/style.css", array(), 1);
	wp_enqueue_script("all-js", get_template_directory_uri() . "/assets/js/script.js", array(), 1);
}
add_action("wp_enqueue_scripts", "ms_custom_assets");