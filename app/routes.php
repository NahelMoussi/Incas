<?php


// Namespaces



//MODELS



//ROUTES 

//CATEGORY
$app->get('/', function () use($app) {

	return $app['twig']->render('category.html.twig');
})
->bind('home');


//ERROR
$app->error(function (\Exception $e, $code) { 

        if (404 == $code) { 
        return 'error';
        } 
});