<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);


namespace CompanyEmployee;


class EmployeePostPublic
{
    public function __construct()
    {
        $this->employee_public_html();
    }

    /**
     * Company Employee Public Post
     */

    public function employee_public_html(){
        echo "Hello world";
    }
     

}