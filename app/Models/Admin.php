<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // optional

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'admins'; // ensure table name
    protected $fillable = ['name','email','password','contact']; // add fields you use
    protected $hidden = ['password','remember_token'];
}
