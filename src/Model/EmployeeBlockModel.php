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


class EmployeeBlockModel
{   
    public function __construct()
    {
        add_action('init',  array($this, 'company_employee_post_block'));
    }

    /**
     * Company Employee Post Block
     */

    function company_employee_post_block()
    {

         /**
         * Company Employee Post Register Block
         */

        register_block_type('ourplugin/company-employee', array(
            'editor_script' => 'employee_block_script',
            'editor_style' => 'employee_block_style',   
        ));

      
    }



}