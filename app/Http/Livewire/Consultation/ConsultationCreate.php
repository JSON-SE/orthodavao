<?php

namespace App\Http\Livewire\Consultation;

use Carbon\Carbon;
use App\Models\Patient;
use Livewire\Component;
use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;

class ConsultationCreate extends Component
{
    public $patient_id;
    public $region;
    public $province;
    public $city_municipality;
    public $barangay;
    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $birthdate;
    public $age;
    public $gender;
    public $civil_status;
    public $occupation;
    public $contact;
    public $email;
    public $subjective;
    public function mount($id)
    {
        $this->patient_id = $id;
        // Patient Queries
        $query = Patient::where('id', $this->patient_id)->first();
        $queryRegion = PhilippineRegion::where('region_code', '=', $query->region_code)->first();
        $this->region = $queryRegion->region_description;
        $queryProvince = PhilippineProvince::where('region_code', '=', $query->region_code)->first();
        $this->province = $queryProvince->province_description;
        $queryCityMunicipality = PhilippineCity::where('city_municipality_code', '=', $query->city_municipality_code)->first();
        $this->city_municipality = $queryCityMunicipality->city_municipality_description;
        $queryBarangay = PhilippineBarangay::where('barangay_code', '=', $query->barangay_code)->first();
        $this->barangay = $queryBarangay->barangay_description;
        // End Patient Queries
        $this->firstname = $query->firstname;
        $this->middlename = $query->middlename;
        $this->lastname = $query->lastname;
        $this->suffix = $query->suffix;
        $this->birthdate = Carbon::parse($query->birthdate)->toFormattedDateString();
        $this->age = $query->age;
        $this->gender = $query->gender;
        $this->civil_status = $query->civil_status;
        $this->occupation = $query->occupation;
        $this->contact = $query->contact;
        $this->email = $query->email;
    }

    // NOTE: No longer in use
    // public function consultationSubmit()
    // {
    //     dd($this->subjective);
    // }

    public function render()
    {
        return view('livewire.consultation.consultation-create')->extends('layouts.app');
    }
}
