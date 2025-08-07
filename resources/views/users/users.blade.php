@extends('layouts.base')

@section('page-title','Usuarios')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div>
    <table class="table">

         <div class="d-flex justify-content-between">

        <h2>Usuarios</h2>
        <a href="{{route('create_user')}}"><button class="btn btn-success"><i class="bi bi-person-plus"></i></button></a>

    </div>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($users as $user)
     <tr>
        <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                  <form action="{{route('edit_user',$user->id)}}">
                    <button class="bi bi-pencil-square btn btn-primary"></button>
                  </form>

                <form action="{{route('delete_user',$user->id)}}">
                  <button  type="submit" class="bi-person-dash btn btn-danger" id="DeleteButton"></button>
              </form>

            </td>
        @endforeach
    </tr>
  </tbody>
</table>
</div>
@endsection
