<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
    $this->data->title("Welcome to Lwo's website!");
    return $this->view('welcome');
  }
}
