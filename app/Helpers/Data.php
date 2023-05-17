<?php

namespace App\Helpers;

class Data
{
  private static $instance;
  public static function getInstance(): Data
  {
    if(empty(self::$instance)) {
      self::$instance = new Data();
    }
    
    return self::$instance;
  }
  private function __construct()
  {
    $this->format();
  }

  private array $data;
  private array $fillable;

  public function title($title): void
  {
    $this->fillable['title'] = $title;
  }

  public function format(): void
  {
    $this->data = array();
    $this->fillable = array();
  }

  public function get(): array
  {
    $data = array_merge($this->fillable, $this->data);
    return $data;
  }

  public function set($key, $value)
  {
    $this->data[$key] = $value;
  }
}
