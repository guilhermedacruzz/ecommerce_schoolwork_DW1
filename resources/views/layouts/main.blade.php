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
        <footer class="bd-footer bg-light">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 ps-4">
                        <h6>Nos siga nas redes sociais: </h6>
                        <ul class="list-unstyled d-flex flex-row">
                            <li class="mb-2">
                                <a class="btn btn-outline-dark me-4" href="#"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-dark me-4" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-dark me-4" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-dark me-4" href="#"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-6 ps-4">
                        <h6>Métodos de Pagamento: </h6>
                        <ul class="list-unstyled d-flex flex-row flex-wrap">
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-solid fa-credit-card"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-mastercard"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-paypal"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-amex"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-apple-pay"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-jcb"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-cc-diners-club"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 ps-4">
                        <h6>Outras Formas: </h6>
                        <ul class="list-unstyled d-flex flex-row flex-wrap">
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-brands fa-pix"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-solid fa-ticket"></i></a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-primary me-4" href="#"><i class="fa-solid fa-people-arrows-left-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="text-dark-50">
                <div class="row p-4 mt-5">
                    <div class="col-lg-3 mb-3">
                        <h1 class="mb-2">Lorem ipsum dolor sit.</h1>
                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus libero delectus magni, ipsum quibusdam rerum consequatur deserunt ad! Eligendi, ipsa.</p>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h6 class="h6 text-secondary py-2">
                            <i class="fa-solid fa-angles-up"></i>
                            Lorem
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h6 class="h6 text-secondary py-2">
                            <i class="fa-solid fa-angles-down"></i>
                            Lorem
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h6 class="h6 text-secondary py-2">
                            <i class="fa-solid fa-angles-down"></i>
                            Lorem
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h6 class="h6 text-secondary py-2">
                            <i class="fa-solid fa-angles-down"></i>
                            Lorem
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                            <li class="mb-2">lorem</li>
                        </ul>
                    </div>
                </div>
                <hr class="text-dark-50">
                <div class="d-flex flex-column p-4">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                    <h6>&copy 2022 Copyright: <a class="text-dark" href="n">Lorem, ipsum dolor.</a></h6>
                </div>
            </div>
        </footer>
    </body>
</html>
