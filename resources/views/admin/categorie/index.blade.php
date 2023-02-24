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
    <a style="height:60px;font-size:15px" href="a.php" class="side-nav-link">
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
                                    
                                    <h4 class="page-title">Catégorie</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                       
                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                            <button type="submit" class="btn btn-warning rounded-pill" name="valider">
                                            <a style="text-decoration: none;color: black;font-weight:bold;" href="{{route('admin.categorie.create')}}" >+  Ajouter une catégorie</a>
                                            </button>
                                            <br>
                                            <br>
                                                <table  class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                           
                                                            <th>Categorie</th>
                                                            <th>Description</th>
                                                            <th>Supprimer ?</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @php($i=1)
                                                        @foreach ($categories as $categorie)
                                                        <tr>
                                                        
                                                        <td>{{ $categorie->nom_categorie }}</td>
                                                        <td>{{ $categorie->description }}</td>
                                                        <td><!-- Danger Alert Modal -->
                                                            <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal-{{ $categorie->id }}"><i class=" uil-trash"></i></button>
                                                        </td>
                                                        @endforeach

                                                        @foreach ($categories as $categorie)
                                                            <div id="danger-alert-modal-{{ $categorie->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content modal-filled bg-danger">
                                                                    <form action="{{route('admin.categorie.destroy',$categorie)}}" class="ps-3 pe-3" enctype="multipart/form-data" method="post">
                                                        
                                                        @csrf
                                                        @method('DELETE')
                                                                        <div class="modal-body p-4">
                                                                            <div class="text-center">
                                                                                <i class="dripicons-warning h1"></i>
                                                                                <h4 class="mt-2">Supprimer!</h4>
                                                                                <p class="mt-3">Etes vous sur de vouloir supprimer <strong>{{ $categorie->nom_categorie }}</strong> ?</p> 
                                                                                <button type="submit" class="btn btn-warning">
                                                                                Oui
                                                                                </button>
                                                                                <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Non</button>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                            </form>
                                                    
                                                            @endforeach
                                                        </tr>
                                                        
                                                    </tbody>
                                                    
              
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        
                                     
                                        </div> <!-- end tab-content-->
                        
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
