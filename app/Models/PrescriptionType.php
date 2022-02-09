<?php

namespace App\Models;

use App\Models\PrescriptionRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrescriptionType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function prescription()
    {
        return $this->hasMany(PrescriptionRequest::class);
    }
}
