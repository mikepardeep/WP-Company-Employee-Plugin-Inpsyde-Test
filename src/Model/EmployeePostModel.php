<?php

/**
 * Custom Post Registration
 *
 * This file class register custom post and define post configuration.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since x.x.x (when the file was introduced)
 */

 
declare(strict_types=1);

namespace CompanyEmployee\Model;

class EmployeePostModel
{
    public function __construct()
    {
        add_action('init', [$this, 'company_employee_post_type']);
    }

    // Company Employee Post Type.

    public function company_employee_post_type()
    {
            $labels = [
                'name' => 'Employees',
                'add_new_item' => 'Add New Employee',
                'edit_item' => 'Edit Employee',
                'all_items' => 'All Employees',
                'singular_name' => 'Employee',
                'featured_image' => 'Employee Image',
                'set_featured_image' => 'Set Employee Image',
                'remove_featured_image' => 'Remove Employee Image',
            ];

            $args = [
                    'supports' => [
                        'thumbnail',
                        'title',
                        'editor',
                    ],
                    'public' => false,
                    'has_archive' => true,
                    'show_in_rest' => true,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'can_export' => true,
                    'labels' => $labels,
                    'rewrite' => [ "slug" => "employee" ],
                    'menu_icon' => 'dashicons-groups',
            ];

            register_post_type('company_employee', $args);
    }
}
