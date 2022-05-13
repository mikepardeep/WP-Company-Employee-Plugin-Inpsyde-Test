<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CompanyEmployee\Model;


class EmployeePostModel
{   
    public function __construct()
    {
        add_action('init',  array($this, 'company_employee_post_type'));

    }

    /**
     * Company Employee Post Type
     */
    public function company_employee_post_type()
    {
            $labels = array(
                'name'                  => 'Employees',
                'add_new_item'          => 'Add New Employee',
                'edit_item'             => 'Edit Employee',
                'all_items'             => 'All Employees',
                'singular_name'         => 'Employee',
                'featured_image'        => 'Employee Image',
                'set_featured_image'    => 'Set Employee Image',
                'remove_featured_image' => 'Remove Employee Image'
            );

            $args = array(
                    'supports'            => array(
                        'thumbnail',
                        'title',
                        'editor',
                    ),
                    'public'              => true,
                    'has_archive'         => true,
                    'show_in_rest'        => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'can_export'          => true,
                    'labels'              => $labels,
                    'rewrite'             => array( "slug" => "employee" ),
                    'menu_icon'           => 'dashicons-groups'
            );

            register_post_type( 'company_employee', $args );

    }



}