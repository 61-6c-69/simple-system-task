<?php
namespace SimpleSystem;

use SimpleSystem\Route;
use SimpleSystem\Router;
use SimpleSystem\Request;
use SimpleSystem\Database;

class SimpleSystem{

  public function setRouters(array $routers){
    foreach($routers as $r){
      Router::Add($r);
    }
    return $this;
  }

  public function Run(Request $req = null){
    $rendrer_content = Router::Call( (!empty($req) ? $req : new Request()) );
    header("Content-Type: {$rendrer_content[1]}; charset=utf-8");
    echo $rendrer_content[0];
  }
}
