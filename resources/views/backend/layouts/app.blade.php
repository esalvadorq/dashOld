<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('after-styles')

    {{-- ########################################################################################## --}}
    {{-- Autocomplete --}}
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha256-IdfIcUlaMBNtk4Hjt0Y6WMMZyMU0P9PN/pH+DFzKxbI=" crossorigin="anonymous" />
 --}}
    <!-- Script -->
   {{--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

    {{-- ########################################################################################## --}}

</head>

<body class="c-app">
    @include('backend.includes.sidebar')

    <div class="c-wrapper c-fixed-components">
        @include('backend.includes.header')
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        @include('includes.partials.announcements')

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @include('includes.partials.messages')
                        @yield('content')
                    </div>
                    <!--fade-in-->
                </div>
                <!--container-fluid-->
            </main>
        </div>
        <!--c-body-->

        @include('backend.includes.footer')
    </div>
    <!--c-wrapper-->

    @stack('before-scripts')
    {{-- ########################################################################### --}}
    {{-- autocomplete script --}}

    {{-- <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var tipo = ['extenso', 'medio', 'corto'];
        $(document).ready(function() {


            /*  $('#find').autocomplete({
                 source: tipo
             }); */

            $("#find").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('auto.getautocomplete') }}",
                        type: 'post',
                        dataType: "json",
                        data: {
                            _token: CSRF_TOKEN,
                            search: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    $('#find').val(ui.item.label);
                    $('#employeeid').val(ui.item.value);
                    $('#descripcion').val(ui.item.value_desc);
                    $('#contenido').val(ui.item.value_cont);
                    $('#fecha').val(ui.item.value_date);
                    return false;
                }
            });



        });
    </script> --}}


    {{-- ########################################################################### --}}



    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/backend.js') }}"></script>
    <livewire:scripts />
    @stack('after-scripts')
</body>

</html>
