<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
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
        'name_of_service', 
        'comment', 
        'satisfactory', 
        'feed_back', 
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    public function provider(){
        return $this->belongsTo('App\Provider');      
    }
}
