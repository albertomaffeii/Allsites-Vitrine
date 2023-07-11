<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="Blue"/>
    <meta charset="UTF-8"/>
    <meta name="description" content="Allsites - Vitrine virtual é um exemplo de código desenvolvido em Laravel 10 "/>

    <!-- Adicionar Favicon em todas as versões -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- Links & Scripts -->
    <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    


    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="16x16" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="32x32" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="48x48" type="image/svg">

    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="384x384" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('images/Frame.svg')}}">

    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('lightbox/css/lightbox.css')}}"/>
</head>
<body>
<nav>
    <div class="main-wrapper">
        <div class="flex-container">
            <a class="logotipo" href="{{route('site.home')}}">
                <img src="{{asset('images/Asset 1.svg')}}">
            </a>
            <ul class="navigation__itens" id="menu">
                <li>
                    <a href="{{route('site.home')}}"><ion-icon name="home-outline"></ion-icon> Home
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.products')}}">Products
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.blog')}}">Blog
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.about')}}">About Us
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.contact')}}">Contact Us
                        <span class="border-effect"></span>
                    </a>
                </li>
            </ul>
            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">
        <li><a class="title-medium" href="{{route('site.home')}}"><ion-icon name="home-outline"></ion-icon> Home</a></li>
        <li><a class="title-medium" href="{{route('site.products')}}">Products</a></li>
        <li><a class="title-medium" href="{{route('site.blog')}}">Blog</a></li>
        <li><a class="title-medium" href="{{route('site.about')}}">About Us</a></li>
        <li><a class="title-medium" href="{{route('site.contact')}}">Contact Us</a></li>
    </ul>
</div>

@yield('content')

<footer class="main_footer">
    <div class="dots_pattern"></div>
    <div class="main-wrapper flex-container">
        <div class="quality-badge">
            <p>Cur omnia mori? </p>
            <p>Ubi est barbatus zelus? </p>
        </div>
        <ul>
            <li class="footer__links">
                <h4 class="title-small">Social media</h4>
                <a href="{{route('site.blog')}}">Blog</a>
                <a href=" https://www.facebook.com/albertomaffeii/" target="_blank">Facebook</a>
                <a href="#" target="_blank">YouTube</a>
            </li>
            <li class="footer__links">
                <h4 class="title-small">Company</h4>
                <a href="{{route('site.products')}}">Our products</a>
                <a href="{{route('site.about')}}">About Us</a>
                <a href="{{route('site.contact')}}">Contact Us</a>
            </li>
            <li class="footer__links">
                <h4 class="title-small">Contacts</h4>
                <a title="Click on phone number to call" href="tel:16997976915">Telefone</a>
                <a title="Click on email to send automatic email" href="mailto:admin@allsites.com.br">Email</a>
            </li>
        </ul>
    </div>
</footer>
<section class="sub__footer">
    <div class="main-wrapper flex-container row">

            <div class="col-md-6">
                GitHub: <a href="https://github.com/albertomaffeii/Allsites-Vitrine" target="_blank" >github.com/albertomaffeii</a>
            </div>

            <div class="col-md-5">
                <a href="http://allsites.com.br/vitrine" target="_blank" ><img src="{{asset('images/Lock-icon.svg')}}"> Allsites IT | Laravel v{{ Illuminate\Foundation\Application::VERSION }} | PHP v{{ PHP_VERSION }} | MYSQL v10.4.28-MariaDB</a>
            </div>

            <div class="col-md-1">
                <a href="http://mmpx.com.br/" target="_blank">Deisgn by <strong>MMPX</strong></a>
            </div>
       
    </div>
</section>

</body>


<!-- Scripts -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>



<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
</script>
</html>

