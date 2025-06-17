<?php

function makoa_fse_styles() {
    wp_enqueue_style(
        'fse-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'makoa_fse_styles' );


if ( ! function_exists( 'makoa_fse_setup' ) ) {
    function makoa_fse_setup() {
        add_theme_support( 'wp-block-styles' );
        add_editor_style( 'style.css' );
    }
}

add_action( 'after_setup_theme', 'makoa_fse_setup' );

remove_theme_support( 'core-block-patterns' );

add_filter( 'should_load_remote_block_patterns', '__return_false' );

function makoa_register_pattern_categories() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'makoa',
            array(
                'label' => __( 'Makoa', 'makoa' ),
                'description' => __( 'Makoa patterns', 'makoa' ),
            )
        );
    }
}

add_action( 'init', 'makoa_register_pattern_categories' );

function makoa_setup_notice() {
    $notice_option_name = 'makoa_setup_notice_dismissed';
    $is_dismissed = get_option( $notice_option_name );

    if ( ! $is_dismissed ) {
    $image_url = '/wp-content/themes/makoa/assets/images/me.png';
    $notice_text = '<img src="' . esc_url( $image_url ) . '" style="max-width: 100%;" />
    <div class="makoa-notice-text" style="margin-top: 15px;">
        <h3 style="margin-top: 0px; font-size: 18px;">' . __('Hi, I\'m Roman Fink, the creator of the Makoa theme!','makoa') . ' 😊</h3>
        <p><b>🌟 ' . __('Upgrade to Makoa PRO:','makoa') . '</b></p>
        <p style="margin-bottom: 10px">' . __('Unlock 48 stunning design patterns, 8 custom color styles, and exclusive premium features to elevate your website.','makoa') . '</p>
        <p style="margin-bottom: 20px">
            <a href="https://makoa.romanfink.com/?utm_source=makoa-theme" style="display: inline-block; background-color: #111; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold;">' . __('Discover Makoa PRO','makoa') . '</a>
        </p>
        <p>☕ ' . __('Support My Work:','makoa') . ' <a href="https://ko-fi.com/romanfink">https://ko-fi.com/romanfink</a></p>
        <p>💌 ' . __('Need Help? Email me at:','makoa') . ' <i>hello@romanfink.com</i></p>
        <p>🌐 ' . __('Visit My Website:','makoa') . ' <a href="https://romanfink.com">https://romanfink.com</a></p>
        <p>𝕏 ' . __('Follow Me on X:','makoa') . ' <a href="https://x.com/romanfinkwp">@romanfinkwp</a></p>
        <p style="margin: 5px 0 0;"><b>' . __('Just CLOSE this notice to hide it forever. Thanks for your support!','makoa') . ' 🚀</b></p>
    </div>';
    echo '<div id="makoa-notice" class="notice notice-info is-dismissible">' . wp_kses_post( $notice_text ) . '</div>';
}

}

add_action( 'admin_notices', 'makoa_setup_notice' );


function makoa_notice_script() {
    if ( ! wp_script_is( 'jquery', 'done' ) ) {
        wp_enqueue_script( 'jquery' );
    }
    wp_enqueue_script( 'makoa-notice-script', get_template_directory_uri() . '/assets/js/admin-notice.js', array( 'jquery' ), '', true );
}

add_action( 'admin_enqueue_scripts', 'makoa_notice_script' );


function makoa_enqueue_custom_admin_styles() {
    $notice_option_name = 'makoa_setup_notice_dismissed';
    $is_dismissed = get_option( $notice_option_name );
    if ( ! $is_dismissed ) {
        wp_enqueue_style( 'makoa-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css' );
    }
}

add_action( 'admin_enqueue_scripts', 'makoa_enqueue_custom_admin_styles' );


function makoa_dismiss_notice() {
    update_option( 'makoa_setup_notice_dismissed', true );
    wp_die();
}

add_action( 'wp_ajax_makoa_dismiss_notice', 'makoa_dismiss_notice' );