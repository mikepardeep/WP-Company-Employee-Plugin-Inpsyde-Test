<?php

/**
 * Main Plugin Class Initialization
 *
 * This file class initialized all the classes accordingly.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since x.x.x (when the file was introduced)
 */


declare(strict_types=1);

namespace CompanyEmployee\Provider;

use CompanyEmployee\Model\EmployeePostModel;
use CompanyEmployee\Model\EmployeeMetaboxModel;
use CompanyEmployee\Model\EmployeeBlockModel;
use CompanyEmployee\Api\EmployeePostApi;
use CompanyEmployee\Registration\EmployeeRegistration;

class EmployeeProvider
{
    public function __construct()
    {
        $this->initClasses();
    }


    // Company Employee Post Class Initialize Funciton.

    public function initClasses()
    {
        new EmployeePostModel;
        new EmployeeMetaboxModel;
        new EmployeeBlockModel;
        new EmployeePostApi;
        new EmployeeRegistration;
    }

}


