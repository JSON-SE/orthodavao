<?php

namespace App\Http\Livewire\Consultation;

use Carbon\Carbon;
use App\Models\Patient;
use Livewire\Component;
use App\Models\Consultation;
use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;

class ConsultationIndex extends Component
{
    public function render()
    {
        return view('livewire.consultation.consultation-index')->extends('layouts.app');
    }
}
