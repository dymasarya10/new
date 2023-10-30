@include('adminold.templates.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-secondary-cust">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                @include('admin.partials.navbar')
                @include('admin.partials.heading')
                <div class="container-fluid main-content">

                    @yield('container-admin')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

@include('adminold.templates.foot')
