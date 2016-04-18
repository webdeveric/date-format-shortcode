<?php
/*
Plugin Name: Date Format Shortcode
Plugin Group: Shortcodes
Plugin URI: http://phplug.in/
Description: This plugin provides a shortcode that allows you to format a timestamp. Example: <code>[date-format formate="F j, Y" timestamp="+1 day"]</code>
Version: 0.1.0
Author: Eric King
Author URI: http://webdeveric.com/
*/

function wde_date_format_shortcode($attributes, $content = '', $code = '')
{
    extract(shortcode_atts(
        array(
            'format'    => get_option('date_format') . ' ' . get_option('time_format'),
            'timestamp' => time()
        ),
        $attributes
    ));

    if (! empty($content)) {
        $timestamp = trim(strip_tags(do_shortcode($content)));
    }
      
    if (is_string($timestamp)) {
        $timestamp = strtotime($timestamp);
    }

    return date($format, $timestamp);
}

add_shortcode('date-format', 'wde_date_format_shortcode');
