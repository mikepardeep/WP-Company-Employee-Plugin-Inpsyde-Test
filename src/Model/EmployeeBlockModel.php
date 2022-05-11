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
         * Company Employee Post Register Script and Style
         */
        // wp_register_script('block_script', plugin_dir_url(__FILE__). 'build/EmployeeBlockEditor.js', array('wp-blocks','wp-editor'));
        // wp_register_style('block_style', plugin_dir_url(__FILE__). 'build/EmployeeBlockEditor.css');

        
         /**
         * Company Employee Post Register Block
         */
        register_block_type('ourplugin/company-employee', array(
            'editor_script' => 'block_script',
            'editor_style' => 'block_style',   
        ));

      
    }



}