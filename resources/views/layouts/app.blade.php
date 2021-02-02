


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Logo</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu">
                    <i class='bx bx-menu-alt-right'></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
                
                <div class="d-flex">
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">{{ auth()->user()->username }}</a>
                        </li>
                        <form class="nav-item" action="{{ route('logout') }}" method="post">
                            @csrf
                            <!-- <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Log Out</a> -->
                            <a  class="nav-link" aria-current="page" href="{{ route('logout') }}"><button type="submit">Log Out</button></a>
                        </form>
                    </ul>
                @endauth
                @guest
                    <ul class="navbar-nav">        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Log In</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register' )}}">Register</a>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </nav>

<div class="container">
    @yield('content')
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>