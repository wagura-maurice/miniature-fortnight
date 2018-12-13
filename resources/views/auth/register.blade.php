@extends('layouts.app')

@section('content')
<div style="height: 90vh">
    <div class="flex-center flex-column">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Material form register -->
            <div class="card">

            <h5 class="card-header aqua-gradient white-text text-center py-4">
                <strong>{{ __('Sign Up') }}</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <label for="fname">{{ __('First Name') }}</label>
                                <input type="text" id="fname" class="form-control {{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form">
                                <label for="lname">{{ __('Last Name') }}</label>
                                <input type="text" id="lname" class="form-control {{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="password">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                        </small>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="md-form">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <!-- Newsletter -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                        <label class="form-check-label" for="newsletter">Subscribe to our newsletter</label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Sign Up') }}</button>

                    <!-- Social register -->
                    <p>or sign up with:</p>

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

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>

                </form>
                <!-- Form -->

            </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
</div>

    </div>
</div>
@endsection
