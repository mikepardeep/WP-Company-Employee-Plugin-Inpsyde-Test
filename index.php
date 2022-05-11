<?php
/**
 * @since 1.0.0
 * @package Employees_Plugin
 *
 * Plugin Name:  Company Employee Plugin
 * Description: A Plugin that gives the list of company employee profile
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


$data2 = new CompanyEmployee\Provider\EmployeeProvider;

/**
 * Plugin activation code.
 * includes/employees-plugin-activate.php
 */


/**
 * Plugin deactivation code.
 * includes/employees-plugin-deactivate.php
 */



 /**
 * Plugin main file execution.
 * includes/employees-plugin-main.php
 */


/**
 * Company Employee Post Register Script and Style
 */

add_action('init', 'company_employee_script_style_registration');

function company_employee_script_style_registration()

{
		/**
		 * Company Employee Post Register Script and Style
         */
        wp_register_script('employee_block_script', plugin_dir_url(__FILE__). 'build/EmployeeBlockEditor.js', array('wp-blocks','wp-editor'));
        wp_register_style('employee_block_style', plugin_dir_url(__FILE__). 'build/EmployeeBlockEditor.css');
    
}
