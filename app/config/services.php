<?php
$container = $app->getContainer();

$container['logger'] = function() {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};

//db di
$container['db'] = function ($c) {
    //内置settings ,可自定义覆盖 array_merge
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
         $db['user'], $db['pass']);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // return $pdo;
    $pdo->exec("SET NAMES 'utf8';");
    $orm = new NotORM($pdo); 
    return $orm;  
};

//$container['view'] = new \Slim\Views\PhpRenderer("../templates/");
$container['view'] = function(){
    $view = new \Slim\Views\PhpRenderer('../templates/');
    return $view;
};

$container['test'] = function($c){
    //environment
    //settings
    //return $c['environment'];
    return $c;
};