
<script src="https://kit.fontawesome.com/52273a289b.js" crossorigin="anonymous"></script>

<div class="card h-100 ">
    <img src="{{ Storage::url($travel->img) }}" class="card-img-top h-50" alt="{{ $travel->title }}">
    <div class="card-body">
        <h5 class="card-title">Name: {!! $travel->name !!}</h5>
        <p class="card-text">State: {!! $travel->state !!}</p>
       <p class="card-text">Descrizione: {!! Str::limit($travel->description, 50) !!}</p>
       <a href="{{ route('travels.show', ['id' => $travel->id]) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
       <a href="{{route('travels.edit', $travel) }}" class="btn btn-warning"><i  class="fa-solid fa-pen-to-square"></i></a>
       

    </div>
</div>