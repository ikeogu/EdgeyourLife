<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
          'password',
          'phone',
          
          'role_id',
          
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    


     /**public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach($roles as $role)
            {
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else {
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if($this->role()->where('name', $role)->first()){
            return true;
        }
    }
    */
    public function providers()
    {
      return $this->hasMany('App\Provider');
    }
    
    public function providersCount()
    {
        return $this->hasOne('App\Provider')
        ->selectRaw('user_id, count(*) as aggregate')
        ->groupBy('user_id');
    }

    public function getProvidersCountAttribute()
        {
        // if relation is not loaded already, let's do it first
        if ( ! array_key_exists('providersCount', $this->relations)) 
            $this->load('providersCount');
        
        $related = $this->getRelation('providersCount');
        
        // then return the count directly
        return ($related) ? (int) $related->aggregate : 0;
        }
}
