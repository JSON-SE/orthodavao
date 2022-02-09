<div>
    <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">
            <a href="{{ url()->previous() }}">{{ $consultation->patient->firstname }}'s list of Records</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $consultation->patient->firstname }}'s Record as of
            {{\Carbon\Carbon::parse($consultation->date)->format('l jS \\of F Y h:i:s A');}}
        </li>
    </ol>
    <div class="grid">
        <div class="grid-body">
            <!-- TODO: show SOAP Records here.. (not final design) -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="grid">
                        <div class="grid-body">
                            <div class="grid-header">Patient Medical Request</div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>X-Ray</td>
                                            <td><a href="/patient/request/x-ray/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Ultrasound</td>
                                            <td><a href="/patient/request/ultrasound/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Laboratory</td>
                                            <td><a href="/patient/request/laboratory/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>MRI Scan</td>
                                            <td><a href="/patient/request/mri/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>CT Scan</td>
                                            <td><a href="/patient/request/ct/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Prescription</td>
                                            <td><a href="/patient/request/prescription/{{ $consultation->id }}"
                                                    class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Referral</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Admission</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                        <tr>
                                            <td>Medical Certificate</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Request</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-6 col-sm-12">
                    <div class="grid">
                        <div class="grid-header">
                            Subjective
                        </div>
                        <div class="grid-body">
                            {!! $consultation->subjective !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 col-sm-12">
                    <div class="grid">
                        <div class="grid-header">
                            Objective
                        </div>
                        <div class="grid-body">
                            {!! $consultation->objective !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 col-sm-12">
                    <div class="grid">
                        <div class="grid-header">
                            Assessment
                        </div>
                        <div class="grid-body">
                            {!! $consultation->assessment !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 col-sm-12">
                    <div class="grid">
                        <div class="grid-header">
                            Plan
                        </div>
                        <div class="grid-body">
                            {!! $consultation->plan !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="grid-header">
                        Uploaded Image
                        <div class="grid-body">
                            <div class="row">
                                @if (empty($image))
                                <p>No uploaded image</p>
                                @else
                                @foreach ($image as $img)
                                <div class="col-md-3 mt-2">
                                    <a data-fancybox="gallery" data-src="{{ asset('image/'. $img->name) }}">
                                        <img src="{{ asset('image/'. $img->name) }}" width="200px" height="250px"></img>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>