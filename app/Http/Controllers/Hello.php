<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Hello extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($name = 'test') {
        return "myflash: " . session('myflash', 'thedefault');
		//return "Name: " . $name . " | Session: " . session('test', 'default');
	}

	public function random($length = 2) {
        $random = Str::random($length);
        return view('hello/random', ['random' => $random]);
    }

    public function flash(Request $request, $message) {
        $request->session()->flash('myflash', $message);
        //session()->put('myflash', $message);
        return redirect('/hello/random');
    }
}
