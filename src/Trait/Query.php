<?php

namespace SimpleSystem\Trait;

trait Query{
  public function Query($query, $arg = []){
    return $this->database->query($query, $arg);
  }
}
