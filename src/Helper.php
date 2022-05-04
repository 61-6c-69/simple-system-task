<?php
namespace SimpleSystem;

class Helper{
  public static function View($filename, $arg){
    ob_start();
    require($filename);
    $res = ob_get_contents();
    ob_end_clean();
    return $res;
  }
}
