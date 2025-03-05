<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/phishing.css')}}">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')
@section('title', 'inicio')
@section('content')

<div class="card-container">
    <div class="card">
        <img src="{{ asset('img/p1.png') }}" alt="Descripción de la imagen" class="img">
        <span>Correos electrónicos</span>
        <p class="info">Ciberataque en el que un atacante utiliza el correo electrónico para oculta su verdadera identidad con el fin de engañar a la víctima haciendo creer que el mensaje procede de una fuente de confianza, para que realice una acción deseada.</p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/p3.jpg') }}" alt="Descripción de la imagen" class="img">
        <span>¿Qué es un enlace malicioso?</span>
        <p class="info">Es un “link” aparentemente fiable pero que, redirige a una web falsa que imita ser una web oficial legítima. Una vez que el usuario cree estar navegando por una web de confianza, podría introducir datos personales como su correo electrónico, contraseñas e incluso datos bancarios.</p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/p4.png') }}" alt="Descripción de la imagen" class="img">
        <span>Correos maliciosos con enlaces </span>
        <p class="info">Los estafadores envían enlaces frecuentemente mediante los correos electrónicos. Uno de sus trucos para disfrazar estos enlaces es incluir una imagen que simule ser un archivo adjunto, logrando que los destinatarios ejecuten el malware.</p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/p5.jpg') }}" alt="Descripción de la imagen" class="img">
        <span>¿Cómo protegerse?</span>
        <p class="info">
        • Desconfía de correos desconocidos<br>
        • Verifica la dirección del remitente<br>
        • No hagas clic en enlaces sospechosos<br>
        • Evita descargar archivos inesperados<br>
        • Mantén tu antivirus actualizado
        </p>
    </div>
</div>

<div class="button-container">
    <a href="{{ route('actividad1') }}" class="c-button c-button--gooey">  Actividad 1
        <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </a>
    <a href="{{ route('actividad2') }}" class="c-button c-button--gooey">  Actividad 2
        <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </a>
    <a href="{{ route('Actividad-2') }}" class="c-button c-button--gooey">  Actividad 3
        <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </a>
</div>

@endsection
</body>
</html>