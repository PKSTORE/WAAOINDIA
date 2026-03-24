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
function load_form_script() {
    wp_enqueue_script(
        'custom-ajax',
        get_template_directory_uri() . '/js/ajax.js',
        array(),
        null,
        true
    );

    wp_localize_script('custom-ajax', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'load_form_script');


add_action('wp_ajax_send_form', 'handle_form_submission');
add_action('wp_ajax_nopriv_send_form', 'handle_form_submission');

function handle_form_submission() {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $to = "support@waaoindia.com";

    $subject = "New Contact Form Message";

    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }

    wp_die();
}