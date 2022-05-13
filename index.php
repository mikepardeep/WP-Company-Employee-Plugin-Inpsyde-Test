<?php
/**
 * @since 1.0.0
 * @package Company Employee Plugin
 *
 * Plugin Name:  Company Employee Plugin
 * Description: A Plugin that gives the list of company employee profile
 * Version: 1.0.0
 * Author: Pardeep Mohan
 * License: GPLv3 or later
 * Text Domain: employees-plugin
 */

use CompanyEmployee\Inc\CompanyEmployeePluginActivate;
use CompanyEmployee\Inc\CompanyEmployeePluginDeactivate;
use CompanyEmployee\Inc\CompanyEmployeeUninstall;
use CompanyEmployee\Provider\EmployeeProvider;


/**
 * Exit file directly
 */

if ( ! defined( 'ABSPATH' ) ) 
{
	exit;
}


/**
 * Autoload file.
 */

if (file_exists(dirname(__FILE__) .'/vendor/autoload.php'))
{
    require_once dirname(__FILE__) .'/vendor/autoload.php';
}


/**
 * Plugin activation code.
 */


function company_employee_activate()
{
    CompanyEmployeePluginActivate::activate();
}

register_activation_hook(__FILE__,'company_employee_activate');


/**
 * Plugin deactivation code.
 */



function company_employee_deactivate()
{
    CompanyEmployeePluginDeactivate::deactivate();
 }

register_deactivation_hook(__FILE__,'company_employee_deactivate');



/**
 * Plugin uninstall code.
 */

function company_employee_uninstall()
{
    CompanyEmployeeUninstall::uninstall();
 }


register_uninstall_hook(__FILE__,'company_employee_uninstall');



 /**
 * Plugin main file execution
 */


$companyEmployeePlugin = new EmployeeProvider;


