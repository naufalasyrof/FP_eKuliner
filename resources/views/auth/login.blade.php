@extends('layouts.app')

@section('content')
<div class="container-sm my-5 pt-5">
    {{-- position-absolute top-50 start-50 translate-middle --}}
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-6 border">
            <div class="mb-3 text-center">
                <i class="bi bi-person-vcard fs-1"></i>
                <h4 class="mb-5"><b>Silahkan Login</b></h4>
            </div>
            <hr>
            <div class="row justify-content-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <input id="email" type="email"
                                class="form-control py-2 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email"
                                autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input id="password" type="password"
                                class="form-control py-2 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password" placeholder="Enter Your Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning mt-3 py-2 col-12"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 text-black">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
