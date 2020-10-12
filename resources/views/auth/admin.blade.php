<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/') }}/login-style.css">
</head>
<body>
<div class="loginbox">
    <img src="{{ asset('/assets/') }}/avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p>Username</p>
        <input type="text" name="email" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="" value="Login">
    </form>
</div>

</body>
</html>
