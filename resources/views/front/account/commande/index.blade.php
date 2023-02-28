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


<body class="loading" data-layout-color="light" data-layout="detached" data-rightbar-onstart="true">

    <!-- navbar -->
    <div style="background-color: #808000;" class="navbar-custom topnav-navbar topnav-navbar- ">
        <div class="container-fluid">

            <!-- LOGO -->
            <a href="{{route('home')}}" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="{{ asset('chaussures/thq7mDwrehD5unNW0Oov4FdTlFFKTebWmN8F42Rr.jpg') }}" alt="" height="46">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="{{ asset('chaussures/thq7mDwrehD5unNW0Oov4FdTlFFKTebWmN8F42Rr.jpg') }}" alt="" height="46">
                    </span>
                </a>

            <ul class="list-unstyled topbar-menu float-end mb-0">
                <li class="dropdown notification-list">

                    <a style="background-color: #FFFFE0;" class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <!-- <span class="account-user-avatar">
                            <img src="" class="rounded-circle">
                        </span> -->
                        <span>
                            <span class="account-user-name">{{ Auth::user()->name }}</span>
                            <span class="account-position">Client</span>

                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">


                        <!-- item-->
                        <a href="{{route('profil')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span class="account-user-name">{{ Auth::user()->email }}</span>
                        </a>

                        <!-- item-->
                        <a href="{{route('deconnexion')}}" class="dropdown-item notify-item">
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
                        <a style="height:60px;font-size:15px" href="{{route('dashboard')}}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <!-- <span class="badge bg-info rounded-pill float-end">4</span> -->
                            <span>Tableau de bord</span>
                        </a>

                    </li>


                    <li class="side-nav-item">
                        <a style="height:60px;font-size:15px" href="{{route('profil')}}" class="side-nav-link">
                            <i class="dripicons-user"></i>
                            <span>Mon profil</span>
                            <!-- <span class="badge bg-warning rounded-pill float-end">0</span> -->
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a style="height:60px;font-size:15px" href="{{route('commande')}}" class="side-nav-link">
                            <i class="dripicons-briefcase"></i>
                            <span>Commandes</span>
                            <!-- <span class="badge bg-warning rounded-pill float-end">0</span> -->
                        </a>
                    </li>
                    <!-- <li class="side-nav-item">
                        <a style="height:60px;font-size:15px" href="{{route('admin.chaussures')}}" class="side-nav-link">
                            <i class="uil-newspaper"></i>
                            <span>Chaussures</span>
                            <span class="badge bg-warning rounded-pill float-end"></span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a style="height:60px;font-size:15px" href="{{route('admin.categorie')}}" class="side-nav-link">
                            <i class="uil-car"></i>
                            <span>Catégories</span>
                            <span class="badge bg-danger rounded-pill float-end">Nouveau</span>
                        </a>
                    </li> -->




                </ul>

                <!-- End Sidebar -->

                <div class="clearfix"></div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <div class="content-page">
                <div class="content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">MES COMMANDES</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
<!-- Start Content-->
<div class="container-fluid">
                        
                        <!-- start page title -->
                       
                        <!-- end page title -->
                        <!-- <h4 class="page-title mb-3">Mes commandes</h4> -->
                        
                        
                                           
                                            <hr>
                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xxl-8">
                                       
                                            @foreach( $lignes_commande as $commandes)
                                            
                                            <!--  -->
    <div class="col">
        <div class="card">
            
            <div class="card-body">
                <div class="d-flex">
                    
                    <div class="flex-shrink-0">
                        <img class="rounded-circle avatar-sm" src="{{asset('assets/images/logo_prod.png')}}" alt="Avtar image">
                    </div>
                    <br>
                    <div class="flex-grow-1 ms-2">
                        <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1"></h5></a>                                                
                        <p class="text-muted mb-0">{{ $commandes -> chaussure_id }}</p>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                           
                            
                            <a href="traitement/delete.php" class="dropdown-item text-info">
                                <i class="mdi mdi-trash-can-outline me-1">

                                </i>Annuler la commande</a>
                        </div>
                    </div>
                </div>
               
            </div>
           
        </div>
    </div> <!-- end col -->
    @endforeach
    <!--  -->
                                               <!-- <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Désolé! </strong>Aucun produit mis en avant
                                                </div> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                        
                        </div> <!-- end row -->

   

</div> <!-- container -->
</div> <!-- content -->


                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->




        <!-- bundle -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('assets/js/app.min.js')}}"></script>

        <!-- plugin js -->
        <script src="{{asset('assets/js/vendor/dropzone.min.js')}}"></script>
        <!-- init js -->
        <script src="{{asset('assets/js/ui/component.fileupload.js')}}"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper/modern/apps-projects-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Aug 2022 14:49:06 GMT -->

</html>