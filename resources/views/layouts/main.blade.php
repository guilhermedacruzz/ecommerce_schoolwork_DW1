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
        <!-- CSS Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Css Style -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- JS Scripts -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2 px-lg-5">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a href="index.html" class="navbar-brand p-2 me-2">
                        <i class="fas fa-coins"></i>
                        Lorem
                    </a>
                    <div class="collapse navbar-collapse my-3 my-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link active" aria-current="page" href="/">Lorem</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="/">Lorem</a>
                            </li>
                        </ul>

                        <hr class="d-lg-none text-white-50">

                        <ul class="navbar-nav flex-row ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2"href="#">
                                    <i class="fa-solid fa-hand-holding-medical"></i>
                                </a>
                            </li>
                        </ul>

                        <a class="btn btn-dark my-2 my-lg-0 ms-lg-3">
                            <i class="fas fa-shopping-bag fa-bounce"></i>
                            Carrinho
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Footer &copy; 2022</p>
        </footer>
    </body>
</html>
