<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - Login Form with floating placeholder and light button</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
    <h2>Login</h2>
    <form action="{{route('admin.show')}}">
        <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
        </a>
    </form>
</div>
<!-- partial -->

</body>
</html>
