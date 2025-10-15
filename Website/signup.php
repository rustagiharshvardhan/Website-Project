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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];

    $query = "select*from Info where username='$username'or email='$email'";
    $result = mysqli_query($connection, $query)
        or die("Error checking username");
    if (mysqli_num_rows($result) > 0) {
        // Username already exists
        echo "<script>alert('Username or Email already exists! Please try a different Username or Email.'); window.history.back();</script>";
        exit();
    } else {
        if ($password == $confirm_password) {
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "insert into Info values('$username','$email','$password')";
            mysqli_query($connection, $query)
                or die("Error inserting values");
            echo "<script>alert('Signup  successful! Please log in to your account, $username.'); window.location.href = 'login.php';</script>";
        } else {
            $error_message = "Passwords don't match";
        }
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
    <link rel="stylesheet" href="sign.css">
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
        <h1>SIGN UP</h1>
        <div class="cont">
            <form action="signup.php" method="post">
                <h4>Username</h4>
                <input type="text" id="username" name="username" placeholder="Enter Your Username">
                <h4>E-mail</h4>
                <input type="email" id="email" name="email" placeholder="Enter Your Email...">
                <h4>Password</h4>
                <input type="password" id="password" name="password" placeholder="Enter Your Password">
                <h4>Confirm Password</h4>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Enter Your Password Again">
                <button class="log" type="submit" onclick="return validateSignUpForm()">Sign Up</button>
                <p>Already have an account &#63; <a href="login.php">Log In</a> </p>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>