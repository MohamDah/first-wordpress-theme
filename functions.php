<?php 

function sv_theme_scripts(){
    wp_enqueue_style("output", get_template_directory_uri() . "/dist/output.css", array());
}
add_action("wp_enqueue_scripts", "sv_theme_scripts");







// custom image sizes
add_image_size("product_image_large", 700, 700, false);
add_image_size("product_image_small", 400, 400, false);








// Thumbnail support
add_theme_support("post-thumbnail");
add_theme_support("automatic-field-links");


require get_stylesheet_directory() . "/customizer-repeater/functions.php";

require get_stylesheet_directory() . "/inc/my-customizer.php";

new My_customizer();