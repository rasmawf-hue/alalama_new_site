<?php
/**
 * Theme Name: العلامة للتقنية
 * Description: WordPress Theme Functions
 * Author: Rasma Marketing
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function alalama_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'alalama'),
        'footer'  => __('Footer Menu', 'alalama'),
    ));
}
add_action('after_setup_theme', 'alalama_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function alalama_enqueue_assets() {
    wp_enqueue_style(
        'google-fonts-cairo',
        'https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap',
        array(),
        null
    );
    
    wp_enqueue_style(
        'alalama-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
    
    if (file_exists(get_template_directory() . '/assets/css/styles.css')) {
        wp_enqueue_style(
            'alalama-custom-styles',
            get_template_directory_uri() . '/assets/css/styles.css',
            array('alalama-style'),
            '1.0.0'
        );
    }
    
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script(
            'alalama-main-js',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'alalama_enqueue_assets');

/**
 * Asset URL Helper
 */
function alalama_asset($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * Image URL Helper
 */
function alalama_image($path) {
    return alalama_asset('images/' . ltrim($path, '/'));
}

/**
 * Get Logo URL
 */
function alalama_get_logo() {
    if (has_custom_logo()) {
        $logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($logo_id, 'full');
        return $logo[0];
    }
    return 'https://raw.githubusercontent.com/rasmawf-hue/alalama-co/main/Asset%201%403x.png';
}

/**
 * Customize Register
 */
function alalama_customize_register($wp_customize) {
    $wp_customize->add_section('alalama_contact', array(
        'title'    => __('Contact Information', 'alalama'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('alalama_phone_1', array(
        'default'   => '+218 91 5222252',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('alalama_phone_1', array(
        'label'   => __('Phone Number 1', 'alalama'),
        'section' => 'alalama_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('alalama_phone_2', array(
        'default'   => '+218 92 5222252',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('alalama_phone_2', array(
        'label'   => __('Phone Number 2', 'alalama'),
        'section' => 'alalama_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('alalama_email', array(
        'default'   => 'info@al3lama.ly',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('alalama_email', array(
        'label'   => __('Email Address', 'alalama'),
        'section' => 'alalama_contact',
        'type'    => 'email',
    ));
    
    $wp_customize->add_setting('alalama_address', array(
        'default'   => 'حي دمشق، طرابلس، ليبيا',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('alalama_address', array(
        'label'   => __('Address', 'alalama'),
        'section' => 'alalama_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('alalama_whatsapp', array(
        'default'   => '218915222252',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('alalama_whatsapp', array(
        'label'   => __('WhatsApp Number', 'alalama'),
        'section' => 'alalama_contact',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'alalama_customize_register');

/**
 * Get Contact Info
 */
function alalama_get_contact($key) {
    $defaults = array(
        'phone_1'  => '+218 91 5222252',
        'phone_2'  => '+218 92 5222252',
        'email'    => 'info@al3lama.ly',
        'address'  => 'حي دمشق، طرابلس، ليبيا',
        'whatsapp' => '218915222252',
    );
    
    $value = get_theme_mod('alalama_' . $key);
    return $value ? $value : $defaults[$key];
}
