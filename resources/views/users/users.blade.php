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
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
 <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-flex gap-1">
              
                    <a href="{{route('edit_user',$user->id)}}"><i class="btn btn-primary bi bi-pencil-square"></i></a>
               
                <form action="{{ route('delete_user', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-person-dash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</tbody>

</table>
{{ $users->links('pagination::bootstrap-5') }}

</div>
@endsection
