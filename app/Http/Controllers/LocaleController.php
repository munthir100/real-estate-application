<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function changeLocale(Request $request)
    {
        $request->validate([
            'locale' => 'string|in:en,ar'
        ]);
        Session::put('locale', $request->locale);

        return back();
    }
}
