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
        'philippine_regions',
        'philippine_provinces',
        'philippine_cities',
        'philippine_barangays',
        'firstname',
        'middlename',       // optional
        'lastname',
        'suffix',           // optional
        'birthdate',
        'age',
        'gender',
        'civil_status',
        'occupation',       // optional
        'contact',          // optional
        'email'             // optional
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
