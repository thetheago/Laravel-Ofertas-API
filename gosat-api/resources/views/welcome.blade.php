
@extends('layouts.main-layout')

@section('title', 'Teste Gosat')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
@section('body')
    <div id="main">
        <div class="form">
            <form method="POST" name="form-cpf">
                @csrf
                <div class="title">Bem-Vindo &#128516;</div>
                <div class="subtitle">Digite seu cpf para consultar sua oferta!</div>
                <div class="input-container ic1">
                    <input oninput="mascara(this)" name="cpf" class="input" id="cpf-input" placeholder="000.000.000-00">
                </div>
                <input type="submit" value="Consultar" class="submit">
            </form>
            <div id='msg-error-cpf' class="alert alert-danger" role="alert" hidden>
                <span class="material-symbols-outlined">priority_high</span><b>CPF NÃO ACEITO</b>
            </div>
        </div>
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
    <script src="/js/welcome.js"></script>
@endsection
