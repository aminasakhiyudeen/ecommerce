@extends("layout.master")
@section("title","Home")

@section("content")
<link href="{{ asset('css/signin.css') }}"  rel="stylesheet" />

<main class="form-signin w-50 m-auto">
  <form action="{{route('do.login')}}" method="post">
     @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    @if(session()->has("message"))
    <div class="alert alert-danger" role="alert">
      {{ session()->get("message")}}
    </div>
    @endif
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
      @error('email') <p class="alert alert-danger">{{$message}}</p> @enderror
    </div>
    <br>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('password') <p class="alert alert-danger">{{$message}}</p> @enderror
    </div>
     
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
      <a href="{{route('register')}}">Register</a>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
  </form>
</main>

@endsection