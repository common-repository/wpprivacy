=== WPPrivacy ===
Contributors: EWSEL
Tags: comments, IP, Hide, privacy, Remove, wirspeichernnicht
Requires at least: 2.8
Tested up to: 4.0.0
Stable tag: trunk
WPPrivacy is a plugin to not log IPs from comments.
== Description ==
WPPrivacy to not log the IP address from the people that comment on your wordpress 
installation. 
This plugin will be useful to people that cannot/or don't want to use [libapache2-mod-removeip](http://riseuplabs.org/privacy/apache/ "libapache2-mod-removeip") (because you don't use 
apache or don't want to wipe out the IP logging on all vhosts).
== Installation ==
1. Upload the WPPrivacy folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done..
== Frequently Asked Questions ==
= Do I need this? =
If you are reading this it's probably because you are interested on your commenters anonymity. If you don't, you don't need this plugin. 
= Is this going to annonymize the logs of my webserver? =
No, sorry. Try libapache2-mod-removeip if you use apache2.
= I installed libapache2-mod-removeip, do I need this plugin too? =
No, you don't. The libapache-mod-removeip will hide the IP address from the commenters to wordpress, the same as this plugin does.
= Can I use it with wordpress.com stats/google analytics? =
Sure, but I'm not sure that you really want to let google or wordpress.com register the IP address from your commenters.
== Changelog ==
= 1.0.4 =
*Error Removed
= 1.0.3 =
*Setting Page Add
= 1.0.2 =
*ADD Language System*ADD Icon
= 1.0.1 =
*ADD SQL UPDATE
= 1.0.0 =
* First version.