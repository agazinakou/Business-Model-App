<?php

namespace App\Model;

use Bow\Auth\Authentication as Model;

class User extends Model
{

    protected $fillable = [
        'name', 'email', 'password', 'remember_token'
    ];
}
