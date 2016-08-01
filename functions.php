<?php
/*
 * Maxthemes function loader
 *
 * @author: Tran Xuan Duc
 */
#active plugin metabox
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';

if (!defined('MAXTHEMES_VER')):
    define('MAXTHEMES_VER', '1.0.0');
endif;
if (!defined('MAXTHEMES_DIR')):
    define('MAXTHEMES_DIR', dirname(__FILE__));
endif;
if (!defined('MAXTHEMES_PATH')):
    define('MAXTHEMES_PATH', __FILE__);
endif;
if (!defined('MAXTHEMES_URI')):
    define('MAXTHEMES_URI', get_template_directory_uri());
endif;
if (!defined('MAXTHEMES_URI_ASSET')):
    define('MAXTHEMES_URI_ASSET', MAXTHEMES_URI . '/assets/');
endif;
if (!defined('TIME_ZONE')) :
    define('TIME_ZONE', 'Asia/Ho_Chi_Minh');
endif;
if (!defined('MAXTHEMES_LAN')):
    define('MAXTHEMES_LAN', get_locale());
endif;
if (!defined('MAXTHEMES_LAN_URI')):
    define('MAXTHEMES_LAN_URI', MAXTHEMES_URI . '/language/');
endif;
if (!defined('MAXTHEMES_PREFIX')) :
    define('MAXTHEMES_PREFIX', 'mt_prefix_');
endif;

require_once 'maxthemes/bootstrap.php';

use max_themes\components\init;

new init();


/**
 * Function
 */

/**
 * the excert max char
 * @param type $charlength
 */
function the_excerpt_max_charlength($charlength)
{
    $excerpt = get_the_excerpt();
    $charlength++;

    if (mb_strlen($excerpt) > $charlength) {
        $subex = mb_substr($excerpt, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = -(mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            echo mb_substr($subex, 0, $excut);
        } else {
            echo $subex;
        }
        echo '[...]';
    } else {
        echo $excerpt;
    }
}

/**
 * Max lenght Text
 */
function max_text_charlength($text, $charlength)
{
    $charlength++;
    if (mb_strlen($text) > $charlength) {
        $subex = mb_substr($text, 0, $charlength - 5);
        $exwords = explode(' ', $subex);
        $excut = -(mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            echo mb_substr($subex, 0, $excut);
        } else {
            echo $subex;
        }
        echo '[...]';
    } else {
        echo $text;
    }
}