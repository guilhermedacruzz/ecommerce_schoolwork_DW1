<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>@yield('title')</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <!-- Icons FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Css Style -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- JS Scripts -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-light bg-transparent px-2 px-lg-5">
            <nav class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="#" class="navbar-brand p-2 me-2">
                    Lorem
                </a>
                <div class="collapse navbar-collapse my-3 my-lg-0" id="navbarSupportedContent">
                    <form class="d-flex p-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <ul class="navbar-nav">
                        <li class="nav-item p-2">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown p-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/">Sobre</a>
                        </li>
                    </ul>

                    <hr class="d-lg-none text-dark-50">

                    <ul class="navbar-nav flex-row  ms-md-auto">
                        <li class="nav-item">
                            <a class="nav-link p-2" href="#">
                                <i class="fa-solid fa-gear"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2"href="#">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="#">
                                <i class="fa-solid fa-clock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="#">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                    </ul>

                    <button class="btn btn-outline-dark my-2 my-lg-0 ms-lg-3 cart-shopping">
                        <i class="fa-solid fa-cart-shopping fa-shake"></i>
                        <span class="cart-shopping-number rounded-circle bg-primary px-1">0</span>
                    </button>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="bd-footer bg-light">
                <hr class="text-dark-50">
                <div class="d-flex flex-column p-4">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                    <h6>&copy 2022 Copyright: <a class="text-dark" href="n">Lorem, ipsum dolor.</a></h6>
                </div>
            </div>
        </footer>
    </body>
</html>
