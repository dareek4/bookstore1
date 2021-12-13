<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../login.css" />
    <link rel="stylesheet" href="forgotPassword.css?v=<?php echo time(); ?>" />
    <title>Document</title>
</head>

<body>
    <div class="panel-login">
        <h2>Reset password</h2>
        <form action="forgotPassword.php" method="POST" class="registerForm">
            <div class="email">
                <label for="emailLogin">E-mail:</label>
                <input type="email" name="userEmail" placeholder="Email" id="emailLogin" />
            </div>
            <div class="password">
                <label for="passwordLogin">New password:</label>
                <input type="password" name="newPassword" placeholder="Password" id="passwordLogin" />
            </div>
            <div class="button">
                <button type="submit">Click</button>
            </div>
        </form>
    </div>
</body>

</html>