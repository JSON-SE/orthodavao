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