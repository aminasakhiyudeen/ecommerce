<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eCommerce Prototype - Admin Side</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/custome.css') }}"  rel="stylesheet" />
  </head>
  <body>
    
<main class="form-signin w-100 m-auto">
    <form action="{{route('admin.do.login')}}" method="post">
      @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in - Admin Side</h1>
@if(session()->has("message"))
    <div class="alert alert-danger" role="alert">
      {{ session()->get("message")}}
    </div>
    @endif
        <div class="form-floating">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
              @error('email') <p class="alert alert-danger">{{$message}}</p> @enderror
        </div>
        <br>
        <div class="form-floating">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
             @error('password') <p class="alert alert-danger">{{$message}}</p> @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2015–2026</p>
    </form>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>