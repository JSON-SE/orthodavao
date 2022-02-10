@extends('layouts.base_app')
@section('content')
<ol class="breadcrumb has-arrow">
     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
     <li class="breadcrumb-item">
          <a href="{{ url()->previous() }}"> {{ $consultation->patient->firstname }}'s Record as of
               {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}</a>
     </li>
     <li class="breadcrumb-item active" aria-current="page">
          Medical Certificate Request
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
               Medical Certificate Request
          </div>
          <div class="grid-body">
               <div class="row">
                    <div class="table-responsive">
                         <form action="/request/medical-certificate/patient/{{ $consultation->id }}" method="POST"
                              id="form-admission">
                              @csrf
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                             <label for="date">Date:</label>
                                             <input type="date" name="date"
                                                  class="form-control {{ $errors->has('form.input_1') ? ' is-invalid' : '' }}"
                                                  placeholder="" />
                                        </div>
                                   </div>
                                   <div class="col-lg-12">
                                        <div class="form-group">
                                             <label for="assessment">Impression/Diagnostics:</label>
                                             <textarea name="assessment" id="assessment" cols="30"
                                                  rows="10">{{ old('assessment') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                             <label for="procedure">Procedure:</label>
                                             <textarea name="procedure" id="procedure" cols="30"
                                                  rows="10">{{ old('procedure') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                             <label for="recommendation">Recommendation:</label>
                                             <textarea name="recommendation" id="recommendation" cols="30"
                                                  rows="10">{{ old('recommendation') }}</textarea>
                                        </div>
                                   </div>
                                   <!-- create a submit button positioned at the center -->
                                   <div class="col-lg-12">
                                        <div class="text-center mt-5 mb-5">
                                             <small>Double check before clicking submit</small><br>
                                             <button type="submit" class="btn btn-primary">Request Admission</button>
                                        </div>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection