<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>OK</b>ra</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Okira</b></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a id="sidebar-toggle-id" href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('/assets_2/dist/img/avatar2.png') }}" class="user-image" alt="User Image" />
                    <span class="hidden-xs">
                        {{ Auth::user()->name}}
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ asset('/assets_2/dist/img/avatar2.png') }}" class="img-circle" alt="User Image" />
                        <p>
                           {{Auth::user()->administration->role}}
                           <small>
                            Creer le {{Auth::user()->created_at}}

                           </small>
                        </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ route('profile.detail') }}" class="btn btn-default btn-flat">
                                <i class="fa fa-user"></i>
                                Profil
                            </a>
                        </div>
                        <form action="{{route('okira-logout')}}" method="POST" id="logout-form">
                            @csrf
                            <div class="pull-right" style="padding-bottom: 0px;">
                                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="btn btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i> {{ __('Deconnexion') }}</span></a>
                            </div>
                        </form>
                    </li>
                </ul>
            </li>

            <!-- Control Sidebar Toggle Button
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
            -->
        </ul>
    </div>
</nav>
