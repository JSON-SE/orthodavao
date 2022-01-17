<div>
    <ol class="breadcrumb has-arrow">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Patient</li>
    </ol>
    <div class="col-lg-8 col-md-7 col-sm-9 col-11 mx-auto">
        <div class="grid">
            <div class="grid-body">
                <header class="grid-header mt-5">
                    <h5>Patient Details</h5>
                    <small>Provide required fields below.</small>
                </header>
                <div class="alert alert-success alert-dismissible fade show {{ $notification ? ' d-block' : 'd-none' }}"
                    role="alert">
                    <i class="mdi mdi-check-circle mt-1 mr-1"></i> Successfully added to database
                    <button type="button" class="close" wire:click="closeMessage">
                        <i class="mdi mdi-close-circle"></i>
                    </button>
                </div>
                <form wire:submit.prevent="submitForm" class="mt-4 mb-5">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group input-rounded">
                                <select wire:model="region_code" name="region" id="region" class="form-control">
                                    <option value="#">Select Region</option>
                                    @foreach ($region as $data)
                                    <option value="{{ $data->region_code }}">{{
                                        $data->region_description }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('region')
                                <div class=" invalid-feedback"> Region is required!
                                </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <select wire:model="province_code" name="province" id="province" class="form-control">
                                    <option value="#">Select Province</option>
                                    @if (isset($province))
                                    @foreach ($province as $data)
                                    <option value="{{ $data->province_code }}">{{
                                        $data->province_description }}
                                    </option>
                                    @endforeach
                                    @else
                                    no content
                                    @endif
                                </select>
                                @error('region')
                                <div class="invalid-feedback"> Province is required!
                                </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <select wire:model="city_municipality_code" name="city_municipality"
                                    id="city_municipality" class="form-control">
                                    <option value="#">Select City / Municipality</option>
                                    @if (isset($city_municipality))
                                    @foreach ($city_municipality as $data)
                                    <option value="{{ $data->city_municipality_code }}">{{
                                        $data->city_municipality_description }}
                                    </option>
                                    @endforeach
                                    @else
                                    no content
                                    @endif
                                </select>
                                @error('region')
                                <div class="invalid-feedback"> Invalid contact number. Please follow the format.
                                </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <select wire:model="barangay_code" name="barangay" id="barangay" class="form-control">
                                    <option value="#">Select Barangay</option>
                                    @if (isset($barangay))
                                    @foreach ($barangay as $data)
                                    <option value="{{ $data->barangay_code }}">{{
                                        $data->barangay_description }}
                                    </option>
                                    @endforeach
                                    @else
                                    no content
                                    @endif
                                </select>
                                @error('region')
                                <div class="invalid-feedback"> Invalid contact number. Please follow the format.
                                </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="firstname"
                                    class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                    placeholder="First name" />
                                @error('firstname')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="middlename" class="form-control"
                                    placeholder="Middle name (Optional)" />
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="lastname"
                                    class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                    placeholder="Last name" />
                                @error('lastname')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="suffix" class="form-control" placeholder="Suffix" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group input-rounded">
                                <input type="date" wire:model="birthdate"
                                    class="form-control {{ $errors->has('birthdate') ? ' is-invalid' : '' }}"
                                    placeholder="Age" />
                                @error('birthdate')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="age"
                                    class="form-control {{ $errors->has('age') ? ' is-invalid' : '' }}"
                                    placeholder="Age" />
                                @error('age')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <select wire:model="sex" class="form-control">
                                    <option>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Rather Not Say">Rather Not Say</option>
                                </select>
                                @error('sex')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <select wire:model="civil_status" class="form-control">
                                    <option>Select Marital Status</option>
                                    <option value="Child">Child</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                                @error('civil_status')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="occupation" class="form-control"
                                    placeholder="Occupation" />
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="contact" id="validate-phone-field"
                                    class="form-control {{ $errors->has('contact') ? ' is-invalid' : '' }} enable-mask phone-mask"
                                    placeholder="(+63) 000-000-0000">
                                @error('contact')
                                <div class="invalid-feedback"> Invalid contact number. Please follow the format.
                                </div>
                                @enderror
                            </div>
                            <div class="form-group input-rounded">
                                <input type="text" wire:model="email" class="form-control" placeholder="email" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Submit </button>
                </form>
            </div>
        </div>
    </div>
</div>