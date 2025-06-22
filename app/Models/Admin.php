<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // WAJIB extends ini
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
