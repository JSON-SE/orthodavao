<?php

namespace App\Http\Livewire\Request;

use Livewire\Component;
use App\Models\XrayRequest;
use App\Models\Consultation;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class Xray extends Component
{
    public $consultation;
    public $xray;
    public $html;

    public function mount(Builder $builder, $id)
    {
        $consultationQuery = Consultation::with('patient')->where('id', $id)->first();
        $this->consultation = $consultationQuery;
    }

    public function render()
    {
        return view('livewire.request.xray')->extends('layouts.app');
    }
}
