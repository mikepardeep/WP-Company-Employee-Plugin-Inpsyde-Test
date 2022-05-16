<?php

/**
 * Post Script and Style Registration
 *
 * This file class register script and style for both block and public front end of the plugin.
 *
 *
 * @package Company Employee Plugin
 * @since 12.05.2022 (when the file was introduced)
 */

declare(strict_types=1);

namespace CompanyEmployee\Registration;

class EmployeeRegistration
{
    public function __construct()
    {
        add_action('init', [$this, 'employeeRegistrationInit']);
    }

    /**
     * Company Employee Post Script and Style Registration
     */

    public function employeeRegistrationInit()
    {
        /**
         * Company Employee block Register Script and Style
         */

        wp_register_script('employee_block_script', plugins_url('build/EmployeeBlock.js', dirname(__DIR__)), ['wp-blocks', 'wp-editor']);
        wp_register_style('employee_block_style', plugins_url('build/EmployeeBlock.css', dirname(__DIR__)));

        /**
         * Company Employee Public Register Script and Style
         */

        wp_register_script('employee_public_script', plugins_url('build/EmployeePublic.js', dirname(__DIR__)), ['wp-blocks', 'wp-editor']);
        wp_register_style('employee_public_style', plugins_url('build/EmployeePublic.css', dirname(__DIR__)));
    }
}
