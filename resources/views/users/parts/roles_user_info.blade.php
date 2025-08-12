
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Cargos</h5>
    </div>
 
    <div class="card-body">
        <form action="{{route('update_roles',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
      
        @foreach ($roles as $role)
               
        <div class="mb-3 form-check">
        <input class="form-check-input @error('roles') is-invalid @enderror"
        type="checkbox" 
        name="roles[]"
        value="{{$role->id}}"
        id="checkDefault"
        @checked(in_array($role->name,$user->roles->pluck('name')->toArray()))
        >
        <label class="form-check-label" for="checkDefault">
        {{$role->name}}
        </label>
        @if($loop -> last)

            @error('roles')

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
