@extends('layouts.main')

@section('title','ABRIME - Início')

@section('content')

<div class="container-search">
    <h2>Busque por evento</h2>
    <form action="/" method="get">
        <input type="text" name="search" id="" placeholder="Digite o nome do evento" autocomplete="off">
        <input type="submit"  value="Procurar Evento">
    </form>
</div>

<div class="container-events">
    
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @if(count($events)<= 0)
            <h4>Nenhum resultado ({{count($events)}})</h4>
        @else
            <h4>Resultados: ({{count($events)}})</h4>
        @endif
    @endif

    <div class="card-events">
        @foreach($events as $event)
            <div class="card">
                <h2>{{$event->title}}</h2>
                <img src="/imgs/events/{{$event->img}}" alt="{{$event->title}}" title="{{$event->title}}">
                <p>{{$event->description}}</p>
                <h4>{{$event->city}}</h4>
                <p>{{ $event->date ? date('d/m/Y', strtotime($event->date)) : 'Data não disponível' }}</p>
                @if ($event->private == 1)
                <h3>Privado</h3>
                @else
                <h3>Público</h3>
                @endif
                <a href="/events/{{$event->id}}">Saiba Mais</a>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <h1>Não foi encontrado nenhum evento chamado {{$search}}</h1>
            <a href="/">Ver todos os eventos</a>
        @endif
    </div>
</div>

@endsection