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
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/purchase')}}" style="color:white">Purchases</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/student/view')}}" style="color:white">Student Information</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link menu-end" href="{{url('/register')}}" style="color:white">Register</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link menu-end" href="{{url('/login')}}" style="color:white">Login</a>
                      </li>
                      <li class="nav-item active">
                         <a class="nav-link" href="{{url('/logout')}}" style="color:white">logout</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <form action="{{$url}}" method="post">
    @csrf
    <div class="container">
        <h1 class="text-center">{{$title}} Purchase</h1>
        <div class="form-group">
          <label >Student Name</label>
          {{-- //Dusra method aur ek hai, aap ye bhi kr skte hai --}}
          <select name="name" class="form-control" value="{{isset($purchased_course) && $purchased_course->stu_name}}">
            @foreach($nme as $row)
               <option value="{{$row->name}}">{{$row->name}}</option>
            @endforeach
          </select>
          <span class="text-danger">
               @error('stu_name')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Transaction Id</label>
          <input type="text" name="txn_id" id="" class="form-control" value="{{isset($purchased_course) && $purchased_course->txn_id}}">
           <span class="text-danger">
               @error('txn_id')
                  {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Date of Purchase</label>
          <input type="text" name="purchase_date" id="" class="form-control" value="{{isset($purchased_course) && $purchased_course->purchase_date}}" >
          <span class="text-danger">
               @error('purchase_date')
                 {{$message}}
               @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Purchased Items</label>
          <input type="text" name="items" id="" class="form-control" value="{{isset($purchased_course) && $purchased_course->items}}">
          <span class="text-danger">
               @error('items')
                 {{$message}}
               @enderror
           </span>
        </div>
        <div class="form-group">
          <label for="">Quantity</label>
          <input type="text" name="qty" id="" class="form-control" value="{{isset($purchased_course) && $purchased_course->qty}}">
          <span class="text-danger">
               @error('quantity')
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