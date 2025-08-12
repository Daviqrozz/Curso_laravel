@extends('layouts.base')

@section('content')

    @section('content')
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

     <div class="d-flex justify-content-between mt-1">
        <h2>Edição de usuário</h2>
    </div>

    @include('users.parts.user_basic_info')
    @include('users.parts.profile_user_info')
    @include('users.parts.interests_user_info')
    <a href="{{ route('users') }}" class="btn btn-secondary btn-sm">Cancelar</a>

@endsection
