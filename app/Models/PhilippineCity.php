<?php

namespace App\Models;

use App\Models\PhilippineRegion;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhilippineCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'psgc_code',
        'city_municipality_description',
        'region_description',
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

    public function phil_barangay()
    {
        return $this->hasMany(PhilippineBarangay::class);
    }
}
