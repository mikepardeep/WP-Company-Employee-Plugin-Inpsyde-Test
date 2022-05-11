<?php
/**
 * @since 1.0.0
 * @package Employees_Plugin
 *
 * Plugin Name:  Company Employee Plugin
 * Description: A new plugin
 * Version: 1.0.0
 * Author: Pardeep Mohan
 * License: GPLv3 or later
 * Text Domain: employees-plugin
 */


/**
 * Exit file directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autoload file.
 */
if (file_exists(dirname(__FILE__) .'/vendor/autoload.php')){
    require_once dirname(__FILE__) .'/vendor/autoload.php';
}

/**
 * Plugin activation code.
 * includes/employees-plugin-activate.php
 */

$data2 = new CompanyEmployee\Provider\EmployeeProvider;

/**
 * Plugin deactivation code.
 * includes/employees-plugin-deactivate.php
 */



 /**
 * Plugin main file execution.
 * includes/employees-plugin-main.php
 */
