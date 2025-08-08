@extends('layouts.base')

@section('content')

    @section('content')
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    <form action="{{route('update_user',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="d-flex justify-content-between">
            <h2>Edição de usuario</h2>
            <a href="{{route('users')}}">Cancelar</a>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>

            <input name="name" 
            type="name" 
            class="form-control @error('name') is-invalid @enderror" 
            value="{{$user->name}}" 
            id="exampleInputName" aria-describedby="emailHelp">
            @error('name')

            <div class="invalid-feedback">
                {{$message}}
            </div>

            @enderror
        </div>    

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label @error('email') is-invalid @enderror" >Email</label>

            <input name="email" type="email" 
            class="form-control" 
            id="exampleInputEmail" 
            aria-describedby="emailHelp"
            value="{{$user->email}}">
            @error('email')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label" >Senha</label>

            <input name="password" type="password" 
            class="form-control" 
            id="password" 
            placeholder="Deseja alterar a senha?"
            aria-describedby="empasswordHelp">

        </div>

        
  <button type="submit" class="btn btn-primary">Editar</button>

@endsection
