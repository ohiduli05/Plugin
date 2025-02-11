<?php
/*
Plugin Name: WP Bus Ticket Plugin
Description: A comprehensive bus ticket booking system for WordPress.
Version: 1.0
Author: Your Name
Text Domain: wp-bus-ticket-plugin
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/class-bus-seat-selection.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-route-management.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-fare-calculation.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-woocommerce-integration.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-pdf-ticket-generation.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-admin-dashboard.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-frontend-booking-form.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-custom-post-types.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-bus-search.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-passenger-notifications.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-passenger-feedback.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-route-maps.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-loyalty-program.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-fleet-management.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-analytics-reporting.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-payment-gateways.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-waiting-list.php';

// Initialize the plugin
function wp_bus_ticket_plugin_init() {
    new Bus_Seat_Selection();
    new Route_Management();
    new Fare_Calculation();
    new WooCommerce_Integration();
    new PDF_Ticket_Generation();
    new Admin_Dashboard();
    new Frontend_Booking_Form();
    new Custom_Post_Types();
    new Shortcodes();
    new Bus_Search();
    new Passenger_Notifications();
    new Passenger_Feedback();
    new Route_Maps();
    new Loyalty_Program();
    new Fleet_Management();
    new Analytics_Reporting();
    new Payment_Gateways();
    new Waiting_List();
}

add_action('plugins_loaded', 'wp_bus_ticket_plugin_init');

// Load text domain for translations
function wp_bus_ticket_plugin_load_textdomain() {
    load_plugin_textdomain('wp-bus-ticket-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'wp_bus_ticket_plugin_load_textdomain');
