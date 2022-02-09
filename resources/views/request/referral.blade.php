@extends('layouts.base_app')
@section('content')
<ol class="breadcrumb has-arrow">
     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
     <li class="breadcrumb-item">
          <a href="{{ url()->previous() }}"> {{ $consultation->patient->firstname }}'s Record as of
               {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}</a>
     </li>
     <li class="breadcrumb-item active" aria-current="page">
          Referral Request
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
               Referral Request
          </div>
          <div class="grid-body">
               <div class="row">
                    <div class="table-responsive">
                         <form action="/request/referral/patient/{{ $consultation->id }}" method="POST"
                              id="form-referral">
                              @csrf
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                             <label for="name">Doctor's Name:</label>
                                             <input type="name" name="name"
                                                  class="form-control {{ $errors->has('form.name') ? ' is-invalid' : '' }}"
                                                  placeholder="" />
                                        </div>
                                   </div>
                                   <div class="col-lg-12">
                                        <div class="form-group">
                                             <label for="note">Note:</label>
                                             <textarea name="note" id="note" cols="30"
                                                  rows="10">{{ old('note') }}</textarea>
                                        </div>
                                   </div>
                              </div>
                              <!-- create a submit button positioned at the center -->
                              <div class="col-lg-12">
                                   <div class="text-center mt-5 mb-5">
                                        <small>Double check before clicking submit</small><br>
                                        <button type="submit" class="btn btn-primary">Request Referral</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection