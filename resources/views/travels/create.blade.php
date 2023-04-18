
<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Aggiungi una meta</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                
                <form method="post" action="{{route('travel.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome meta</label>
                      <input type="text" name="name" class="form-control">
                      
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" class="form-control">
                        
                      </div>

                      <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="text" name="img" class="form-control">
                        
                      </div>

                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>


</x-layout>