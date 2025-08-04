@extends('layouts.auth')

@section('body-class', 'register-page')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="/"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="register-box-msg">Register a new membership</p>

      {{-- Exibe erros de validação --}}
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      {{-- Formulário de Registro --}}
      <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
          <input name="name" type="text" class="form-control" placeholder="Full Name" required autofocus>
          <div class="input-group-text"><span class="bi bi-person"></span></div>
        </div>

        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        </div>

        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>

        <div class="input-group mb-3">
          <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>

        <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
