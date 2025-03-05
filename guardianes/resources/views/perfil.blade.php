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
        <h1>Nombre del Usuario</h1>
        <p><strong>Correo Electrónico:</strong> usuario@example.com</p>
        <p><strong>Fecha de nacimiento:</strong> 05/05/2000</p>
        <p><strong>Biografía:</strong> Breve descripción sobre el usuario. Aquí puedes incluir información sobre tus intereses, ocupación, etc.</p>
        <div class="redes-sociales">
            <a href="#" class="social-icon">Facebook</a>
            <a href="#" class="social-icon">Twitter</a>
            <a href="#" class="social-icon">Instagram</a>
        </div>
    </div>
</div>

@endsection

</body>
</html>