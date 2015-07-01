<?php

/*require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/Articles.php';
require_once __DIR__.'/../src/Rebelles.php';
$app = new Silex\Application();
require_once __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';
$app->run();*/


require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/Informations.php';
$app = new Silex\Application();
require_once __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';
$app->run();