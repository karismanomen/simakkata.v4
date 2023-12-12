<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $setting->nama_aplikasi }} | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="{{ asset('/simakkata/plugins/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ asset('/simakkata/plugins/font-awesome/css/font-awesome.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/simakkata/plugins/Ionicons/css/ionicons.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/simakkata/dist/css/AdminLTE.min.css') }}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/simakkata/dist/css/skins/_all-skins.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('/simakkata/plugins/datatables-bs/css/dataTables.bootstrap.min.css') }}">

    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris.js/morris.css">

    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/bootstrap-daterangepicker/daterangepicker.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @stack('css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @includeIf('layouts.header')

        @includeIf('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><div class="card-header text-center bg-primary-light"> @yield('title')</div></h1>                   </h1>
                <br>
                <div class="text-right">
                <ol class="breadcrumb">
                    @section('breadcrumb')
                        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @show
                </ol>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @includeIf('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('simakkata/plugins/jquery/dist/jquery.min.js') }}"></script>

    <!-- Scripts -->


    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('simakkata/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Moment -->
    <script src="{{ asset('simakkata/plugins/moment/min/moment.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('simakkata/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('simakkata/plugins/datatables-bs/js/dataTables.bootstrap.min.js') }}">
    </script>

    <!-- AdminLTE App -->
    <script src="{{ asset('simakkata/dist/js/adminlte.min.js') }}"></script>

    <!-- Validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>

    <script>
        function preview(selector, temporaryFile, width = 200) {
            $(selector).empty();
            $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
