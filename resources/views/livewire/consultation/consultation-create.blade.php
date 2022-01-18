<div>
    <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Consultation</li>
    </ol>
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-9 col-11 mx-auto">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                {{ session()->forget('message') }}
            </div>
            @endif
            <div class="grid">
                <div class="grid-body">
                    <div class="grid-header">Patient Details</div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th></th>
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
    </div>

    <div class="row">
        <div class="grid">
            <div class="grid-header">
                Consultation
            </div>
            <div class="grid-body">
                <form action="{{ route('post-consultation') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="patient_id" value="{{ $patient_id }}" hidden>
                    <div class="row mt-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Consultation Date</label>
                                    <input type="datetime-local" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-5">
                            <div class="grid">
                                <div class="grid-header">Subjective</div>
                                <div class="grid-body">
                                    <textarea name="subjective" id="subjective" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-5">
                            <div class="grid">
                                <div class="grid-header">Objective</div>
                                <div class="grid-body">
                                    <textarea name="objective" id="objective" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grid">
                                <div class="grid-header">Assessment</div>
                                <div class="grid-body">
                                    <textarea name="assessment" id="assessment" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grid">
                                <div class="grid-header">Plan</div>
                                <div class="grid-body">
                                    <textarea name="plan" id="plan" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="grid">
                                <div class="grid-header">Image Upload</div>
                                <div class="grid-body" align="center">
                                    <div class="col-md-9 showcase_content_area">
                                        <div class="custom-file mb-4">
                                            <input type="file" class="custom-file-input" name="images[]" id="customFile"
                                                multiple>
                                            <label class="custom-file-label" for="customFile">Choose one or more
                                                images</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-5" align="center">
                            <small>Review before you submit</small><br>
                            <button type="submit" class="btn btn-md btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>