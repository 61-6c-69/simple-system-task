<?php

namespace SimpleSystem\Interface;
abstract class ABRequest{
  private $path;
  private $method;

  public function setPath($p){
    $this->path = $p;
  }

  public function getPath(){
    return $this->path;
  }

  public function setMethod($m){
    if(!in_array($m, ['GET', 'POST'])){
      throw new Exception("method not found[GET, POST] -> {$m}");
    }
    $this->method = $m;
  }

  public function getMethod(){
    return $this->method;
  }
}
