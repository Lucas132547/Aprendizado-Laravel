@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
        
<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os proximos eventos</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
             <img src="" alt="">
             <div class="card-body">
                <p class="card-date">02/12/2025</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="/" class="btn btn-primary">Saiba mais</a>
             </div>
        </div>
        @endforeach
    </div>
</div>

@endsection