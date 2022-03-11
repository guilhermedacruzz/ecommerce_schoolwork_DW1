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
        <!-- Animate -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Css Style -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>

        <!-- ======= Topbar ======= -->
        <div id="topbar" class="fixed-top d-flex align-items-center ">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-envelope"></i><a href="#">info@example.com</a>
                    <i class="fa-solid fa-phone"></i> +1 5589 55488 55
                </div>
                <div class="d-none d-md-block">
                    <a class="animate__animated animate__fadeInDown" href="">Lorem, ipsum.</a>
                </div>
            </div>
        </div> <!-- End Topbar -->

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top navbar navbar-expand-lg navbar-light px-2 px-lg-5">
            <nav class="container-fluid">

                <!-- Button Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logo -->
                <a href="#" class="navbar-brand p-2 me-2">
                    <img src="img/logo.png">
                </a>

                <!-- ======= Collapse ======= -->
                <div class="collapse navbar-collapse my-3 my-lg-0" id="navbarSupportedContent">

                    <!-- Search -->
                    <form class="d-flex p-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <!-- ======= Itens URL ======= -->
                    <ul class="navbar-nav">
                        <li class="nav-item p-2">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown p-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cadernos</a></li>
                                <li><a class="dropdown-item" href="#">Canetas exclusivas</a></li>
                                <li><a class="dropdown-item" href="#">Escravos Nigerianos</a></li>
                                <li><a class="dropdown-item" href="#">Escritório</a></li>
                                <li><a class="dropdown-item" href="#">Informática</a></li>
                                <li><a class="dropdown-item" href="#">Maconha</a></li>
                                <li><a class="dropdown-item" href="#">Mochilas</a></li>
                                <li><a class="dropdown-item" href="#">Organizadores</a></li>
                                <li><a class="dropdown-item" href="#">Pintura e Artesanato</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Outros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/">Sobre</a>
                        </li>
                    </ul> <!-- End Itens URL -->

                    <hr class="d-lg-none text-dark-50">

                    <!-- ======= Options ======= -->
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
                    </ul> <!-- End Options -->

                    <!-- Cart Shopping -->
                    <button class="btn btn-outline-dark my-2 my-lg-0 ms-lg-3 cart-shopping">
                        <i class="fa-solid fa-cart-shopping fa-shake"></i>
                        <span class="cart-shopping-number rounded-circle bg-primary px-1">0</span>
                    </button>

                </div><!-- End Collapse -->

            </nav>
        </header> <!-- End Header -->

        @yield('content')

        <footer class="bd-footer bg-light">
                <hr class="text-dark-50">
                <div class="d-flex flex-column p-4">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                    <h6>&copy 2022 Copyright: <a class="text-dark" href="n">Lorem, ipsum dolor.</a></h6>
                </div>
            </div>
        </footer>

        <!-- ======= PreLoader ======= -->
        <div id="preloader"></div>

        <!-- JS Scripts -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
