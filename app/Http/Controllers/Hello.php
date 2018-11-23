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
        return "name: " . $name . " | myflash: " . session('myflash', 'thedefault');
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

    public function component() {
      $parts = [
        ['name' => 'part1', 'id' => 1],
        ['name' => 'part2', 'id' => 2],
        ['name' => 'part3', 'id' => 3]
      ];
      return view('/hello/component', ['parts' => $parts]);
    }
}
