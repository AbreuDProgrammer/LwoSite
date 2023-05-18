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

  public function title($title)
  {
    $this->fillable['title'] = $title;
  }

  public function current($current)
  {
    $this->fillable['current'] = $current;
  }

  public function format()
  {
    $this->data = array();
    $this->fillable = array();
  }

  public function get()
  {
    $data = array_merge($this->fillable, $this->data);
    return $data;
  }

  public function find($attribute)
  {
    return $this->data[$attribute] ?? $this->fillable[$attribute] ?? null;
  }

  public function set($key, $value)
  {
    $this->data[$key] = $value;
  }
}
