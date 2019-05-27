<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/')}}employee/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">LARAVEL CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ml-2">
                <a class="nav-link" href="{{route('view-employee')}}">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="card text-center mt-5 col-md-6 mx-auto" >
    <div class="card-header text-uppercase">
        Insert Employee Information
        <h4 class="text-success">{{Session::get('message')}}</h4>
    </div>
    <div class="card-body">
        <form class="" action="{{route('update-employee')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mt-2">
                    <input type="hidden" name="id" value="{{$employee->id}}">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="name" placeholder="Employee Name" value="{{$employee->name}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="email" class="form-control form-control-sm" id="inputEmail3" name="email" placeholder="Employee E-mail" value="{{$employee->email}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="mobile" placeholder="Employee Mobile" value="{{$employee->mobile}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="dept" placeholder="Employee Dept." value="{{$employee->dept}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="religion" placeholder="Employee Religion" value="{{$employee->religion}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="status" placeholder="Employee Status" value="{{$employee->status}}">
                </div>
                <div class="col-sm-12 mt-2">
                    <input type="text" class="form-control form-control-sm" id="inputEmail3" name="district" placeholder="Employee District" value="{{$employee->district}}">
                </div>
                <div class="col-sm-12 mt-4">
                    <button class="btn btn-outline-info btn-block">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>



<script src="{{asset('/')}}employee/css/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}employee/css/bootstrap.js"></script>
</body>
</html>