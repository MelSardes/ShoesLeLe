 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
     <!-- Sidebar user panel
    -->
     <div class="user-panel">
         <div class="pull-left image">

             <img src="{{ asset('/assets_2/dist/img/avatar2.png') }}" class="img-circle " alt="User Image" />

         </div>
         <div class="pull-left info">
             <p>
                 {{ Auth::user()->name }}

             </p>
             <a href="#"><i class="fa fa-circle text-success"></i> En ligne </a>
         </div>
     </div>
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
         <li class="header">Navigation principale</li>
         <li>
             <a href="/">
                 <i class="fa fa-dashboard"></i> <span>Accueil</span>
             </a>
         </li>
         <li>
             <a href="">
                 <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
             </a>
         </li>
         <li class="treeview">
             <a href="#">
                 <i class="fa fa-gears"></i>
                 <span>Configuration</span>
                 <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                 </span>
             </a>
             <ul class="treeview-menu">
                 <li>
                     <a href="{{ route('administration-pays-liste') }}"><i class="fa fa-flag"></i> Pays</a>
                 </li>
                 <li>
                     <a href="{{ route('administration-villes-liste') }}"><i class="fa fa-circle-o"></i> Ville</a>
                 </li>
                 <li>
                     <a href="{{ route('administration-utilisateurs-liste') }}"><i class="fa fa-users fa-fw"></i>
                         Utilisateurs</a>
                 </li>
             </ul>
         </li>
         <li class="treeview">
             <a href="#">
                 <i class="fa fa-list"></i>
                 <span>Produits</span>
                 <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                 </span>
             </a>
             <ul class="treeview-menu">
                 <li>
                     <a href="{{ route('administration-categories-liste') }}">
                         <i class="fa fa-cubes"></i> <span>Categories</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('administration-produits-liste') }}">
                         <i class="glyphicon glyphicon-shopping-cart"></i> <span>Produits</span>
                     </a>
                 </li>

             </ul>
         </li>
         <li>
             <a href="{{ route('administration-services-liste') }}">
                 <i class="fa fa-wrench"></i> <span>Services</span>
             </a>
         </li>

         <li class="treeview">
             <a href="#">
                 <i class="fa fa-money"></i>
                 <span>Nos offres</span>
                 <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                 </span>
             </a>
             <ul class="treeview-menu">
                 <li>
                     <a href="{{ route('administration-offrir-produits-liste') }}"><i class="fa fa-th-list fa-fw"></i>
                         Produits</a>
                 </li>
                 <li>
                     <a href="{{ route('administration-offrir-services-liste') }}"><i class="fa fa-th-list fa-fw"></i>
                         Services</a>
                 </li>

             </ul>
         </li>
     </ul>
 </section>
