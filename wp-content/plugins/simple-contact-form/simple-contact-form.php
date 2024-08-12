<?php
/**
 * Plugin Name: Simple Contact Form
 * Plugin URI: https://yourwebsite.com
 * Description: A simple contact form plugin.
 * Version: 1.0
 * Author: Vishal
 * Author URI: https://wbl.com
 * License: GPL2
 */

// Security check 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Display the contact form
function scf_display_contact_form() {
    $content = '';
    $content .= '<div class="scf-form-wrapper"><form method="post" action="' . esc_url($_SERVER['REQUEST_URI']) . '">';
    $content .= '<p>';
    $content .= 'Your Name (required) <br/>';
    $content .= '<input type="text" name="scf-name" pattern="[a-zA-Z0-9 ]+" value="" size="40" />';
    $content .= '</p>';
    $content .= '<p>';
    $content .= 'Your Email (required) <br/>';
    $content .= '<input type="email" name="scf-email" value="" size="40" />';
    $content .= '</p>';
    $content .= '<p>';
    $content .= 'Your Message (required) <br/>';
    $content .= '<textarea rows="10" cols="35" name="scf-message"></textarea>';
    $content .= '</p>';
    $content .= '<p><input type="submit" name="scf-submitted" value="Send"/></p>';
    $content .= '</form></div>';

    return $content;
}

// Add shortcode
function scf_register_shortcode() {
    add_shortcode('simple_contact_form', 'scf_display_contact_form');
}
add_action('init', 'scf_register_shortcode');

// Function to process form 
function scf_process_form() {
    global $wpdb;

    if (isset($_POST['scf-submitted'])) {
        // die('yes  '.!empty($_POST["scf-name"]));
        $name = sanitize_text_field($_POST["scf-name"]);
        $email = sanitize_email($_POST["scf-email"]);
        $message = esc_textarea($_POST["scf-message"]);

        // Insert data into the database
        $table_name = $wpdb->prefix . 'form_submissions';
        // $wpdb->insert($table_name, array(
        //     'name' => $name,
        //     'email' => $email,
        //     'message' => $message
        // ));

        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission from ' . $name;
        $headers = "From: $name <$email>\r\n";
if(empty($name)){
    echo 'hey enter name just....';
}else{
    print_r($_POST);
}
        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<div>';
            echo '<p>Thanks for contacting me, expect a response soon.</p>';
            echo '</div>';
        } else {
            echo 'An unexpected error occurred';
        }
        // header("location: " . $_SERVER['REQUEST_URI']);
    }
}
add_action('wp_head', 'scf_process_form');

// Enqueue stylesheet
function scf_enqueue_styles() {
    wp_enqueue_style('scf-styles', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'scf_enqueue_styles');
?>
