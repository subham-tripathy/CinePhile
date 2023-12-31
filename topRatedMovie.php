<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Rated</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<style>
h2.title{
    margin-top: 40px;
    margin-left: 40px;
}

.popularPage-list-item{
    display: flex;
    flex-flow: row wrap;
}

.popularPage-list-item a{
    width: 200px;
    overflow: hidden;
    border: 3px solid white;
    border-radius: 10px;
    text-align: center;
    text-decoration: none;
    margin: 40px;
    background-color: rgba(128, 128, 128, 0.376);
}

.popularPage-title{
    padding: 0 10px;
    color: gold;
    white-space: nowrap;
    overflow: hidden;
    width: 200px;
    text-overflow: ellipsis;
}

.popularPage-imdb{
    color: gold;
}

.popularPage-img{
    width: 100%;
}

.popularPage .popularPage-card:hover{
    transform: scale(1.1, 1.1);
    box-shadow: 0 0 20px gold, 0 0 20px gold;
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
                <li><a href="./account/login" style="text-decoration: none;" id="login" class="nav-links">Log In</a></li>
                <!-- <li><p id="aboutNav" class="nav-links">About</p></li> -->
            </ul>
        </nav>
    </header>

    <section class="mainSection">

    <div class="popularPage">
        <div>
            <h2 class="title">Top Rated Movies</h2>
            <div class="popularPage-list-item"></div>
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












const searchResult = document.getElementsByClassName("search-results")[0];
const searchInput = document.getElementById("search-input");
const searchType = document.getElementById("movie-type");
const searchIcon = document.getElementsByClassName("search-icon")[0];
const mainSection = document.getElementsByClassName("mainSection")[0];
const closeSearchResult = document.getElementsByClassName("close-results")[0];



searchInput.addEventListener("focusin", ()=>{
    searchResult.style.display = "block";
    mainSection.style.filter = "blur(10px)";
});















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
            if (img.src == 'https://image.tmdb.org/t/p/w500null'){
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            }
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





































    PopularResult = document.getElementsByClassName("popularPage-list-item")[0];
    function fetchPopularPageResults() {
        fetch('https://api.themoviedb.org/3/movie/top_rated?api_key=96722bcb778d0302594f6c5268f3a8fc')
        .then(res => res.json())
        .then(data => {
            for(let i = 0; i>=0; i++)
            {
                popular = data.results[i];
                // console.log(popular);
                a = document.createElement("a");
                a.href = "moviepage.php?id="+popular.id;
                a.classList.add("popularPage-card");
                img = document.createElement("img");
                img.classList.add("popularPage-img");
                img.src = "https://image.tmdb.org/t/p/w185"+popular.poster_path;
                // console.log(img.src);
                if (img.src == 'https://image.tmdb.org/t/p/w185null')
                    img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&    h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";

                h3 = document.createElement("h3");
                h3.classList.add("popularPage-title")
                h3.innerHTML = popular.title;
                p = document.createElement("p");
                p.classList.add("popularPage-imdb");
                p.innerHTML = popular.vote_average;


                a.appendChild(img);
                a.appendChild(h3);
                a.appendChild(p);
                PopularResult.appendChild(a);
            }
        })
}


fetchPopularPageResults();

    function fetchPopularPageResults2() {
        fetch('https://api.themoviedb.org/3/discover/movie?api_key=96722bcb778d0302594f6c5268f3a8fc&page=2')
        .then(res => res.json())
        .then(data => {
            for(let i = 0; i>=0; i++)
            {
                popular = data.results[i];
                // console.log(popular);
                a = document.createElement("a");
                a.href = "moviepage.php?id="+popular.id;
                a.classList.add("Popular-card");
                img = document.createElement("img");
                img.classList.add("Popular-img");
                img.src = "https://image.tmdb.org/t/p/w185"+popular.poster_path;
                // console.log(img.src);
                if (img.src == 'https://image.tmdb.org/t/p/w185null')
                    img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&    h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";

                h3 = document.createElement("h3");
                h3.classList.add("Popular-title")
                h3.innerHTML = popular.title;
                p = document.createElement("p");
                p.classList.add("Popular-imdb");
                p.innerHTML = popular.vote_average;


                a.appendChild(img);
                a.appendChild(h3);
                a.appendChild(p);
                PopularResult.appendChild(a);
            }
        })
}
fetchPopularPageResults2();















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