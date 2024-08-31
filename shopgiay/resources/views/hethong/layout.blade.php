<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/css/master.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/datatables/datatables.min.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" >
            <div class="sidebar-header">
                <img src="{{asset('public/backend')}}/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="{{route('s.quantri')}}"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('s.cauhinh')}}"><i class="fab fa-windows"></i> Cấu hình Website</a>
                </li>
                <li>
                    <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
                </li>
                <li>
                    <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Buttons</a>
                        </li>
                        <li>
                            <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Badges</a>
                        </li>
                        <li>
                            <a href="ui-cards.html"><i class="fas fa-angle-right"></i> Cards</a>
                        </li>
                        <li>
                            <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Alerts</a>
                        </li>
                        <li>
                            <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Tabs</a>
                        </li>
                        <li>
                            <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Date & Time Picker</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                        </li>
                        <li>
                            <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                        </li>
                        <li>
                            <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                        </li>
                        <li>
                            <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="{{route('h.trangchu')}}" target="_blank" class="nav-item nav-link dropdown-toggle text-secondary">
                                    <i class="fas fa-link"></i> <span>View Website</span> 
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" class="nav-item nav-link dropdown-toggle text-secondary">
                                    <i class="fas fa-user"></i> <span>@if(Auth::check()) {{Auth::user()->hoten}} @endif </span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="{{route('h.logout')}}" class="nav-item nav-link dropdown-toggle text-secondary">
                                <i class="fas fa-sign-out-alt"></i> <span>Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                @yield("noidung")
            </div>
        </div>
    </div>
    <script src="{{asset('public/backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/backend')}}/vendor/chartsjs/Chart.min.js"></script>
    <script src="{{asset('public/backend')}}/js/dashboard-charts.js"></script>
    <script src="{{asset('public/backend')}}/js/script.js"></script>
    <script src="{{asset('public/backend')}}/vendor/datatables/datatables.min.js"></script>
    <script src="{{asset('public/backend')}}/js/initiate-datatables.js"></script>
</body>

</html>


