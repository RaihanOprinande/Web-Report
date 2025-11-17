<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard')</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-remove.png" />

    {{-- SB Admin 2 CSS --}}
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    {{-- DataTables --}}
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
.sidebar-logo {
    max-width: 100%;
    height: auto;
    max-height: 40px; /* batas tinggi agar tidak kebesaran */
    object-fit: contain;
}


    html, body {
    height: 100%;
}

.logout-btn:hover {
    color: #dc3545 !important; /* merah bootstrap */
}

.logout-btn:hover i {
    color: #dc3545 !important; /* ikon ikut merah */
}



#wrapper {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    height: 100vh;
    position: sticky;
    top: 0;
}

#content-wrapper {
    flex: 1;
    min-height: 100vh;
    background: #f8f9fc;
}

</style>

</head>

<body id="page-top">

    <div id="wrapper">

        {{-- Sidebar (responsif bawaan SB Admin) --}}
        @include('layouts.sidebar')

        {{-- Content Wrapper --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{-- Main Content --}}
            <div id="content">

                {{-- Topbar --}}
                @include('layouts.topbar')

                {{-- Page Content --}}
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

        </div>
        {{-- End Content Wrapper --}}
    </div>
    {{-- End Wrapper --}}

    {{-- JS Libraries --}}
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    {{-- ChartJS --}}
    <script src="{{ asset('js/chart.js/Chart.min.js') }}"></script>

    {{-- DataTables --}}
    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>

    {{-- Select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Stack Script --}}
    @stack('scripts')

</body>

</html>
