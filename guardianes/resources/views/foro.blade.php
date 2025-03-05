<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foro.css')}}">
    <title>Document</title>
</head>
<body>
    
@extends('layouts.app')
@section('title', 'inicio')
@section('content')

<main>
    <section id="2fa">
        <h2>Autenticación de 2FA</h2>
        <p>La autenticación de dos factores (2FA) es un método de seguridad que requiere dos formas de verificación para acceder a una cuenta. ¿Qué opinas sobre su efectividad?</p>
        <div class="comments">
            <h3>Comentarios:</h3>
            <ul>
                <li>Usuario1: Creo que 2FA es esencial para proteger nuestras cuentas.</li>
                <li>Usuario2: A veces es incómodo, pero vale la pena.</li>
            </ul>
        </div>
        <form>
            <textarea placeholder="Escribe tu comentario aquí..." required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <section id="malicious-links">
        <h2>Enlaces Maliciosos</h2>
        <p>Los enlaces maliciosos pueden comprometer la seguridad de nuestros dispositivos. ¿Cómo identificas un enlace sospechoso?</p>
        <div class="comments">
            <h3>Comentarios:</h3>
            <ul>
                <li>Usuario3: Siempre reviso la URL antes de hacer clic.</li>
                <li>Usuario4: Uso herramientas que analizan enlaces.</li>
            </ul>
        </div>
        <form>
            <textarea placeholder="Escribe tu comentario aquí..." required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
</main>

@endsection

</body>
</html>