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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="latest.css">
    <link rel="stylesheet" href="menu.css">
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
    <div class="latest">
        <div class="head">Latest Releases</div>
        <div class="images">
            <div class="img-container">
                <img src="images\boruto.jpg" alt="Boruto:Two Blue Vortex">
                <a href="boruto.html">Boruto</a>
            </div>
            <div class="img-container">
                <img src="images\one piece 1.jpg" alt="One Piece">
                <a href="one_piece.html">One Piece</a>
            </div>
            <div class="img-container">
                <img src="images\jjk1.jpg" alt="Jujutsu Kaisen">
                <a href="jjk.html">Jujutsu Kaisen</a>
            </div>
            <div class="img-container">
                <img src="images\kaiju.jpg"
                    alt="Kaiju No.8">
                <a href="k8.html">Kaiju No.8</a>
            </div>
            <div class="img-container">
                <img src="images\mha.jpg" alt="My Hero Academia">
                <a href="mha.html">My Hero Academia</a>
            </div>
            <div class="img-container">
                <img src="images\un.jpg"
                    alt="Undead Unluck">
                <a href="un.html">Undead Unluck</a>
            </div>
            <div class="img-container">
                <img src="images\spy.jpg"
                    alt="SPY X FAMILY">
                <a href="spy.html">SPY X FAMILY</a>
            </div>
            <div class="img-container">
                <img src="images\opm.jpg" alt="One-Punch Man">
                <a href="opm.html">One-Punch Man</a>
            </div>
           
            <div class="img-container">
                <img src="images\chainsaw.jpg" alt="Chainsaw Man">
                <a href="chainsaw.html">Chainsaw Man</a>
            </div>
            <div class="img-container">
                <img src="images\dbs.jpg" alt="Dragon Ball Super">
                <a href="dbs.html">Dragon Ball Super</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>