<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            transition: all .3s;
        }
        #main{
            position: relative;
            padding: 5% 9.5%;
            display: flex;
            font-family: sans-serif;
            height: 78vh;
        }
        #Poster{
            position: absolute;
            top: -50px;
            left: 0;
            z-index: -1;
            width: 100%;
            filter:brightness(30%);
        }
        #displayPic{
            border: 3px solid white;
            border-radius: 10px;
            height: 70vh;
        }
        #info{
            color: white;
            padding-left: 40px;
            padding-top: 40px;
        }
        #main p{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #title{
            font-size: 40px;
            margin-bottom: 0;
        }
        #releaseDate{
            margin-top: 0;
        }
        #genre{
            display: flex;
            width: max-content;
        }
        #genre p{
            margin-right: 30px;
        }
        #addFav{
            padding: 1%;
            font-weight: bolder;
            background-color: cyan;
            border-color: white;
            border-radius: 5px;
        }
        #addFav:hover{
            cursor: pointer;
        }


















@media (max-width: 640px) {
    body{
        background-color: black;
    }

    #displayPic{
        width: 65%;
    }

    #Poster {
        position: absolute;
        top: 0px;
        left: 0;
        z-index: -1;
        width: 100%;
        filter: brightness(30%)
    }
    #main{
        position: relative;
        padding: 5% 9.5%;
        display: flex;
        flex-direction: column;
        font-family: sans-serif;
        height: 78vh;
    }
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







    <div id="main">
        <img src="" alt="" id="Poster">
        <img src="" alt="" id="displayPic">
        <div id="info">
            <h1 id="title"></h1>
            <div>
                <p id="releaseDate"></p>
                <p id="genre"></p>
                <p id="rating"></p>
                <p id="overview"></p>
            </div>
            <div id="buttons">
                <!-- <button id="addFav">Add to Favourite</button> -->
            </div>
        </div>
    </div>


        </section>
    </div>












<div class="search-results">
<button class="close-results">
<span class="material-symbols-outlined">close</span>
</button>
    <div class="switchButtons">
        <button class="movieButton">MOVIES</button>
        <button class="tvButton">TV SHOWS</button>
    </div>
    <div class="movie" style="text-align:center;"><h3>MOVIES</h3></div>
    <div class="tv" style="text-align:center;"><h3>TV SHOWS</h3></div>
</div>


















    <script>


const searchResult = document.getElementsByClassName("search-results")[0];
const closeSearchResult = document.getElementsByClassName("close-results")[0];
const searchInput = document.getElementById("search-input");
const searchType = document.getElementById("movie-type");
const searchIcon = document.getElementsByClassName("search-icon")[0];
const mainSection = document.getElementsByClassName("mainSection")[0];

searchInput.addEventListener("focusin", ()=>{
    searchResult.style.display = "block";
    mainSection.style.filter = "blur(10px)";
});


closeSearchResult.addEventListener("click", ()=>{
    searchResult.style.display = "none";
    mainSection.style.filter = "none";
});













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



const mainURL = "https://api.themoviedb.org/3/";       //CHANGE THE NAME TO A UNIQUE OR RANDOME FOR BETTER SECURITY
const api_key = "96722bcb778d0302594f6c5268f3a8fc";       //CHANGE THE NAME TO A UNIQUE OR RANDOME FOR BETTER SECURITY








searchInput.value = searchInput.value.replaceAll(" ", "+");

movieResult = document.getElementsByClassName("movie")[0];
tvResult = document.getElementsByClassName("tv")[0];


function fetchMovieResults() {
    fetch(mainURL+"search/movie?&api_key="+api_key+"&query="+searchInput.value)
    .then(res => res.json())
    .then(data => {
        movieResult.innerHTML = "";
        if (searchInput.value == "")
        {
            movieResult.innerHTML = "<h3>MOVIES</h3>";
        }
        else{
        data.results.forEach(movie => {
            // console.log(movie);
            a = document.createElement("a");
            a.href = "moviepage.php?id="+movie.id;
            // a.href = "#";
            a.classList.add("card");

            img = document.createElement("img");
            img.src = "https://image.tmdb.org/t/p/w500"+movie.poster_path;
            if (img.src == 'https://image.tmdb.org/t/p/w500null')
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            img.style.width = "50px";

            div = document.createElement("div");
            div.classList.add("card");

            h3 = document.createElement("h3");
            h3.innerHTML = movie.title;
            h3.style.fontSize = "20px";

            span = document.createElement("span");

            p1 = document.createElement("p");
            p1.classList.add("release-data");
            p1.innerHTML = movie.release_date;

            p2 = document.createElement("p");
            p2.classList.add("genre");
            p2.innerHTML = movie.genre_ids;

            p3 = document.createElement("p");
            p3.classList.add("imdb");
            p3.innerHTML = movie.vote_average;

            p4 = document.createElement("p");
            p4.classList.add("actors");
            p4.innerHTML = "Actors";



            span.appendChild(p1);
            span.appendChild(p2);
            span.appendChild(p3);
            span.appendChild(p4);
            div.appendChild(h3);
            div.appendChild(span);
            a.appendChild(img);
            a.appendChild(div);
            movieResult.appendChild(a);
        });
    }
    })
}














function fetchTVResults() {
    fetch(mainURL+"search/tv?&api_key="+api_key+"&query="+searchInput.value)
    .then(res => res.json())
    .then(data => {
        tvResult.innerHTML = "";
        if (searchInput.value == "")
        {
            tvResult.innerHTML = "<h3>TV SHOWS</h3>";
        }
        else{
            data.results.forEach(tv => {
                console.log(tv.poster_path);
            a = document.createElement("a");
            a.href = "tvpage.html?id="+tv.id;
            a.classList.add("card");

            img = document.createElement("img");
            img.src = "https://image.tmdb.org/t/p/w500"+tv.poster_path;
            if (img.src == 'https://image.tmdb.org/t/p/w500null')
            {
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            }
            img.style.width = "50px";

            div = document.createElement("div");
            div.classList.add("card");

            h3 = document.createElement("h3");
            h3.innerHTML = tv.name;

            span = document.createElement("span");

            p1 = document.createElement("p");
            p1.classList.add("release-data");
            p1.innerHTML = tv.first_air_date;

            p2 = document.createElement("p");
            p2.classList.add("genre");
            p2.innerHTML = tv.genre_ids;

            p3 = document.createElement("p");
            p3.classList.add("imdb");
            p3.innerHTML = tv.vote_average;

            p4 = document.createElement("p");
            p4.classList.add("actors");
            p4.innerHTML = "Actors";



            span.appendChild(p1);
            span.appendChild(p2);
            span.appendChild(p3);
            span.appendChild(p4);
            div.appendChild(h3);
            div.appendChild(span);
            a.appendChild(img);
            a.appendChild(div);
            tvResult.appendChild(a);
        });
    }
    })
}




searchInput.addEventListener('keypress', ()=>{
    fetchMovieResults();
    fetchTVResults();
});
searchIcon.addEventListener("click", ()=>{
    fetchMovieResults();
    fetchTVResults();
});























        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');
            genreList = [];
            fetch('https://api.themoviedb.org/3/movie/'+id+'?&api_key=96722bcb778d0302594f6c5268f3a8fc').then(res=>res.json()).then(data=>{



                // BACKGROUND POSTER IMAGE 
                let poster = document.querySelector('img#Poster');
                poster.src = 'https://image.tmdb.org/t/p/w1280' + data['backdrop_path']
                
                
                // MAIN DISPLAY PICTURE
                let displayPic = document.querySelector('img#displayPic');
                displayPic.src = 'https://image.tmdb.org/t/p/w300' + data['poster_path']
                

                // ADDING THE TITLE OF THE WEB PAGE
                let head = document.getElementsByTagName('head')[0];
                let title = document.createElement('title');
                title.innerText = data['title'];
                head.appendChild(title);


                // ADDING TITLE
                let h1 = document.querySelector('h1#title');
                h1.innerText = data['title'];
                
                
                // COLLECTING THE GENRE CATEGORIES
                genre = data['genres'];
                for (let x in genre){
                    a = genre[x];
                    genreList.push(a['name']);
                }
                // ADDING THE GENRE CATEGORIES
                for (let x in genreList){
                    let p = document.createElement('p');
                    p.innerText = genreList[x];
                    document.querySelector('p#genre').appendChild(p);
                }


                // ADDING THE RELEASE DATE
                let releaseDate = document.querySelector('p#releaseDate');
                releaseDate.innerText = data['release_date'];;


                // ADDING THE RATING
                let rating = document.querySelector('p#rating');
                rating.innerText = data['vote_average'];


                // ADDING THE OVERVIEW/SUMMARY SECTION
                let overview = document.querySelector('p#overview');
                overview.innerText = data['overview'];

                
                // ADDING THE BUDGET
                //let budget = document.querySelector('p#budget');
                //budget.innerText = "budget = $"+data['budget'];
                
                let revenue = document.createElement('p');
                revenue.innerText = "revenue = $"+data['revenue'];

                let runtime = document.createElement('p');
                runtime.innerText = data['runtime']+" minutes";
            })


            castMembersList = [];
            fetch('https://api.themoviedb.org/3/movie/'+ id +'/credits?&api_key=96722bcb778d0302594f6c5268f3a8fc')
            .then(res => res.json())
            .then(result=>{
                cast = result.cast;
                // console.log(cast);
                for(let x in cast){
                    castMember = cast[x].name;
                    // console.log(castMember);
                    castMembersList.push(castMember);
                }

                crew = result.crew;
                // console.log(crew);
                for (let x in crew){
                    // console.log(crew[x].name+"-"+crew[x].job);
                }
            })
        });


























// RESPONSIVE


if(window.screen.width<640){
    searchIcon.addEventListener('click', ()=>{
        searchInput.style.display = "block";
        searchInput.focus();
        document.querySelector('div.search').style.position = "absolute";
        document.querySelector('div.search').style.width = "80%";
    });

    closeSearchResult.addEventListener("click", ()=>{
        searchResult.style.display = "none";
        mainSection.style.filter = "none";
        searchInput.style.display = "none";
        document.querySelector('div.search').style.width = "max-content";
        document.querySelector('div.search').style.position = "";
        document.querySelector('div.search').style.right = "";
    });
}


    </script>


</body>
</html>