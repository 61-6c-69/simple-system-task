<?php
namespace SimpleSystem\Trait;

trait Select{
  private $_select;
  private $_where = [];
  private $_limit = [];

  public function Select($cname){
    $this->_select = $cname;
    return $this;
  }

  public function Where($cname, $cond, $val){
    $this->_where["{$cname}[{$cond}]"] = $val;
    return $this;
  }

  public function Limit($a, $b){
    $this->_limit = [$a, $b];
  }

  public function Get(){
    return $this->database->select(
      static::TABLE_NAME,
      $this->_select,
      $this->_where,
      $this->_limit
    );
  }
}
