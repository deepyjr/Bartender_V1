@extends('home')
@section('contenu')
<div class="container mt-3">
    <div class="card mb-3" style="max-width: 900px;">
    @foreach($detailsCommandes as $commande)
        <div class="row no-gutters">
        
            <div class="col-md-4">
            <img src="{{$commande->img_path}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$commande->nom}}</h5>
                <p class="card-text">{{$commande->description}}</p>
                <div class="progress">
                @if ($commande->etat == 'En attente')
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                @elseif ($commande->etat == 'En cours' )
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                @elseif ($commande->etat == 'Bientot pret')
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                @elseif ($commande->etat == 'Finitions')
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                @else
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                @endif

                </div>
            </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>
@endsection