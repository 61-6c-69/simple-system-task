<?php
namespace SimpleSystem\Interface;

use SimpleSystem\Database;
use SimpleSystem\Trait\Query;
use SimpleSystem\Trait\Select;
use SimpleSystem\Trait\Create;
use SimpleSystem\Trait\Insert;
use Exception;

abstract class ABModel{
  use Query, Select, Create, Insert;

  protected $database;
  protected const TABLE_NAME = null;

  public function __construct(){
    if(empty(static::TABLE_NAME)){
      throw new Exception('set table [TABLE_NAME]');
    }
    $this->database = Database::getInstance()->getDatabase();
  }

}
