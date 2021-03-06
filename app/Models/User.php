<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public  function  setPasswordAttribute($password)  //goes database
//    {
//        $this->attributes['password'] = Hash::make($password);
//    }

    public  function  roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Check if the user has role
     * @param string $role
     * @return bool
     */
    public  function  hasAnyRole(string  $role)  //admin author
    {
        return null !== $this->roles()->where('name',$role)->first();
    }

    /**
     * Check the user has given role
     * @param array $role
     * @return bool
     */
    public  function  hasAnyRoles(array $role)  //admin author  taking arrays
    {
        return null !== $this->roles()->whereIn('name',$role)->first();
    }


}
