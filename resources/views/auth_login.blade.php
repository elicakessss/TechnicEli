<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{ route('login') }}>
        @csrf
        <h1>LOGIN</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" maxlength="6" required>
        </div>
        <button type="submit">Login</button>

        <div>
            <label>No account? <a href="auth_register">Register here!</a></label>
        </div>
    </form>

</body>
</html>

