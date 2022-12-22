
<!-- bundle -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="{{asset('/')}}admin/assets/js/vendor/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- Datatables js -->
<script src="{{asset('/')}}admin/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/responsive.bootstrap5.min.js"></script>

<!-- Datatable Init js -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.datatable-init.js"></script>

<!-- demo app -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.dashboard.js"></script>
<!-- end demo js-->
<!--ck-edit-->
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'long_description' );
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('script')

//toastr
@if(Session::has('error'))
    <script>
        toastr.error("{{Session::get('error')}}");
    </script>
    {Session::forget('error')}}
@endif
@if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success("{{Session::get('success')}}","Congratulation!")
    </script>
    {Session::forget('success')}}
@endif


