<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          @hasSection('title')

          <title>@yield('title') - {{ config('app.name') }}</title>
          @else
          <title>{{ config('app.name') }}</title>
          @endif

          <!-- plugins:css -->
          <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.css') }}">
          <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/font-awesome.css') }}">
          <link rel="stylesheet" href="{{ asset('css/shared/style.css') }}" />
          <link rel="stylesheet" href="{{ asset('vendors/css/vendor.addons.css') }}">
          <link rel="shortcut icon" href="{{ asset('css/select2.min.css') }}" />
          <link rel="stylesheet" href="{{ asset('css/demo_1/style.css') }}">
          <link rel="stylesheet" href="{{ asset('css/main.css') }}">
          <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
          <link type="text/css"
               href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css"
               rel="stylesheet" />
          <link rel="stylesheet" href="{{ asset('css/dataTables.checkboxes.css') }}">
          <!-- endinject -->
          <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
          @livewireStyles
          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
     </head>

     <body>

          @yield('body')
          <div class="header-fixed">
               <nav class="t-header">
                    <div class="t-header-brand-wrapper">
                         <!-- <a href="../../index.html">
                         <img class="logo" src="../../../assets/images/logo.svg" alt="Logo">
                         <img class="logo-mini" src="../../../assets/images/logo_mini.svg" alt="Logo">
                    </a> -->
                         <h5 class="btn btn-xs btn-primary ml-3"><small><strong>P.I.S</strong></small> &nbsp;<i
                                   class="mdi mdi-heart-pulse"></i></h5>
                         <button class="t-header-toggler t-header-desk-toggler d-none d-lg-block">
                              <svg class="logo" viewBox="0 0 200 200">
                                   <path class="top" d="
                                   M 40, 80
                                   C 40, 80 120, 80 140, 80
                                   C180, 80 180, 20  90, 80
                                   C 60,100  30,120  30,120
                              "></path>
                                   <path class="middle" d="
                                   M 40,100
                                   L140,100
                              "></path>
                                   <path class="bottom" d="
                                   M 40,120
                                   C 40,120 120,120 140,120
                                   C180,120 180,180  90,120
                                   C 60,100  30, 80  30, 80
                              "></path>
                              </svg>
                         </button>
                    </div>
                    <div class="t-header-content-wrapper">
                         <div class="t-header-content">
                              <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                                   <i class="mdi mdi-menu"></i>
                              </button>
                         </div>
                    </div>
               </nav>
               <!-- partial -->
               <div class="page-body">
                    <!-- partial:../../partials/_sidebar.html -->
                    <div class="sidebar">
                         <ul class="navigation-menu">
                              <li class="nav-category-divider">MAIN</li>
                              <li>
                                   <a href="{{ route('dashboard') }}">
                                        <span class="link-title">Dashboard</span>
                                        <i class="mdi mdi-gauge link-icon"></i>
                                   </a>
                              </li>
                              <li>
                                   <a href="#patient-pages" data-toggle="collapse" aria-expanded="false">
                                        <span class="link-title">Patient</span>
                                        <i class="mdi mdi-account-card-details link-icon"></i>
                                   </a>
                                   <ul class="navigation-submenu collapse" id="patient-pages">
                                        <li>
                                             <a href="{{ route('patient-create') }}">New patient</a>
                                        </li>
                                        <!-- <li>
                                        <a href="#" target="_blank">Patient Records</a>
                                   </li> -->
                                   </ul>
                              </li>
                              <li>
                                   <a href="#consultation-pages" data-toggle="collapse" aria-expanded="false">
                                        <span class="link-title">Consultation</span>
                                        <i class="mdi mdi-file-document-box link-icon"></i>
                                   </a>
                                   <ul class="navigation-submenu collapse" id="consultation-pages">
                                        <li>
                                             <a href="{{ route('consultation-index') }}">New Consultation</a>
                                        </li>
                                   </ul>
                              </li>
                         </ul>
                         <div class="sidebar_footer">
                              <div class="user-account">
                                   <a class="user-profile-item" href="#"><i class="mdi mdi-account"></i> Profile</a>
                                   <a class="user-profile-item" href="#"><i class="mdi mdi-settings"></i> Account
                                        Settings</a>
                                   <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary btn-logout" type="submit">Logout</button>
                                   </form>
                              </div>
                              <div class="btn-group admin-access-level">
                                   <div class="avatar">
                                        <img class="profile-img" src="http://www.placehold.it/50x50" alt="">
                                   </div>
                                   <div class="user-type-wrapper">
                                        <p class="user_name">{{ Auth::user()->firstname }} {{ Auth::user()->middlename
                                             }} {{
                                             Auth::user()->lastname }}</p>
                                        <div class="d-flex align-items-center">
                                             <div class="status-indicator small rounded-indicator bg-success"></div>
                                             <small class="user_access_level">Admin</small>
                                        </div>
                                   </div>
                                   <i class="arrow mdi mdi-chevron-right"></i>
                              </div>
                         </div>
                    </div>
                    <!-- partial -->
                    <div class="page-content-wrapper">
                         <div class="container">
                              <div class="page-content-wrapper-inner">
                                   <div class="content-viewport">
                                        <div class="row">
                                             <div class="col-md-12">
                                                  @yield('content')
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <!-- content viewport ends -->
                         <!-- partial:../../partials/_footer.html -->
                         <footer class="footer">
                              <div class="row">
                                   <div class="col-sm-6 text-center text-sm-right order-sm-1">
                                        <ul class="text-gray">
                                             <li><a href="#">Terms of use</a></li>
                                             <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                   </div>
                                   <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                                        <small class="text-muted d-block">Copyright © 2019 <a
                                                  href="http://www.uxcandy.co" target="_blank">UXCANDY</a>. All rights
                                             reserved</small>
                                        <small class="text-gray mt-2">Handcrafted With <i
                                                  class="mdi mdi-heart text-danger"></i></small>
                                   </div>
                              </div>
                         </footer>
                         <!-- partial -->
                    </div>
                    <!-- page content ends -->
               </div>
          </div>
          <script src="{{ asset('vendors/js/core.js') }}"></script>
          <script src="{{ asset('vendors/js/vendor.addons.js') }}"></script>
          <!-- endinject -->
          <!-- TinyMCE -->
          <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
          <script src="{{ asset('vendors/tinymce/themes/modern/theme.js') }}"></script>
          <!-- build:js -->
          <script src="{{ asset('js/template.js') }}"></script>
          <script src="{{ asset('js/forms/validation.js') }}"></script>
          <script src="{{ asset('js/dashboard.js') }}"></script>
          <script src="{{ asset('js/select2.min.js') }}"></script>
          <!-- DataTable Responsive -->
          <script src="{{ asset('js/datatables.min.js') }}"></script>
          <script type="text/javascript"
               src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>
          <script src="{{ asset('js/dataTables.checkboxes.min.js') }}"></script>
          <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
          <!-- endbuild -->
          <script>
               $(".alert").fadeTo(5000, 500).slideUp(500, function() {
                    $(".alert").slideUp(500);
               });
          </script>
          <script>
               Fancybox.bind('[data-fancybox="ConsultationImage"]', {
                    caption: function(fancybox, carousel, slide) {
                         return (
                              `${slide.index + 1} / ${carousel.slides.length} <br />` + slide
                              .caption
                         );
                    },
               });
          </script>
          <script>
               // X-ray
               $(document).ready(function() {
                    var table = $('#xrayRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/xray',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                              data: 'id',
                              name: 'id'
                         }, {
                              data: 'name',
                              name: 'name'
                         }]

                    });


                    // Handle form submission event
                    $('#form-xray').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });

               // Ultrasound
               $(document).ready(function() {
                    var table = $('#ultrasoundRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/ultrasound',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                              data: 'id',
                              name: 'id'
                         }, {
                              data: 'name',
                              name: 'name'
                         }]

                    });


                    // Handle form submission event
                    $('#form-ultrasound').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });

               // Laboratory
               $(document).ready(function() {
                    var table = $('#laboratoryRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/laboratory',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                              data: 'id',
                              name: 'id'
                         }, {
                              data: 'name',
                              name: 'name'
                         }]

                    });


                    // Handle form submission event
                    $('#form-laboratory').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });

               // MRI
               $(document).ready(function() {
                    var table = $('#mriRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/mri',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                              data: 'id',
                              name: 'id'
                         }, {
                              data: 'name',
                              name: 'name'
                         }]

                    });


                    // Handle form submission event
                    $('#form-mri').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });

               // CT Scan
               $(document).ready(function() {
                    var table = $('#ctRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/ct',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                              data: 'id',
                              name: 'id'
                         }, {
                              data: 'name',
                              name: 'name'
                         }]

                    });


                    // Handle form submission event
                    $('#form-ct').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });

               // Prescription
               $(document).ready(function() {
                    var table = $('#prescriptionRequestTable').DataTable({
                         'processing': true,
                         'serverSide': true,
                         'ajax': '/request/prescription',
                         'columnDefs': [{
                              'targets': 0,
                              'checkboxes': {
                                   'selectRow': true
                              }
                         }],
                         'select': {
                              'style': 'multi'
                         },
                         'order': [
                              [1, 'asc']
                         ],
                         columns: [{
                                   data: 'id',
                                   name: 'id'
                              },
                              {
                                   data: 'type',
                                   name: 'type'
                              },
                              {
                                   data: 'name',
                                   name: 'name'
                              },
                              {
                                   data: 'description',
                                   name: 'description'
                              },
                              {
                                   data: 'sig',
                                   name: 'sig'
                              }
                         ]
                    });


                    // Handle form submission event
                    $('#form-prescription').on('submit', function(e) {
                         var form = this;
                         var rows_selected = table.column(0).checkboxes.selected();

                         // Iterate over all selected checkboxes
                         $.each(rows_selected, function(index, rowId) {
                              // Create a hidden element
                              $(form).append(
                                   $('<input>')
                                   .attr('type', 'hidden')
                                   .attr('name', 'selected_request[]')
                                   .val(rowId)
                              );
                         });
                    });
               });
          </script>

          <script>
               tinymce.init({
                    selector: 'textarea#note',
                    plugins: 'lists',
                    toolbar: 'numlist bullist',
               });

               tinymce.init({
                    selector: 'textarea#meds',
                    plugins: 'lists',
                    toolbar: 'numlist bullist',
               });

               tinymce.init({
                    selector: 'textarea#other_concern',
                    plugins: 'lists',
                    toolbar: 'numlist bullist',
               });

               tinymce.init({
                    selector: 'textarea#work_up',
                    plugins: 'lists',
                    toolbar: 'numlist bullist',
               });
          </script>
          @yield('scripts')
          @livewireScripts
     </body>

</html>