<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultationImagePatient;
use App\Models\Consultation;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_code',
        'province_code',
        'city_municipality_code',
        'barangay_code',
        'comp_subd_street',
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
}
