<?php
namespace SimpleSystem\Trait;

trait Create{
  private $_columns;
  private $_options;

  public function Columns($columns){
    $this->_columns = $columns;
    return $this;
  }

  public function Options($options){
    $this->_options = $options;
    return $this;
  }

  public function Create(){
    return $this->database->create(
      static::TABLE_NAME,
      $this->_columns,
      $this->_options,
    );
  }
}
