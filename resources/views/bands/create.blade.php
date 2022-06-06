@extends('layouts.layout')
@section('title', 'create')
@section('content')
<div class="mb-3">
    <form action=" {{route('bands.store')}}" method="POST">
        @csrf
        <label for="nome_gruppo" class="form-label">Aggiungi nome del gruppo</label>
        <input type="text" class="form-control" id="nome_gruppo" aria-describedby="emailHelp" name="nome_gruppo">
</div>
<div class="mb-3">
    <label for="componenti_gruppo" class="form-label">Aggiungi nome di un componente</label>
    <input type="text" class="form-control" id="componenti_gruppo" aria-describedby="emailHelp"
        name="componenti_gruppo">
</div>
<div class="mb-3">
    <label for="genere" class="form-label">Aggiungi genere</label>
    <input type="text" class="form-control" id="genere" aria-describedby="emailHelp" name="genere">
</div>
<div class="mb-3">
    <label for="canzone" class="form-label">Aggiungi titolo della canzone</label>
    <input type="text" class="form-control" id="canzone" aria-describedby="emailHelp" name="canzone">
</div>
<div class="mb-3">
    <label for="codice_voto" class="form-label">Aggiungi codice votazione</label>
    <input type="text" class="form-control" id="codice_voto" aria-describedby="emailHelp" name="codice_voto">
</div>
<div class="mb-3">
    <label for="nazionalità" class="form-label">Aggiungi la nazionalità</label>
    <input type="text" class="form-control" id="nazionalità" aria-describedby="emailHelp" name="nazionalità">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
