
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Dados básicos</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('update_user', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="d-flex justify-content-between mb-3">
                <h2>Edição de usuário</h2>
            </div>

            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Nome</label>
                <input name="name" 
                       type="text" 
                       class="form-control @error('name') is-invalid @enderror" 
                       value="{{ $user->name }}" 
                       id="exampleInputName">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>    

            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input name="email" 
                       type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="exampleInputEmail" 
                       value="{{ $user->email }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input name="password" 
                       type="password" 
                       class="form-control" 
                       id="password" 
                       placeholder="Deseja alterar a senha?">
            </div>

            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
<br>
