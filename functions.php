<?php

function agency_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'agency-theme'),
        'footer'  => __('Footer Menu', 'agency-theme'),
    ]);
}
add_action('after_setup_theme', 'agency_theme_setup');

function agency_theme_assets() {
    wp_enqueue_style(
        'agency-tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    wp_enqueue_style(
        'agency-style',
        get_stylesheet_uri(),
        ['agency-tailwind'],
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_script(
        'agency-theme-js',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        filemtime(get_template_directory() . '/assets/js/theme.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'agency_theme_assets');

function agency_body_classes($classes) {
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
        $classes[] = 'page-id-' . $post->ID;
    }

    return $classes;
}
add_filter('body_class', 'agency_body_classes');




// ===================================================
// 1. Enqueue Google Fonts on Landing Page Template
// ===================================================
add_action( 'wp_enqueue_scripts', function() {
    if ( is_page_template( 'page-landing.php' ) ) {
        wp_enqueue_style(
            'pixelcraft-fonts',
            'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap',
            [],
            null
        );
    }
});

// ===================================================
// 2. Hide Admin Bar on Landing Page (cleaner for ads)
// ===================================================
add_action( 'after_setup_theme', function() {
    if ( is_page_template( 'page-landing.php' ) ) {
        show_admin_bar( false );
    }
});

// ===================================================
// 3. Handle Lead Form AJAX Submission
// ===================================================
add_action( 'wp_ajax_nopriv_pixelcraft_lead', 'pixelcraft_handle_lead' );
add_action( 'wp_ajax_pixelcraft_lead',        'pixelcraft_handle_lead' );

function pixelcraft_handle_lead() {

    // Security check
    if ( ! check_ajax_referer( 'pixelcraft_lead_nonce', 'nonce', false ) ) {
        wp_send_json_error( [ 'message' => 'Security check failed.' ] );
    }

    // Sanitize inputs
    $name    = sanitize_text_field( $_POST['name']    ?? '' );
    $phone   = sanitize_text_field( $_POST['phone']   ?? '' );
    $email   = sanitize_email(      $_POST['email']   ?? '' );
    $service = sanitize_text_field( $_POST['service'] ?? '' );
    $budget  = sanitize_text_field( $_POST['budget']  ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    // Validate required fields
    if ( ! $name || ! $email || ! $phone ) {
        wp_send_json_error( [ 'message' => 'Required fields missing.' ] );
    }

    // ── Send notification email to agency ──────────────────────────
    $admin_email = get_option( 'admin_email' );
    $subject     = "New Lead: {$name} — {$service}";
    $body        = "New lead from PixelCraft Landing Page:\n\n"
                 . "Name    : {$name}\n"
                 . "Phone   : {$phone}\n"
                 . "Email   : {$email}\n"
                 . "Service : {$service}\n"
                 . "Budget  : {$budget}\n"
                 . "Message :\n{$message}\n\n"
                 . "Received: " . current_time( 'mysql' );

    wp_mail( $admin_email, $subject, $body );

    // ── Send auto-reply to the lead ─────────────────────────────────
    $reply_subject = "Thanks {$name} — We'll reply within 2 hours!";
    $reply_body    = "Hi {$name},\n\n"
                   . "Thank you for contacting PixelCraft Studio!\n\n"
                   . "We received your enquiry for: {$service}\n\n"
                   . "Our team will review it and reply within 2 hours on WhatsApp or email.\n\n"
                   . "You can also WhatsApp us directly at: +91 98765 43210\n\n"
                   . "Best,\n"
                   . "The PixelCraft Team\n"
                   . "hello@pixelcraftstudio.in";

    wp_mail( $email, $reply_subject, $reply_body );

    // ── Save lead as a private post in WordPress ────────────────────
    wp_insert_post([
        'post_type'   => 'pixelcraft_lead',
        'post_title'  => $name . ' — ' . $service,
        'post_status' => 'private',
        'meta_input'  => [
            '_lead_name'    => $name,
            '_lead_phone'   => $phone,
            '_lead_email'   => $email,
            '_lead_service' => $service,
            '_lead_budget'  => $budget,
            '_lead_message' => $message,
        ],
    ]);

    wp_send_json_success( [ 'message' => 'Message sent successfully!' ] );
}

// ===================================================
// 4. Register Custom Post Type to Store Leads
//    (visible in WP Admin as "Leads" menu item)
// ===================================================
add_action( 'init', function() {
    register_post_type( 'pixelcraft_lead', [
        'label'       => 'Leads',
        'public'      => false,
        'show_ui'     => true,
        'supports'    => [ 'title', 'custom-fields' ],
        'menu_icon'   => 'dashicons-email-alt',
        'show_in_menu'=> true,
        'capabilities'=> [
            'create_posts' => 'do_not_allow',
        ],
        'map_meta_cap'=> true,
    ]);
});