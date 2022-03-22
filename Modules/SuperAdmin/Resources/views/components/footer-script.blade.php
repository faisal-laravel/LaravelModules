 <!-- BEGIN: Vendor JS-->
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/extensions/toastr.min.js')}}"></script>

    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{Module::asset('SuperAdmin:app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/js/core/app.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{Module::asset('SuperAdmin:app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <script src="{{Module::asset('SuperAdmin:app-assets/js/scripts/tables/table-datatables-advanced.min.js')}}"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

    @yield('js')