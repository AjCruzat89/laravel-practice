<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link BOOTSTRAP 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex vh-100 align-items-center">
        <div class="col d-flex justify-content-center p-md-0 px-4">

            <div class="d-flex flex-column gap-3 p-4 rounded" style="max-width: 430px !important; box-shadow: 3px 5px 5px 3px  rgba(0, 0, 0, 0.349); background-color: white; width: 100%;">
                <input class="p-2 rounded border-white" type="text" name="username" id="" placeholder="{{ $users->username }}" required>
                <input class="p-2 rounded border-white" type="password" name="password" id="" placeholder="{{ $users->password }}" required minlength="8">
                <input class="p-2 rounded border-white" type="password" name="rpassword" id="" placeholder="Re-Enter Password..." required minlength="8">


                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary p-2" style="width: 100px;">Update</button>
                </div>

            </div>
        </div>

    </div>
</body>

</html>