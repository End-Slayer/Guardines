<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio.css')}}">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')
@section('title', 'inicio')
@section('content')

<h1 class="titulo-centrado">Para obtener más información acerca de los temas, dar clic en la imagen correspondiente</h1>
<div class="card-container">
    <div class="card">
        <div class="card2">
        <a href="{{ route('autenticacion2FA') }}"><img src="{{ asset('img/ac.png') }}" alt="Descripción de la imagen 1"></a>
        </div>
    </div>
    
    <div class="card">
        <div class="card2">
        <a href="{{ route('phishing') }}"><img src="{{ asset('img/ad.jpg') }}" alt="Descripción de la imagen 2"></a>
        </div>
    </div>
    
</div>
<div class="contenedor">
    <h1>Autenticación de dos factores (2FA)</h1>
    <h1>Cuidado con los correos electronicos y enlaces</h1>
</div>
@endsection

</body>
</html>