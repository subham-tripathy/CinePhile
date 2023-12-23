<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../index.css">
</head>
<body>









<div class="side-nav">
        <div class="side-content">
            <section>
                <p>Movies</p>
                <a href="../popularMovie.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">star</span>Popular</p></a>
                <a href="../nowPlaying.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">today</span>Now Playing</p></a>
                <a href="../upcoming.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">date_range</span>Upcoming</p></a>
                <a href="../topRatedMovie.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">verified</span>Top Rated</p></a>
            </section>
            <hr />
            <section>
                <p>TV</p>
                <a href="../popularTV.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">star</span>Popular</p></a>
                <a href="../airingToday.php" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">today</span>Airing Today</p></a>
                <a href="../onTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">tv_gen</span>On TV</p></a>
                <a href="../topRatedTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">verified</span>Top Rated</p></a>
            </section>
        </div>
    </div>
    
    
    
    
<div class="body">

    <header>
        <nav>
            <span style="display: flex; align-items:center;"><span class="material-symbols-outlined menu">menu</span>
            <a href="../" style="text-decoration: none;"><h1 class="logo">CinePhile</h1></a></span>
            <div class="search">
                <input type="search" id="search-input" placeholder="Search Here" />
                <span class="material-symbols-outlined search-icon">search</span>
            </div>
            <ul>
                <li><a href="../" style="text-decoration: none;" id="homeNav" class="nav-links active">Home</a></li>
                <li><a href="../popularMovie.php" style="text-decoration: none;" id="popularNav" class="nav-links">Popular</a></li>
                <li><a href="../logout" id="logOut" style="text-decoration: none;" class="nav-links">Log Out</a></li>
            </ul>
        </nav>
    </header>




    <section id="main">
        <!-- <img src="1.jpg" alt=""> -->
        <!-- <h1>Oops!</h1>
        <h1>404 File Not Found</h1>
        <p>Looks like You've lost in the Theatre</p> -->
    </section>




    
<script>
        const menu = document.getElementsByClassName("menu")[0];
    const sideNav = document.getElementsByClassName("side-nav")[0];

    menu.onclick = () => {
        if (menu.innerHTML == "menu"){
            menu.innerHTML = "close";
            sideNav.style.display = "flex";
        }

        else
        {
            menu.innerHTML = "menu";
            sideNav.style.display = "none";
        }
    }
    </script>
</body>
</html>
