<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index($lang)
    {
        if (! in_array($lang, ['en', 'pt']))
            abort(400);
        app()->setLocale($lang);
        session(['locale' => $lang]);
        return redirect()->back();
    }
}
