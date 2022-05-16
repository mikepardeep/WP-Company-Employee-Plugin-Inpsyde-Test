<?php

/**
 * Gutenberg Block Registration and Code Enqueue.
 *
 * This file class register custom post gutenberg,enqueing block code and fetched HTML from EmployeePostPublic to use as the block display.
 *
 *
 * @package Company Employee Plugin
 * @since 11.5.2022
 */

declare(strict_types=1);

namespace CompanyEmployee\Model;

use CompanyEmployee\PublicFrontend\EmployeePostPublic;

class EmployeeBlockModel extends EmployeePostPublic
{
    public function __construct()
    {
        add_action('init', [$this, 'company_employee_post_block']);
        $this -> employee_render_public();
    }

    // Company Employee Post Block.

    public function company_employee_post_block()
    {
        // Company Employee Post Register Block.

        register_block_type('ourplugin/company-employee', [
            'editor_script' => 'employee_block_script',
            'editor_style' => 'employee_block_style',
            'render_callback' => [$this, 'company_employee_render'],
            'script' => 'employee_public_script',
            'style' => 'employee_public_style',
        ]);
    }

    //  Company Employee Post Render.

    public function company_employee_render($attributes)
    {
        if ($attributes["employeeID"]) {
            wp_enqueue_style('employee_public_style');
            wp_enqueue_script('employee_public_script');

            return $this-> company_employee_public($attributes['employeeID']);
        } else {
            return null;
        }
    }

    //   Company Employee Post Public.

    public function employee_render_public()
    {

        new EmployeePostPublic();
    }
}
