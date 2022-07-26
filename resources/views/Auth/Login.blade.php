<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url ('css/login.css') }}">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form action="/auth" method="post">
            @csrf
            <img src="images/bcc_logo.png" alt="" style="margin:auto; display:block; width:100%;">
            <h1>Login Page</h1>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            <div class="form-control">
                <label for="">Student ID Number:</label>
                <input type="text" name="studentNumber" placeholder="Input your Student ID" value="{{old('studentNumber')}}">
                @error('studentNumber')
                <div class="error">
                    <p>{{$message}}</p>
                </div>
                @enderror
            </div>
            <div class="form-control" >
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Input your Password">
                @error('password')
                <div class="error">
                    <p>{{$message}}</p>
                </div>
                @enderror
            </div>
            <button class="btn">Log In </button>
            <button type="reset" class="btn"> Reset </button> 
        <a href="">Create An Account?</a>
    </form>
    </div>
    <div class="footer-copyright text-left py-3">© COPYRIGHT 2022. ALL RIGHTS RESERVED.
    </div>
</body>
</html>