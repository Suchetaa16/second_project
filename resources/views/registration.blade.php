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
  <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Scordemy</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}" style="color:white"><span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/register')}}" style="color:white">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/purchase')}}" style="color:white">Purchases</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/student/view')}}" style="color:white">Student Information</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <form action="{{$url}}" method="post">
    @csrf
    <div class="container">
        <h1 class="text-center">Student Registration</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
           <span class="text-danger">
               @error('name')
                  {{$message}}
               @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" id="" class="form-control" value="{{old('email')}}" >
          <span class="text-danger">
               @error('email')
                 {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">DOB</label>
          <input type="text" name="dob" id="" class="form-control">
          <span class="text-danger">
               @error('dob')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
            <label for="gender" class= "col-md-4 col-form-label">Gender</label>
                <div class="form-check" >
                    <input class="form-check-input" type="radio" name="gender" value="male">
                        <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="other">
                        <label class="form-check-label" for="other">Other</label>
                </div>
            <span class="text-danger">
               @error('gender')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Class</label>
          <input type="text" name="class" id="" class="form-control">
          <span class="text-danger">
               @error('class')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label >Course Category</label>
          <select name="course_cat" class="form-control">
            @foreach($data as $row)
               <option value="{{$row->course_cat}}">{{$row->course_cat}}</option>
            @endforeach
          </select>
          <span class="text-danger">
               @error('course_cat')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Phone No</label>
          <input type="text" name="phone_no" id="" class="form-control">
          <span class="text-danger">
               @error('phone_no')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">State</label>
          <input type="text" name="state" id="" class="form-control">
          <span class="text-danger">
               @error('state')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Country</label>
          <input type="text" name="country" id="" class="form-control">
          <span class="text-danger">
               @error('country')
                 {{$message}}
               @enderror
           </span>
        </div>


        <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="address" id="" class="form-control">
          <span class="text-danger">
               @error('address')
                 {{$message}}
               @enderror
           </span>
        </div>


        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" id="" class="form-control">
          <span class="text-danger">
               @error('password')
                 {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="text" name="confirm_password" id="" class="form-control">
          <span class="text-danger">
               @error('confirm_password')
                 {{$message}}
               @enderror
           </span>
        </div>
        <button class="btn btn-primary">
         Submit
        </button>
    </div>
    </form>
      
    
  </body>
</html>