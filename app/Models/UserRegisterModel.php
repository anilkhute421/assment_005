<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegisterModel extends Model
{
    use HasFactory;

    protected $table = 'user_regsiter';


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'password',
    ];
}
