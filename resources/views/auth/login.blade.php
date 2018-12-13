@extends('layouts.app')

@section('content')
<div style="height: 90vh">
    <div class="flex-center flex-column">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Material form login -->
                    <div class="card">

                    <h5 class="card-header aqua-gradient white-text text-center py-4">
                    <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="md-form">
                            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                            <label for="password">{{ __('Password') }}</label>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Login') }}</button>

                        <!-- Register -->
                        <p>Not a member?
                        <a href="{{ route('register') }}">Register</a>
                        </p>

                        <!-- Social login -->
                        <p>or sign in with:</p>
                        <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fa fa-facebook"></i>
                        </a>
                        <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fa fa-linkedin"></i>
                        </a>
                        <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fa fa-github"></i>
                        </a>

                    </form>
                    <!-- Form -->

                    </div>

                    </div>
                    <!-- Material form login -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
