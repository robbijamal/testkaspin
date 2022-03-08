<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="audiences,admin,dashboard" />
    <meta name="author" content="stacks" />
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>TEST KASPIN</title>
    <!-- Favicon -->
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/icomoon/style.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/uniform/css/default.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/switchery/switchery.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/datatables/css/jquery.datatables.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/datatables/css/jquery.datatables_themeroller.css" />
    <!-- New Styles Added -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/datatables/css/select.dataTables.min.css" />
    <!-- /New Styles Added -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/bootstrap-datepicker/css/datepicker3.css" />
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/space.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/custom2.css" />
    <!-- New Custom Styles Added -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/custom3.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <!-- /New Custom Styles Added -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Javascripts -->
    <script src="{{ url('/') }}/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ url('/') }}/assets/js/blockUI/blockUI.js"></script>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body class="page-sidebar-fixed page-header-fixed">
<!-- Page Container -->
<div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar">
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                @include('layouts.menu')
            </div>
        </div>
    </div><!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Header -->
        @include('layouts.header')
        <!-- Page Inner -->
        @yield('content')
        <!-- /Page Inner -->
    </div><!-- /Page Content -->
</div><!-- /Page Container -->
<!-- Activate Modal -->
</body>
</html>
