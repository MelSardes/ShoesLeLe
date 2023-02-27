<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Mon profil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo_prod.png">

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
                            <!-- <span class="account-user-avatar"> 
                                <img  src="" class="rounded-circle">
                            </span> -->
                            <span>
                                <span class="account-user-name">{{ Auth::user()->name }}</span>
                               
                                <span class="account-position">Client</span>
                                
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            
    
                            <!-- item-->
                            <a href="" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span> <span class="account-user-name">{{ Auth::user()->email }}</span></span>
                            </a>

                            <!-- item-->
                            <a href="{{ route('deconnexion')}}" class="dropdown-item notify-item">
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
    <a style="height:60px;font-size:15px"  href="{{route('dashboard')}}" class="side-nav-link">
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
                                <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"> <a href="../index.php">Retour acceuil</a></li>
                                            <li class="breadcrumb-item active">Profil</li>
                                        </ol>
                                    </div>
                                    
                                    <h4 class="page-title">Mon profil</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                         
                        <div>
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <form action="traitement/up_profil1.php" method="POST" enctype="multipart/form-data">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Nom</label>
                                                            <input type="text" name="nom"  value="" class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Telephone</label>
                                                            <input type="text" data-toggle="input-mask" data-mask-format="000-00-00-00" name="numero"  value=""  class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Email</label>
                                                            <input type="email" name="email"  value=""  class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Ville</label>
                                                            <input type="text" name="ville"  value=""  class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Adresse</label>
                                                            <input type="text" name="adresse"  value=""  class="form-control" >
                                                        </div>
                                                        <button type="submit" name="valider" class="btn btn-danger rounded-pill">Mettre a jour</button>
                                                        </div> <!-- end col--> 
                                                </form>
                                                <hr>
                                                <form action="traitement/up_photo_producteur.php" method="POST" enctype="multipart/form-data">
                                                        <div class="mb-3 mt-3 mt-xl-0">
                                                            <label for="projectname" class="mb-0">Photo de profil producteur</label>
                                                            <p class="text-muted font-14"></p>

                                                            
                                                                <div >
                                                                    <input required name="photo" type="file" />
                                                                </div>
                                                            <!-- end file preview template -->
                                                        
                                                        </div>
                                                        <button type="submit" name="valider" class="btn btn-danger rounded-pill">Mettre a jour</button>
                                                </form>
                                                <hr>
                                            <div class="col-xl-6">
                                                <form action="traitement/up_mdp.php" method="POST" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Ancien mot de passe</label>
                                                            <input type="text" required  name="mdp_ancien" class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Nouveau mot de passe</label>
                                                            <input type="text" required name="mdp_nouveau"  class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="projectname" class="form-label">Confirmer mot de passe</label>
                                                            <input type="text" required name="confirm_mdp" class="form-control" >
                                                        </div>
                                                        <button type="submit" name="valider" class="btn btn-danger rounded-pill">Mettre a jour</button>
                                                </form>

                                                <hr>

                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                       

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
</div>
                        
                    </div> <!-- End Content -->
                    

                   

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
