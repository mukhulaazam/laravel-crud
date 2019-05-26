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

            </ul>
        </div>
    </nav>

    <table border="1" width="980" align="center">
        <tr>
            <th>SL No</th>
            <th>Employee Name</th>
            <th>Employee E-mail</th>
            <th>Employee Mobile</th>
            <th></th>
            <th></th>
        </tr>
        <tr></tr>
    </table>

    <script src="{{asset('/')}}employee/css/bootstrap.bundle.js"></script>
    <script src="{{asset('/')}}employee/css/bootstrap.js"></script>
</body>
</html>