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
    <style>
    .tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 230px;
    height: 270px;
    background-color: rosybrown;
    color: black;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 10%;
    right: 10%;
    margin-left: -40px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    display: block;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 10%;
    left: 70%;
    margin-left: -15px;
    border-width: 5px;
    border-style: solid;
    border-color: rosybrown transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

td.large .user_info {
    display: none;
    width: 250px;
    height: 270px;
    top: 1%;
    left: 5%;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    position: fixed;
    text-align: justify;
    margin: 15px;
}

.large:hover .user_info {
    display: block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: rosybrown;
    padding: 8px 12px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
    </style>

    @yield('page_css')
</head>
<body>

@include('layouts.topnavbar')

@yield('main_content')

@include('layouts.footer')
@include('layouts.sitefooter')

</body>
</html>
