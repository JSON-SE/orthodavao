<?php

namespace App\Models;

use App\Models\PhilippineCity;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhilippineRegion extends Model
{
    use HasFactory;

    protected $fillable = [
        'psgc_code',
        'region_description',
        'region_code',
    ];

    public function phil_province()
    {
        return $this->hasMany(PhilippineProvince::class);
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
