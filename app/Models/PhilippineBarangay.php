<?php

namespace App\Models;

use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use App\Models\PhilippineProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhilippineBarangay extends Model
{
    use HasFactory;

    protected $fillable = [
        'barangay_code',
        'barangay_description',
        'region_code',
        'province_code',
        'city_municipality_code',
    ];

    public function phil_region()
    {
        return $this->belongsTo(PhilippineRegion::class, 'philippine_regions_id');
    }

    public function phil_province()
    {
        return $this->belongsTo(PhilippineProvince::class, 'philippine_provinces_id');
    }

    public function phil_city()
    {
        return $this->belongsTo(PhilippineCity::class, 'philippine_cities_id');
    }
}
