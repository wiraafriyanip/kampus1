<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Gradient background */
        .bg-gradient {
            background: linear-gradient(90deg, #ff69b4, #ffc0cb);
        }

        /* Navbar text color */
        .navbar .nav-link {
            color: white !important;
        }

        /* Dropdown menu styling */
        .navbar .dropdown-menu {
            background: linear-gradient(90deg, #ff69b4, #ffc0cb) !important;
            border: none;
        }

        .dropdown-item:hover {
            background-color: #ffd1dc !important;
        }

        /* Footer styling */
        footer {
            color: black;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><font color="white">INFORMATIKA</font></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dosen')}}">Dosen</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/siswa')}}">Siswa</a>
                </li>
                <li class="nav-item"> -->
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Register</a>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                        <a class="dropdown-item" href="{{url('changePassword')}}">Ganti Password</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<div class="container">
    <header>
        <!-- bagian judul -->
        <h3>@yield('judul_halaman')</h3>
        <!-- bagian isi -->
        @yield('konten')
        <br/>
    </header>
    <footer>
        <center>
            <h6>Copyright INFORMATIKA 2024 <br>
                WIRA AFRIYANI PUTRI <br>
                2924027
            </h6>
            
        </center>
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
