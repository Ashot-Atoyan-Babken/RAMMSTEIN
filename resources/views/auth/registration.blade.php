<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{'css/style.css'}}">
</head>
<body>
<div class="login-box">
    <h2>Registration</h2>
    <form action="{{route('admin.store')}}" method="post">
        @csrf
        <div class="user-box">
            <input type="text" name="username" autocomplete='false'>
            <label>Username</label>
            @error('username')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="user-box">
            <input type="email" name="email" autocomplete='false'>
            <label>Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="user-box">
            <input type="password" name="password" autocomplete='false'>
            <label>Password</label>
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="user-box">
            <input type="password" name="password_confirmation" autocomplete='false'>
            <label>Confirm Password</label>
            @error('password_confirmation')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <a class="a" href="#">
            <button class="btn btn-info" style="margin:-10px -20px;">
                Registration
            </button>
        </a>
    </form>
    <p class="text-info d-flex align-items-center mt-5">you already have an account <a href="{{route('admin.login')}}"
                                                                                       class="text-uppercase ml-2"> log
            in</a></p>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>
