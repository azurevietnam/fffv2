<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');
define('ADWORDS_VERSION', 'v201609');
define('SRC_PATH', dirname(__FILE__) .'/google/src/');
define('LIB_PATH', 'Google/Api/Ads/AdWords/Lib');
define('UTIL_PATH', 'Google/Api/Ads/Common/Util');
define('ADWORDS_UTIL_PATH', 'Google/Api/Ads/AdWords/Util');
define('ADWORDS_UTIL_VERSION_PATH', 'Google/Api/Ads/AdWords/Util/v201609');

// Configure include path.
ini_set('include_path', implode(array(
    ini_get('include_path'), PATH_SEPARATOR, SRC_PATH
)));

// Include the AdWordsUser.
require_once LIB_PATH . '/AdWordsUser.php';
#require_once dirname(__FILE__) . '/../../Common/ExampleUtils.php';

