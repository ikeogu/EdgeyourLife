<?php

use App\Provider;
use Illuminate\Support\Facades\Input;


Route::group(['middleware' => ['web']], function(){
Route::get('/', function () {
    return view('search.search');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/aboutus', 'AboutusController@index')->name('aboutus');
Route::get('/service_list', 'DashboardController@listServices')->name('listservices');

Route::resource('users','UsersController');
Route::get('/profile','UsersController@userservice')->name('profile');
Route::get('user','UsersController@userservice');
Route::resource('providers','ProvidersController');
Route::resource('roles','RolesController');
Route::resource('feedbacks','feedBackController');
Route::get('/feedbacks','feedBackController@index')->name('feedback');
Route::get('/myservicefeedbacks','feedBackController@myfeedback')->name('myfeedback');



Route::get('/','SearchController@index')->name('see');
Route::get('/search','SearchController@search');
Route::post('api/track-click','ApiController@addClick');



Route::post('/dashboard',function(){
    $q = Input::get ( 'q' );
   if ($q!=""){
       $providers = Provider::where('address','like','%'. $q .'%' )->orWhere('city','like','%'. $q .'%' )->orWhere('state','like','%'. $q .'%' )->orWhere('id','like','%'. $q .'%')->orWhere('name','like','%'. $q .'%')->get();
       return view('userdashboard')->withDetails($providers)->withQuery($q);
   }else{
   return view('userdashboard')->withMessage("Services in current  Location not found.");
   }
});

});


