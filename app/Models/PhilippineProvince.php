<?php

namespace App\Models;

use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use App\Models\PhilippineBarangay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhilippineProvince extends Model
{
    use HasFactory;

    protected $fillable = [
        'psgc_code',
        'province_description',
        'region_code',
        'province_code',
    ];

    public function phil_region()
    {
        return $this->belongsTo(PhilippineRegion::class, 'philippine_regions_id');
    }

    public function phil_city()
    {
        return $this->hasMany(PhilippineCity::class);
    }

    public function phil_barangay()
    {
        return $this->hasMany(PhilippineBarangay::class);
    }
}
