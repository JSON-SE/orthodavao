@extends('layouts.base_app')
@section('content')
<ol class="breadcrumb has-arrow">
     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
     <li class="breadcrumb-item">
          <a href="{{ url()->previous() }}"> {{ $consultation->patient->firstname }}'s Record as of
               {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}</a>
     </li>
     <li class="breadcrumb-item active" aria-current="page">
          X-Ray Request
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
               Xray Request
          </div>
          <div class="grid-body">
               <div class="row">
                    <div class="table-responsive">
                         <form action="/request/xray/patient/{{ $consultation->id }}" method="POST" id="form-xray">
                              @csrf
                              <table class="table table-bordered" id="xrayRequestTable" width="100%">
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
                              <!-- create a submit button positioned at the center -->
                              <div class="col-lg-12">
                                   <div class="text-center mt-5 mb-5">
                                        <small>Double check before clicking submit</small><br>
                                        <button type="submit" class="btn btn-primary">Request X-Ray</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection