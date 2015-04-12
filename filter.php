<?php

/**
 * Filter script for the responsive video filter
 * 
 * @license http://opensource.org/licenses/GPL-3.0 GPLv3
 */
require_once($CFG->dirroot . '/tag/locallib.php');

class filter_responsivevideo extends moodle_text_filter {

    private static $VIDEO_UNKNOWN = false;
    private static $VIDEO_YOUTUBE = 1;

    public function __construct() {
        
    }

    public function filter($text, array $options = array()) {
        global $PAGE;
        if (preg_match_all('/\[rv\](.*?)\[\/rv\]/', $text, $matches)) {
            for ($i = 0; $i < count($matches[0]); ++$i) {
                $video_type = $this->get_video_type($matches[1][$i]);

                if (self::$VIDEO_YOUTUBE == $video_type) {
                    $new_text = $this->get_youtube_link($matches[1][$i]);
                }

                if (self::$VIDEO_UNKNOWN != $video_type) {
                    $max_width = get_config('filter_responsivevideo', 'maxwidth'); 
                
                    if ($max_width != '') {
                        
                        $new_text = '<div style="max-width:' . $max_width . ';">' . $new_text . '</div>';
                    }
                    $text = str_replace($matches[0][$i], $new_text, $text);
                }
            }
        }



        return $text;
    }

    private function get_youtube_link($url) {
        if (stripos($url, 'youtube') === false) {
            return $url;
        }

        $url_info = parse_url($url);
        //echo '<pre>'.print_r($url_info, true).'</pre>'; 
        //$query_string = preg_split('/&(amp;)?/', $url_info['query']);

        parse_str(html_entity_decode($url_info['query']), $ray);

        if (!isset($ray['v'])) {
            // Can't find v, just bail
            return $url;
        }

        // Build the embed url
        $url = 'https://www.youtube' . (get_config('filter_responsivevideo', 'nocookie') ? '-nocookie' : '') . '.com/embed/' . $ray['v'];

        if (get_config('filter_responsivevideo', 'norel')) {
            $url .= '?rel=0';
        }

        $embed = '';

        $embed .= '<div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;max-width:98.5%;">';
        $embed .= '<iframe src="' . $url . '" style="position:absolute;top:0;left:0;height:100%;width:100%;"></iframe>';
        $embed .= '</div>'; // iframe wrapper

        return $embed;
    }

    private function get_video_type($url) {

        if (stripos($url, 'youtube') !== false) {
            return self::$VIDEO_YOUTUBE;
        }

        return self::$VIDEO_UNKNOWN;
    }

}
