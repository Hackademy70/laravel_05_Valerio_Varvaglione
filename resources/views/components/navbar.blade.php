<nav class="navbar navbar-expand-lg nav-color justify-content-around fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-muted" href="{{ route('home') }}"><img src="/img/logo.png" class="img-logo" alt=""> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light   fw-normal" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light  fw-normal" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-normal" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light  fw-normal" href="{{route('travel.create')}}">Nuova meta</a>
          </li>
          <li class="nav-item text-light fw-normal">
            
            <a class="nav-link text-light fw-normal" href="{{ route('travel.index') }}">
                Lista mete
            </a>
        </ul>
      </div>
    </div>
  </nav>