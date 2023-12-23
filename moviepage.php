<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            /* background-color: rgb(0, 0, 0, 0.7); */
            padding: 5% 9.5%;
            display: flex;
            font-family: sans-serif;
            height: 78vh;
            overflow: hidden;
        }
        #Poster{
            position: fixed;
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
    </style>
</head>
<body>
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






















    <script>
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

















































































































    </script>


<?php
echo '
if(){
    <script>
    // alert("Done");
    </script>
}
'; 
?>





</body>
</html>