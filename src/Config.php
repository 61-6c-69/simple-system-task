<?php
namespace SimpleSystem;

class Config{
  public static $Mysql = [
    'type' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'task',
    'prefix' => 'ss_',
    'charset' => 'utf8mb4',
	  'collation' => 'utf8mb4_general_ci',
  ];

  public static $ViewPath = __dir__."/View/";

  public static function BaseUrl(){
    return str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
  }
}
