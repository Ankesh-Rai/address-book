<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>

    <style>

    </style>
</head>

<body>
    <!-- Image and text -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 m-3 bg-info" style="height:60px; width:97%;border-radius:3px;">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">
                <img src="picture/police.jpg" width="40" height="40" class="d-inline-block align-top">
            </a>
            <h4>Service Book</h4>
        </nav>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 m-3" style="height:660px;width:98%;">
        <div class="main">
            <div class="input-group mt-5">
                <form action="{{ route('search')}}" method="get" style="width: 54%;">
                    <input type="text" class="form-control" name="searchVal" placeholder="Search">
                    <button class="btn btn-secondary m-3 float-right" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="row m-2 mt-5 table-responsive text-center">
                <div class="result">

                </div>
                <table class="table table-hover" id="user_data" style="border-top:3px solid #1592a5;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Of Birth</th>
                            <th>Date Of Joining</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($posts) && !empty($posts))
                        @forelse($posts as $dt)
                        <tr>
                            <td>{{$dt->id}}</td>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->email}}</td>
                            <td>{{$dt->DOJ}}</td>
                            <td>{{$dt->DOB}}</td>
                            <td><a href="edit/{{$dt->id}}" class="btn btn-secondary btn-sm"><i class="fa fa-cross"></i>Edit</a></td>
                            <td><a href="delete/{{$dt->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a></td>
                            @empty
                            <td>There is no data.</td>
                        </tr>
                        @endforelse
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>