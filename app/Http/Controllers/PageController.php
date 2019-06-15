<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('index', [
            'foo' => request('title'),
        ]);
    }

    public function assignements() {
        return view('assignements');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function profile() {
        return view('profile');
    }

    public function motivation() {
        return view('motivation');
    }

    public function beroepsbeeld() {
        return view('beroepsbeeld');
    }
}
