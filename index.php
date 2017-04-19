<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('PUBLIC_HTML', __DIR__);

require PUBLIC_HTML.'/vendor/autoload.php';

use SAmvc\Framework\Env;
use SAmvc\Framework\App;
use SAmvc\Services\Debug;

if(Env::get('debug')){Debug::reporting( E_ALL );}

// Load the App!
$app = new App();

$app->init();
