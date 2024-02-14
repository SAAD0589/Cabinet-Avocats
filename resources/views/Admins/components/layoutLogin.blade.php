<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@100;400;600&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>@yield('Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/CSS/styleLogin.css') }}">    
    <style>
        body {
  overflow-x: hidden; /* Hide scrollbars */
}
    </style>
</head>
<body>

    
    <div class="cover-image " style="background-image: url({{ asset('assets/images/img-bg.png') }});height:820px">
        <div class="dark-overlay" style="height: 820px"></div>
        <div>
            @yield('content')
        </div>
         
    </div>
    
    {{-- <script src="{{ asset('assets/JS/script.js') }}"></script> --}}
</body>
</html>
