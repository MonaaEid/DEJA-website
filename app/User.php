<?php

namespace App;

// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    //relationship with order
    public function orders(){

        return $this->hasMany(Order::class);
    }
      public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
//    public function roles() {
//        return $this->belongsToMany(Role::class, 'users_roles', 'user_id','role_id');
//    }
//
//    public function isAdmin() {
//        return $this->roles()->filter(function (Role $role) {
//            return $role->name == 'admin';
//        })->count();
//    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    //  protected $fillable = [
    //     'first_name', 'last_name', 'full_name', 'email', 'password'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//added by mona -> to make a user an admin or auth
    // Auth::loginUsingId(1);

// Login and "remember" the given user...
   // Auth::loginUsingId(1, true);
}
