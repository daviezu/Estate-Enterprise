<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    protected $table = 'app_users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'phone_number',
        'remember_token',
        'picture_path',
        "is_agent"
    ];

    public function UserToProperty()
    {
        return $this->hasMany(Property::class, 'user_id', 'user_id');
    }
}
