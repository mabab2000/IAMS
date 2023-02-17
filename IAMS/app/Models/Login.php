<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illumunate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;

class Login extends Authenticable
{
    use HasFactory;
}
