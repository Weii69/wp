<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<<<<<<< HEAD
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
>>>>>>> 76159c0 (Pesan commit Anda)
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
<<<<<<< HEAD
                <nav class="nav-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/addPage">Add Recipe</a></li>
                        <li><a href="#">All Recipe</a></li>
=======
                <nav class="nav-menu" >
                    <ul>
                        <li><a href="{{route('foodies.home')}}">Beranda</a></li>
                        <li><a href="{{route('add.recipe')}}">Tambah Resep</a></li>
                        <li><a href="{{route('allRecipes')}}">Semua Resep</a></li>
                        @if (Auth::check())
                            <li><a href="{{route('profile')}}">Profil</a></li>
                        @else
                            <li><a href="{{route('register')}}">Daftar</a></li>
                        @endif
>>>>>>> 76159c0 (Pesan commit Anda)
                    </ul>
                </nav>
            </div>
        </header>
<<<<<<< HEAD

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
=======
        <body style="font-family: 'Raleway', sans-serif;">

                @yield('content')

        </body>

    </div>
    <footer class="footer">
        <p>&copy; Project Website Programming</p>
    </footer>
>>>>>>> 76159c0 (Pesan commit Anda)
</body>
</html>
