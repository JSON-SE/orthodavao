@extends('layouts.base_app')
@section('content')
<ol class="breadcrumb has-arrow">
     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
     <li class="breadcrumb-item">
          <a href="{{ url()->previous() }}"> {{ $consultation->patient->firstname }}'s Record as of
               {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}</a>
     </li>
     <li class="breadcrumb-item active" aria-current="page">
          CT Scan Request
     </li>
</ol>
@if (session()->has('message'))
<div class="alert alert-success">
     {{ session()->get('message') }}
     {{ session()->forget('message') }}
</div>
@endif

<div class="col-lg-8 col-md-12 col-sm-12 col-12 mx-auto">
     <div class="grid">
          <div class="grid-header">
               CT Scan Request
          </div>
          <div class="grid-body">
               <div class="row">
                    <div class="table-responsive">
                         <form action="/request/ct/patient/{{ $consultation->id }}" method="POST" id="form-ct">
                              @csrf
                              <table class="table table-bordered" id="ctRequestTable" width="100%">
                                   <thead>
                                        <th></th>
                                        <th>Name</th>
                                   </thead>
                                   <tbody>
                                   </tbody>
                                   <tfoot>
                                        <th></th>
                                        <th>Name</th>
                                   </tfoot>
                              </table>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                                   <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                        <div class="form-group text-center">
                                             <label for="Creatinine">Creatinine Result:</label>
                                             <input type="creatinine" wire:model="form.creatinine" name="creatinine"
                                                  class="form-control {{ $errors->has('form.creatinine') ? ' is-invalid' : '' }}"
                                                  placeholder="Enter Result" />
                                             @error('form.creatinine')
                                             <div class="invalid-feedback"> {{ $message }} </div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>
                              <!-- create a submit button positioned at the center -->
                              <div class="col-lg-12">
                                   <div class="text-center mt-5 mb-5">
                                        <small>Double check before clicking submit</small><br>
                                        <button type="submit" class="btn btn-primary">Request CT Scan</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection