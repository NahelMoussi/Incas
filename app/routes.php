<?php


// Namespaces



//MODELS
$informations_models = new Informations($app['db']);


//ROUTES 

//HOME
$app->get('/', function () use($app) {

	return $app['twig']->render('home.html.twig');
})
->bind('home');

//BEFORE CATEGORY
$app->get('/information/{id}', function ($id) use($app,$informations_models) {
	$data = array(
		'all_informations' => $informations_models->get_all($id)
		);

	return $app['twig']->render('before_category.html.twig',$data);
})
->bind('before_category');


//ERROR
$app->error(function (\Exception $e, $code) { 

        if (404 == $code) { 
        return 'error';
        } 
});