@extends('layouts.auth')

@section('body-class', 'login-page')
     <div class="login-box">
      <div class="login-logo">
        <a href="../index2.html"><b>Admin</b>LTE</a>
      </div>
    
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

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
                </div>
              </div>
     
            </div>
          
          </form>
         
      </div>
    </div>
@section('content')

@endsection
