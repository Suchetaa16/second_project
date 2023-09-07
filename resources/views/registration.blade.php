
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
  @if (!isset($student))
    @php
      $student['name'] = $student['user_name'] = $student['email'] = $student['dob'] = $student['gender'] = $student['class'] = $student['course_cat'] = $student['phone_no'] = $student['state'] = $student['country'] = $student['address'] = "";
    @endphp
  @endif
        
    <h4 class="d-inline-block m-2 float-right">Already Signed-Up?
      <a href="{{route('index-student')}}"><button class="btn btn-primary d-inline-block m float-right" >Login</button></a>
      </h4>

    <form action="{{$url}}" method="post">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
    @csrf
    <div class="container mt-4 card p-3 bg-white">
    
        <h1 class="text-center">{{$title}} Student</h1>
        <div class="row">
        <div class="form-group col-md-6 required">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" value="{{$student['name']}}"/>
           <span class="text-danger">
               @error('name')
                  {{$message}}
               @enderror
          </span>
        </div>

        <div class="form-group col-md-6 required">
          <label for="">Email</label>
          <input type="email" name="email" id="" class="form-control" value="{{$student['email']}}"/>
          <span class="text-danger">
               @error('email')
                 {{$message}}
               @enderror
          </span>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6 required">
          <label for="">DOB</label>
          <input type="text" name="dob" id="" class="form-control" value="{{$student['dob']}}"/>
          <span class="text-danger">
               @error('dob')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group col-md-6 required">
          <label for="">Class</label>
          <input type="text" name="class" id="" class="form-control" value="{{$student['class']}}"/>
          <span class="text-danger">
               @error('class')
                 {{$message}}
               @enderror
           </span>
        </div>
      </div>

        <div class="row">
          <div class="form-group col-md-6 required">
            <label for="gender" class= "d-inline-block col-md-4 col-form-label">Gender</label>
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="gender" value="m" {{$student['gender']=="male" ? "checked" : "empty"}}/>
                        <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="f" {{$student['gender']=="female" ? "checked" : "empty"}}/>
                        <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="o" {{$student['gender']=="other" ? "checked" : "empty"}}/>
                        <label class="form-check-label" for="other">Other</label>
                </div>
            <span class="text-danger">
               @error('gender')
                 {{$message}}
               @enderror
           </span>
          </div>
        </div>
      <div class="row">
        <div class="form-group col-md-6 required">
          <label >Course Category</label>
          <select name="course_cat" class="form-control" value="{{$student['course_cat']}}">
            @foreach($cat as $row)
               <option value="{{$row->course_cat}}">{{$row->course_cat}}</option>
            @endforeach
          </select>
          <span class="text-danger">
               @error('course_cat')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group col-md-6 required">
          <label for="">Phone No</label>
          <input type="text" name="phone_no" id="" class="form-control" value="{{$student['phone_no']}}"/>
          <span class="text-danger">
               @error('phone_no')
                 {{$message}}
               @enderror
           </span>
        </div>
      </div>
        <div class="row">
        <div class="form-group col-md-6 required">
          <label for="">State</label>
          <input type="text" name="state" id="" class="form-control" value="{{$student['state']}}"/>
          <span class="text-danger">
               @error('state')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group col-md-6 required">
          <label for="">Country</label>
          <input type="text" name="country" id="" class="form-control" value="{{$student['country']}}"/>
          <span class="text-danger">
               @error('country')
                 {{$message}}
               @enderror
           </span>
        </div>
      </div>

        <div class="row">
        <div class="form-group col-md-15">
          <label for="">Address</label>
          <input type="text" name="address" id="" class="form-control" value="{{$student['address']}}"/>
          <span class="text-danger">
               @error('address')
                 {{$message}}
               @enderror
           </span>
        </div>
      </div>

        <div class="row">
        <div class="form-group col-md-6 required">
          <label for="">Password</label>
          <input type="password" name="password" id="" class="form-control"/>
          <span class="text-danger">
               @error('password')
                 {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group col-md-6 required">
          <label for="">Confirm Password</label>
          <input type="text" name="confirm_password" id="" class="form-control"/>
          <span class="text-danger">
               @error('confirm_password')
                 {{$message}}
               @enderror
           </span>
        </div>
      </div>
        <button class="btn btn-primary">
         Submit
        </button>
    </div>
    </form>
      
    
  </body>
</html>