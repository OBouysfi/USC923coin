<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('front/img/icon.jpeg')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/404.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
</head>
<body>
  
    @yield('content')
   <script src="{{asset('front/js/bootstrap.bundle.js')}}"></script>
   <script src="{{asset('front/js/app.js')}}"></script>
</body>
</html>


