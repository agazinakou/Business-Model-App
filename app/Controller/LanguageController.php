<?php

namespace App\Controller;

use App\Controller\Controller;
use Bow\Http\Request;
use Bow\Translate\Translator;


class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        if (Translator::isLocale('fr')) {
            Translator::setLocale('en');
            session(['locale' => 'en']);
        } else {
            Translator::setLocale('fr');
            session(['locale' => 'fr']);
        }
        return back();
    }
}
