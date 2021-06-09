<?php
session_start();
if (isset($_POST['username'])) {
    $admin = 'admin';
    $a_password = '123456';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["login"] = "false";
    if ($username == $admin and $password == $a_password){
        $_SESSION["login"] = "true";
        header("Location: admin.php");
    }else {
        warn("Login failed");
    }
}

function warn($message) {  
    echo "<span style='color:rgb(218, 52, 52);'>$message</span>";
}


?>
<html><body onselectstart="return false">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css"><br><br>
        <h3 class="welcome">Welcome</h3><br>
        <form method = "POST">
            <div class="login">
                Username : <input class="inp" type="text" name = "username" autocomplete="off"><br><br>
                Password : <input class="inp" type="password" name = "password" autocomplete="off"><br><br>
            </div>
            <button class="btn btn-outline-light" type= "submit"> Login</button>
        </form>
</body></html>