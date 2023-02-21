<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Espace producteurs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo_prod.png')}}">

        <!-- third party css -->
        <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

       <!-- App css -->
       <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
        
    </head>

    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <body  class="loading" data-layout-color="light" data-layout="detached" data-rightbar-onstart="true">

   <!-- navbar -->
 <div style="background-color: #808000;" class="navbar-custom topnav-navbar topnav-navbar- ">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="../index.php" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="{{asset('assets/images/logo_prod.png')}}" alt="" height="46">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="{{asset('assets/images/logo_prod.png')}}" alt="" height="46">
                    </span>
                </a>

                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li  class="dropdown notification-list">
                   
                        <a  style="background-color: #FFFFE0;" class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="account-user-avatar"> 
                                <img  src="" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name"></span>
                                <span class="account-position">Administrateur</span>
                                
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            
    
                            <!-- item-->
                            <a href="../producteur_dashboard/profil.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>Mon profil</span>
                            </a>

                            <!-- item-->
                            <a href="../traitement/deconnexion/deconnexion.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Deconnexion</span>
                            </a>
    
                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                           </div>
        </div>
        <!-- end Topbar -->
        <!-- fin nav bar -->


        <!-- debut left sidebar -->
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="leftside-menu leftside-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name"></span>
                        </a>
                    </div>


<!--- Sidemenu -->
<ul class="side-nav">
<!-- <div class="alert alert-warning" role="alert"> <small>
                        <i class="dripicons-information me-2"></i>
    Configurez tous les champs disponibles pour avoir une meilleure visibilité sur la plateforme Epousse..
                        </small>
</div> -->
<li class="side-nav-item">
    <a style="height:60px;font-size:15px"  href="acceuil.php" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <!-- <span class="badge bg-info rounded-pill float-end">4</span> -->
        <span>Tableau de bord</span>
    </a>
   
</li>


<li class="side-nav-item">
    <a style="height:60px;font-size:15px" href="profil.php" class="side-nav-link">
        <i class="dripicons-user"></i>
        <span>Mon profil</span>
        <!-- <span class="badge bg-warning rounded-pill float-end">0</span> -->
    </a>
</li>

<li class="side-nav-item">
    <a style="height:60px;font-size:15px" href="entreprise.php" class="side-nav-link">
        <i class="dripicons-briefcase"></i>
        <span>Commandes</span>
        <!-- <span class="badge bg-warning rounded-pill float-end">0</span> -->
    </a>
</li>
<li class="side-nav-item">
    <a style="height:60px;font-size:15px" href="annonce.php" class="side-nav-link">
        <i class="uil-newspaper"></i>
        <span>Chaussures</span>
<!-- <span class="badge bg-warning rounded-pill float-end"></span> -->
    </a>
</li>

<li class="side-nav-item">
    <a style="height:60px;font-size:15px" href="" class="side-nav-link">
        <i class="uil-car"></i>
            <span>Catégories</span>
            <!-- <span class="badge bg-danger rounded-pill float-end">Nouveau</span> -->
    </a>
</li>
                                
    


</ul>
 
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

<div class="content-page">
                    <div class="content">
                        
                       
                       
                        <div class="alert alert-danger" role="alert"> <h4>
                        
</div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">

                                                <div class="card shadow-none m-0">
                                                    <div class="card-body text-center">
                                                 

                                                        <i class="uil-newspaper text-muted" style="font-size: 44px;"></i>
                                                        <h3><span></span></h3>
                                                        <p class="text-muted font-15 mb-0">Annonces en cours</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <!-- <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>715</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Tasks</p>
                                                    </div>
                                                </div>
                                            </div> -->
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                    
                                                        <i class="dripicons-user-group text-muted" style="font-size: 44px;"></i>
                                                        <h3><span></span></h3>
                                                        <p class="text-muted font-15 mb-0">Agriculteurs</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-6">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-car text-muted" style="font-size: 24px;"></i>
                                    <p class="text-muted font-15 mb-0">Vous n'avez pas encore configurer votre section <strong>transport</strong></p>
                                </div>
                            </div>
                        
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        
                        </div>
                        <!-- end row-->
                <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->



        <!-- bundle -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('assets/js/app.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('assets/js/vendor/chart.min.js')}}"></script>

        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('assets/js/pages/demo.dashboard.js')}}"></script>
        <!-- end demo js-->
        
    </body>

</html>

