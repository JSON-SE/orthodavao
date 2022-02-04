<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\ImagePatient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'patient_id',
        'subjective',
        'objective',
        'assessment',
        'plan',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function imagePatient()
    {
        return $this->hasMany(ImagePatient::class);
    }
}
