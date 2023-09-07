@extends('layouts.main')
@section('main-section')
<h1 class="bg-blue text-center" colour="white">
  Welcome to Scordemy
</h1>
<div class="container">
  <div class="row">
      <div class="col-md-4 offset-md-4">
          <div class="card form-holder">
              <div class="card-body">
                <h4 class="d-inline-block text-center">New User    
                  <a href="{{route('register.index')}}"><button class="btn btn-primary d-inline-block m float-right">Sign Up</button></a>
                  </h4>
                <h4 class="d-inline-block text-center">Already Signed-Up?    
                  <a href="{{route('index-student')}}"><button class="btn btn-primary d-inline-block m float-right">Login</button></a>
                  </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection