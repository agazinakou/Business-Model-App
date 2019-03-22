<?php

namespace App\Middleware;

use Session;
use Bow\Http\Request;
use Bow\Translate\Translator;

class LanguageMiddleware
{
    /**
     * Fonction de lancement du middleware.
     *
     * @param Request $request
     * @param callable $next
     * @param array $args
     * @return mixed
     */
    public function process(Request $request, callable $next, array $args = [])
    {
        if($request->session()->exists('locale')){
            Translator::setLocale($request->session()->get('locale'));
        } else {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            $request->session()->set('locale', $lang);
            Translator::setLocale($langs[0]);
        }
        return $next($request);
    }
}
