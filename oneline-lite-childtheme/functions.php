<!--- where you link to different soucers; bootstrap, icons, stylesheet, fonts etc -->

<?php
function my_theme_enqueue_styles() {
# This will attach / link to the WordPress Theme -> Oneline Lite
    $parent_style = 'oneline-lite-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
     # This will attach / link to the style.css in oneline-lite-child (child theme)
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
    wp_enqueue_style( 'extra-style', get_stylesheet_directory_uri() . '/style-extra.css', array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php
function oneline_lite_child_scripts() {
    wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
}
add_action( 'wp_enqueue_scripts', 'oneline_lite_child_scripts' );
?>

