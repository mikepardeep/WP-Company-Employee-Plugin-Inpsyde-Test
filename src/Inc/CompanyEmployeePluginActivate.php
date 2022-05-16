<?php

/**
 * Plugin Activation
 *
 * This file class run after plugin activation hook triggered.
 *
 *
 * @package Company Employee Plugin
 * @since 12.5.2022
 */

declare(strict_types=1);

namespace CompanyEmployee\Inc;

class CompanyEmployeePluginActivate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}
