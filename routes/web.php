<?php

use App\Provider;

use Illuminate\Support\Facades\Input;
use Kielabokkie\LaravelIpdata\Facades\Ipdata;


Route::get('/', function () {
    $res = Ipdata::lookup();

    $curr = $res->city;
    $curr2 =$res->region;
           
    $nearby = Provider::where('state',$curr2)->orwhere('city',$curr)->get();
    
    if($nearby){
    
        return view('index',['nearby'=>$nearby]);
    }else{
        
        
        Session::flash('info', 'There is no Registered service around your current Location ' . $res->city);
        return view('index');
       
    }
});

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
    
//Route::get('search/autocomplete', 'SearchController@autocomplete')->name('autocomplete');
Route::resource('password','Auth\ForgotPasswordController');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::post('/dashboard',function(){
    $q = Input::get ( 'q' );
if ($q!=""){
    $providers = Provider::where('address','ilike','%'. $q .'%' )->orWhere('city','ilike','%'. $q .'%' )->orWhere('state','ilike','%'. $q .'%' )->orWhere('id','ilike','%'. $q .'%')->orWhere('name','ilike','%'. $q .'%')->get();
    return view('userdashboard')->withDetails($providers)->withQuery($q);
}else{
return view('userdashboard')->withMessage("Services in current  Location not found.");
}
});



Route::any('/search', function () {
    $query = Input::get ('q');
    $user = Provider::whereHas('user', function($term) use($query) {
        $term->where('name', 'ilike', '%'.$query.'%');
    })->orwhere('p_name', 'ilike', '%'.$query.'%')->orwhere('address','ilike','%'.$query.'%' )->orwhere('service','ilike','%'.$query.'%' )->orWhere('city','ilike','%'.$query.'%' )->orWhere('phone','ilike','%'.$query.'%' )->orWhere('state','ilike','%'.$query.'%')->orWhere('minimum_price','ilike','%'.$query.'%' )->orWhere('description','ilike','%'.$query.'%' )->orWhere('certification','ilike','%'.$query.'%' )->get();
    
    if (count ($user) > 0){
        return view('search.search')->withDetails($user)->withQuery($query);
    }else{
       
        Session::flash('success', ' No Registered ' . $query .' on this platform');
        return view('search.search')->withDetails($user)->withQuery($query);
    
    }
} )->name('search');

Route::get('/autocomplete','AutocompleteController@index');
Route::post('/autocomplete/fetch','Autocomplete@fetch')->name('autocomplete.fetch');


