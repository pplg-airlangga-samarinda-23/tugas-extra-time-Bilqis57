<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <?php
    include 'sistem-login.php'
    ?>
    
</head>
<body>
    <div class="container">
        <div class="main-content"></div>
        <div class="sidebar">
            <div class="login-box">
                <div class="logo">
                    <img src="cat.jpeg" alt="Logo">
                </div>
                <form method="POST">
                <div class="input-group">
                        <input name="username" type="text" placeholder="username">
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <button id="login-btn" name="submit" type="submit" class="login-btn">Login</button>
                </form>
                    <div class="forgot-password">lupa password</div>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>