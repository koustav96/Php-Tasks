<?php
    session_start();
    $flag = 0;
    if (isset($_SESSION["user_name"])) {
        require('homepage.php');
        exit();
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['login'])) {
            $username = 'koustav';
            $password = 123;
            if ($username == $_POST['user_name'] && $password == $_POST['pass']) {
                $_SESSION["user_name"] = $username;
                $flag = 1;
                require('homepage.php');
                exit();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h1>LOG IN PAGE</h1>
        <form action="login.php" method="post">
            <div class="form-ele">
                <label for="user_name">Enter User Name</label>
                <input type="text" name="user_name" id="user_name" place>
            </div>
            <div class="form-ele">
                <label for="pass">Enter Password:</label>
                <input type="password" name="pass" id="pass">
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        
        <?php
            if (isset($_POST['login'])) {
                if (!$flag) {
                    ?>
                    <p  class="error">
                        INVALID USERNAME OR PASSWORD
                    </p>
                <?php
                }
            }
        ?>
    </div>
</body>
</html>
