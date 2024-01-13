<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login" method="get"> 
        <!-- tidak bisa pakai post -->
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php

    use App\Http\Controllers\LoginController;
    if(isset($_GET["logout"])){
        LoginController::delete();
    }
    else if(isset($_GET["login"])){
        $name = $_GET["username"];
        $password = $_GET["password"];
        $usernames = [];
        foreach(LoginController::name() as $username){
            array_push($usernames, $username->name);
        }
        if(in_array($name, $usernames)){
            LoginController::store($name, $password);
        }
        else{
            echo "Login gagal<br>";
            foreach($usernames as $user_data){
                echo "$user_data<br>";
            }
        }
    }

?>