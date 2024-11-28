<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Player</title>
</head>
<body>
    <h2>List of Students</h2>

    <a href="{{ route('users.create') }}">Add New Account</a><br><br>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Student ID Number</th>
        </tr>
        <tr>
        @foreach ($players as $player)
                <td>{{ $player->id }}</td>
                <td>{{ $player->player_name }}</td>
                <td>{{ $player->username }}</td>
                <td>{{ $player->player_password }}</td>
                <td>{{ $player->student_id_number }}</td>
        @endforeach
        </tr>
    </table>
    {!! $players ->links() !!}
</body>
</html>
