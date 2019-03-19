<?php

use App\Provider;
use Illuminate\Support\Facades\Input;

Route::get('/aboutus', 'AboutusController@index')->name('aboutus');
Auth::routes();
Route::get('user','UsersController@userservice');
Route::resource('providers','ProvidersController');
Route::resource('roles','RolesController');
Route::resource('feedbacks','feedBackController');

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/profile','UsersController@userservice')->name('profile');
    
    Route::resource('users','UsersController');
   
   
    Route::get('/feedbacks','feedBackController@index')->name('feedback');
    Route::get('/myservicefeedbacks','feedBackController@myfeedback')->name('myfeedback');
    
    Route::get('/service_list', 'DashboardController@listServices')->name('listservices');
    Route::get('/', function () {
    return view('index');
    
    

    
    

   

});
Route::resource('password','Auth\ForgotPasswordController');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::post('/dashboard',function(){
    $q = Input::get ( 'q' );
if ($q!=""){
    $providers = Provider::where('address','like','%'. $q .'%' )->orWhere('city','like','%'. $q .'%' )->orWhere('state','like','%'. $q .'%' )->orWhere('id','like','%'. $q .'%')->orWhere('name','like','%'. $q .'%')->get();
    return view('userdashboard')->withDetails($providers)->withQuery($q);
}else{
return view('userdashboard')->withMessage("Services in current  Location not found.");
}
});



Route::any('/searchv=', function () {
    $query = Input::get ('q');
    $user = Provider::where('service', 'LIKE', '%' . $query . "%")->orWhere('name','like','%'. $query .'%' )->orWhere('id','like','%'. $query.'%')->where('address','like','%'. $query .'%' )->orWhere('city','like','%'. $query.'%' )->orWhere('phone','like','%'. $query.'%' )->orWhere('state','like','%'. $query .'%' )->get();
    
    if (count ( $user ) > 0){
        return view ( 'search.search' )->withDetails ( $user )->withQuery ( $query );
    }else{
        Session::flash('warning', ' $user not found. Check spelling !');
        return view ( 'search.search' )->withDetails ( $user )->withMessage ( 'No Details found. Try to search again !' );}
} )->name('search');

Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');
