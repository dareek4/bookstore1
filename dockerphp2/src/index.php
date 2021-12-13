<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <div class="panel-login">
        <div class="choose">
            <div class="chooseLogin">
                <p>Login</p>
            </div>
            <div class="chooseRegister active">
                <p>Register</p>
            </div>
        </div>
        <div class="register">
            <form action="udana.php" method="POST" class="registerForm">
                <div class="username">
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Username" id="username">
                </div>
                <div class="email">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" placeholder="Email" id="email">
                </div>
                <div class="password">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" id="password">
                </div>
                <div class="button">
                    <button type="submit">Click</button>
                </div>
            </form>
        </div>
        <div class="login hide">
            <form action="panel.php" method="POST" class="registerForm">
                <div class="email">
                    <label for="emailLogin">E-mail:</label>
                    <input type="email" name="emailLogin" placeholder="Email" id="emailLogin">
                </div>
                <div class="password">
                    <label for="passwordLogin">Password:</label>
                    <input type="password" name="passwordLogin" placeholder="Password" id="passwordLogin">
                </div>
                <div class="forgotPassword">
                    <p>Did you forget your password? Reset it <a href="forgotPassword/forgotPasswordH.php">here</a></p>
                </div>
                <div class="button">
                    <button type="submit">Click</button>
                </div>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
</body>

</html>