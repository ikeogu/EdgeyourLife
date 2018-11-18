<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provider;

class DashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    public function listServices()

    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('service_list')->with('providers', $user->providers);
        
    }

    
}
