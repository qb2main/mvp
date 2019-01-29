<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/css/additional_admin.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

@include('admin.parts.alerts')

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav">

            @include('admin.parts.menu')

        </div>
        <div class="col-sm-10">

            @yield('content')

        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>
</body>

<script src="/js/app.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('js')

</html>
