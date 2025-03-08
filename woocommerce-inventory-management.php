<?php
/*
Plugin Name: WooCommerce Inventory Management
Description: مدیریت حرفهای انبار برای ووکامرس
Version: 1.0.0
Requires PHP: 7.4
Author: Your Name
Text Domain: wc-inventory
*/

if (!defined('ABSPATH')) exit;

define('WC_INVENTORY_PATH', plugin_dir_path(__FILE__));
define('WC_INVENTORY_URL', plugin_dir_url(__FILE__));

// بارگذاری فایلهای ضروری
require_once WC_INVENTORY_PATH . 'includes/class-db.php';
require_once WC_INVENTORY_PATH . 'includes/class-inventory.php';
require_once WC_INVENTORY_PATH . 'includes/class-warehouse.php';
require_once WC_INVENTORY_PATH . 'includes/class-serial.php';
require_once WC_INVENTORY_PATH . 'includes/class-reports.php';
require_once WC_INVENTORY_PATH . 'includes/class-settings.php';
require_once WC_INVENTORY_PATH . 'includes/class-admin-ui.php';

// فعالسازی افزونه
register_activation_hook(__FILE__, [WC_Inventory_DB::class, 'install']);
