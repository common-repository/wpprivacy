<?php
/*
Plugin Name: WPPrivacy
Plugin URI: http://ewsel.com
Description: WPPrivacy is a plugin to not lop IPs from comments.
Version: 1.0.4
Author: EWSEL
Author URI: http://www.ewsel.com
*/
/*  Copyright 2013  WPPrivacy  (email : info@ewsel.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
class load_language 
{
    public function __construct()
    {
        load_plugin_textdomain('wpprivacy', FALSE, dirname(plugin_basename(__FILE__)).'/lang/');
    }
}
$load_lang = new load_language;
//END
add_filter('pre_comment_user_ip', 'privacy_comment_anon_ip');
function privacy_comment_anon_ip()
{    
	$REMOTE_ADDR = "127.0.0.1";
	return $REMOTE_ADDR;
}
add_action('admin_menu', 'create_menu_privacy');
function create_menu_privacy() {
	//create new top-level menu
	add_menu_page('WPPrivacy Settings', 'WPP Settings', 'administrator', __FILE__, 'privacy_settings_page',plugins_url('/src/icon.png', __FILE__));
}
	//call register settings function
	add_action( 'admin_init', 'register_myprivacy_settings' );

function register_myprivacy_settings() {
	//register our settings
	register_setting( 'privacy-settings-group', 'update_old_ip' );
}

function privacy_settings_page() {
?>
<div class="wrap">
<form method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>
    <?php do_settings_sections( 'baw-settings-group' ); ?>
	<h2><?php _e( 'WPPrivacy Settings', 'wpprivacy' ); ?></h2>
	<p><?php _e( 'Congratulation plugin has been successfully installed. Nothing to configure. :)', 'wpprivacy' ); ?></p>
	</form><br>
					<p>
					<?php _e( 'I spend quite a lot of my precious time working on opensource WordPress plugins. If you find this one useful, please consider helping me develop it further. Even the smallest amount of money you are willing to spend will be welcome.', ew_TEXTDOMAIN ); ?>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="FTJ2H2J4GURXQ">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="border:none;" >
						<img style="display:none;" alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</p>
</div>
<?
}?>