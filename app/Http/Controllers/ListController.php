<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
   public function index()
   {
    $testring="fdf";

    return view('layouts.cards', compact('testring'));

   }
}
