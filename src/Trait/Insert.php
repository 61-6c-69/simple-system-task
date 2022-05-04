<?php

namespace SimpleSystem\Trait;

trait Insert{
  public function Insert($ins){
    return $this->database->insert(
      static::TABLE_NAME,
      $ins
    );
  }
}
