<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class PatientCreate extends Component
{
    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $age;
    public $sex;
    public $civil_status;
    public $address;
    public $occupation;
    public $contact;
    public $email;
    public $notification = false;

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required',
        'sex' => 'required',
        'civil_status' => 'required',
        'address' => 'min:5',
        'contact' => 'min:18',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();

        Patient::create([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'suffix' => $this->suffix,
            'age' =>  $this->age,
            'sex' =>  $this->sex,
            'civil_status' => $this->civil_status,
            'address' =>  $this->address,
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
        $this->age = '';
        $this->sex = '';
        $this->civil_status = '';
        $this->address = '';
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
