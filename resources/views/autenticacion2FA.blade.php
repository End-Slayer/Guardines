<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/phishing.css')}}">
    <title>Autenticacion2FA</title>
</head>
<body>

@extends('layouts.app')
@section('title', 'inicio')
@section('content')

<div class="card-container">
    <div class="card">
        <img src="{{ asset('img/2FA1.png') }}" alt="Descripción de la imagen" class="img">
        <span>¿Que es?</span>
        <p class="info">La autenticación de dos factores (2FA) es un método de seguridad que requiere dos formas de verificación para acceder a una cuenta, combinando una contraseña con un dispositivo en posesión del usuario. Esto refuerza la seguridad, evitando accesos no autorizados incluso si la contraseña es robada.</p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/2FA2.png') }}" alt="Descripción de la imagen" class="img">
        <span>Ventajas</span>
        <p class="info"> • Reduce el riesgo de acceso no autorizado a cuentas personales<br>
        • Proporciona una barrera adicional contra ataques de phishing.<br>
        • Los usuarios se sienten más seguros sabiendo que hay un paso extra en el proceso de inicio de sesión.<br>
        • Los usuarios pueden elegir entre varios métodos de autenticación.<br>
        </p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/2FA3.jpeg') }}" alt="Descripción de la imagen" class="img">
        <span>Caracteristicas</span>
        <p class="info">  • Añade una protección adicional al proceso de inicio de sesión.<br>
        • La autenticación puede implementarse de muchas maneras, lo que permite a los usuarios elegir el método más conveniente.<br>
        • Muchas plataformas ofrecen opciones fáciles para activar 2FA en las configuraciones de seguridad del usuario.<br>
        • Envían notificaciones en tiempo real al usuario cuando se intenta acceder a su cuenta.<br>
        </p>   
    </div>
    <div class="card">
        <img src="{{ asset('img/2FA4.png') }}" alt="Descripción de la imagen" class="img">
        <span>Tipos de autenticacion 2FA</span>
        <p class="info">
        • La 2FA por SMS envía un código único al móvil en cada inicio de sesión. Es fácil de usar, pero vulnerable a ataques como el "SIM swapping".<br>
        • Google Authenticator genera códigos temporales cada 30 segundos, ofreciendo mayor seguridad que los SMS.<br>
        • La biometría usa rasgos físicos, como huellas o reconocimiento facial, como segundo factor, destacando por su seguridad y conveniencia.<br>
        </p>
    </div>
</div>

<div class="button-container">
    <a href="{{ route('act2FA2') }}" class="c-button c-button--gooey">  Actividad 1
        <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </a>
    <a href="{{ route('act2FA') }}" class="c-button c-button--gooey">  Actividad 2
        <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </a>
    <a href="{{ route('Actividad-1') }}" class="c-button c-button--gooey">  Actividad 3
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