<?php
//ADIMINISTRAÇÃO	
$app->get('/admin/login', 'App\Action\Admin\LoginAction:index');
$app->post('/admin/login', 'App\Action\Admin\LoginAction:logar');
$app->get('/admin/logout', 'App\Action\Admin\LoginAction:logout');                 

$app->group('/admin', function() {
	$this->get('', 'App\Action\Admin\HomeAction:index');

	//POSTS
	$this->get('/posts', 'App\Action\Admin\PostAction:index');
})->add(App\Middleware\Admin\AuthMiddleware::class);


//Site
$app->get('/', 'App\Action\HomeAction:index');
$app->get('/sobre', 'App\Action\HomeAction:sobre');
$app->get('/contato', 'App\Action\HomeAction:contato');