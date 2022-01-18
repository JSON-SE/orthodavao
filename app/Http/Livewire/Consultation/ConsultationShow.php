<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Livewire\Component;

class ConsultationShow extends Component
{
    public function mount($id)
    {
        $query = Consultation::where('patient_id', $id)->get();
        dd($query);
    }
    public function render()
    {
        return view('livewire.consultation.consultation-show');
    }
}
