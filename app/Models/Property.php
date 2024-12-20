<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'property_id';

    protected $fillable = [
        'user_id',
        'property_name',
        'slug',
        'property_owner',
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($property) {
            $property->slug = self::createUniqueSlug($property->property_name);
        });

        static::updating(function ($property) {
            $property->slug = self::createUniqueSlug($property->property_name, $property->property_id);
        });
    }

    public static function createUniqueSlug($propertyName, $propertyId = 0)
    {
        // Membuat slug dasar dari nama properti
        $slug = Str::slug($propertyName);
        $originalSlug = $slug;
        $count = 1;

        // Periksa apakah slug sudah ada di database, kecuali untuk properti yang sedang diperbarui
        while (self::where('slug', $slug)->where('property_id', '!=', $propertyId)->exists()) {
            // Jika sudah ada, tambahkan angka ke slug
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
