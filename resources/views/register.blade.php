@extends("layout.master")
@section("title","Home")

@section("content")
<link href="{{ asset('css/signin.css') }}"  rel="stylesheet" />

<main class="form-signin w-50 m-auto">
  <form action="{{route('do.register')}}" method="post">
     @csrf
    <h1 class="h3 mb-3 fw-normal">Register</h1>
 <div class="form-floating">
      <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
      @error('name') <p class="alert alert-danger">{{$message}}</p> @enderror
    </div>
    <br>
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
      <br>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
  <br>
   <div class="form-floating">
      <input type="date" name="dob" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Date of Birth</label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
  </form>
</main>

@endsection