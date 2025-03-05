<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/actividad1.css')}}">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')
@section('title', 'inicio')
@section('content')



<div class="container-wrapper-genially">
    <video class="loader-genially" autoplay="autoplay" loop="loop" playsinline="playsInline" muted="muted">
        <source src="https://static.genially.com/resources/loader-default-rebranding.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <div id="67c283717538f376a94db7a7" class="genially-embed"></div>
</div>
<script>
    (function (d) {
        var js, id = "genially-embed-js", ref = d.getElementsByTagName("script")[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement("script");
        js.id = id;
        js.async = true;
        js.src = "https://view.genially.com/static/embed/embed.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));
</script>

@endsection

</body>
</html>
