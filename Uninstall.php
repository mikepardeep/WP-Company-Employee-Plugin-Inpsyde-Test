<?php

/**
 * Plugin Uninstall
 *
 * This file class run after plugin uninstall hook triggered.
 *
 *
 * @package WordPress
 * @subpackage Component`
 * @since 13.05.2022 
 */

declare(strict_types=1);

namespace CompanyEmployee;

class CompanyEmployeeUninstall
{
    public static function uninstall()
    {
        // Clear Company Employee Post Database.

         global $wpdb;

         $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'company_employee'");
         $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
    }
}
