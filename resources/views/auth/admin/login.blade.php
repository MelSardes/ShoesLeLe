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
        
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-light">
                                <a href="index.html">
                                    <span><img src="img/logo.png" alt="" height="48"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                            
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Connexion</h4>
                                    <p class="text-muted mb-4">Entrer votre adresse email et mot de passe pour acceder à votre espace administrateur.</p>
                                    
                                </div>
                                
                                <form action="{{route('admin.connexion')}}" method="POST">
                                @csrf  
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Adresse email</label>
                                        <input class="form-control" id="email" required name="email" type="email" required="" placeholder="Entrer votre email">
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $erreur }}</strong>
                                        </span>
                                        @enderror
                                    <div class="mb-3">
                                        <a href="reset_mdp.php" class="text-muted float-end"><small>Mot de passe oublié?</small></a>
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="mdp" required name="password" class="form-control" placeholder="Entrer votre mot de passe">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('mdp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $erreur }}</strong>
                                        </span>
                                        @enderror

                                    <!-- <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Se souvenir de moi</label>
                                        </div>
                                    </div> -->

                                    <div class="mb-3 mb-0 text-center">
                                        <!-- <a href="{{route ('dashboard')}}" class="btn btn-danger"> Se connecter</a> -->
                                        <button name="valider" class="btn btn-danger" type="submit"> Se connecter</button>
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

