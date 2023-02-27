<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Connexion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <!-- App favicon -->
        <link rel="shortcut icon" href="img/logo.png">
        
        <!-- App css -->
        <link href="{{asset('assets1/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets1/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    </head>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        
        <div class="account-pages pt-2 pt-sm-3 pb-4 pb-sm-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-2 pb-4 text-center bg-light">
                                <a href="index.html">
                                    <span><img src="img/logo.png" alt="" height="48"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                            
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Connexion</h4>
                                    <p class="text-muted mb-2">Entrer votre adresse email et mot de passe pour acceder à votre espace.</p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                        @csrf
                                    
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Adresse email</label>
                                        <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <!-- <a href="reset_mdp.php" class="text-muted float-end"><small>Mot de passe oublié?</small></a> -->
                                        @if (Route::has('password.request'))
                                            <a class="text-muted float-end" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié?') }}
                                            </a>
                                        @endif
                                        <br>
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Inscription') }}
                                </button> -->

                                @if (Route('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('S inscrire') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
</div>

