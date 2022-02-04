<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultationImagePatient;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagePatient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function consultationImagePatient()
    {
        return $this->hasMany(ConsultationImagePatient::class);
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'consultation_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
