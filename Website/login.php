<?php
$connection = mysqli_connect("localhost", "root", "")
or die("Couldn't connect to server");
// $query = "create database if not exists LoginInformation";
// mysqli_query($connection, $query)
//     or die("Error creating database: " . mysqli_error($connection));
$query = "use LoginInformation";
mysqli_query($connection, $query)
or die("Error using database");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT*FROM Info WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query)
        or die("Error checking email: " . mysqli_error($connection));
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            echo "<script>alert('Welcome $username.'); window.location.href = 'index.php';</script>";
        }
        else{
            echo "<script>alert('Account not found. Please try Again !'); window.history.back();</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header class="header">
        <div class="left">
            <img src="images\Logo3.png" alt="Logo">
        </div>
        <nav>
            <div class="mid">
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="latest.php" class="active">Latest</a></li>
                        <li><a href="top.php" class="active">Top Selling</a></li>
                        <li><a href="ranking.php" class="active">Ranking</a></li>
                        <li><a href="about.php" class="active">About Us</a></li>
                        <!-- <li><a href="#">Contact Us</a></li> -->
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="right">
            <div class="dropdown">
                <button class="btn" onclick="toggleMenu()">Menu &#9776;</button>
                <div class="dropdown-content" id="menuContent">
                    <!-- <button class="close-btn" onclick="toggleMenu()">&times; Close</button> -->
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="about.php#contact">Contact Us</a>
                    <a href="login.php">Log In</a>
                    <a href="signup.php">Sign Up</a>
                </div>
            </div>
        </div>
    </header>
    <div class="login">
        <h1>LOG IN</h1>
        <div class="cont">
            <form action="" method="post">
                <h4>E-mail</h4>
                <input type="email" id="email" name="email" placeholder="Enter Your Email...">
                <h4>Password</h4>
                <input type="password" id="password" name="password" placeholder="Enter Your Password">
                <a href="">Forgot Password &#63; </a><br>
                <button class="log" onclick="return validateForm()">Log In</button>
                <p>Don't have an account &#63; <a href="signup.php">Sign Up Now</a> </p>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>