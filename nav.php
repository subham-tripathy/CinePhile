<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <style>

body{
    display: flex;
}

.side-nav{
    height: 97vh;
    /* width: 30%; */
    border-right: 1px solid rgb(128, 128, 128, 0.2);
    background-color: rgb(10, 10, 10);
    z-index: 1;
    justify-content: center;
    display: none;
}

.side-icon{
    height: 15px;
    margin-right: 5px;
}

.side-content{
    width: 250px;
    margin-top: 30px;
    margin-left: 30px;
    margin-right: 50px;
}

.side-content section{
    width: 130px;
    margin: 10px 0;
}

.side-content section a{
    display: flex;
    align-items: center;
}

.side-content section p{
    font-size: 13px;
}

.side-content section p.h3{
    cursor: pointer;
    display: flex;
    align-items: center;
    font-size: 17px;
    margin: 5px 0;
    color: rgba(255, 255, 255, 0.4);
}

.side-content section p.h3:hover{
    color: white;
}

.side-content section p.h3 span{
    font-size: 19px;
    margin-right: 5px;
    color: rgba(255, 255, 255, 0.4);
}

.side-nav hr{
    border: 1px solid rgb(128, 128, 128);
    opacity: 0.3;
}











nav{
    position: sticky;
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
    padding: 0 30px;
    align-items: center;
    height: 100px;
    border: 1px solid rgb(73, 73, 73);
    box-shadow: 0 0 50px rgb(73, 73, 73);
    border-radius: 10px;
}

nav .menu{
    margin-right: 25px;
    cursor: pointer;
    font-weight: bolder;
    padding: 2px 3px;
    border-radius: 3px;
    background-color: rgb(255, 255, 255, 0.3);
    transform: scale(1.3, 1.3);
    margin-right: 40px;
}

nav h1{
    font-size: 40px;
}

nav div.search{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid black;
    border-radius: 20px;
    padding: 4px 20px;
    width: 47%;
    height: 40%;
    background-color: white;
}

nav div.search input{
    outline: none;
    border: none;
    width: 93%;
    font-family: cursive;
    color: black;
}

nav div.search span.material-symbols-outlined{
    color: cyan;
    font-weight: bolder;
    cursor: pointer;
    -webkit-text-stroke: 0.3px black;
    text-shadow: 0 0 5px black;
}

.search-results{
    position: absolute;
    left: 10%;
    top: 14%;
    background-color: cyan;
    border: 4px solid black;
    width: 70%;
    min-height: 40%;
    max-height: 70%;
    padding: 20px 25px;
    border-radius: 30px;
    display: none;
    overflow: auto;
    margin: auto;
    z-index: 10;
}

.search-results::-webkit-scrollbar{
    display: none;
}

.switchButtons{
    display: flex;
    width: 90%;
    margin: auto;
    justify-content: space-around;
}

.movieButton, .tvButton{
    color: white;
    width: 450px;
    height: 50px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    background-color: rgb(0, 128, 128, 0.4);
    font-size: 20px;
    border: none;
    outline: none;
    cursor: pointer;
}

.movieButton{
    background-color: teal;
}

.search-results .movie, .search-results .tv{
    margin: auto;
    background-color: teal;
    padding: 50px 25px;
    width: 95%;
    border: none;
    border-radius: 25px;
}

.search-results .tv{
    display: none;
}

.search-results a.card{
    position: relative;
    display: flex;
    font-family: sans-serif;
    text-decoration: none;
    margin-bottom: 15px;
    align-items: center;
}

.search-results a.card img{
    height: 60px;
    object-fit: cover;
    border: 1px solid black;
}

.search-results a.card div{
    background-color: white;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    width: 100%;
    overflow: hidden;
    border: 2px solid black;
    border-radius: 20px;
    height: 60px;
    margin-left: 20px;
    padding: 0 10px;
}

.search-results a.card div h3{
    color: black;
    margin-left: 20px;
    font-size: 25px;
    font-weight: bolder;
}

.search-results a.card div span{
    position: relative;
    display: flex;
    justify-content: space-around;
}

.search-results a.card div span p{
    color: grey;
    font-weight: bolder;
    font-size: 15px;
    margin-right: 15px;
}

nav ul{
    display: flex;
}

nav ul li{
    list-style-type: none;
}

nav ul li p.nav-links{
    position: relative;
    margin-left: 50px;
    font-family: serif;
    font-weight: bolder;
    font-size: 17px;
    cursor: pointer;
}

nav ul li p.nav-links:after{
    content: "";
    position: absolute;
    background-color: cyan;
    height: 3px;
    width: 0%;
    bottom: -8px;
    left: 0;
    border-radius: 50px;
}

nav ul li p.nav-links:before{
    content: "";
    position: absolute;
    background-color: cyan;
    height: 3px;
    width: 0%;
    bottom: -3px;
    left: 0px;
    border-radius: 50px;
}

nav ul li p.nav-links:hover:after, nav ul li p.active:after{
    transition: 0.4s;
    width: 60%;
}

nav ul li p.nav-links:hover:before,  nav ul li p.active:before{
    transition: 0.4s;
    width: 40%;
}




    </style>
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
                <a href="popularTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">star</span>Popular</p></a>
                <a href="airingToday.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">today</span>Airing Today</p></a>
                <a href="onTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">tv_gen</span>On TV</p></a>
                <a href="topRatedTV.html" style="text-decoration: none;"><p class="h3"><span class="material-symbols-outlined">verified</span>Top Rated</p></a>
            </section>
        </div>
    </div>
    <div class="body">
        <header>
            <nav>
                <span style="display: flex; align-items:center;"><span class="material-symbols-outlined menu">menu</span>
                <h1 class="logo">CinePhile</h1></span>
                <div class="search">
                    <input type="search" id="search-input" placeholder="Search Here" />
                    <span class="material-symbols-outlined search-icon">search</span>
                </div>
                <ul>
                    <li><p id="homeNav" class="nav-links active">Home</p></li>
                    <li><p id="popularNav" class="nav-links">Popular</p></li>
                    <li><p id="aboutNav" class="nav-links">About</p></li>
                </ul>
            </nav>
        </header>
    </div>




    <script>
        const menu = document.getElementsByClassName("menu")[0];
const sideNav = document.getElementsByClassName("side-nav")[0];

menu.onclick = () => {
    if (menu.innerHTML == "menu")
    {
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