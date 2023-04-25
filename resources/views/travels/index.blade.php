<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   

  
</body>


  </html>
{{-- Navbar --}}
<nav class="navbar navbar-expand-lg nav-color justify-content-around">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-muted   fw-normal" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted   fw-normal" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted  fw-normal" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted   fw-normal" href="{{route('travel.create')}}">Nuova meta</a>
          </li>
          <li class="nav-item text-muted  fw-normal">
            
            <a class="nav-link text-muted  fw-normal" href="{{ route('travel.index') }}">
                Lista Comic
            </a>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Creazione Card --}}

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h3 class="fw-normal">Lista delle mete aggiunte dai nostri utenti:</h3>
            </div>
        </div>
    </div>


    @if(session('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif

    <div class="container">
        <div class="row gy-3">

            @foreach ($travels as $travel)
                <div class="col-sm col-md-3 my-2">
                    <x-travel-card 
                      :travel="$travel" 
                    />
                </div>
            @endforeach


        </div>
    </div>


<x-footer />