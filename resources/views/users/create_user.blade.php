@extends('layouts.base')

@section('page-title','Criação de Usuario')

@section('content')
    <div>
         <div class="d-flex justify-content-between">
            <h2>Criação de Usuario</h2>
            <a href="{{route('users')}}">Cancelar</a>
        </div>

        

    <form action="{{route('store_user')}}" method="POST">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="exampleInputName" aria-describedby="emailHelp">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>    

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label @error('email') is-invalid @enderror" value="{{old('email')}}">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
             @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label @error('password') is-invalid @enderror" value="{{old('password')}}">Senha</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword">
             @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirme sua senha</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPasswordConfirmation">
        </div>

  <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

    </div>
@endsection
