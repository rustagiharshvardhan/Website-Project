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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
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
    <div id="about">
            <h2>About MangaVerse</h2>
            <p>Welcome to MangaVerse, your ultimate destination for manga enthusiasts! At MangaVerse, we're passionate about bringing together manga lovers from around the world to explore and enjoy their favorite manga titles.</p>
        <hr>
            <h3>Our Mission</h3>
            <p>Our mission at MangaVerse is simple: to provide a platform where manga enthusiasts can discover, read, and discuss their favorite manga series. We're committed to offering a diverse selection of manga genres, from action-packed adventures to heartwarming romances, ensuring there's something for every taste and interest.</p>
        <hr>
            <h3>What We Offer</h3>
            <ul>
                <li><strong>Wide Selection:</strong> Explore a vast library of manga series, including popular titles and hidden gems waiting to be discovered.</li>
                <li><strong>Latest Releases:</strong> Stay up-to-date with the latest chapters and releases from your favorite manga series.</li>
                <li><strong>Community Interaction:</strong> Engage with fellow manga fans through our forums and discussion boards, sharing insights, theories, and recommendations.</li>
                <li><strong>User-Friendly Experience:</strong> Enjoy a seamless reading experience with our intuitive interface and user-friendly features.</li>
            </ul>
        <hr>
            <h3>Our Team</h3>
            <p>MangaVerse was founded by a team of manga enthusiasts who share a deep love and appreciation for the art form. Our dedicated team is constantly working behind the scenes to improve the platform, enhance user experience, and expand our manga collection.</p>
        <hr>
            <h3 id="contact">Get In Touch</h3>
            <p>We'd love to hear from you! Whether you have feedback, suggestions, or just want to say hello, feel free to reach out to us. You can contact us via email at <a href="mailto:contact@mangaverse.com">contact@mangaverse.com</a>, connect with us on social media, or give us a call at <strong>9876XXXXXX</strong>.</p>
        <hr>
            <p>Thank you for choosing MangaVerse as your manga destination. We hope you enjoy your journey through the captivating world of manga!</p>
    </div>
    <footer class="footer">
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
    <script src="manga.js"></script>
</body>

</html>