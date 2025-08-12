
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Interesses</h5>
    </div>

    <div class="card-body">
        <form action="{{route('update_interests',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
      
        @foreach (['Carro','Moto','Caminhão'] as $item)
               
        <div class="form-check">
        <input class="form-check-input @error('interests') is-invalid @enderror"
        type="checkbox" name="interests[][name]"
        value="{{$item}}"
        id="checkDefault"
        @checked(in_array($item,$user->interests->pluck('name')->toArray()))
        >
        <label class="form-check-label" for="checkDefault">
        {{$item}}
        </label>
        @if($loop -> last)

            @error('interests')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

        @endif
        </div>

        @endforeach    

        <button type="submit" class="btn btn-primary">Editar</button>
    </form> 
    </div>
</div>
<br>
