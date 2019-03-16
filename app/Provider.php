<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\ Provider as Authenticatable;

class Provider extends Model
{
    use Notifiable;
    


   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
         
        'address', 
        'service', 
        'phone', 
        'state', 
        'city', 
        'logo', 
        'certification',
         'description', 
         'minimum_price', 
         'special_tool',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function user(){
        return $this->belongsTo('App\User');      
    }

    public function providerfeedback()
    {
      return $this->hasMany('App\Feedback');
    }
}
