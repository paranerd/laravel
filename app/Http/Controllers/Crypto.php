<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crypto extends Controller
{
    public function index($name = 'test') {
		return "This. Is. Crypto.";
	}

	public function random() {
		return substr(md5(mt_rand()), 0, 20);
	}
}
