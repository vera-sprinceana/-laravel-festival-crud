@extends('layouts.layout')
@section('title', 'Band')
@section('content')

<div class="container">
    @if(session('message'))
    <div class="alert alert-success">
     {{session('message')}}   
    </div>
    @endif
    <div class="col text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> {{$band->nome_gruppo}}</h5>
                <p class="card-text">{{$band->componenti_gruppo}}</p>
                <p class="card-text">{{$band->genere}}</p>
                <p class="card-text">{{$band->canzone}}</p>
                <p class="card-text">{{$band->codice_voto}}</p>
                <p class="card-text">{{$band->nazionalità}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

@endsection