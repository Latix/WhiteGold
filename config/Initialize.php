<?php

use App\Start\Route;

// SETTING NEEDED CONSTANTS FOR APPLICATION SETUP
defined('ENV_OVERLOAD') 		? NULL : define('ENV_OVERLOAD', 		FALSE);
defined('ENV_FILE') 			? NULL : define('ENV_FILE', 			"");

$message = "Invalid deployment state value kindly redefine it to 'production' or 'local'.";
if (!in_array(DEPLOYMENT_STATE, ['production', 'local'])) exit ($message);

defined('DS')           		? NULL : define('DS',           		"/");
defined('ROOT')         		? NULL : define('ROOT',         		"./");
defined('AUTHOR') 				? NULL : define('AUTHOR', 				"Farawe iLyas");
defined('APP_NAME') 			? NULL : define('APP_NAME',				"whiteGold");
defined('COMPANY') 				? NULL : define('COMPANY',				"");
defined('MASTER_DOMAIN') 		? NULL : define('MASTER_DOMAIN', 		NULL);

defined('APP') 					? NULL : define('APP', 					ROOT."app".DS);
defined('BOOTSTRAP') 			? NULL : define('BOOTSTRAP', 			ROOT."bootstrap".DS);
defined('CONFIG') 				? NULL : define('CONFIG', 				ROOT."config".DS);
defined('RESOURCE') 			? NULL : define('RESOURCE', 			ROOT."resources".DS);
defined('STORAGE') 				? NULL : define('STORAGE', 				ROOT."storage".DS);

defined('CONTROLLER') 			? NULL : define('CONTROLLER', 			APP."Controller".DS);
defined('START') 				? NULL : define('START', 				APP."Start".DS);
defined('MODEL') 				? NULL : define('MODEL', 				APP."Model".DS);
defined('ROUTES') 				? NULL : define('ROUTES', 				APP."Routes".DS);

defined('VIEW') 				? NULL : define('VIEW', 				RESOURCE."views".DS);
defined('LAYOUT') 				? NULL : define('LAYOUT', 				RESOURCE."layouts".DS);
defined('ASSET') 				? NULL : define('ASSET', 				RESOURCE."assets".DS);
defined('TEMPLATE') 			? NULL : define('TEMPLATE', 			LAYOUT."templates".DS);

defined('LOG') 					? NULL : define('LOG', 					STORAGE."logs".DS);
defined('UPLOAD') 				? NULL : define('UPLOAD', 				STORAGE."uploads".DS);
defined('SESSION') 				? NULL : define('SESSION', 				STORAGE."sessions".DS);
defined('COOKIE') 				? NULL : define('COOKIE', 				STORAGE."cookies".DS);

defined('UPLOAD_IMG') 			? NULL : define('UPLOAD_IMG', 			UPLOAD."images".DS);
defined('UPLOAD_AUDIO') 		? NULL : define('UPLOAD_AUDIO', 		UPLOAD."audio".DS);
defined('UPLOAD_VID') 			? NULL : define('UPLOAD_VID', 			UPLOAD."videos".DS);
defined('UPLOAD_FILE') 			? NULL : define('UPLOAD_FILE', 			UPLOAD."files".DS);

defined('CSS') 					? NULL : define('CSS', 					ASSET."css".DS);
defined('IMAGE') 				? NULL : define('IMAGE', 				ASSET."images".DS);
defined('JS') 					? NULL : define('JS', 					ASSET."javascript".DS);
defined('LESS') 					? NULL : define('LESS', 			ASSET."less".DS);
defined('MAIL') 					? NULL : define('MAIL', 			ASSET."mail".DS);
defined('VENDOR') 					? NULL : define('VENDOR', 	ASSET."vendor".DS);
defined('FONT') 					? NULL : define('FONT', 	CSS."fonts".DS);
// REQUIRE COMPOSER AUTOLOAD
require_once __DIR__.'/../vendor/autoload.php';

// LOAD BASIC PHP & APP CONFIGURATIONS.
require_once CONFIG."Configure.php";

// REQUIRE INITIALIZERS FILE.
require_once BOOTSTRAP."Initializers.php";

// INCLUSION OF ROUTES FILE FOR ROUTING THE APP
require_once APP."Routes.php";

foreach (getFiles(ROUTES) as $filename):
    $path = ROUTES.$filename;
    if (is_file($path) && file_exists($path))
		require_once $path;
endforeach;

// INITIALIZE THE ROUTER FOR ROUTES PROCESSING.
Route::initialize();
