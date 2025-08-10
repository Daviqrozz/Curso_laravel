@extends('layouts.base')

@section('content')

    @section('content')
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    
    @include('users.parts.user_basic_info')
    @include('users.parts.profile_user_info')
    <a href="{{ route('users') }}" class="btn btn-secondary btn-sm">Cancelar</a>

@endsection
