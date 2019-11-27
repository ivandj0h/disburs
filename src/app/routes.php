<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'index']);
$router->addRoute('list', ['controller' => 'Index', 'action' => 'show']);

// Routes in main controllers/ folder (Namespace \Controllers)
$router->addRoute('{controller}/{action}');
$router->addRoute('{controller}/{action}/{id:\d+}');
$router->addRoute('{controller}/{id:\d+}/{action}');

// Routes in folder controllers/folder1/ (Namespace \Controllers\Folder1)
$router->addRoute('folder1/{controller}/{action}', ['namespace' => 'Folder1']);
$router->addRoute('folder1/{controller}/{id:\d+}/{action}', ['namespace' => 'Folder1']);


$router->setParams(getUri());