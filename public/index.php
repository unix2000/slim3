<?php
// phpinfo();
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/common/global.php';

spl_autoload_register(function ($classname) {
	//可自定义autoload func方法
	// spl_autoload_register('classname','func');
	$dirs = array('library/', 'model/', 'controller/');
    foreach( $dirs as $dir ) {
    	// 不做strtolower($classname)
    	if(file_exists('../app/'. $dir. $classname .'.php')){
    		require('../app/'.$dir.$classname.'.php');
    		return;
    	}
    }
    //require ("../app/model/" . $classname . ".php");
});

$config = include __DIR__ . '/../app/config/config.php';
$app = new \Slim\App(["settings" => $config]);
// $app = new \Slim\App;
// $app->get('/',function(Request $req,Response $res,$args=[]){
// 	return $res->withStatus(400)->write('Bad Request');
// });

require __DIR__ . '/../app/config/services.php';
// $app->get('/hello/{name}',function(Request $req,Response $res,$args=[]){
// 	//$this->logger->addInfo("Something interesting happened");
// 	$name = $req->getAttribute('name');
// 	$res->getBody()->write("中文,$name");
// 	return $res;
// });

// $app->get('/items', function (Request $request, Response $response, $args) {
//     $response->getBody()->write(var_export($this->db));
//     return $response;
// });
require __DIR__ . '/../app/config/routes.php';
require __DIR__ . '/../app/config/middle.php';
$app->run();