<?php
$app->get('/hello/{name}',function($req,$res,$args=[]){
	//$this->logger->addInfo("Something interesting happened");
	$name = $req->getAttribute('name');
	$res->getBody()->write("Hello,$name");
	return $res;
});

$app->get('/items', function ($request, $response, $args) {
	$model = new Items($this->db);
	$datas = $model->getItems();
    //$response->getBody()->write(var_export($datas));
    $response = $this->view->render($response, "items.phtml", ["items" => $datas,'router'=>$this->router]);
    // //$response = $this->view;
    return $response;
    //return var_dump($datas);
});

$app->get('/items/{id}', function ($request, $response, $args) {
    // router pathfor name
    // echo $args['id'];
	$model = new Items($this->db);
	$datas = $model->getItemsById($args['id']);
	$response = $response->withJson($datas);
    // return $datas;
    return $response;
})->setName("items-detail");

$app->get('/items-tests', function () use ($app){
	//dump($app->getContainer()->response);
	dump($this->get('settings'));
});

$app->get('/request', function($req,$res,$args){
	dump($req);
});

$app->get('/response', function($req,$res,$args){
	// dump($res);
	$headers = $res->getHeaders();
	dump($headers);
	// foreach ($headers as $name => $values) {
	//     echo $name . ": " . $values[0];
	// }
});

$app->get('/args', function($req,$res,$args){
	dump($args);
});

$app->get("/admin", function() {
    ob_start();
    phpinfo();
    $info = ob_get_contents();
    ob_end_clean();
    echo $info;
});

$app->get("/tests", function() {
	//test为容器注入名,可$this直接调用
	//$this关键字访问闭包内部的DI容器实例
	//$container['test'] = function($c){ /* code here */ return }
	//在路由组闭包的内部,使用$this替代$app
    // dump($this->settings);
    // dump($this->test);
    //request,response,settings,environment
    //foundHandler,router,logger,phpErrorHandler //etc
    //dump($this->environment['HTTP_USER_AGENT']);
    dump($this->router);
});

$app->get('/home', '\HomeController:index');