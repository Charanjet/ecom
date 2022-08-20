<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}" type="text/css">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    {{ View::make('header')}}
    
    @yield('content')

    {{ View::make('footer')}}

</body>
</html>