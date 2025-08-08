@extends('layouts.auth')

@section('body-class', 'login-page')
     <div class="login-box">
      <div class="login-logo">
        <a href="{{route('login')}}"><b>Log</b>in</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Preencha os dados para iniciar a sessão</p>

                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif

          <form action="{{route('login')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
         
            <div class="row">
              <div class="col-8">
              </div>
             
              <div class="">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                  <a href="{{route('register')}}" class="text-center">Nao possui uma conta?</a>
                </div>
              </div>
     
            </div>
          
          </form>
         
      </div>
    </div>
@section('content')

@endsection
