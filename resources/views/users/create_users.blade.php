@extends('layouts.base')

@section('page-title','Usuarios')

@section('content')
    <div class="d-flex justify-content-between">
        <h2>Criação de Usuarios</h2>
        <a href="{{route('users')}}">Cancelar</a>
    </div>
    <div>
        <form action="{{route('create_users')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Nome">
    
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Confirme sua senha</label>
                <input name='password_confirmation' type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn btn-success">Criar</button>
        </form>
    </div>
@endsection
