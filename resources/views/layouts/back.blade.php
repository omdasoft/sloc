<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/icofont.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('back/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/vendors/css/extensions/timedropper.min.css')}}">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/css-rtl/style-rtl.css')}}">
    <!-- END Custom CSS-->
    @notify_css
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Cairo', sans-serif;
    }
    </style>
</head>

<body
    class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
    data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    @include('back.includes.header')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('back.includes.sidebar')

    @yield('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('back.includes.footer')

    @notify_js
    @notify_render

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('back/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('back/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript">
    </script>

    <script src="{{asset('back/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('back/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

    <script src="{{asset('back/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('back/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->

    <script src="{{asset('back/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

    <script src="{{asset('back/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
    @yield('script')
</body>

</html>