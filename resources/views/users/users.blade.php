@extends('layouts.base')

@section('page-title','Usuarios')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div>

    <div class="d-flex justify-content-between">
        <h2>Usuarios</h2>
        <a href="{{route('create_user')}}"><button class="btn btn-success"><i class="bi bi-person-plus"></i></button></a>
    </div>

    <form action="{{route('users')}}" method="GET"
            class="mb-3" style="width: 30%">
        <div class="input-group input-group-m">

        <input type="text" 
            name="keyword" 
            id="searchInput"
            placeholder="Pesquise pelo Nome ou Email"
            class=" form-control"
            value="{{request()->keyword}}">
        <button class="btn btn-primary" type="submit">Pesquisar</button>

        </div>

    </form>
    
    <table class="table">

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
                @can('edit', App\Models\User::class)
                     <a href="{{route('edit_user',$user->id)}}"><i class="btn btn-primary bi bi-pencil-square"></i></a>
                @endcan
                   <br>
                @can('delete',App\Models\User::class)
                    <form action="{{ route('delete_user', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-person-dash"></i>
                    </button>
                </form>
                @endcan
        
            </td>
        </tr>
    @endforeach

</tbody>

</table>
{{ $users->links('pagination::bootstrap-5') }}

</div>
@endsection
