<?php

/**
 * Company Employee Plugin
 *
 * @package           PluginPackage
 * @author            Pardeep Mohan
 * @copyright         2022 Pardeep Mohan
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Company Employee Plugin
 * Description:       A plugin that gives the list of company employee profile
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Pardeep Mohan
 * Text Domain:       plugin-company_employee
 * License:           GPL v2 or later

 */
 
use CompanyEmployee\Inc\CompanyEmployeePluginActivate;
use CompanyEmployee\Inc\CompanyEmployeePluginDeactivate;
use CompanyEmployee\CompanyEmployeeUninstall;
use CompanyEmployee\Provider\EmployeeProvider;


// Exit file directly.

if ( ! defined( 'ABSPATH' ) ) 
{
	exit;
}


// Autoload file.

if (file_exists(dirname(__FILE__) .'/vendor/autoload.php'))
{
    require_once dirname(__FILE__) .'/vendor/autoload.php';
}


// Plugin activation code.

function company_employee_activate()
{
    CompanyEmployeePluginActivate::activate();
}

register_activation_hook(__FILE__,'company_employee_activate');


// Plugin deactivation code.

function company_employee_deactivate()
{
    CompanyEmployeePluginDeactivate::deactivate();
 }

register_deactivation_hook(__FILE__,'company_employee_deactivate');


// Plugin uninstall code.

function company_employee_uninstall()
{
    CompanyEmployeeUninstall::uninstall();
 }


register_uninstall_hook(__FILE__,'company_employee_uninstall');


// Plugin main file execution.


function main_plugin_file_execution()
{
    new EmployeeProvider;
}

main_plugin_file_execution();


