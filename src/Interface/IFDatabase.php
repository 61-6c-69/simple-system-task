<?php
namespace SimpleSystem\Interface;

interface IFDatabase{
  public static function getInstance();
  public function isConnect(): bool;
}
