<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\ImagePatient;
use App\Models\Consultation;

class ConsultationImagePatient extends Model
{
    use HasFactory;
    protected $fillable = [
        'consultation_id',
        'image_patient_id',
        'patient_id',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function imagePatient()
    {
        return $this->belongsTo(ImagePatient::class, 'image_patient_id');
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'consultation_id');
    }
}
