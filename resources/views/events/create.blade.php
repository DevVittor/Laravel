@extends('layouts.main')
@section('title','ABRIME - Criar Evento')

@section('content')

<div class="container-create">
    <h2>Crie seu evento</h2>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="">Anexar Imagem:</label>
            <input type="file" accept="image/png, image/jpg" name="img" required id="fileimg">
            <img src="verImg" alt="" id="previewImg">
        </p>
        <p>
            <label for="">Evento:</label>
            <input type="text" name="title" required id="title">
        </p>
        <p>
            <label for="">Data do evento:</label>
            <input type="date" name="date" id="date">
        </p>
        <p>
            <label for="">Descrição:</label>
            <input type="text" name="description" required id="description">
        </p>
        <p>
            <label for="">Cadeiras</label>
            <input type="checkbox" name="items[]" id="" value="Cadeiras">
        </p>
        <p>
            <label for="">Mesas:</label>
            <input type="checkbox" name="items[]" id="" value="Mesas">
        </p>
        <p>
            <label for="">Cidade:</label>
            <input type="text" name="city" required id="city">
        </p>
        <p>
            <label for="">Evento Privado? </label>
            <select name="private" id="">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </p>
        <input type="submit" value="Criar Evento">

        <script src="/js/infoImg.js">

        </script>

        @endsection