<?php

/**
 * Post Public Frontend HTML Code
 *
 * This class provides HTML code for plugin front-end
 *
 *
 * @package Company Employee Plugin
 * @since 12.05.2022
 */


declare(strict_types=1);

namespace CompanyEmployee\PublicFrontend;

class EmployeePostPublic
{
    public function __construct()
    {
        add_action('init', [$this, 'company_employee_public']);
    }

    
    // Company Employee Public Post Code. 

    public function company_employee_public($employeeID)
    {
        global $post;

        $employeePost = new \WP_Query([
           'post_type' => 'company_employee',
           'p' => $employeeID,
        ]);

        wp_enqueue_style('employee_public_style');

        while ($employeePost-> have_posts()) {
            $employeePost -> the_post();
            ob_start();
            ?>
           
            <div class="company-employee-container">
                    <div class="company-employee-box"  id="employee-box">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="company-employee-image" >
                        <h3><?php echo get_post_meta($post->ID, 'first_name', true) ?><span><?php echo get_post_meta($post->ID, 'last_name', true) ?></span></h3>
                        <p><?php echo get_post_meta($post->ID, 'position', true) ?></p>
                        <div class="company-employee-bottom">
                            <p>Learn more about this employee</p>
                            <span onclick="displayProfile()" class="dashicons dashicons-arrow-down-alt" id="down-arrow-icon"></span>
                            <div class="company-employee-bottom-popup" id="employee-bottom-popup">
                                <p class="company-employee-description"><?php echo get_post_meta($post->ID, 'short_description', true) ?></p>
                                <div class="company-employee-social-link">
                                    <p><a href="<?php echo get_post_meta($post->ID, 'facebook_link', true) ?>"><span class="dashicons dashicons-facebook-alt"></span>facebook</a></p>
                                    <p><a href="<?php echo get_post_meta($post->ID, 'linkedIn_link', true) ?>"><span class="dashicons dashicons-linkedin"></span>linkedIn</a></p>
                                    <p><a href="<?php echo get_post_meta($post->ID, 'github_link', true) ?>"><span  class="dashicons"><img src="<?php echo plugins_url('assets/GitHub-32px.png', dirname(__DIR__)) ?>"></span>github</a></p>
                                    <p><a href="<?php echo get_post_meta($post->ID, 'xing_link', true) ?>"><span class="dashicons  dashicons-xing"></span>xing</a></p>
                                </div>
                                <span onclick="hideProfile()" class="dashicons dashicons-arrow-up-alt" id="up-arrow-icon"></span> 
                            </div>
                        </div>
                    </div>
            </div>
            <script>

                function displayProfile()
                {
                    let popup =  document.getElementById("employee-bottom-popup")
                    let downarrow = document.getElementById("down-arrow-icon")
                    popup.classList.add('display-profile')
                    downarrow.classList.add('hide-down-arrow')
                }

                function hideProfile()
                {
                    let popup =  document.getElementById("employee-bottom-popup")
                    let downarrow = document.getElementById("down-arrow-icon")
                    popup.classList.remove('display-profile')
                    downarrow.classList.remove('hide-down-arrow')

                }

            </script>
            
            <?php

            wp_reset_postdata();
            return ob_get_clean();
        }
    }
}
