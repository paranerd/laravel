<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function index($name = 'test') {
		return "Name: " . $name . " | Session: " . session('test', 'default');
	}
}
