<?php

/**
 * Plugin Deactivation
 *
 * This file class run after plugin deactivation hook triggered.
 *
 *
 * @package Company Employee Plugin
 * @since 12.5.2022
 */

declare(strict_types=1);

namespace CompanyEmployee\Inc;

class CompanyEmployeePluginDeactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
