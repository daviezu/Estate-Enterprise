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
        'user_id',
        'property_name',
        'price',
        'address',
        'location_link',
        'picture_path',
        'description',
        'building_size',
        'land_size',
        'certificate',
        'bedroom',
        'bathroom',
        'carport'
    ];

    public function PropertyToAgent()
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'user_id');
    }
}
