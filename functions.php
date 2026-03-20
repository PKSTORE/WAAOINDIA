<?php

function waaoindia_styles() {

    wp_enqueue_style(
        'waaoindia-main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0',
        'all'
    );
    
}
add_action('wp_enqueue_scripts', 'waaoindia_styles');

function enqueue_custom_script() {
wp_enqueue_script('ajax-js', get_template_directory_uri() . '/ajax.js', array('jquery'), null, true);
    wp_localize_script('ajax-js', 'my_ajax_object', array(
    'ajax_url' => admin_url('admin-ajax.php')
));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
add_action('wp_ajax_send_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form');

function handle_contact_form() {

    if (!isset($_POST['email']) || !is_email($_POST['email'])) {
        echo "Invalid email";
        wp_die();
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = get_option('admin_email');
    $subject = "New Contact Form Message";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Mail failed. Check SMTP.";
    }
}
    wp_die();

