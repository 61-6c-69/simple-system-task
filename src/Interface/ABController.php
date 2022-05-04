<?php
namespace SimpleSystem\Interface;

use SimpleSystem\Request;
use SimpleSystem\Config;
use SimpleSystem\Helper;

class ABController{
  protected Request $request;

  public function setRequest(Request $request){
    $this->request = $request;
    return $this;
  }

  protected function Rendrer($data, array $arg = []){
    $result = null;
    $content_type = '';

    if(is_array($data)){
      $result = json_encode($data);
      $content_type = 'application/json';
    }
    elseif(is_file(Config::$ViewPath . $data . ".php"))
    {
      $filename = Config::$ViewPath . $data . ".php";
      $result = Helper::View($filename, $arg);
      $content_type = 'text/html';
    }else{
      $result = $data;
      $content_type = 'text/plain';
    }

    return [$result, $content_type];
  }
}
