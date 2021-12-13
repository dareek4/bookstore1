<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="ofertaKsiazki.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];

    $polaczenie = mysqli_connect("db", "root", "example", "bookstore");
    $zapytanie1 = "SELECT email, password FROM users WHERE email='$email' AND password='$password';";
    $wynik1 = mysqli_query($polaczenie, $zapytanie1);


    if (mysqli_num_rows($wynik1) == 0) {
        echo "<h1>Wrong data</h1>";
        echo '<script language="javascript">';
        echo 'setTimeout(() => {';
        echo 'location.href="index.php";}, 4000)';
        echo '</script>';
    } else {
        $zapytanie2 = "SELECT id, username FROM users WHERE email='$email' AND password='$password'";
        $wynik2 = mysqli_query($polaczenie, $zapytanie2);
        while ($wiersz = mysqli_fetch_assoc($wynik2)) {
            $id = $wiersz['id'];
            $username = $wiersz['username'];
        }
        mysqli_close($polaczenie);


    ?>
    <header>
        <div class="menu">
            <div class="logo">
                <h1>Bookstore</h1>
            </div>
            <div class="links">
                <p>Home</p>
                <p>Offers</p>
            </div>
        </div>
        <div class="hamburger">
            <i class="fas fa-user-circle"></i>
            <p>Hi, <?php echo $username ?>!</p>
            <button type="button" class="btn btn-danger sign-out">Sign Out</button>
            <div class="cart">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </header>

    <?php
    }

    ?>
    <main>
        <div class="offers">
            <?php
            $polaczenie = mysqli_connect("db", "root", "example", "bookstore");
            $zapytanie1 = "SELECT books.id, books.image ,books.title, authors.first_name, authors.last_name, books.price, 
                books.quantity, books.published FROM books INNER JOIN authors ON books.author_id = authors.id;";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while ($wiersz = mysqli_fetch_assoc($wynik1)) {
                $bookId = $wiersz["id"];
                $image = $wiersz["image"];
                $title = $wiersz["title"];
                $firstName = $wiersz["first_name"];
                $lastName = $wiersz["last_name"];
                $price = $wiersz["price"];
                $quantity = $wiersz["quantity"];
                $published = $wiersz["published"];

                echo "
                    <div class='offer'>
                    <img src='$image' alt='$title'>
                    <h2>$title</h2>
                    <p>$firstName $lastName</p>
                    <div class='price'>
                        <p>Our price:</p>
                        <h2>$price zł</h2>
                    </div>"; ?>
            <?php
                if ($quantity != 0) {
                    echo " <div class='stock stockGreen'>
                        <i class='fas fa-box'></i>
                        <p>In stock</p>
                    </div>";
                } else {
                    echo "<div class='stock stockRed'>
                        <i class='fas fa-times-circle'></i>
                        <p>Out of stock</p>
                    </div>";
                }

                echo "<button name='addToCart' type='submit' class='btn btn-danger'><i class='fas fa-shopping-cart'></i> Add to cart</button>
        </div>";
            }

            mysqli_close($polaczenie);
            ?>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/5c8fd00e12.js" crossorigin="anonymous"></script>
    <script src="signOut.js"></script>
</body>

</html>