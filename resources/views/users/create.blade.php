<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h2>Add New Account</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
    <br><br>

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="player_name" id="player_name"><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="player_email" id="player_email"><br><br>

        <label for="password">Password:</label>
        <input type="text" name="player_password" id="player_password"><br><br>

        <label for="student_id_number">Student ID Number:</label>
        <input type="text" name="student_id_number" id="student_id_number"><br><br>

        <button type="submit">Add</button>
    </form>
</body>
</html>
