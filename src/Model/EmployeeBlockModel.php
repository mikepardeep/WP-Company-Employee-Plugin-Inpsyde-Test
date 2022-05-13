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

use CompanyEmployee\PublicFrontend\EmployeePostPublic;


class EmployeeBlockModel extends EmployeePostPublic
{   
    public function __construct()
    {
        add_action('init',  array($this, 'company_employee_post_block'));
        $this -> employeeRenderPublic();
    }


    /**
     * Company Employee Post Block
     */

    public function company_employee_post_block()
    {
         /**
         * Company Employee Post Register Block
         */

        register_block_type('ourplugin/company-employee', array(
            'editor_script'   => 'employee_block_script',
            'editor_style'    => 'employee_block_style',
            'render_callback' => array($this,'companyEmployeeRender'),
            'script'          => 'employee_public_script',
            'style'           => 'employee_public_style'
        ));

    }

    /**
     * Company Employee Post Render
     */


    public function companyEmployeeRender($attributes)
    {
        if ($attributes["employeeID"])
        {
            wp_enqueue_style('employee_public_style');
            wp_enqueue_script('employee_public_script');

            return $this-> company_employee_public($attributes['employeeID']);
        }
        else
        {
            return NULL;
        }
        

    }
    

    /**
     * Company Employee Post Public
     */


    public function employeeRenderPublic(){

        new EmployeePostPublic;
    }

}