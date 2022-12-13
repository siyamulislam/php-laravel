<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>OTMS- @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    @include('admin.includes.css')
    @yield('style')
</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid"
      data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
@include('admin.includes.menu');
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
          @include('admin.includes.header')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start content page -->
              @yield('body')
                <!-- end row -->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        @include('admin.includes.footer')
        <!-- end Footer -->

    </div>
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('admin.includes.right-sidebar')

<div class="rightbar-overlay"></div>
<!-- /End-bar -->
@include('admin.includes.js')
@yield('script')
</body>

</html>
