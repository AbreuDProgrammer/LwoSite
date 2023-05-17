<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function index()
  {
    $this->data->title("Welcome to Lwo's website!");
    return $this->view('welcome');
  }

  public function about()
  {
    $this->data->title("About me");
    return $this->view('about');
  }
}
