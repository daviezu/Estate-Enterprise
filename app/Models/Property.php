<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'property_id';

    protected $fillable = [
        'property_name',
        'owner',
        'price',
        'location',
        'address',
        'description',
        'picture_path',
    ];

    public function PropertyToUser()
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'user_id');
    }
}
