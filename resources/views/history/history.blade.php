@extends('home')
@section('contenu')
<div class="container mt-3">
@foreach($historys as $history)
    <div class="card mb-3" style="max-width: 900px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="{{ $history->img_path}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$history->nom}}</h5>
                <p class="card-text">{{$history->description}}</p>
                <p class="card-text"><small class="text-muted">{{ $history->dateDiff }}</small></p>
                
            </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection