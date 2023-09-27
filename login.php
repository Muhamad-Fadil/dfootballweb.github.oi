<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="loginPage/style.css">

    <title>Halaman Login Football</title>
</head>

<body>
    <div class="container">
        <form action="loginPage/process_login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <div class="input-group">
                <button name="submit" class="btn " value="Login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>