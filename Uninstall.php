<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
