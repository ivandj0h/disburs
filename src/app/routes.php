<?php 

// Pages Routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'index']);
$router->addRoute('list', ['controller' => 'Index', 'action' => 'show']);
$router->addRoute('create', ['controller' => 'Index', 'action' => 'create']);
$router->addRoute('save', ['controller' => 'Index', 'action' => 'save']);

// Routes in main controllers/ folder (Namespace \Controllers)
$router->addRoute('{controller}/{action}');
$router->addRoute('{controller}/{action}/{id:\d+}');
$router->addRoute('{controller}/{id:\d+}/{action}');

$router->setParams(getUri());