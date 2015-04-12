<?php
/**
 * Admin settings for the Easy Filter Filter
 *
 * @author      Ryan Nutt
 * @link        http://www.nutt.net
 * @package     filter_easyfilter
 * @copyright   Ryan Nutt
 * @license     http://opensource.org/licenses/GPL-3.0 GPLv3
 */
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $item = new admin_setting_configcheckbox('filter_responsivevideo/norel', 
            get_string('no_related', 'filter_responsivevideo'), 
            get_string('no_related_help', 'filter_responsivevideo'), 
            1);
    $settings->add($item);
    
    
    $item = new admin_setting_configcheckbox('filter_responsivevideo/nocookie',
            get_string('use_nocookie', 'filter_responsivevideo'),
            get_string('use_nocookie_help', 'filter_responsivevideo'),
            0);
    $settings->add($item);
    
    $item = new admin_setting_configcheckbox('filter_responsivevideo/tagsonly',
            get_string('tags_only', 'filter_responsivevideo'),
            get_string('tags_only_help', 'filter_responsivevideo'),
            1); 
    $settings->add($item); 
    
    $item = new admin_setting_configtext('filter_responsivevideo/maxwidth',
            get_string('max_width', 'filter_responsivevideo'),
            get_string('max_width_help', 'filter_responsivevideo'),
            '', PARAM_RAW);
    $settings->add($item); 
}
