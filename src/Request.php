<?php
namespace SimpleSystem;
use \Exception;
use SimpleSystem\Interface\ABRequest;

class Request extends ABRequest{
  private $query = [];
  private $data = [];

  public function setQuery($q){
    $this->query = $q;
  }

  public function setData($d){
    $this->data = $d;
  }

  public function __construct($auto_gen = true){
    if($auto_gen){
      $this->setPath(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      $this->setQuery($_GET);
      $this->setData($_POST);
      $this->setMethod($_SERVER['REQUEST_METHOD']);
    }
  }

  public function Has($h){
    return ( array_key_exists($h, $this->query) || array_key_exists($h, $this->data) );
  }

  public function __get($key){
    if(array_key_exists($key, $this->query)){
      return $this->query[$key];
    }

    if(array_key_exists($key, $this->data)){
      return $this->data[$key];
    }

    throw new Exception("object not found [{$key}]");
  }
}
