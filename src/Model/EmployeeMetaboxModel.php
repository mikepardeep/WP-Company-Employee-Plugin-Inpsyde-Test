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


class EmployeeMetaboxModel
{   
    public function __construct()
    {
        add_action('admin_init',  array($this, 'company_employee_meta_boxes'));
        add_action('save_post',  array($this, 'company_employee_save_meta_boxes_post'));

    }

    /**
     * Company Employee Post Add Metabox
     */
    public function company_employee_meta_boxes()
    {
        add_meta_box(
            "company_employee_metadata_post" ,                      // div id containing rendered fields
            "Employee",                                             // section heading displayed as text
            array($this,'company_employee_meta_boxes_post'),        // callback function to render the field
            array($this, 'company_employee'),                       // name of the post type which to render field
            "side",                                                 // location on the screen
            "core"                                                  // placement priority                   
    
        );

    }

     /**
     * Company Employee Post Metabox callback function
     */

    public function company_employee_meta_boxes_post()
    {
        global $post;
        $custom = get_post_custom($post->ID);
        $fieldData = $custom["first_name"][0];

        ?>
        
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"  placeholder="Your first name.." required  value="<?php echo get_post_meta( $post->ID, 'first_name', true ); ?>">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"  placeholder="Your last name.." required  value="<?php echo get_post_meta( $post->ID, 'last_name', true ); ?>">
        <br>
        <label for="short_description">Short Description</label>
        <input type="text" id="short_description" name="short_description"  placeholder="Your short description.." required  value="<?php echo get_post_meta( $post->ID, 'short_description', true ); ?>">
        <br>
        <label for="short_description">Company Position</label>
        <input type="text" id="position" name="position"  placeholder="Your Position.." required  value="<?php echo get_post_meta( $post->ID, 'position', true ); ?>">
        <br>
        <label for="facebook_link">Facebook Link</label>
        <input type="text" id="facebook_link" name="facebook_link"  placeholder="Your Facebook link.."  value="<?php echo get_post_meta( $post->ID, 'facebook_link', true ); ?>">
        <br>
        <label for="linkedIn_link">LinkedIn Link</label>
        <input type="text" id="linkedIn_link" name="linkedIn_link"  placeholder="Your LinkedIn link.." required  value="<?php echo get_post_meta( $post->ID, 'linkedIn_link', true ); ?>">
        <br>
        <label for="github_link">Github Link</label>
        <input type="text" id="github_link" name="github_link"  placeholder="Your Github link.." required  value="<?php echo get_post_meta( $post->ID, 'github_link', true ); ?>">
        <br>
        <label for="xing_link">Xing Link</label>
        <input type="text" id="xing_link" name="xing_link"  placeholder="Your Xing link.." required  value="<?php echo get_post_meta( $post->ID, 'xing_link', true ); ?>">
    
    <?php 
    
    }

    /**
     * Company Employee Post Metabox save function
     */

    public function company_employee_save_meta_boxes_post(){
        global $post;

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
    
        if ( isset( $_POST['first_name'] ) ) {
            update_post_meta( $post->ID, 'first_name', sanitize_text_field($_POST['first_name']));
        }
    
        if ( isset( $_POST['last_name'] ) ) {
            update_post_meta( $post->ID, 'last_name', sanitize_text_field($_POST['last_name']));
        }
    
        if ( isset( $_POST['short_description'] ) ) {
            update_post_meta( $post->ID, 'short_description', sanitize_text_field($_POST['short_description']));
        }
    
        if ( isset( $_POST['position'] ) ) {
            update_post_meta( $post->ID, 'position', sanitize_text_field($_POST['position']));
        }
    
        if ( isset( $_POST['facebook_link'] ) ) {
            update_post_meta( $post->ID, 'facebook_link', sanitize_text_field($_POST['facebook_link']));
        }
    
        if ( isset( $_POST['linkedIn_link'] ) ) {
            update_post_meta( $post->ID, 'linkedIn_link', sanitize_text_field($_POST['linkedIn_link']));
        }
    
        if ( isset( $_POST['github_link'] ) ) {
            update_post_meta( $post->ID, 'github_link', sanitize_text_field($_POST['github_link']));
        }

        if ( isset( $_POST['xing_link'] ) ) {
            update_post_meta( $post->ID, 'xing_link', sanitize_text_field($_POST['xing_link']));
        }
    }

}