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

    public function UserToProperty()
    {
        return $this->hasMany(Property::class, 'user_id', 'user_id');
    }
}
