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

{{-- navbar --}}
<nav class="navbar navbar-expand-lg nav-color justify-content-around">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-muted fw-normal" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted  fw-normal" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted  fw-normal" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted   fw-normal" href="{{route('travel.create')}}">Nuova meta</a>
          </li>
          <li class="nav-item text-muted  fw-normal">
            
            <a class="nav-link text-muted fw-normal" href="{{ route('travel.index') }}">
                Lista mete
            </a>
        </ul>
      </div>
    </div>
  </nav>


{{-- Form --}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Modifica una meta:</h1>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row ">

          <x-edit-form
           :travels="$travels"
           />
       
          </div>
    </div>

<x-footer />   
