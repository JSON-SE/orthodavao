<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultationImagePatient;
use App\Models\Patient;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'subjective',
        'objective',
        'assessment',
        'plan',
    ];

    public function consultationImagePatient()
    {
        return $this->hasMany(ConsultationImagePatient::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
