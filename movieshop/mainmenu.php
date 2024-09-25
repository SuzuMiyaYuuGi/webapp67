<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="mainmenu.css">
</head>
<body class = "bg">
    <header>
        <div class="logo">
            <img src="ug.png" alt="Your Logo">
        </div>
        <nav>
            <ul>
                <li><a href="mainmenu.php">Home</a></li>
                <li><a href="act_mainmenu.php">Actor</a></li>
                <li><a href="movie_mainmenu.php">Movie</a></li>
                <li><a href="actmov_mainmenu.php">ActorMovie</a></li>
                <li><a href="cusmov_mainmenu.php">MemberMovie</a></li>
            </ul>
        </nav>
    </header>

    <h2>Welcome to</h2>
    <h1>Movie House</h1>

    <br>

    <div class="menu-buttons">
        <button onclick="location.href='cus_mainmenu.php'">Member</button>
        <button onclick="location.href='act_mainmenu.php'">Actor</button>
        <button onclick="location.href='movie_mainmenu.php'">Movie</button>
    </div>

    <footer>
        </footer>
</body>
</html>