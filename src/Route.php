<?php
namespace SimpleSystem;

use SimpleSystem\Interface\ABRequest;
use \Exception;
use SimpleSystem\Interface\ABController;
use SimpleSystem\Config;

class Route extends ABRequest{
    private $controller;
    private $callback;

    public function setController($c){
      $this->controller = $c;
    }

    public function getController(){
      return $this->controller;
    }

    public function setCallback($c){
      $this->callback = $c;
    }

    public function getCallback(){
      return $this->callback;
    }

    public function __construct($path, ABController $controller, $callback, $method){
      $this->setPath(Config::BaseUrl() . $path);
      $this->setController($controller);
      $this->setCallback($callback);
      $this->setMethod($method);
    }
}
