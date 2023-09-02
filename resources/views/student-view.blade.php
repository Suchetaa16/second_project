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
                            <a class="nav-link" href="{{url('/purchase')}}" style="color:white">purchases</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/student/view')}}" style="color:white">Student Information</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
   <div class="container">
   <form action="" class="col-9">
        <div class="form-group">
            <input type="search" name="search" id="search" class="form-control"
             placeholder="Search by name or email" value="{{$search}}">
        </div>
        <button class="btn btn-primary d-inline-block m-2">Search</button>
        <a href="{{url('/student/view')}}">
        <button class="btn btn-primary d-inline-block m-2" type="button">Reset</button>
        </a>
        </form>
        <a href="{{route('register.index')}}">
          <button class="btn btn-primary d-inline-block m-2 float-right">Add </button>
        </a>
        <a href="{{route('purchase.view')}}">
          <button class="btn btn-primary d-inline-block m-2 float-right">Purchase Data</button>
        </a>
        <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Dob</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Course Category</th>
                <th>Phone No</th>
                <th>State</th>
                <th>Country</th>
                <th>Address</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr scope="row">
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->course_cat }}</td>
                <td>{{ $student->phone_no }}</td>
                <td>{{ $student->state }}</td>
                <td>{{ $student->country }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="{{route('student-delete',['id'=>$student->id])}}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{route('student-edit',['id'=>$student->id])}}"><button class="btn btn-primary">Edit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
   </div>
   

  </body>
</html>