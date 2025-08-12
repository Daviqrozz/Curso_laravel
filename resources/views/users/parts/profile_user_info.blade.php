
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Dados de perfil</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('update_profile', $user->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="exampleInputaddress" class="form-label">Endereço</label>
                <input name="address" 
                       type="text" 
                       class="form-control @error('address') is-invalid @enderror"  
                       id="exampleInputadress"
                       value={{$user->profile->address}}>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>    
            <div class="mb-3">
                <label class="form-label" for="UserType">Tipo de Pessoa</label>
                    <select class="form-control" name="type" id="UserType">
                        <option value="PJ">PJ</option>
                        <option value="PF">PF</option>
                    </select>
            </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
            
      

    </div>
</div>
<br>
