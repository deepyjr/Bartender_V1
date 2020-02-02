
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <!-- le logo -->
  <a class="navbar-brand" id="logo-head" href="#">

  <svg class="bi bi-bucket-fill" width="30px" height="30px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 3.5A4.5 4.5 0 005.5 8h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 0010 3.5z" clip-rule="evenodd"></path>
  <path fill-rule="evenodd" d="M3.61 7.687A.5.5 0 014 7.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H6.802a1.5 1.5 0 01-1.464-1.175L3.512 8.108a.5.5 0 01.098-.42z" clip-rule="evenodd"></path>
</svg>
  Bartender Life</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    <!-- les items -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('boissons.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('commandes.index') }}">Commande(s) en cours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('history.index') }}">Historique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mes Informations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contacter</a>
      </li>
    </ul>

    <!-- rechercher a droite -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>