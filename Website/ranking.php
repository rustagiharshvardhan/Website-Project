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
    <link rel="stylesheet" href="ranking.css">
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
        <div class="head">Ranking</div>
        <table class="rank">
            <tbody>
                <tr>
                    <td><img src="images\one piece 2.jpg" alt="One Piece"></td>
                    <td><a href="one_piece.html">&#127942; #1 One Piece</a></td>
                </tr>
                <tr>
                    <td><img src="images\boruto 2.jpg" alt="#2 Boruto:Two Blue Vortex"></td>
                    <td><a href="boruto.html">#2 Boruto</a></td>
                </tr>
                <tr>
                    <td><img src="images\jjk2.jpg" alt="#3 Jujutsu Kaisen"></td>
                    <td><a href="jjk.html">#3 Jujutsu Kaisen</a></td>
                </tr>
                <tr>
                    <td><img src="images\chainsaw 2.jpg" alt="#4 Chainsaw Man"></td>
                    <td><a href="chainsaw.html">#4 Chainsaw Man</a></td>
                </tr>
                <tr>
                    <td><img src="images\dbz.jpg" alt="#5 Dragon Ball Z"></td>
                    <td><a href="dbz.html">#5 Dragon Ball Z</a></td>
                </tr>
                <tr>
                    <td><img src="images\naruto.jpg" alt="#6 Naruto"></td>
                    <td><a href="naruto.html">#6 Naruto</a></td>
                </tr>
                <tr>
                    <td><img src="images\bleach.jpg" alt="#7 Bleach"></td>
                    <td><a href="bleach.html">#7 Bleach</a></td>
                </tr>
                <tr>
                    <td><img src="https://comicvine.gamespot.com/a/uploads/scale_small/6/67663/7148009-30.jpg" alt="#8 Attack on Titan"></td>
                    <td><a href="aot.html">#8 Attack on Titan</a></td>
                </tr>
                <tr>
                    <td><img src="images\dbs2.jpg" alt="#9 Dragon Ball Super"></td>
                    <td><a href="dbs.html">#9 Dragon Ball Super</a></td>
                </tr>
                <tr>
                    <td><img src="images\demon slayer.jpg" alt="#10 Demon Slayer"></td>
                    <td><a href="ds.html">#10 Demon Slayer</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>