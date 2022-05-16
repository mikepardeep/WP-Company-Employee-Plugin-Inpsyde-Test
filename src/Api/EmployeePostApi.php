<?php

/**
 * Rest API Registration
 *
 * This file class create custom api route and send HTML code fetched from EmployeePostPublic class.
 *
 *
 * @package Company Employee Plugin
 * @since 11.05.2022
 */

declare(strict_types=1);

namespace CompanyEmployee\Api;

use CompanyEmployee\PublicFrontend\EmployeePostPublic;

class EmployeePostApi extends EmployeePostPublic
{
    public function __construct()
    {
        add_action('rest_api_init', [$this, 'company_employee_rest_api']);
        $this->employee_public();
    }

    // Company Employee Post Api.

    public function company_employee_rest_api()
    {

        // Register Rest Route.

        register_rest_route('companyEmployee/v1', 'getHTML', [
            'methods' => 'GET',
            'callback' => [$this, 'company_employee_post_route'],
        ]);
    }

    //Company Employee Post Route.

    public function company_employee_post_route($data)
    {

        return $this->company_employee_public($data['employeeID']);
    }

    //Company Employee Post Content Route.

    public function employee_public()
    {
        new EmployeePostPublic();
    }
}
