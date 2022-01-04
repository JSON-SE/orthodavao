<div>
    <form wire:submit.prevent="submitForm" method="POST">
        @csrf
        <div class="form-group input-rounded">
            <select wire:model="role_id" name="region" id="region"
                class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}">
                <option value="#">Select Role</option>
                @foreach ($role as $data)
                @if ($data->id != 3)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endif
                @endforeach
            </select>
            @error('role_id')
            <div class=" invalid-feedback"> Role is required!
            </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="text" wire:model="firstname"
                class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" placeholder="First name" />
            @error('firstname')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="text" wire:model="middlename"
                class="form-control {{ $errors->has('middlename') ? ' is-invalid' : '' }}" placeholder="Middle name" />
            @error('middlename')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="text" wire:model="lastname"
                class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Last name" />
            @error('lastname')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="text" wire:model="occupation"
                class="form-control {{ $errors->has('occupation') ? ' is-invalid' : '' }}" placeholder="Occupation" />
            @error('occupation')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
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
            <select wire:model="city_municipality_code" name="city_municipality" id="city_municipality"
                class="form-control">
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
            <input type="text" wire:model="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                placeholder="email" />
            @error('email')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="password" wire:model="password"
                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" />
            @error('password')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="password" wire:model="password_confirmation"
                class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                placeholder="Confirm Password" />
            @error('password_confirmation')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block"> Register </button>
    </form>
    <div class="signup-link mb-5">
        <p>Already have an account?</p>
        <a href="{{ route('login') }}">Sign In</a>
    </div>
    <br><br>
</div>