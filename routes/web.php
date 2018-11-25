<?php

use App\Provider;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/aboutus', 'AboutusController@index')->name('aboutus');
Route::get('/service_list', 'DashboardController@listServices')->name('listservices');

Route::resource('users','UsersController');
Route::resource('providers','ProvidersController');
Route::resource('roles','RolesController');
Route::resource('feedbacks','feedBackController');


 
Route::get('/search','SearchController@see')->name('see');

Route::post('/search',function(){
    $q = Input::get ( 'q' );
   if ($q!=""){
       $providers = Provider::where('service','like','%'. $q .'%' )->orWhere('name','like','%'. $q .'%' )->orWhere('id','like','%'. $q .'%')->where('address','like','%'. $q .'%' )->orWhere('city','like','%'. $q .'%' )->orWhere('state','like','%'. $q .'%' )->get();
       return view('search.search')->withDetails($providers)->withQuery($q);
   }else{
   return view('search.search')->withMessage("Service not found.");
   }
});


Route::post('/dashboard',function(){
    $q = Input::get ( 'q' );
   if ($q!=""){
       $providers = Provider::where('address','like','%'. $q .'%' )->orWhere('city','like','%'. $q .'%' )->orWhere('state','like','%'. $q .'%' )->orWhere('id','like','%'. $q .'%')->orWhere('name','like','%'. $q .'%')->get();
       return view('userdashboard')->withDetails($providers)->withQuery($q);
   }else{
   return view('userdashboard')->withMessage("Services in current  Location not found.");
   }
});




