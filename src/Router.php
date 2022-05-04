<?php

namespace SimpleSystem;
use SimpleSystem\Route;
use \Exception;

class Router{
  /*
  * instance
  */
  private static $_routers = [];

  private static function exists($path): bool{
    return array_key_exists($path, self::$_routers);
  }

  public static function Add(Route $route){
    if(self::exists($route->getPath())){
      throw new Exception("route path exists [{$route->path}]");
    }
    self::$_routers[$route->getPath()] = $route;
  }

  public static function Get($path){
    if(!self::exists($path)){
      return false;
    }
    return self::$_routers[$path];
  }

  public static function Call(\SimpleSystem\Request $request){
    $route = self::Get($request->getPath());
    if(false == $route){
      throw new Exception("not found [{$request->getPath()}]");
    }

    if($route->getMethod() != $request->getMethod()){
      throw new Exception("not found [{$request->getMethod()}]");
    }

    return $route->getController()->setRequest($request)->{$route->getCallback()}();
  }
}
