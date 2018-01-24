<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Home</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <li style="margin-top: 40px;">
                    <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i>All Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                             <a href="{{url('/skill')}}"><i class="fa fa-list fa-list"></i>Manage Skill</a>
                        </li>

                        <li>
                            <a href="{{url('/portfolio')}}"><i class="fa fa-list fa-list"></i>Manage Portfoli</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{url('/comment')}}"><i class="fa fa-user fa-fw"></i>Comments<span class="fa arrow"></span></a>
                </li>

            </ul>

        </div>
    </div>
</nav>
