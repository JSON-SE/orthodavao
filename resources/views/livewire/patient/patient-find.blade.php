<div>
    <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Find Patient</li>
    </ol>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        {{ session()->forget('message') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-5">
            <div class="grid">
                <div class="grid-header">Patient Details</div>
                <div class="grid-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Details</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $firstname }}</td>
                                </tr>
                                <tr>
                                    <td>Middle Name</td>
                                    <td>{{ $middlename }}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $lastname }}</td>
                                </tr>
                                <tr>
                                    <td>Suffix</td>
                                    <td>{{ isset($suffix) ? $suffix : 'No Suffix' }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{ $birthdate }}</td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>{{ $age }}</td>
                                </tr>
                                <tr>
                                    <td>Sex</td>
                                    <td>{{ $gender }}</td>
                                </tr>
                                <tr>
                                    <td>Marital Status</td>
                                    <td>{{ $civil_status }}</td>
                                </tr>
                                <tr>
                                    <td>Region</td>
                                    <td>{{ $region }}</td>
                                </tr>
                                <tr>
                                    <td>Province</td>
                                    <td>{{ $province }}</td>
                                </tr>
                                <tr>
                                    <td>City/Municipality</td>
                                    <td>{{ $city_municipality }}</td>
                                </tr>
                                <tr>
                                    <td>Barangay</td>
                                    <td>{{ $barangay }}</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>{{ $occupation }}</td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>{{ isset($contact) ? $contact : 'No Contact' }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ isset($email) ? $email : 'No Email Address' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="grid">
                <div class="grid-header">Consultation Records</div>
                <div class="grid-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-condensed table-default"
                            id="findPatientConsultationTable">
                            <thead>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($consultation as $data)
                                <tr>
                                    <td>
                                        {{ \Carbon\Carbon::parse($data->date)->format('l jS \\of F Y h:i:s A');}}
                                    </td>
                                    <td>
                                        <a href="/find/consultation/{{ $data->id }}"
                                            class="btn btn-xs btn-default">View</a>
                                        <a href="/consultation/update/{{ $data->id }}"
                                            class="btn btn-xs btn-default">Update</a>
                                        <a href="/consultation/destroy/{{ $data->id }}"
                                            class="btn btn-xs btn-danger">Remove</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>Date</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>