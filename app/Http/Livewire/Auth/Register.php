<?php

namespace App\Http\Livewire\Auth;

use App\Models\PhilippineBarangay;
use App\Models\PhilippineCity;
use App\Models\PhilippineProvince;
use App\Models\PhilippineRegion;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    public $firstname;
    public $middlename;
    public $lastname;
    public $occupation;
    public $contact;
    public $region;
    public $region_code;
    public $province;
    public $province_code;
    public $city_municipality;
    public $city_municipality_code;
    public $barangay;
    public $barangay_code;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;
    public $role_id;

    protected $rules = [
        'role_id' => 'required',
        'firstname' => 'required|min:2',
        'lastname' => 'required',
        'middlename' => 'min:2',
        'occupation' => 'min:3',
        'contact' => 'min:18',
        'region_code' => 'required',
        'province_code' => 'required',
        'city_municipality_code' => 'required',
        'barangay_code' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5',
        'password_confirmation' => 'required|min:5|same:password',
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


    public function submitForm()
    {
        $user = User::create([
            'role_id' => $this->role_id,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'occupation' => $this->occupation,
            'contact' => $this->contact,
            'region_code' => $this->region_code,
            'province_code' => $this->province_code,
            'city_municipality_code' => $this->city_municipality_code,
            'barangay_code' => $this->barangay_code,
            'email' => $this-> email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
