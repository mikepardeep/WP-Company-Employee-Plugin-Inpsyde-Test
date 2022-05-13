<?php

/*
 * This file is part of the company employee plugin package.
 *
 * Inpsyde Developer Test
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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

    /**
     * Company Employee Post Class Initialize Funciton
     */
    public function initClasses()
    {
        new EmployeePostModel;
        new EmployeeMetaboxModel;
        new EmployeeBlockModel;
        new EmployeePostApi;
        new EmployeeRegistration;
    }




}


