<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M | Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- Link BOOTSTRAP 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form action="user" method="post">
        @csrf
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="box d-flex flex-column p-3">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="h1">M</div>
                </div>
                <div class="h4 pt-3">Username</div>
                <input type="text" name="username" id="" placeholder="Enter username..." required>
                <div class="h4 pt-3">Password</div>
                <input type="password" name="password" id="" placeholder="Enter password..." minlength="8" maxlength="12" required>
                <div class="h6 pt-3"><a href="register.php">Dont have an account yet? Register here...</a></div>
                <div class="d-flex justify-content-center align-items-center pt-3"><button
                        class="btn btn-primary" name="submit">Login</button></div>
            </div>
        </div>
    </form>

    <!-- Link BOOTSTRAP 5.3.0 JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>