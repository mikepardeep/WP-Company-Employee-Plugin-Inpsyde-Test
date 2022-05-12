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


class EmployeePostApi
{
    public function __construct()
    {
        add_action('rest_api_init',  array($this, 'company_employee_rest_api'));
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
            'callback' => array($this,'company_employee_route_HTML')
        ));

    }

    /**
     * Company Employee Post Route HTML
     */

    public function company_employee_route_HTML($data){
        return $this->company_employee_public($data['employeeID']);
        
    }

    public function company_employee_public($employeeID)
    {
       global $post;

       $employeePost = new \WP_Query(array(
           'post_type' => 'company_employee',
           'p'         => $employeeID   
       ));

       while ($employeePost-> have_posts())
       {
           $employeePost -> the_post();
           ob_start(); 
           ?>
           
           <div class="company-employee-container">
                <div class="company-employee-box">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="company-employee-image">
                    <h3><?php echo get_post_meta($post->ID, 'first_name', true) ?><span><?php echo get_post_meta($post->ID, 'last_name', true) ?></span></h3>
                    <p><?php echo get_post_meta($post->ID, 'position', true) ?></p>
                    <div class="company-employee-bottom">
                        <p>Learn more about this employee</p>
                        <span class="dashicons dashicons-arrow-down-alt"></span>
                        <div class="company-employee-bottom-popup">
                            <p><?php echo get_post_meta($post->ID, 'short_description', true) ?></p>
                            <div class="company-employee-social-link">
                                <p><a href="<?php echo get_post_meta($post->ID, 'facebook_link', true) ?>"><span class="dashicons dashicons-facebook-alt"></span>facebook</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'linkedIn_link', true) ?>"><span class="dashicons dashicons-linkedin"></span>facebook</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'github_link', true) ?>"><span class="dashicons dashicons-facebook-alt"></span>facebook</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'xing_link', true) ?>"><span class="dashicons  dashicons-xing"></span>facebook</a></p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>



        <?php
       }
    }


}