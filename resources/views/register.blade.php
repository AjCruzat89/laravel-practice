<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <!-- Link BOOTSTRAP 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color: rgb(230, 230, 230);">
    <form action="save" method="post">
        @csrf
        <div class="container d-flex vh-100 align-items-center">
            <div class="col row row-cols-1 row-cols-md-2 gy-4">

                <div class="col d-flex flex-column">
                    <div class="d-flex justify-content-md-start justify-content-center">
                        <h1>Sample Logo</h1>
                    </div>
                    <p class="d-none d-md-flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                        voluptatibus
                        illum asperiores facere
                        ea impedit amet eveniet quaerat error animi fuga reiciendis, sequi earum voluptas repellat
                        delectus
                        atque debitis fugit.</p>

                </div>

                <div class="col d-flex justify-content-center p-md-0 px-4">

                    <div class="d-flex flex-column gap-3 p-4 rounded"
                        style="max-width: 430px !important; box-shadow: 3px 5px 5px 3px  rgba(0, 0, 0, 0.349); background-color: white; width: 100%;">
                        <input class="p-2 rounded border-white" type="text" name="username" id=""
                            placeholder="Enter Username..." required>
                        <input class="p-2 rounded border-white" type="password" name="password" id=""
                            placeholder="Enter Password..." required minlength="8">
                        <input class="p-2 rounded border-white" type="password" name="rpassword" id=""
                            placeholder="Re-Enter Password..." required minlength="8">


                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary p-2" style="width: 100px;">Register</button>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-center">
                            <a class="link" href="{{ route('login.page') }}" style="text-decoration: none;">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>






        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</body>

</html>