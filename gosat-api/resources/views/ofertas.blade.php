
@extends('layouts.main-layout')

@section('title', 'Ofertas')
<link rel="stylesheet" href="/css/card.css">
@section('body')
    <input type="hidden" name="_cpf" value="{{$cpf}}">
    @csrf
    <div id="main">
        <div class="header">
            <h3>Ofertas do CPF: {{$cpf}}</h3>
            <a href="/">Voltar</a>
        </div>
        <div class="container"></div>
    </div>
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <script src="/js/ofertas.js"></script>
@endsection
