<?php
namespace SimpleSystem\Controller;

use SimpleSystem\Interface\ABController;

class HomeController extends ABController{
  public function index(){
    return $this->rendrer("Home", ['title' => 'Simple System']);
  }
}
