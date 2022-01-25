<?php
/**
 * This file contains all the routes for the project
 */

use Demo\Controllers\DefaultController;
use Demo\Router;

Router::csrfVerifier(new \Demo\Middlewares\CsrfVerifier());

Router::group(['exceptionHandler' => \Demo\Handlers\CustomExceptionHandler::class], function () {
    // API
	Router::group(['prefix' => '/api', 'middleware' => \Demo\Middlewares\ApiVerification::class], function () {
		$apis = [
			"homevr" => "Src\\HomeVR\\HomeVR@api",
			"homewebdevelopment" => "Src\\HomeWebDevelopment\\HomeWebDevelopment@api",
			"homegraphicsandbranding" => "Src\\HomeGraphicsAndBranding\\HomeGraphicsAndBranding@api",
			"homemedia" => "Src\\HomeMedia\\HomeMedia@api",
		];
		foreach($apis as $path=>$controller){
			Router::get($path, $controller);	
		}
	});
	// Web
	$routes = [
		"homevr" => "Src\\HomeVR\\HomeVR@index",
		"homewebdevelopment" => "Src\\HomeWebDevelopment\\HomeWebDevelopment@index",
		"homegraphicsandbranding" => "Src\\HomeGraphicsAndBranding\\HomeGraphicsAndBranding@index",
		"homemedia" => "Src\\HomeMedia\\HomeMedia@index",
	];
	foreach($routes as $path=>$controller){
		Router::get($path, $controller);
	}
	// Fetched routes
	$demo_routes = json_decode(file_get_contents('https://tunacoding.com/api/routes'));
	foreach($demo_routes as $name=>$route){
		Router::get('/demo-routes/'.$route, [DefaultController::class, 'index'])->setName($name);
	}
});