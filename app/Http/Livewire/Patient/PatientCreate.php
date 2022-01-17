<?php

namespace App\Http\Livewire\Patient;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\Patient;
use Livewire\Component;
use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;

class PatientCreate extends Component
{
    public $region;
    public $region_code;
    public $province;
    public $province_code;
    public $city_municipality;
    public $city_municipality_code;
    public $barangay;
    public $barangay_code;
    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $birthdate;
    public $age;
    public $sex;
    public $civil_status;
    public $occupation;
    public $contact;
    public $email;
    public $notification = false;

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'birthdate' => 'required',
        'age' => 'required',
        'sex' => 'required',
        'civil_status' => 'required',
        'contact' => 'min:18',
    ];

    public function mount()
    {
        $this->role = Role::all();
        $this->region = PhilippineRegion::all();
        $searchProvince = PhilippineProvince::where('region_code', '=', $this->region_code)->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedRegionCode($value)
    {
        $province_query = PhilippineProvince::where('region_code', '=', $value)->get();
        $this->province = $province_query;
    }

    public function updatedProvinceCode($value)
    {
        $city_query = PhilippineCity::where('province_code', '=', $value)->get();
        $this->city_municipality = $city_query;
    }

    public function updatedCityMunicipalityCode($value)
    {
        $barangay_query = PhilippineBarangay::where('city_municipality_code', '=', $value)->get();
        $this->barangay = $barangay_query;
    }

    public function updatedBirthdate($value)
    {
        $this->age = Carbon::parse($value)->diff(Carbon::now())->y;
    }

    public function submitForm()
    {
        $this->validate();

        Patient::create([
            'region_code' => $this->region_code,
            'province_code' => $this->province_code,
            'city_municipality_code' => $this->city_municipality_code,
            'barangay_code' => $this->barangay_code,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'suffix' => $this->suffix,
            'birthdate' => $this->birthdate,
            'age' =>  $this->age,
            'gender' =>  $this->sex,
            'civil_status' => $this->civil_status,
            'occupation' => $this->occupation,
            'contact' => $this->contact,
            'email' => $this->email,
        ]);

        // Disables the button for 1 second
        sleep(1);
        // Clear out the form fields after submission
        $this->resetForm();
        // Enables notification after submission
        $this->notification = true;
    }

    public function resetForm()
    {
        $this->firstname = '';
        $this->middlename = '';
        $this->lastname = '';
        $this->suffix = '';
        $this->birthdate = '';
        $this->age = '';
        $this->sex = '';
        $this->civil_status = '';
        $this->occupation = '';
        $this->contact = '';
        $this->email = '';
    }

    public function closeMessage()
    {
        $this->notification = false;
    }
    public function render()
    {
        return view('livewire.patient.patient-create')->extends('layouts.app');
    }
}
