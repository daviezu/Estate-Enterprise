<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    protected $table = 'app_user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number'
    ];
}
