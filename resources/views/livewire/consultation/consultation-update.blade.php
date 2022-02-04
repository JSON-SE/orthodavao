<div>
    <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Consultation</li>
    </ol>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        {{ session()->forget('message') }}
    </div>
    @endif
    <div class="row">
        <div class="grid">
            <div class="grid-body">
                <form action="/consultation/update/{{ $consultation->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <li>{{ $error }}</li>
                    </div>
                    @endforeach
                    <input type="text" name="patient_id" value="{{ $consultation->patient_id }}" hidden>
                    <div class="row mt-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="grid-header">Date</div>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-5">
                            <div class="grid">
                                <div class="grid-header">Subjective</div>
                                <div class="grid-body">
                                    <textarea name="subjective" id="subjective" cols="30" rows="10">
                                        {!! $consultation->subjective !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-5">
                            <div class="grid">
                                <div class="grid-header">Objective</div>
                                <div class="grid-body">
                                    <textarea name="objective" id="objective" cols="30" rows="10">
                                        {!! $consultation->objective !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grid">
                                <div class="grid-header">Assessment</div>
                                <div class="grid-body">
                                    <textarea name="assessment" id="assessment" cols="30" rows="10">
                                        {!! $consultation->assessment !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grid">
                                <div class="grid-header">Plan</div>
                                <div class="grid-body">
                                    <textarea name="plan" id="plan" cols="30" rows="10">
                                        {!! $consultation->plan !!}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="grid">
                                <div class="grid-header">Image Upload</div>
                                <div class="grid-body" align="center">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-7 col-sm-9 col-12 mx-auto bg-primary">
                                            <input type="file" class="form-control-file" name="images[]" id="customFile"
                                                multiple>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-5" align="center">
                                            <small>Review before you submit</small><br>
                                            <button type="submit" class="btn btn-md btn-outline-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="grid-header">
                                    Update Uploaded Image
                                </div>
                                <div class="grid-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        @if (empty($image))
                                                        <p>No uploaded image</p>
                                                        @else
                                                        @foreach ($image as $img)
                                                        <tr>
                                                            <td>
                                                                <img src=" {{ asset('image/'. $img->name) }}"
                                                                    width="150px" height="150px">
                                                                </img>
                                                            </td>
                                                            <td style="text-align: center; vertical-align: middle;">
                                                                <a href="/find/consultation/remove/{{ $img->id }}"
                                                                    class="btn btn-xs btn-danger">Remove</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>