<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
         $user = auth()->user()->role_id;
        if($user == 1){
            $total_user = User::count(); 
    
            return view('admindashboard')->with('users',$total_user);
        }else if($user == 2){
            return view('serproviderdashboard');
        }else {
            return view('userdashboard');
        }
        
     
    }

}
