<!-- Header bar -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>B</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Base</b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="col-xs-8 col-sm-6 col-md-6 col-lg-4 margin">
            {!! Form::model(null, ['url' => route('user.list'), 'method' => 'GET']) !!}
            <div class="input-group input-group-sm">
                <input name="p" type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Auth::User()->getProfileImageUrl() }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ Auth::User()->getProfileImageUrl() }}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{ Auth::User()->getJoinedDate() }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body no-padding">
                            <ul class="dropdown-user-menu">
                                <li>{!! link_to_route_html('user.profile', '<i class="fa fa-user-circle"></i> Profile', []) !!}</li>
                                <li>{!! link_to_route_html('user.picture.edit', '<i class="fa fa-photo"></i> Change profile picture', []) !!}</li>
                                <li>{!! link_to_route_html('user.password.edit', '<i class="fa fa-lock"></i> Change password', []) !!}</li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> Sign out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>