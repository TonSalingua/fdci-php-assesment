<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custom Auth Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="row d-flex justify-content-center m-5">
        <div class="col-md-4 col-md-offset-4 border border-primary" style="margin-top:20px">
            <h4>Registration</h4>
            <hr>
            <form action="{{route('register-user')}}" method="post" style="background-color:rgb(236, 236, 227)">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('failed'))
                <div class="alert alert-danger">{{Session::get('failed')}}</div>
                @endif
                @csrf
            <div class="form-group m-1">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
                <span class="text-danger">@error('name'){{$message}}@enderror </span>
            </div>
            <div class="form-group m-1">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Enter E-mail" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}}@enderror </span>
            </div>
            <div class="form-group m-1">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                <span class="text-danger">@error('password'){{$message}}@enderror </span>
            </div>
            <div class="for group m-2">
                <button class="btn btn-block btn-primary" type="submit">Register</button>
            </div>
            <br>
            <a class="m-1" href="login" style="text-decoration:none">Already Registered? Click Here</a>
            </form>
        </div>
    </div>
   </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>