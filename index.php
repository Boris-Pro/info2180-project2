<?php
require_once 'session.php';
require_once 'insert_user.php';
require_once 'login-view.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<body>
    <header>
        <img src = "dolphin.png" alt="Image of dolphin" 
        width = "50" height ="50" />
        <h1>Dolphin CRM</h1> 
    </header>   
    <div class="container"> 
        <div class = "Gap"></div>
        <div class = "login-header">
            <h2>Login</h2>
        </div>
            
    <div class="login-container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" id="Email" name="Email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <input type="password" id="Password" name="Password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">
                    <img src = "padlock.png" alt="Image of padlock" 
        width = "20" height ="20" />
                    Login</button>
            </div>
        </form>
        
    </div>
    <?php
        check_login_errors();

        ?>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Dolphin CRM </p>
    </footer>
</body>
</html>
