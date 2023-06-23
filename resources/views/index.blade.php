<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagination.css">
    <!-- Link BOOTSTRAP 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form method="GET" action="logout">
        @csrf
        <button name="logout" class="btn btn-primary">Logout</button>
    </form>

    <div class="d-flex justify-content-center align-items-center">
        <input type="search" name="" id="" placeholder="Search..." class="p-1">
    </div>

    <div class="table-responsive">
    <table class="table table-borderless">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ substr($user->password, 0, 12) }}</td>
                <td><a class="btn btn-primary" href="edit/{{ $user->id }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    
    <div class="pagination">    
    {{ $users->links('vendor.pagination.custom') }}

    </div>

</body>

</html>