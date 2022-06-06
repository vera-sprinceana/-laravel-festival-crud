@extends('layouts.layout')
@section('title', 'Band')
@section('content')
<div class="container">
    <a href=" {{route('bands.create')}}" class="btn btn-primary mt-3">crea una nuona band</a>  
    @if(session('message'))
    <div class="alert alert-success">
     {{session('message')}}   
    </div>
    @endif
    <div class="row mt-5">
      
        @forelse($bands as $band)
        <div class="col text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> {{$band->nome_gruppo}}</h5>
                    <p class="card-text">{{$band->componenti_gruppo}}</p>
                    <p class="card-text">{{$band->genere}}</p>
                    <p class="card-text">{{$band->canzone}}</p>
                    <p class="card-text">{{$band->codice_voto}}</p>
                    <p class="card-text">{{$band->nazionalità}}</p>
                    <a href=" {{route('bands.show', $band->id)}} " class="btn btn-primary">Dettagli</a>
                    <a href=" {{route('bands.edit', $band->id)}} " class="btn btn-warning">Modifica</a>
                    <form action="{{route('bands.destroy', $band->id)}} " method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                </div>
            </div>
        </div>

        @Empty
    </div>
    @endforelse
</div>

@endsection
