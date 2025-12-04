@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 5%">#</th>
                <th scope="col" style="width: 50%">Nome</th>
                <th scope="col" style="width: 15%">Participantes</th>
                <th scope="col" style="width: 30%">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{$event->users_count}}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="/events/edit/{{$event->id}}" class="btn btn-info btn-sm edit-btn">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                            <form action="/events/{{$event->id}}" method="POST" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container mt-4">
    <h1>Eventos que estou participando</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(!empty($eventsAsParticipant) && count($eventsAsParticipant) > 0)
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 5%">#</th>
                <th scope="col" style="width: 50%">Nome</th>
                <th scope="col" style="width: 15%">Participantes</th>
                <th scope="col" style="width: 30%">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsAsParticipant as $event)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{ $event->users_count ?? count($event->users) }}</td>
                    <td>
                        <form action="/events/leave/{{ $event->id }}" method="POST" class="m-0">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                <ion-icon name="trash-outline"></ion-icon> Sair do Evento
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
    @else
    <p>Você ainda não está participando de nenhum evento. <a href="/">Veja todos os eventos.</a></p>
    @endif
</div>
@endsection