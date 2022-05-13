<?php

/*
 * This file is part of the company employee plugin package.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CompanyEmployee\PublicFrontend;


class EmployeePostPublic
{
    public function __construct()
    {
        add_action('init',  array($this, 'company_employee_public'));
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
                        <span onclick="displayProfile()" class="dashicons dashicons-arrow-down-alt"></span>
                        <div class="company-employee-bottom-popup">
                            <p><?php echo get_post_meta($post->ID, 'short_description', true) ?></p>
                            <div class="company-employee-social-link">
                                <p><a href="<?php echo get_post_meta($post->ID, 'facebook_link', true) ?>"><span class="dashicons dashicons-facebook-alt"></span>facebook</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'linkedIn_link', true) ?>"><span class="dashicons dashicons-linkedin"></span>linkedIn</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'github_link', true) ?>"><span class="dashicons dashicons-facebook-alt"></span>github</a></p>
                                <p><a href="<?php echo get_post_meta($post->ID, 'xing_link', true) ?>"><span class="dashicons  dashicons-xing"></span>xing</a></p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        <?php

        wp_reset_postdata();
        return ob_get_clean();
        
       }
    }
}