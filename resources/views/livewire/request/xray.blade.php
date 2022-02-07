<div>
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
                        <table class="table table-hover table-bordered table-condensed table-default"
                            id="requestXrayTable" width="100%">
                            <thead>
                                <th></th>
                                <th>Xray Details</th>
                            </thead>
                            <tbody>
                                @foreach ($xray as $xray)
                                <tr>
                                    <td></td>
                                    <td>{{ $xray->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Xray Details</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>