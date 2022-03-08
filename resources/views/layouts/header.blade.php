<div class="page-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="logo-sm">
                    <a href="javascript:void(0)" id="sidebar-toggle-button">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a class="logo-box" href="/">
                        TEST KASPIN
                    </a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-angle-down"></i>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="logo-full head-nav">
                        <a href="/">
                      <span>
                        <img src="{{ url('/') }}/assets/kaspin/logokaspin.png" height="50" alt="" />
                      </span>
                        </a>
                        <a href="javascript:void(0)" id="collapsed-sidebar-toggle-button">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    
                    <li class="head-nav {{ (strpos(\Request::getRequestUri(), '/home') !== false) ? 'actived' : '' }}">
                        <a href="{{ url('/home') }}">
                            <i class="menu-icon icon-home" style="font-size: 24px;margin-right: 5px;"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    {{--
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-lg dropdown-content">
                            <li class="drop-title">Notifications <a href="./notification.html" class="drop-title-link">Lihat semua <i class="fa fa-angle-right ml0h"></i>
                                </a>
                            </li>
                            <li class="slimscroll dropdown-notifications">
                                <ul class="list-unstyled dropdown-oc">
                                    <li>
                                        <a href="#">
                              <span class="notification-badge bg-primary">
                                <i class="fa fa-photo"></i>
                              </span>
                                            <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>. <small class="notification-date">20:00</small>
                              </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                              <span class="notification-badge bg-primary">
                                <i class="fa fa-at"></i>
                              </span>
                                            <span class="notification-info">
                                <b>John Doe</b> mentioned you in a post "Update v1.5". <small class="notification-date">06:07</small>
                              </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                              <span class="notification-badge bg-danger">
                                <i class="fa fa-bolt"></i>
                              </span>
                                            <span class="notification-info">4 new special offers from the apps you follow! <small class="notification-date">Yesterday</small>
                              </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                              <span class="notification-badge bg-success">
                                <i class="fa fa-bullhorn"></i>
                              </span>
                                            <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes! <small class="notification-date">Yesterday</small>
                              </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    --}}
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url('/') }}/assets/images/user.svg" height="20" alt="" class="account">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/logout') }}">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div><!-- /Page Header -->
