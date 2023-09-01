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
                             <a class="nav-link" href="{{url('/register')}}" style="color:white">Customer</a>
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
             placeholder="Search something here">
        </div>
        <button class="btn btn-primary d-inline-block m-2">Search</button>
        </form>
    <a href="{{route('index-purchase')}}">
          <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
    </a>
    <a href="">
          <button class="btn btn-primary d-inline-block m-2 float-right" type="denger">Delete </button>
        </a>
    <table class="table">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Transaction ID</th>
                <th>Purchase Date</th>
                <th>Items</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchased_courses as $purchased_course)
            <tr>
                <td>{{ $purchased_course->stu_name }}</td>
                <td>{{ $purchased_course->txn_id }}</td>
                <td>{{ $purchased_course->purchase_date }}</td>
                <td>{{ $purchased_course->items }}</td>
                <td>{{ $purchased_course->qty }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
      
   
  </body>
</html>