<?php

namespace App\Models;

use App\Models\Consultation;
use App\Models\ImagePatient;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultationImagePatient;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_code',
        'province_code',
        'city_municipality_code',
        'barangay_code',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'birthdate',
        'age',
        'gender',
        'civil_status',
        'occupation',
        'contact',
        'email'
    ];

    public function consultationImagePatient()
    {
        return $this->hasMany(ConsultationImagePatient::class);
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function imagePatient()
    {
        return $this->hasMany(ImagePatient::class);
    }
}
