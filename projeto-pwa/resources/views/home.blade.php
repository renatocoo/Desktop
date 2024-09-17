@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1>Bem-vindo ao Projeto PWA</h1>
        <p class="lead">Esta é uma aplicação Laravel com Livewire e AdminLTE. Explore as funcionalidades e aproveite a experiência de um PWA!</p>
    </div>

    <div class="row">
        <div class="col-md-4">
        @livewire('home-component')
        </div>
        <div class="col-md-4">
        @livewire('home-component')
        </div>
        <div class="col-md-4">
        @livewire('home-component')
        </div>
    </div>
</div>
@endsection
