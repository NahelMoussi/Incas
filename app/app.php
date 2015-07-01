<?php
//-----------Application de Silex




//----DEBUG
$app['debug'] = true;


//---Services

//GENERATOR
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

//REGISTER DE DOCTRINEPROVIDER
$config = array();
switch($_SERVER['HTTP_HOST']){
    case 'localhost':
        $config['debug'] = true;
        $config['db_host'] = 'localhost';
        $config['db_name'] = 'acas'; // A CHANGER
        $config['db_user'] = 'root';
        $config['db_pass'] = '';
        break;
    case 'preprod.monsite.com':
        $config['debug'] = true;
        $config['db_host'] = 'localhost';
        $config['db_name'] = '';
        $config['db_user'] = '';
        $config['db_pass'] = '';
        break;
    case 'monsite':
        $config['debug'] = false;
        $config['db_host'] = 'localhost';
        $config['db_name'] = '';
        $config['db_user'] = '';
        $config['db_pass'] = '';
        break;
}


$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array (
        'driver'    => 'pdo_mysql',
        'host'      =>  $config['db_host'],
        'dbname'    => $config['db_name'],
        'user'      => $config['db_user'],
        'password'  => $config['db_pass'],
        'charset'   => 'utf8'
    ),
));

$app['db']->setFetchMode(PDO::FETCH_OBJ);

//TWIG
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));




