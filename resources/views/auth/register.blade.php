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
                            <a class="btn btn-link" href="{{ route('login') }}">
                                            {{ __('Retour à la page connexion') }}
                                        </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                            
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">INSCRIPTION</h4>
                                     </div>
                                     <br>
                                     
                                     <br>
                                     <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                    <div class="mb-3">
                                    
                                    <label for="name" class="form-label">Nom d'utlisateur</label>
                                        <input id="name" class="form-control" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Entrer votre nom">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>
                                    
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Adresse email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                    <div class="mb-3">
                                        <!-- <a href="reset_mdp.php" class="text-muted float-end"><small>Mot de passe oublié?</small></a> -->
                                        
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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

                                <div class="mb-3">
                            <label for="password-confirm" class="col-md-7 col-form-label text-left">{{ __('Confirmer votre mot de passe') }}</label>
                            <div class="input-group input-group-merge">    
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                        </div>
                                        </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S"inscrire') }}
                                </button>
                            </div>
                        </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer> -->

        <!-- bundle -->
      
        <script src="{{asset('assets1/js/vendor.min.js')}}"></script>
        <script src="{{asset('assets1/js/app.min.js')}}"></script>
        
    </body>
</html>

