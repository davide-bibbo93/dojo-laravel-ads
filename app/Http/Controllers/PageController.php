<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('cookies');
    }

    public function sessions(Request $request)
    {
        $is_visited = true;

        if ($request->session()->has('visited')) {
            $is_visited = false;
        } else {
            session(['visited' => true]);
        }

        return view('sessions', compact('is_visited'));
    }
}
