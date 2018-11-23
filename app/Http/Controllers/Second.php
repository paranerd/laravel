<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Second extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
		session(['test' => 'testValue']);
        return "Second";
    }
}
