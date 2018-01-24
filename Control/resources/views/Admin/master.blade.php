<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('/admin')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('/admin')}}/css/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="{{asset('/admin')}}/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/admin')}}/css/startmin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{asset('/admin')}}/css/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('/admin')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

    @include('Admin.include.header')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    @yield('contentone')
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="{{asset('/admin')}}/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/admin')}}/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/admin')}}/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('/admin')}}/js/startmin.js"></script>

</body>
</html>
