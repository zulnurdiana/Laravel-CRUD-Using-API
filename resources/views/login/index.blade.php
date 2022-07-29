@extends('layout.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
        
        @if (session()->has('success'))
            
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 22px">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @if (session()->has('loginError'))
            
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 22px">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center" style="font-size: 22px">Please Login</h1>

            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                  <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                  <label for="username" style="font-size: 16px">Username</label>
                  @error('username')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size: 16px">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  <label for="password" style="font-size: 16px">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit" style="font-size: 16px">Login</button>
                
              </form>
                <small class="d-block text-center mt-2" style="font-size: 16px">Not registered? <a href="/register">Register now!</a></small>
            </main>

        </div>
    </div>
@endsection