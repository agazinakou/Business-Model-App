<?php

$app->route([
	'path' => '/',
	'method' => 'GET',
	'handler' => function () {
		//return response()->render('welcome');
		return view('welcome');
	}
]);


$app->route([
	'path' => '/hello/:name',
	'method' => 'GET',
	'handler' => 'HomeController::index',
	'where' => ['name' => '[a-zA-Z]+']
]);


