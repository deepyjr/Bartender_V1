@extends('home')

@section('contenu')

<section class="jumbotron text-center">
    <div class="container">
      <h1>Mojito Bartenders</h1>
      <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Découvrir !</a>
      </p>
    </div>
</section>


<div class="album py-5 bg-light">
        <div class="container">          
          <div class="row">
          @foreach ($boissons as $boisson)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{ $boisson->img_path }}" data-holder-rendered="true">
                <div class="card-body">
                <h2> {{ $boisson->nom }}</h2>
                  <p class="card-text">{{ $boisson->description }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <form action="{{ route('commandes.store' )}}" method="POST">
                    @csrf
                      <input type="hidden" name="boisson_id" value="{{ $boisson->id }}" />
                      <div class="btn-group">
                        <input type="submit" value="Commander" class="btn btn-outline-secondary" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    @endsection