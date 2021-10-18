@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

    <div class="card-header"><h4> ADD VISITOR </h4></div>
    <div class="card-body">
        @if (Session::has('visitor_saved'))

            <div class="alert alert-success">
                {{Session::get('visitor_saved')}}
            </div>

        @endif
        <form action="{{route('saveVisitor')}}" method="post">
            @csrf

            <div class="form-group" style="margin:10px;">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" name="firstName" placeholder="Enter first name">
              @error('firstName') <span style="color: red;"> {{$message}} </span> @enderror
            </div>

            <div class="form-group" style="margin:10px;">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastName" placeholder="Enter last name">
                @error('lastName') <span style="color: red;"> {{$message}} </span> @enderror

            </div>

            <div class="form-group" style="margin:10px;">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                @error('email') <span style="color: red;"> {{$message}} </span> @enderror

            </div>

            <div class="form-group" style="margin:10px;">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="Enter date of birth">
                @error('dob') <span style="color: red;"> {{$message}} </span> @enderror

            </div>

            <div class="form-group" style="margin:10px; margin-top:30px;">
                <button type="submit" class="btn btn-primary"> SAVE </button>
            </div>
        </form>

    </div>
  </div>

</div>
</div>
</div>
</div>
@endsection
