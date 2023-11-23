<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard |FoodieHub-Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/daterangepicker/daterangepicker.css') }}">
    
    <!-- Datatables css -->
    <link href="{{ asset('admin/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Vector Map css -->
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @include('layouts.admin.navbar')
        <!-- ========== Topbar End ========== -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.admin.sidebar')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">


                <!-- Start Content-->
                <div class="container-fluid">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                  

                    @yield('content')

                </div>
                <!-- container -->

            </div>
            <!-- content -->



        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <!-- Vendor js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <!-- Datatables js -->
    <script src="{{ asset('admin/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="{{ asset('admin/assets/js/pages/datatable.init.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('admin/assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Apex Charts js -->


    <!-- Vector Map js -->
    <script src="{{ asset('admin/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ asset('admin/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>

    <!-- Dashboard App js -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>

</html>
