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
            <img src="images\logo3.png" alt="Logo">
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
        <div class="head">Top Selling</div>
        <div class="images">
            <div class="img-container">
                <img src="images\one piece 2.jpg" alt="One Piece">
                <a href="one_piece.html">One Piece</a>
            </div>
            <div class="img-container">
                <img src="images\dbs2.jpg" alt="Dragon Ball Super">
                <a href="dbs.html">Dragon Ball Super</a>
            </div>
            <div class="img-container">
                <img src="images\demon slayer.jpg" alt="Demon Slayer">
                <a href="ds.html">Demon Slayer</a>
            </div>
            <div class="img-container">
                <img src="images\jjk2.jpg" alt="Jujutsu Kaisen">
                <a href="jjk.html">Jujutsu Kaisen</a>
            </div>
            <div class="img-container">
                <img src="images\naruto.jpg" alt="Naruto">
                <a href="naruto.html">Naruto</a>
            </div>
            <div class="img-container">
                <img src="images\boruto 2.jpg"
                    alt="Boruto:Two Blue Vortex">
                <a href="boruto.html">Boruto</a>
            </div>
            <div class="img-container">
                <img src="https://comicvine.gamespot.com/a/uploads/scale_small/6/67663/7148009-30.jpg"
                    alt="Attack on Titan">
                <a href="aot.html">Attack on Titan</a>
            </div>
            <div class="img-container">
                <img src="images\chainsaw 2.jpg" alt="Chainsaw Man">
                <a href="chainsaw.html">Chainsaw Man</a>
            </div>
            <div class="img-container">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/8c/Vinland_Saga_key_visual.png" alt="Vinland Saga">
                <a href="vinland.html">Vinland Saga</a>
            </div>
            <div class="img-container">
                <img src="https://dw9to29mmj727.cloudfront.net/products/1421585642.jpg" alt="One-Punch Man">
                <a href="opm.html">One-Punch Man</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>