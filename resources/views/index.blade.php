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
    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    @if ($currentUser)
    <div>
        <h3>Current User Details:</h3>
        <p>ID: {{$currentUser->id }}</p>
        <p>Username: {{ $currentUser->username }}</p>
        <p>Password: {{ substr($currentUser->password, 0, 12) }}</p>
    </div>
    @endif

    <form method="GET" action="{{ route('logout') }}">
        @csrf
        <button name="logout" class="btn btn-primary">Logout</button>
    </form>

    <form method="GET" action="{{ route('users.Search') }}">
        <div class="d-flex justify-content-center align-items-center py-2">
            <input type="search" name="keyword" id="" placeholder="Search..." class="p-1">
        </div>
    </form>

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
                    <td>{{ substr($user->password, 0, 10) }}</td>
                    <td><button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#editModal" data-user-id="{{ $user->id }}" data-username="{{ $user->username }}" data-password="{{ $user->password }}">Edit</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="pagination">
        {{ $users->links('vendor.pagination.custom') }}
    </div>

    <form action="{{ route('update.Users') }}" method="POST">
        @csrf
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >Edit User Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editUserId">
                        <div class="form-group">
                            <label for="editUsername">Username:</label>
                            <input type="text" name="username" class="form-control" id="editUsername" onclick="clearInput(this)">
                        </div>
                        <div class="form-group">
                            <label for="editPassword">Password:</label>
                            <input type="text" name="password" class="form-control" id="editPassword" onclick="clearInput(this)">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <button id="toggleDarkModeButton">Toggle Dark Mode</button>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Bootstrap 4.0 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.edit-button').click(function() {
                var userId = $(this).attr('data-user-id');
                var username = $(this).attr('data-username');
                var password = $(this).attr('data-password');

                $('#editUserId').val(userId);
                $('#editUsername').val(username);
                $('#editPassword').val(password);
            });
        });
    </script>
    <script>
        function clearInput(input) {
            input.value = '';
        }
    </script>
    <script>
        $(document).ready(function() {
            const toggleDarkModeButton = $('#toggleDarkModeButton');

            // Check if dark mode preference is already stored
            const isDarkMode = localStorage.getItem('darkMode') === 'true';

            // Apply the dark mode class if the preference is set
            if (isDarkMode) {
                $('body').addClass('dark-mode');
                $('.table th, .table td').addClass('dark-mode-text');
                $('.modal-header, .modal-body, .modal-footer').addClass('dark-mode');
            }


            // Toggle dark mode on button click
            toggleDarkModeButton.on('click', function() {
                // Toggle the dark mode class on the body element
                $('body').toggleClass('dark-mode');
                $('.table th, .table td').toggleClass('dark-mode-text');
                $('.modal-header, .modal-body, .modal-footer').toggleClass('dark-mode');


                // Store the dark mode preference in localStorage
                const isDarkModeEnabled = $('body').hasClass('dark-mode');
                localStorage.setItem('darkMode', isDarkModeEnabled);
            });
        });
    </script>
</body>

</html>