<?php

namespace App\Http\Livewire\Consultation;

use Livewire\Component;
use App\Models\Consultation;
use App\Models\ImagePatient;

class ConsultationUpdate extends Component
{
    public $consultation;
    public $image;
    public function mount($id)
    {
        $query = Consultation::where('patient_id', $id)->first();
        $this->consultation = $query;
        $queryImage = ImagePatient::with('patient', 'consultation')
        ->where('consultation_id', $this->consultation->id)
        ->where('patient_id', $this->consultation->patient_id)->get();
        $this->image = $queryImage;
    }
    public function render()
    {
        return view('livewire.consultation.consultation-update')->extends('layouts.app');
    }
}
