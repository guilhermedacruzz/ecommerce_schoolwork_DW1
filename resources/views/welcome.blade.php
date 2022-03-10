@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

{{-- Comentário De Teste --}}
<main class="container-fluid p-0">
    <div id="slide-menu" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur.</h5>
                    <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="#" class="btn btn-dark animate__animated animate__fadeInUp">Lorem, ipsum.</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slide-menu" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide-menu" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>

@endsection
