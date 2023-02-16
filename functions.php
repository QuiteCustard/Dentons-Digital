<?php // Add scripts and stylesheets
function load_stylesheets() {
    wp_enqueue_style('style', get_stylesheet_uri()); 
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function samsTheme_setup() {
    // Add <title> tag support
    add_theme_support('title-tag');  

    // Add custom-logo support
    add_theme_support('custom-logo');

    // Add menu support
    register_nav_menus(array(
        'header'   => 'Header Menu',
    ));
}
add_action('after_setup_theme', 'samsTheme_setup');

function samsTheme_register_sidebars() {
    // First footer widget
    register_sidebar(array (
        'name' => esc_html__('Footer Section One', 'samsTheme'),
        'id' => 'footer-section-one',
        'description' => esc_html__('Widgets added here would appear inside the first section of the footer', 'samsTheme'),
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    // Second footer widget
    register_sidebar(array (
        'name' => esc_html__('Footer Section Two', 'samsTheme'),
        'id' => 'footer-section-two',
        'description' => esc_html__('Widgets added here would appear inside the second section of the footer', 'samsTheme'),
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));  

     // Third footer widget
     register_sidebar(array (
        'name' => esc_html__('Footer Section Three', 'samsTheme'),
        'id' => 'footer-section-three',
        'description' => esc_html__('Widgets added here would appear inside the third section of the footer', 'samsTheme'),
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h4>',
        'after_title'  => '</h4>',
    ));  
     // Fourth footer widget
     register_sidebar(array (
        'name' => esc_html__('Footer Section four', 'samsTheme'),
        'id' => 'footer-section-four',
        'description' => esc_html__('Widgets added here would appear inside the fourth section of the footer', 'samsTheme'),
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));  
}
    add_action('widgets_init', 'samsTheme_register_sidebars');	

function samsTheme_customScripts() {
    wp_enqueue_script('samsTheme-main', get_stylesheet_directory_uri() . '/js/main.js', array ('jquery'), '', true);
}   
add_action( 'wp_enqueue_scripts', 'samsTheme_customScripts');

function samsTheme_customize_register($wp_customize) {
    // Theme options panel
    $wp_customize->add_panel('samsTheme_options', array(
        'title' => __('Theme Options', 'samsTheme'),
        'description' => __('Theme Modifications'),
    ));

    // Style section in theme option panel
    $wp_customize->add_section('samsTheme_style_options', array(
        'title' => __('Colours', 'samsTheme'),
        'priority' => 1,
        'panel' => 'samsTheme_options',
    ));

    // Add a new setting for body colour
    $wp_customize->add_setting('samsTheme_body_colour', array(
        'default' => 'ffffff',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
        'transport' => 'postMessage',
    ));

    // Add a control for body colour
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'samsTheme_body_colour', array(
        'label' => __('Body Colour', 'samsTheme') ,
        'section' => 'samsTheme_style_options',
        'settings' => 'samsTheme_body_colour',
    )));

    // Add a new setting for header colour
    $wp_customize->add_setting('samsTheme_header_colour', array(
        'default' => 'ffffff',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
        'transport' => 'postMessage',
    ));

    // Add a control for header colour
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'samsTheme_header_colour', array(
        'label' => __('Header Colour', 'samsTheme') ,
        'section' => 'samsTheme_style_options',
        'settings' => 'samsTheme_header_colour',
    )));

    // Add a new setting for footer colour
    $wp_customize->add_setting('samsTheme_footer_colour', array(
        'default' => 'ffffff',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
        'transport' => 'postMessage',
    ));

    // Add a control for footer colour
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'samsTheme_footer_colour', array(
        'label' => __('Footer Colour', 'samsTheme') ,
        'section' => 'samsTheme_style_options',
        'settings' => 'samsTheme_footer_colour',
    )));
}

add_action('customize_register', 'samsTheme_customize_register');

function samsTheme_customize_live_preview()
{
    wp_enqueue_script('samsTheme-customize-js', get_stylesheet_directory_uri() . '/js/customizer.js', array(
        'jquery',
        'customize-preview'
    ) , '', true);
}
add_action('customize_preview_init', 'samsTheme_customize_live_preview');

// Generate Internal CSS from the values Customize Panel Settings
function samsTheme_customization_css_colours()
{
    // Get Options from the Customize Panel
    $body_colour = get_option('samsTheme_body_colour');
    $header_colour = get_option('samsTheme_header_colour');
    $footer_colour = get_option('samsTheme_footer_colour');
?>

<style>
    :root {
        --body:#<?php echo $body_colour; ?>;
        --header:#<?php echo $header_colour; ?>;
        --footer:#<?php echo $footer_colour; ?>;
    }
</style>

<?php
}
add_action('wp_head', 'samsTheme_customization_css_colours');