<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">Rumah Sakit Syariah</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="/">Home</a>
                <a class="p-2 text-dark" href=" {{route('pasiens.index')}} ">Pasien</a>
                <a class="p-2 text-dark" href="{{route('dokters.index')}}">Dokter</a>
                <a class="p-2 text-dark" href="#"></a>
            </nav>
            <a class="btn btn-outline-primary" href="#">Sign up</a>
        </div>

    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif @yield('content')
        </div>
    </main>




    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\//script>')
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>