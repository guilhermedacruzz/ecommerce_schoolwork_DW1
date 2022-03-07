@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

{{-- Comentário De Teste --}}
<main class="container-fluid p-0">
    @for($i = 0; $i < 20; $i++)
        <h1>Teste</h1>
    @endfor
</main>

@endsection
