<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" />
    <title>Small Website</title>
</head>
<body>
    @include('inc.navbar')
    <br />
    <div class="container">
        @if(Request::is('/'))
        @include('inc.jumbo')
        @endif
    <div class="row">
        <div class="col-md-4 col-lg-4">
                @include('inc.sidenav')
        </div>
        <div class="col-md-8 col-lg-8">
                @yield('content')
        </div>
    </div>
</div>
   {{-- <footer id="footer" class="text-center">
        <p>Copy right 20XX&copy; </p>
   </footer> --}}
</body>
</html>