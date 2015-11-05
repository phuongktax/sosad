<?php

////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('Asia/Ho_Chi_Minh');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');

////////////////////////////////////////////////////////////////////////////////
// Define constants for database connectivty
////////////////////////////////////////////////////////////////////////////////
defined('DATABASE_HOST') ? null : define('DATABASE_HOST', 'localhost');
defined('DATABASE_NAME') ? null : define('DATABASE_NAME', 'shopping');
defined('DATABASE_USER') ? null : define('DATABASE_USER', 'root');
defined('DATABASE_PASSWORD') ? null : define('DATABASE_PASS', '');

////////////////////////////////////////////////////////////////////////////////
// Define absolute application paths
////////////////////////////////////////////////////////////////////////////////

// Use PHP's directory separator for windows/unix compatibility
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to server root
defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

// Define absolute path to includes
//defined('INCLUDE_PATH') ? null : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('FUNCTION_PATH') ? null : define('FUNCTION_PATH', 'functions'.DS);
defined('CONFIG_PATH') ? null : define('CONFIG_PATH', 'configs'.DS);
defined('LIB_PATH') ? null : define('LIB_PATH', 'libraries'.DS);
defined('SMARTY_PATH') ? null : define('SMARTY_PATH', 'smarty'.DS);
defined('MODEL_PATH') ? null : define('MODEL_PATH', 'models'.DS);
defined('VIEW_PATH') ? null : define('VIEW_PATH', 'views'.DS);
defined('CONTROLLER_PATH') ? null : define('CONTROLLER_PATH', 'controller'.DS);


////////////////////////////////////////////////////////////////////////////////
// Include library, helpers, functions
////////////////////////////////////////////////////////////////////////////////
include(FUNCTION_PATH.'functions.inc.php');
include(LIB_PATH.'database.php');
include(MODEL_PATH.'product.model.php');
include(MODEL_PATH.'user.model.php');
include(MODEL_PATH.'shoppingcart.model.php');
include(SMARTY_PATH.'libs'.DS.'Smarty.class.php');



////////////////////////////////////////////////////////////////////////////////
// Instantiate and configure smarty
////////////////////////////////////////////////////////////////////////////////
$smarty = new Smarty();
$smarty->setTemplateDir(VIEW_PATH);
$smarty->setCompileDir(SMARTY_PATH.'templates_c');
$smarty->setCacheDir(SMARTY_PATH.'cache');
$smarty->setConfigDir(SMARTY_PATH.'configs');
?>
