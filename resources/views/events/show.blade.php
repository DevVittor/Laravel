@extends('layouts.main')

@section('title','ABRIME - ' . $event->title)

@section('content')

<section class="show">
    <div class="container-evento">
        <div class="box-card">
            <img src="/imgs/events/{{$event->img}}" alt="">
        </div>
        <div class="box-content">
            <h2>{{$event->title}}</h2>
            <h4>{{$event->description}}</h4>
            <h4>Localização: {{$event->city}}</h4>
            <p>{{ $event->date ? date('d/m/Y', strtotime($event->date)) : 'Data não disponível' }}</p>
            <ul>
            @if($event->items != null)
                @foreach($event->items as $item)
                    <li><span>{{$item}}</span></li>
                @endforeach
            @else
                <li><span>Não possui mais informações</span></li>
            @endif
            </ul>
            @if($event->private == 1)
            <h3>Evento: Privado</h3>
            @else
            <h3>Evento: Público</h3>
            @endif
            <h4 id="qtdIngresso"></h4>
            <a href="#">Comprar Ingresso</a>
        </div>
    </div>
</section>

<script>
    let mostraringresso = document.querySelector('#qtdIngresso');
    let valor = Math.floor(Math.random() * 11) +1;
    mostraringresso.textContent = `Quantidade de ingressos: ${valor}`;
</script>
    
@endsection