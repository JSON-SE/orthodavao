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
use Illuminate\Support\Facades\DB;

class PatientUpdate extends Component
{
    public $patient_id;
    public $region;
    public $region_description;
    public $region_code;
    public $province;
    public $province_description;
    public $province_code;
    public $city_municipality;
    public $city_municipality_description;
    public $city_municipality_code;
    public $barangay;
    public $barangay_code;
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
    public $notification = false;

    public function mount($id)
    {
        $this->patient_id = $id;
        // Patient Queries
        $query = Patient::where('id', $this->patient_id)->first();
        $queryRegion = PhilippineRegion::where('region_code', '=', $query->region_code)->first();
        $this->region_description = $queryRegion->region_description;
        $queryProvince = PhilippineProvince::where('region_code', '=', $query->region_code)->first();
        $this->province_description = $queryProvince->province_description;
        $queryCityMunicipality = PhilippineCity::where('city_municipality_code', '=', $query->city_municipality_code)->first();
        $this->city_municipality_description = $queryCityMunicipality->city_municipality_description;
        $queryBarangay = PhilippineBarangay::where('barangay_code', '=', $query->barangay_code)->first();
        $this->barangay_description = $queryBarangay->barangay_description;
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
        $this->role = Role::all();
        $this->region = PhilippineRegion::all();
        $searchProvince = PhilippineProvince::where('region_code', '=', $this->region_code)->get();
    }

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'civil_status' => 'required',
        'contact' => 'min:18',
    ];

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

    public function updateForm()
    {
        $this->validate();
        $query = DB::table('patients')
        ->where('id', $this->patient_id)
        ->update([
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
            'gender' =>  $this->gender,
            'civil_status' => $this->civil_status,
            'occupation' => $this->occupation,
            'contact' => $this->contact,
            'email' => $this->email,
        ]);

        // Disables the button for 1 second
        sleep(1);
        // Enables notification after submission
        $this->notification = true;
    }

    public function render()
    {
        return view('livewire.patient.patient-update')->extends('layouts.app');
    }
}
