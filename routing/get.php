<?php

$app->route([
	'path' => '/',
	'method' => 'GET',
	'handler' => function () {
		return response()->render('components/welcome');
	}
]);


$app->route([
	'path' => '/sign-in',
	'method' => 'GET',
	'handler' => function () {
		return response()->render('components/auth/login');
	}
]);

$app->route([
	'path' => '/sign-up',
	'method' => 'GET',
	'handler' => function () {
		return response()->render('components/auth/signup');
	}
]);


$app->route([
	'path' => '/hello/:name',
	'method' => 'GET',
	'handler' => 'HomeController::index',
	'where' => ['name' => '[a-zA-Z]+']
]);


