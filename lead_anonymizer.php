<?php
/**
* @package leadAnonymizer
* @version 1.1
*/
/*
Plugin Name: Lead Anonymizer for Gravity Forms
Description: This hides personally identifiable information on form entries (Board Applications). It allows admins to see the all information and hides fields with class of PIN, class is added in form setup on advanced pane
Author: Dean Wenick
Version: 1.1
Author URI: http://wenick-web.com
*/

function hideSensitive () 
{
    if( ! current_user_can( 'edit_private_posts' ) )
    {
        echo '<style type="text/css"><!-- 
            tbody tr:nth-child(3), tbody tr:nth-child(4), tbody tr:nth-child(7), tbody tr:nth-child(8), tbody tr:nth-child(9), tbody tr:nth-child(10){
            display:none} --></style>';
        echo "Personal identification information is redacted on this application. Login as an admin to see all fields.";
    }
}

add_action( "gform_entry_detail_content_before", "hideSensitive" );

?>