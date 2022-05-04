<?php

if(!is_file('vendor/autoload.php')){
  die('autoload not found!');
}

require_once 'vendor/autoload.php';

use SimpleSystem\SimpleSystem;
use SimpleSystem\Route;
use SimpleSystem\Controller\HomeController;
use SimpleSystem\Controller\InstallController;
use SimpleSystem\Controller\SearchController;

$app = new SimpleSystem();

$app->setRouters([
  new Route('', new HomeController(), 'index', 'GET'),
  new Route('install', new InstallController(), 'index', 'GET'),
  new Route('search', new SearchController(), 'search', 'GET'),
])->Run();
