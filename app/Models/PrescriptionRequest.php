<?php

namespace App\Models;

use App\Models\PrescriptionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrescriptionRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prescription_type_id',
        'description',
        'sig'
    ];

    public function prescriptionType()
    {
        return $this->belongsTo(PrescriptionType::class, 'prescription_type_id');
    }
}
