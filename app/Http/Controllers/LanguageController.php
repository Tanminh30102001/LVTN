<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
      App::setLocale($locale);
        // store the locale in session so that the middleware can register it
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
