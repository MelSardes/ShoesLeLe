<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Chaussures</title>
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
    <a style="height:60px;font-size:15px"  href="{{route('admin.dashboard')}}" class="side-nav-link">
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
    <a style="height:60px;font-size:15px" href="{{route('admin.chaussures')}}" class="side-nav-link">
        <i class="uil-newspaper"></i>
        <span>Chaussures</span>
<!-- <span class="badge bg-warning rounded-pill float-end"></span> -->
    </a>
</li>

<li class="side-nav-item">
    <a style="height:60px;font-size:15px" href="{{route('admin.categorie')}}" class="side-nav-link">
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
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Nouvelle annonce</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                        <?php
                               
                                    if(isset($_GET['error'])){
                                        ?>
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $_GET['error'];?></strong>
                                        </div>
                                        <?php
                                        }elseif(isset($_GET['success'])){
                                            ?>
                                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong><?php echo $_GET['success'];?></strong>
                                            </div>
                                            <?php 
                                        }
                                    
                                    ?>
                        <form action="traitement/add_produit.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Titre</label>
                                                    <input required type="text" name="titre" class="form-control" >
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea required  class="form-control" name="description" rows="5"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Marque</label>
                                                    <input type="text" name="marque  " class="form-control" >
                                                </div>
                                                

                                            </div> <!-- end col--></form>

                                            <div class="col-xl-6">
                                            <div class="mb-3">
                                                    <label class="form-label">Prix</label>
                                                    <input type="text" required name="prix" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000" data-reverse="true">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Nombre disponible pour cette chaussure</label>
                                                    <input type="text" name="nbre_dispo  " class="form-control" data-toggle="input-mask" data-mask-format="000" data-reverse="true">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label"></label>
                                                    <select required class="form-select" name="unite">
                                                    <option selected="">Choisir la quantité</option>
                                                    <option value="l'unité">Pièce(s)</option>
                                                    <option value="le kg">Kg(Kilogrammes)</option>
                                                    <option value="le g">g(grammes)</option>
                                                    <option value="le L">L(litres)</option>
                                                    <option value="le cL">cL(centilitres)</option>
                                                    <option value="le mL">mL(millilitres)</option>
                                                    </select>
                                                </div>
                                            <hr>
                                        <div class="mb-3 mt-3 mt-xl-0">
                                                    <label class="mb-0">Photo de la chaussure</label>
                                                    <p class="text-muted font-14">Conseil: Choisissez des photos carré de préférence. Taille maximum par photo: 5 Mo, format accepté: jpg, png.</p>

                                        <div >
                                                         <div class="input-group">
                                                        <input name="photo2" required type="file" accept="image/*" class="form-control" >

                                                        </div>
                                                    <!-- end file preview template -->
                                                   
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-success rounded-pill" name="valider">Enregistrer</button>

                                                
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                       

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div>
                     <!-- End Content -->
                     </form>
                    

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
