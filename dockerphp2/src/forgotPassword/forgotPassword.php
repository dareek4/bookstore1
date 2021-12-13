<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../register.css">
    <title>Document</title>
</head>

<body>
    <?php

    $email = $_POST['userEmail'];
    $password = $_POST['newPassword'];

    $polaczenie = mysqli_connect("db", "root", "example", "bookstore");
    $zapytanie1 = "UPDATE users SET password='$password' WHERE email='$email';";
    $wynik1 = mysqli_query($polaczenie, $zapytanie1);

    echo " <div class='success registrationInfo'>
        <div class='icon'>
            <i class='fas fa-check-circle'></i>
        </div>
        <div class='content'>
            <p>Your password change has been succesfull. You can return to the <a href='index.php' class='link-primary'>home
                    page</a> and login</p>
        </div>
    </div>";
    ?>
    <script src="https://kit.fontawesome.com/5c8fd00e12.js" crossorigin="anonymous"></script>
</body>

</html>