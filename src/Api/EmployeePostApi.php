<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CompanyEmployee\Api;

use CompanyEmployee\PublicFrontend\EmployeePostPublic;


class EmployeePostApi extends EmployeePostPublic
{
    public function __construct()
    {
        add_action('rest_api_init',  array($this, 'company_employee_rest_api'));
        $this->employeePublic();
    }

    /**
     * Company Employee Post Api
     */

    public function company_employee_rest_api()
    {
        /**
         * Register Rest Route
         */
        
        register_rest_route('companyEmployee/v1', 'getHTML', array(
            'methods' => 'GET',
            'callback' => array($this,'company_employee_post_route')
        ));

    }


    /**
     * Company Employee Post Route
     */

    public function company_employee_post_route($data){
        return $this->company_employee_public($data['employeeID']);
    }

    
    /**
     * Company Employee sending content to Post Route
     */


    public function employeePublic()
    {
        new EmployeePostPublic;
    }





}