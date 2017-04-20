<?php
define('PUBLIC_HTML', __DIR__);

require PUBLIC_HTML.'/vendor/autoload.php';

use SAmvc\Framework\App;

// Load the App!
$app = new App();
$app->init();
