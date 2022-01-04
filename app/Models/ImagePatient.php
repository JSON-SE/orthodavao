<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultationImagePatient;

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
}
