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




Route::resource('search','SearchController');





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

Route::any('/search?v=', function () {
    $query = Input::get ( 'q' );
    $user = Provider::where('service', 'LIKE', '%' . $query . "%")->orWhere('name','like','%'. $query .'%' )->orWhere('id','like','%'. $query.'%')->where('address','like','%'. $query .'%' )->orWhere('city','like','%'. $query.'%' )->orWhere('state','like','%'. $query .'%' )->get();
    
    if (count ( $user ) > 0)
        return view ( 'search.search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'search.search' )->withMessage ( 'No Details found. Try to search again !' );
} )->name('search');



Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');