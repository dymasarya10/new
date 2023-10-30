<div id="content">

    <!-- Topbar -->
    @include('admin.partials.topbar')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        @include('admin.partials.pageheading')

        @yield('container-admin')

    </div>
    <!-- /.container-fluid -->

</div>
