<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
	use AuthenticableTrait;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'designation', 'id_no', 'phone', 'imageurl', 'sector'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
