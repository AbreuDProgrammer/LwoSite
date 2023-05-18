<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Helpers\Data;
use App\Helpers\Current;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected Data $data;
  protected Current $current;

  public function __construct()
  {
    $this->data = Data::getInstance();
    $this->current = Current::getInstance();
  }

  protected function view($page)
  {
    $this->data->current($this->current->get($page));
    return view($page, $this->data->get());
  }
}
