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
                // console.log(tv.poster_path);
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




backPoster = [];
trendingResult = document.getElementsByClassName("trending-list-item")[0];
function fetchTrendingResults() {
    fetch('https://api.themoviedb.org/3/trending/movie/day?&api_key=96722bcb778d0302594f6c5268f3a8fc')
    .then(res => res.json())
    .then(data => {
        for(let i = 0; i<10; i++)
        {
            trending = data.results[i];
            // console.log(trending);
            a = document.createElement("a");
            a.href = "moviepage.php?id="+trending.id;
            img = document.createElement("img");
            img.classList.add("trending-img");
            img.src = "https://image.tmdb.org/t/p/w185"+trending.poster_path;
            if (img.src == 'https://image.tmdb.org/t/p/w185null')
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            poster = document.createElement("img");
            poster.src = "https://image.tmdb.org/t/p/w780"+trending.backdrop_path;
            backPoster.push(poster.src);
            if (poster.src == 'https://image.tmdb.org/t/p/w780null')
            {
                poster.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            }
            
            h3 = document.createElement("h3");
            h3.classList.add("trending-title")
            h3.innerHTML = trending.title;
            p = document.createElement("p");
            p.classList.add("trending-imdb");
            p.innerHTML = trending.vote_average;
            
            
            a.appendChild(img);
            a.appendChild(h3);
            a.appendChild(p);
            let form = document.createElement('form');
            form.classList.add("trending-card");
            form.appendChild(a);
            form.method = "get";
            form.action = "moviepage.php";
            trendingResult.appendChild(form);
        }
    })
}
fetchTrendingResults();


document.head.appendChild(document.createElement("style"));

function change_background(i, counter) {
    if (counter==0)
    {
        counter = 1;
        setTimeout( function () {
            change_background(++i);
        }, 100);
    }
    myIMG = backPoster[i];
    // console.log(i +  " "+myIMG);
    style = document.getElementsByTagName("style")[0];
    style.innerHTML = "section .trending::before{background: url('"+myIMG+"') no-repeat center/cover;}";
    setTimeout( function () {
      change_background(++i);
    }, 10000);
    if (i == 9)
        i=-1;
}

change_background(-1, 0);
































popularResult = document.getElementsByClassName("popular-list-item")[0];
function fetchPopularResults() {
    fetch('https://api.themoviedb.org/3/movie/popular?&api_key=96722bcb778d0302594f6c5268f3a8fc')
    .then(res => res.json())
    .then(data => {
        for(let i = 0; i<10; i++)
        {
            popular = data.results[i];
            // console.log(popular);
            a = document.createElement("a");
            a.href = "moviepage.php?id="+popular.id;
            a.classList.add("popular-card");
            img = document.createElement("img");
            img.classList.add("popular-img");
            img.src = "https://image.tmdb.org/t/p/w185"+popular.poster_path;
            if (img.src == 'https://image.tmdb.org/t/p/w185null')
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            // poster = document.createElement("img");
            // poster.src = "https://image.tmdb.org/t/p/w780"+popular.backdrop_path;
            // backPoster.push(poster.src);
            // if (poster.src == 'https://image.tmdb.org/t/p/w780null')
            // {
            //     poster.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            // }
            
            h3 = document.createElement("h3");
            h3.classList.add("popular-title")
            h3.innerHTML = popular.title;
            p = document.createElement("p");
            p.classList.add("popular-imdb");
            p.innerHTML = popular.vote_average;
            
            
            a.appendChild(img);
            a.appendChild(h3);
            a.appendChild(p);
            popularResult.appendChild(a);
        }
    })
}
fetchPopularResults(); 


















































const hindiPopularResult = document.getElementsByClassName("hindiPopular-list-item")[0];
function fetchHindiPopularResults() {
    const date = new Date();
    const currentYear = date.getFullYear();
    const currentMonth = date.getMonth();
    if(currentMonth == 12){
        var nextYear = date.getFullYear()+1;
        var nextMonth = 1;
    }
    else{
        var nextYear = date.getFullYear();
        var nextMonth = currentMonth + 1;
    }
    fetch('https://api.themoviedb.org/3/discover/movie?api_key=96722bcb778d0302594f6c5268f3a8fc&with_original_language=hi&primary_release_date.gte='+currentYear+'-'+currentMonth+'&primary_release_date.lte='+nextYear+'-'+nextMonth+'&sort_by=vote_average.desc')
    .then(res => res.json())
    .then(data => {
        for(let i = 0; i<10; i++)
        {
            popular = data.results[i];
            // console.log(popular);
            a = document.createElement("a");
            a.href = "moviepage.php?id="+popular.id;
            a.classList.add("hindiPopular-card");
            img = document.createElement("img");
            img.classList.add("hindiPopular-img");
            img.src = "https://image.tmdb.org/t/p/w185"+popular.poster_path;
            // console.log(img.src);
            if (img.src == 'https://image.tmdb.org/t/p/w185null')
                img.src = "https://media.istockphoto.com/vectors/no-image-available-icon-vector-id1216251206?k=6&m=1216251206&s=612x612&w=0&h=G8kmMKxZlh7WyeYtlIHJDxP5XRGm9ZXyLprtVJKxd-o=";
            
            h3 = document.createElement("h3");
            h3.classList.add("hindiPopular-title")
            h3.innerHTML = popular.title;
            p = document.createElement("p");
            p.classList.add("hindiPopular-imdb");
            p.innerHTML = popular.vote_average;
            
            
            a.appendChild(img);
            a.appendChild(h3);
            a.appendChild(p);
            hindiPopularResult.appendChild(a);
        }
    })
}
fetchHindiPopularResults(); 





























































































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

















movieButton = document.getElementsByClassName("movieButton")[0];
tvButton = document.getElementsByClassName("tvButton")[0];


movieButton.onclick = ()=>{
    tvResult.style.display = "none";
    tvButton.style.backgroundColor = "rgb(0, 128, 128, 0.4)";
    movieResult.style.display = "block";
    movieButton.style.backgroundColor = "rgb(0, 128, 128, 1)";
}
tvButton.onclick = ()=>{
    movieResult.style.display = "none";
    movieButton.style.backgroundColor = "rgb(0, 128, 128, 0.4)";
    tvResult.style.display = "block";
    tvButton.style.backgroundColor = "rgb(0, 128, 128, 1)";
}


























































































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