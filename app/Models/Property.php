<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $primaryKey = 'property_id';


    protected $fillable = [
        'user_id',
        'property_name',
        'address',
        'latitude',
        'longitude',
        'price',
        'description',
        'bedroom',
        'bathroom',
        'area',
        'property_type',
        'status',
        'image_path',
        'facilites',
    ];

    public function PropertyToUser()
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'user_id');
    }
}
