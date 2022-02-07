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

<div class="grid">
     <div class="grid-header">
          Xray Request
     </div>
     <div class="grid-body">
          <div class="col-md-12">
               <div class="row">
                    <div class="table-responsive">
                         {!! $html->table() !!}
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection