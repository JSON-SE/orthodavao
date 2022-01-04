<div>
    <form wire:submit.prevent="authenticateUser">
        @csrf
        <div class="form-group input-rounded">
            <input type="text" wire:model="form.email"
                class="form-control {{ $errors->has('form.email') ? ' is-invalid' : '' }}" name="email"
                placeholder="Email" />
            @error('form.email')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group input-rounded">
            <input type="password" wire:model="form.password" name="password"
                class="form-control {{ $errors->has('form.password') ? ' is-invalid' : '' }}" placeholder="Password" />
            @error('form.password')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-inline">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" wire:model="remember" class="form-check-input" />Remember me
                    <i class="input-frame"></i>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block"> Login </button>
    </form>
    <div class="signup-link mb-5">
        <p>Don't have an account yet?</p>
        <a href="{{ route('register') }}">Sign Up</a>
    </div>
    <br><br>
</div>