<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            Shoppe |
        @endsection
    </title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">

    @stack('style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')

            <div class="col-9 offset-3 p-0 position-relative">
                <!-- Header -->
                @include('admin.layouts.header')

                <!-- Main -->
                @yield('content')

                <!-- Footer -->
                @include('admin.layouts.footer')

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
</body>

</html>
