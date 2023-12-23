<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinePhile - Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>







    <div class="side-nav">
        <div class="side-content">
            <section>
                <p>Movies</p>
                <a href="popularMovie.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">star</span>Popular</p></a>
                <a href="nowPlaying.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">today</span>Now Playing</p></a>
                <a href="upcoming.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">date_range</span>Upcoming</p></a>
                <a href="topRatedMovie.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">verified</span>Top Rated</p></a>
            </section>
            <hr />
            <section>
                <p>TV</p>
                <a href="popularTV.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">star</span>Popular</p></a>
                <a href="airingToday.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">today</span>Airing Today</p></a>
                <a href="onTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">tv_gen</span>On TV</p></a>
                <a href="topRatedTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">verified</span>Top Rated</p></a>
            </section>
        </div>
    </div>
    <div class="body">
        <header>
            <nav>
                <span style="display: flex; align-items:center;"><span class="material-symbols-outlined menu">menu</span>
                <a href="./" style="text-decoration: none;"><h1 class="logo">CinePhile</h1></a></span>
                <div class="search">
                    <input type="search" id="search-input" placeholder="Search Here" />
                    <span class="material-symbols-outlined search-icon">search</span>
                </div>
                <ul>
                    <li><a href="./" style="text-decoration: none;" id="homeNav" class="nav-links active">Home</a></li>
                    <li><a href="./popularMovie.php" style="text-decoration: none;" id="popularNav" class="nav-links">Popular</a></li>
                    <?php
                    if (isset($_COOKIE["userID"])){
                        echo'
                        <li><a href="./account/ProfilePage" style="text-decoration: none;" id="profie-page" class="nav-links">My Profile</a></li>
                            ';
                        }
                        else{
                            echo'
                            <li><a href="./account/login" style="text-decoration: none;" id="login" class="nav-links">Log In</a></li>
                            ';
                        }
                    ?>
                </ul>
            </nav>
        </header>
    <section class="mainSection">


        <div class="trending">
            <h2 class="title">TRENDING NOW</h2>
            <div class="trending-list-item"></div>
        </div>

        <div class="popular">
            <div>
                <h2 class="title">POPULAR</h2>
                <div class="popular-list-item"></div>
            </div>
        </div>
        
        <div class="HindiPopular">
            <div>
                <h2 class="title">Hindi Popular</h2>
                <div class="hindiPopular-list-item"></div>
            </div>
        </div>

    </section>
</div>




<div class="search-results">
    <div class="switchButtons">
        <button class="movieButton">MOVIES</button>
        <button class="tvButton">TV SHOWS</button>
    </div>
    <div class="movie" style="text-align:center;"><h3>MOVIES</h3></div>
    <div class="tv" style="text-align:center;"><h3>TV SHOWS</h3></div>
</div>






<script src="index.js"></script>
</body>
</html>