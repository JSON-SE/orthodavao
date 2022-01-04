<?php

namespace App\Models;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
