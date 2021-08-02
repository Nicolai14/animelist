<?php

namespace App\Http\Controllers;

use App\Http\Middleware\getAnimeData;
use Illuminate\Http\Request;
use function PHPUnit\Framework\greaterThanOrEqual;

class ListController extends Controller
{
   public function index()
   {
    $data= getAnimeData::getDB();
    return view('layouts.cards', compact('data'));
   }
    public function dashboard()
    {
        $data= getAnimeData::getGenres();
        return view('dashboard', compact('data'));
    }
}
