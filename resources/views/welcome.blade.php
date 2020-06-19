<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


</head>
<body class="home">
<h1 class=" title navigation-center font-color" href="/welcome" style="z-index: 100; position: relative; text-align: center;">Danphe Photography</h1>

<nav class="navbar navbar-expand-lg navbar-light main-navigation" style="z-index: 100">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-auto mr-auto" id="navbarSupportedContent">
        <ul class="navbar-nav navigation-center" >
            <li class="nav-item active navigation-style">
                <a class="nav-link font-color" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item navigation-style">
                <a class="nav-link font-color" href="/gallery">Galleries</a>
            </li>

            <li class="nav-item navigation-style">
                <a class="nav-link font-color" href="/article-index">Articles</a>
            </li>

            <li class="nav-item navigation-style">
                <a class="nav-link font-color" href="/about">About</a>
            </li>

            <li class="nav-item navigation-style">
                <a class="nav-link font-color" href="/contact">Contact</a>
            </li>

        </ul>

    </div>
</nav>
<div class="container-fluid p-0">
    <div style="top: 0; bottom: 0; right: 0; left: 0; position: absolute; z-index: 10;">
      <img src="{{asset('images/Homepage.jpg')}}" style="height: 100vh; width:100%; max-width: 100%">
    </div>
</div>
<div class="social-links">
    <ul class="social-links-ul">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
