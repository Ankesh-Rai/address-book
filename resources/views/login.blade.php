<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* background-image: url(); */
            background: url(picture/police2.jpg);
            height: 100vh;
            background-repeat: no-repeat;
            width: 100%;
            background-position: center;
            background-size: cover;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 67px;
            max-width: 400px;
            height: 350px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login-column {
            display: contents;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>

<body>
    <div id="login" style="background-color: rgba(0, 0, 0, 0.6);height:100vh;">
        <h2 class="text-center text-white pt-5">Address Book</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="background-color:white;">
                        <form id="login-form" class="form" action="{{ route('check')}}" method="post">
                            @csrf
                            <div class="result">
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                                @endif
                            </div>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>