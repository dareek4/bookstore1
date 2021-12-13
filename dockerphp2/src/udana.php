<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>

<body>
    <?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $polaczenie = mysqli_connect("db", "root", "example", "bookstore");
    $zapytanie1 = "SELECT username,email FROM users WHERE email='$email';";
    $wynik1 = mysqli_query($polaczenie, $zapytanie1);

    if (mysqli_num_rows($wynik1) != 0) {
        echo "<div class='error registrationInfo'>
        <div class='icon'>
            <i class='fas fa-times'></i>
        </div>
        <div class='content'>
            <p>Your registration has been unsuccesfull. Redirecting to the home page...</p>
        </div>
    </div>";
        echo '<script language="javascript">';
        echo 'setTimeout(() => {';
        echo 'location.href="index.php";}, 4000)';
        echo '</script>';
    } else {
        $zapytanie2 = "INSERT INTO users (username, email, password) VALUES 
('$username', '$email', '$password');";
        $wynik2 = mysqli_query($polaczenie, $zapytanie2);
        mysqli_close($polaczenie);

        echo " <div class='success registrationInfo'>
        <div class='icon'>
            <i class='fas fa-check-circle'></i>
        </div>
        <div class='content'>
            <p>Your registration has been succesfull. You can return to the <a href='index.php' class='link-primary'>home
                    page</a> and login</p>
        </div>
    </div>";
    }

    ?>




    <script src="https://kit.fontawesome.com/5c8fd00e12.js" crossorigin="anonymous"></script>
</body>

</html>