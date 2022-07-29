@extends('layout.main')

@section('container')

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center" style="font-size: 22px">Registration From</h1>
              <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                  <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                  <label for="name" style="font-size: 16px">Name</label>
                  @error('name')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size: 16px">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                  <label for="username" style="font-size: 16px">Username</label>
                  @error('username')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size: 16px">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                  <label for="email" style="font-size: 16px">Email address</label>
                  @error('email')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size: 16px">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                  <label for="password" style="font-size: 16px">Password</label>
                  @error('password')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback" style="font-size: 16px">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" style="font-size: 16px">Register</button>
                
              </form>
                <small class="d-block text-center mt-2" style="font-size: 16px">Already registered? <a href="/login">Login</a></small>
            </main>

        </div>
    </div>
@endsection