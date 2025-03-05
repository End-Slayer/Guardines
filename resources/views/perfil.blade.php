<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/perfil.css')}}">
    <title>Document</title>
</head>
<body>
    
@extends('layouts.app')
@section('title', 'inicio')
@section('content')

<div class="perfil-container">
    <div class="foto-perfil">
        <img src="https://via.placeholder.com/150" alt="Foto de Perfil">
    </div>
    <div class="info-perfil">
        <h1>Omar</h1>
        <p><strong>Correo Electrónico:</strong> omar@gmail.com</p>
        <p><strong>Fecha de nacimiento:</strong> 16/07/2001</p>
        <p><strong>Biografía:</strong> Breve descripción sobre el usuario. Aquí puedes incluir información sobre tus intereses, ocupación, etc.</p>
        <div class="redes-sociales">
            <a href="https://www.facebook.com" class="social-icon">Facebook</a>
            <a href="https://www.twitter.com" class="social-icon">Twitter</a>
            <a href="https://www.instagram.com" class="social-icon">Instagram</a>
        </div>
    </div>
</div>

@endsection

</body>
</html>