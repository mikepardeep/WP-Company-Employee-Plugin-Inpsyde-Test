<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CompanyEmployee\Registration;

class EmployeeRegistration
{
    public function __construct()
    {
        add_action('init', [$this, 'employeeRegistrationInit']);
    }

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
