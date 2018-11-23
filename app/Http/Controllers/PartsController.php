<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parts = [
        ['name' => 'part1', 'id' => 1],
        ['name' => 'part2', 'id' => 2],
        ['name' => 'part3', 'id' => 3]
      ];
      return view('parts/index', ['parts' => $parts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $files = glob(public_path('js/*'));
      \Zipper::make(public_path('test' . $id . '.zip'))->add($files)->close();
      return response()->download(public_path('test' . $id . '.zip'))->deleteFileAfterSend(true);;
    }
}
