<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    protected $rules = [
        'form.email' => 'required|email',
        'form.password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function authenticateUser()
    {
        /**
         * ERROR: Authentication Error Message is not showing up
         */
        $this->validate();
        Auth::attempt($this->form);
        return redirect(RouteServiceProvider::HOME);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
