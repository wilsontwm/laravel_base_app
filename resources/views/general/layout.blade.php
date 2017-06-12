<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: auto; min-height: 100%;">
<head>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="/favicon.ico"/>
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="/css/adminlte.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/admin.css"/>
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100">
    <link rel="stylesheet" href="/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" rel="stylesheet" href="/css/skin-theme.min.css">
    <link rel="stylesheet" rel="stylesheet" href="/css/custom.css">

    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/moment-2.9.0.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/bootstrap-clockpicker.min.js"></script>

</head>
<body class="hold-transition skin-theme sidebar-mini" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        @include('partials._header')

        <!-- Side bar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ Auth::user()->getProfileImageUrl() }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{Auth::user()->name}}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                @include('partials._sidebar')
            </section>
        </aside>

        <!-- Content -->
        <div class="content-wrapper">
            @include('flash::message')
            <script>
                $('div.alert').not('.alert-important').delay(5000).slideUp(300);
            </script>

            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} {{ config( 'app.name' ) }}.</strong> All rights reserved.
        </footer>
    </div>
    <script src="/js/app.min.js"></script>
</body>
</html>