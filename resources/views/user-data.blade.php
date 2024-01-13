<?php
    use App\Http\Controllers\LoginController;
    $list_users = LoginController::index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="true">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        @foreach ($list_users as $list_user)
        <tr>
            <td>{{$list_user->name}}</td>
            <td>{{$list_user->password}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>