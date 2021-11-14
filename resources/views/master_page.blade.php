<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAU OJ</title>
    <link rel="stylesheet" href="css/nav.css">
    @yield('page_css')
</head>
<body>

@include('layouts.topnavbar')

@yield('main_content')

@include('layouts.footer')
@include('layouts.sitefooter')

</body>
</html>
