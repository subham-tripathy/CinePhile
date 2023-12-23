<?php

if (!(isset($_COOKIE["userID"]))){


    if(isset($_POST['signUpSubmit'])){

        

    include_once('../../dbcon.php');

    $qry = "select * from user where userID = '" . $_POST['userID'] . "'";
    $result = mysqli_query($conn, $qry);
    $result = $result->fetch_all();
    if(count($result) == 0){
        if($_POST['userPassword'] == $_POST['userConfirmPassword']){
            $qry = "insert into user values('" . $_POST['userID'] . "','" . $_POST['userName'] . "','" . $_POST['userPassword'] . "')";
            $result = mysqli_query($conn, $qry);
            setcookie("userID", $_POST['userID'], time() + (86400 * 30), "/"); // 86400 = 1 day
            echo '<script>
                alert("Sign Up Success");
                window.location.replace("../ProfilePage");
            </script>';
        }
        else{
            echo '<script>alert("Password and Confirm Password should be same !!!");</script>';
        }
    }
    else{
        echo '<script>alert("User ID must be Unique !!!");</script>';
    }
}

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sign Up Page</title>
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
                <a href="../../" style="text-decoration: none;"><h1 class="logo">CinePhile</h1></a></span>
                <div class="search">
                    <input type="search" id="search-input" placeholder="Search Here" />
                    <span class="material-symbols-outlined search-icon">search</span>
                </div>
                <ul>
                    <li><a href="./" style="text-decoration: none;" id="homeNav" class="nav-links active">Home</a></li>
                    <li><a href="../../popularMovie.php" style="text-decoration: none;" id="popularNav" class="nav-links">Popular</a></li>
                    <?php
                    if (isset($_COOKIE["userID"])){
                        echo'
                        <li><a href="../account/ProfilePage" style="text-decoration: none;" id="profie-page" class="nav-links">My Profile</a></li>
                            ';
                        }
                        else{
                            echo'
                            <li><a href="./" style="text-decoration: none;" id="login" class="nav-links">Log In</a></li>
                            ';
                        }
                    ?>
                </ul>
            </nav>
        </header>





        
        
        <div id="signUpForm">
            <form action="./" method="post">
                <input type="text" name="userName" id="userName" placeholder="Enter Your Name" required>
                <input type="text" name="userID" id="userID" placeholder="Enter Your ID" required>
                <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password" required>
                <input type="password" name="userConfirmPassword" id="userConfirmPassword" placeholder="Confirm Password" required>
                <a href="../login">Have an Account?</a>
                <input type="submit" name="signUpSubmit" value="Sign Up">
            </form>
    </div>
        
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


<?php

}

else{
    header('location: ../ProfilePage');
}
    
?>