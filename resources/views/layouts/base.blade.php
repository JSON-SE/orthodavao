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
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" /> -->
        <!-- <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css"> -->
        @livewireStyles
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        @yield('body')
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
        <!-- <script src="{{ asset('js/data-table.js') }}"></script> -->
        <!-- test -->
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <!-- DataTable Responsive -->
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <!-- <script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script> -->
        <!-- <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <!-- endbuild -->
        <script>
            $(".alert").fadeTo(5000, 500).slideUp(500, function() {
                $(".alert").slideUp(500);
            });

            $(function() {
                $('#patientTable').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ajax: '/datatable/patient',
                    columns: [{
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'merge_address',
                            name: 'merge_address'
                        },
                        {
                            data: 'contact',
                            name: 'contact'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ]
                });
                // $('div.dataTables_filter input').focus()
            });
            tinymce.init({
                selector: 'textarea#subjective',
                plugins: 'lists',
                toolbar: 'numlist',
            });

            tinymce.init({
                selector: 'textarea#objective',
                plugins: 'lists',
                toolbar: 'numlist',
            });

            tinymce.init({
                selector: 'textarea#assessment',
                plugins: 'lists',
                toolbar: 'numlist',
            });

            tinymce.init({
                selector: 'textarea#plan',
                plugins: 'lists',
                toolbar: 'numlist',
            });

            $(function() {
                $('#findPatientConsultationTable').DataTable();
            });

            $(function() {
                $('#consultationTable').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ajax: '/datatable/consultation',
                    columns: [{
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'age',
                            name: 'age'
                        },
                        {
                            data: 'gender',
                            name: 'gender'
                        },
                        {
                            data: 'merge_address',
                            name: 'merge_address'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ]
                });
            });
        </script>
        <script>
            Fancybox.bind('[data-fancybox="ConsultationImage"]', {
                caption: function(fancybox, carousel, slide) {
                    return (
                        `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
                    );
                },
            });
        </script>
        @livewireScripts
    </body>

</html>