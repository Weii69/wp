<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <title>Foodies</title>
</head>
<body>
    <div class="wrapper">
        <header class="main-header">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo-container">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Foodies" class="logo-image">
                    <h1 class="site-title">Foodies</h1>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/addPage">Add Recipe</a></li>
                        <li><a href="#">All Recipe</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container content">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p style="margin: auto;">&copy; Project Website Programming</p>
            </div>
        </footer>
    </div>
</body>
</html>
