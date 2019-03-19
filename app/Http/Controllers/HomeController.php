<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class HomeController extends Controller
{
    //
  

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
        }else if($user == 3) {
            Session::flash('sucess', 'Registration was succesful');
            return view('index');
        }
        
     
    }

}
