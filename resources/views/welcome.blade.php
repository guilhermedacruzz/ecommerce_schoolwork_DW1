@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

<!-- ======= Main ======= -->
<main class="container-fluid p-0">

    <!-- ======= Carousel Init ======= -->
    <div id="slide-menu" class="carousel slide" data-bs-ride="carousel">

        <!-- Inicadores Laterais -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>
        </div>

        <!-- Button Prev -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slide-menu" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <!-- Button Next -->
        <button class="carousel-control-next" type="button" data-bs-target="#slide-menu" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <!-- End Carousel -->

    <!-- ======= Carousel Products ======= -->
    <div id="slide-products" class="carousel slide bg-primary" data-bs-ride="carousel">

        <!-- Inicadores Laterais -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slide-products" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slide-products" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slide-products" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container-sm"> 
                    <div class="row p-5">
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container-sm"> 
                    <div class="row p-5">
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="container-sm"> 
                    <div class="row p-5">
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <img class="img-thumbnail" src="/img/mouse.png">
                            <h5 class="py-2">Lorem ipsum dolor sit.</h5>
                            <h6><strong>Por: <span class="h4">$4.56</span></strong></h6>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button Prev -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slide-products" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <!-- Button Next -->
        <button class="carousel-control-next" type="button" data-bs-target="#slide-products" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <!-- End Carousel -->

</main> <!-- End Main -->

@endsection
