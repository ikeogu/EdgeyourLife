<?php

use App\Provider;
use Illuminate\Support\Facades\Input;


Route::group(['middleware' => ['web']], function(){
Route::get('/', function () {
    return view('index');
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


Route::any('/searching_services...',function(){
    $q = Input::get ( 'q' );
    $providers = Provider::where('service', 'LIKE', '%' . $q . "%")->orWhere('name','LIKE','%'. $q .'%' )->orWhere('id','LIKE','%'. $q.'%')->orWhere('address','LIKE','%'. $q .'%' )->orWhere('city','LIKE','%'. $q.'%' )->orWhere('state','LIKE','%'. $q .'%' )->get();

        
    if(count($providers) > 0)
        return view('index')->withDetails($providers)->withQuery ($q);
    else return view ('index')->withMessage('Not found. Try to search again !');
});

