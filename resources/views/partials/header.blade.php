<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css')}}">
    <title>Header de CiberGuardianes</title>
</head>
<body>
    <header>
        <div class="logo-titulo">
            <img src="img/logooo.png" alt="logo" class="logo">
            <h1 class="titulo">CIBERGUARDIANES</h1>
        </div>
        <nav class="navegacion">
            <ul>
                <li><a class="nav-button" href="{{ route('inicio') }}"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a class="nav-button" href="{{ route('iniciarsesion') }}"><i class="fas fa-sign-in-alt"></i>Iniciar Sesión</a></li>
                <li><a class="nav-button" href="{{ route('foro') }}"><i class="fas fa-comments"></i>Foro</a></li>
                <li><a class="nav-button" href="{{ route('perfil') }}"><i class="fas fa-user"></i>Perfil</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>