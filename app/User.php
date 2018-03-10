<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];
    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   
    public function scopeSearch($query,$username,$email){
        if(isset($username) && $username!='' ){
          $query->where('username','LIKE','%'.$username.'%');
        } 
        if(isset($email) && $email!='' ){
          $query->where('email',$email);
          
        }
   
     return $query;
     }
}
