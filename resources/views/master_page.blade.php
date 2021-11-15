<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAU OJ</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('page_css')
</head>
<body>

@include('layouts.topnavbar')

@yield('main_content')

@include('layouts.footer')
@include('layouts.sitefooter')

</body>
</html>
