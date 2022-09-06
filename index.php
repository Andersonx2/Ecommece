<?php 

require_once("vendor/autoload.php");


use \Slim\Slim; 
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new \Slim\Slim();
$app->config('debug', true);


$app->get('/', function() {

	$page = new Page();
	$page->setTpl("index");
<<<<<<< HEAD

 
});
 
$app->get('/admin/', function() {

	
	$page = new PageAdmin();
	$page->setTpl("index");


});

=======
});

$app->get('/admin', function() {

	$page = new PageAdmin();
	$page->setTpl("index");
});


$app->run();
>>>>>>> ade752dd79e1948b9ba3fd40b3eded4aad9ac557

$app->run();
