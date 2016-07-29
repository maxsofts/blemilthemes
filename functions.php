<?php
/*
 * Maxthemes function loader
 *
 * @author: Tran Xuan Duc
 */
#active plugin metabox
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

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
