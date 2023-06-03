<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-5 d-flex justify-content-center" style="background-color:rgb(236, 236, 227)">
        <div class="row">
          <h1>Hi User, Welcome to the Website!</h1>
            <div class="col-md-4 col-md-offset-4 d-flex justify-content-center" style="margin-top:20px">  
    <hr>
    <table class="table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td><a class="btn btn-info btn-sm" href="logout">Logout</a></td>
        </tr>
    </tbody>
</table>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>