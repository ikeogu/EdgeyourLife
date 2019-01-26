<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
    \DB::table('visitors')->create([
        'visitors' => session()->getId(),
        'page' => 'index',
    ]);

    return view('admindashboard');
   }
}
