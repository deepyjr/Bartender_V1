@extends('home')
@section('contenu')
<div class="container mt-5">
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Prenom</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Questions - Remarques</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="button" class="btn btn-primary mt-5">Envoyer</button>
</div>

@endsection