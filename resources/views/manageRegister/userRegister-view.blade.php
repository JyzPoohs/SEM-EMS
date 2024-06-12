@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" class="img-fluid" alt="Indek">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('fail'))
                    <div class="alert alert-danger text-center">
                        {{ session('fail') }}
                    </div>
                @endif
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h3><strong>{{ __('User Registration') }}</strong></h3>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="{{ route('user.create') }}">
                            @csrf

                            <div class="form-group row mb-3 mt-3">
                                <label for="ic" class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>
                                <div class="col-md-6">
                                    <input id="ic" type="text" placeholder="e.g 650515071028"
                                        class="form-control @error('ic') is-invalid @enderror"
                                        name="ic" value="{{ old('ic') }}" required autocomplete="on" autofocus>
                                    @error('ic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="Enter Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleRadio"
                                            value="FEMALE" {{ old('gender') == 'FEMALE' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="femaleRadio">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="maleRadio"
                                            value="MALE" {{ old('gender') == 'MALE' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="maleRadio">Male</label>
                                    </div>
                                    @error('gender')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" placeholder="e.g 016-5419875"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="tel">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="e.g test@example.com"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           placeholder="6 - 12 characters/digits, at least one uppercase letter, one number, and one special character"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password"
                                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,12}"
                                           title="Password must be 6-12 characters long, contain at least one uppercase letter, one number, and one special character.">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div id="password-error" class="text-danger mt-2" style="display: none;">
                                        Password must be 6-12 characters long, contain at least one uppercase letter, one number, and one special character.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="cpassword" class="col-md-4 col-form-label text-md-end">{{ __('Repeat Password') }}</label>
                                <div class="col-md-6">
                                    <input id="cpassword" type="password" placeholder="Repeat Password"
                                           class="form-control @error('cpassword') is-invalid @enderror" name="cpassword"
                                           required autocomplete="new-password">
                                    @error('cpassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="registerBtn"
                                        style="background-color: #052d70; border:none; color: white;">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6 offset-md-4 mt-3">
                            <a href="{{ route('login') }}" class="btn btn-link">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const registerBtn = document.getElementById('registerBtn');
            const passwordError = document.getElementById('password-error');

            passwordInput.addEventListener('input', function() {
                const pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,12}$/;
                if (pattern.test(passwordInput.value)) {
                    registerBtn.disabled = false;
                    passwordError.style.display = 'none';
                } else {
                    registerBtn.disabled = true;
                    passwordError.style.display = 'block';
                }
            });
        });
    </script>
@endsection
