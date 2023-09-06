<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Login</h1>
                        @if (Session::has('error'))
                            <p class="text-denger">{{Session::get('error')}}</p>
                        @endif
                        @if (Session::has('success'))
                            <p class="text-success">{{Session::get('success')}}</p>
                        @endif
                        <form action="{{url('/login')}}" method="post">
                            @csrf
                                <div class="row mb-3">
                                  <label for="email" class="col-md-4 col-form-label text-md-end">User Name</label>
                                  <div class="col-md-6">
                                  <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required autocomplete="email" autofocus/>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{$message}}<strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                    <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="password"/>
                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{$message}}<strong>
                                          </span>
                                      @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" id="remember" class="form-check-input" {{old('remember') ? 'checked':''}}>
                                            <label for="remember" class="form-check-label">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 text-left">
                                        <a href='#' class="btn btn-link">Forgot Password?</a>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="submit" class="btn btn-primary" value="login">Login</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        

   

        