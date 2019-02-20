<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>wPictures</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="container-fluid">
            <div class="row">
                <div class="col-md-6" id="welcome_wallpaper">
                </div>
                <div class="col-md-6">
                        <div class="row justify-content-center mt-5">
                                <div class="col-md-8">
                                    <h1 id="welcome_h1" class="text-center font-italic">Share your Photos</h1>
                                    <div class="card shadow mt-5">
                                        <div class="card-body">
                                            <h3 class="text-center">Sign In</h3>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>                        
                                                    <div class="col-md-8">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                                    <div class="col-md-8">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow mt-3">
                                        <div class="card-body text-center">
                                            Don't have an account? <a href="{{ route('register')}}">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>

            <div class="fixed-bottom">
                    <p class="text-right mr-5">&copy; 2019 copyright - Mauricio Juárez</p>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>