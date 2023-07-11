<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img  src="/images/logo-5.svg" alt="logo">
            </a>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="navbar-item" href="/">Home</a>
                </li>
                <li class="navbar-item">
                    <a class="navbar-item" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Allsites IT</p>
            </div>
            <div class="col-md-6">
                <p>@copy 2023</p>
            </div>
        </div>
    </footer>
    
    
</body>
</html>