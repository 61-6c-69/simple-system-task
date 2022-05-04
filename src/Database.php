<?php
namespace SimpleSystem;
use SimpleSystem\Interface\IFDatabase;
use SimpleSystem\Config;
use Medoo\Medoo;

class Database implements IFDatabase{
  private static $_instance;
  private $database;

  public function __construct(){
    $this->database = new Medoo(Config::$Mysql);
  }

  public function isConnect(): bool{
    return empty($this->database->error);
  }

  public static function getInstance(){
    if(empty(self::$_instance)){
      self::$_instance = new Database();
    }
    return self::$_instance;
  }

  public function getDatabase(){
    return $this->database;
  }
}
