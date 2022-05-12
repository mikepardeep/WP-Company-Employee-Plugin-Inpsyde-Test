<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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