<?php

/**
 * Language file for the responsive video filter Moodle plugin
 */

$string['pluginname'] = 'Responsive Video Filter'; 
$string['filtername'] = 'Responsive Video'; 
$string['settings_header'] = 'Responsive Video Filter Settings'; 

$string['use_nocookie'] = 'Use youtube-nocookie.com domain';
$string['use_nocookie_help'] = 'Instead of embedding using www.youtube.com, when checked the embed will use www.youtube-nocookie.com. This is equivalent to enabling <a href="https://support.google.com/youtube/answer/171780?expand=PrivacyEnhancedMode#privacy" target="_blank">privacy enhanced mode</a> on the embed. ';

$string['no_related'] = 'Don\'t show related videos by default';
$string['no_related_help'] = 'If enabled, a tag will be automatically added to the embed code so that related videos are not shown';

$string['max_width'] = 'Maximum width of the video';
$string['max_width_help'] = 'If not empty, this field will be added as a CSS max-width property to limit the width of your embedded videos. It must be formatted correctly for CSS to work correctly. Example, if you want it to be a max width of 500 pixels you would enter 500px here. If you want a 75% max width, enter 75%.';

$string['tags_only'] = 'Look only in [rv] tags';
$string['tags_only_help'] = 'If enabled, the filter will only look for video links within [rv]<em>url</em>[rv] tags. If disabled, it will look for supported video links everywhere on the page. If you have other filters that might affect links, you\'re going to want to have this disabled.';