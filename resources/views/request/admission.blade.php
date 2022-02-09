@extends('layouts.base_app')
@section('content')
<ol class="breadcrumb has-arrow">
     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
     <li class="breadcrumb-item">
          <a href="{{ url()->previous() }}"> {{ $consultation->patient->firstname }}'s Record as of
               {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}</a>
     </li>
     <li class="breadcrumb-item active" aria-current="page">
          Admission Request
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
               Admission Request
          </div>
          <div class="grid-body">
               <div class="row">
                    <div class="table-responsive">
                         <form action="/request/admission/patient/{{ $consultation->id }}" method="POST"
                              id="form-admission">
                              @csrf
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p>Please admit patient under my service PC.</p>
                                        <p>Secure consent for admission and management.</p>
                                        <div class="form-group">
                                             <input type="input_1" name="input_1"
                                                  class="form-control {{ $errors->has('form.input_1') ? ' is-invalid' : '' }}"
                                                  placeholder="" />
                                             <p>VS</p>
                                             <input type="input_2" name="input_2"
                                                  class="form-control {{ $errors->has('form.input_2') ? ' is-invalid' : '' }}"
                                                  placeholder="" />
                                        </div>
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                                  <label for="work_up">Work up:</label>
                                                  <textarea name="work_up" id="work_up" cols="30"
                                                       rows="10">{{ old('work_up') }}</textarea>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label for="ivf">IVF:</label>
                                             <input type="IVF" name="IVF"
                                                  class="form-control {{ $errors->has('form.IVF') ? ' is-invalid' : '' }}"
                                                  placeholder="" />
                                        </div>
                                   </div>
                                   <div class="col-lg-12">
                                        <div class="form-group">
                                             <label for="meds">Meds:</label>
                                             <textarea name="meds" id="meds" cols="30"
                                                  rows="10">{{ old('meds') }}</textarea>
                                        </div>
                                   </div>
                                   <div class="col-lg-12">
                                        <div class="form-group">
                                             <label for="OtherConcerns">Other Concerns:</label>
                                             <textarea name="other_concern" id="other_concern" cols="30"
                                                  rows="10">{{ old('other_concern') }}</textarea>
                                        </div>
                                   </div>
                              </div>
                              <!-- create a submit button positioned at the center -->
                              <div class="col-lg-12">
                                   <div class="text-center mt-5 mb-5">
                                        <small>Double check before clicking submit</small><br>
                                        <button type="submit" class="btn btn-primary">Request Admission</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection