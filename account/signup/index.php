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
    <title>Login Page</title>

    <style>
        form{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            background-color: cyan;
            padding: 5% 1%;
            border-radius: 15px;
            border: 3px solid white;
            box-shadow: 0 0 7px gray;
            width: 30%;
            margin: auto;
            text-align: center;
        }
        form input{
            width: 70%;
            margin: 1% auto;
            font-size: 17px;
            padding: 1%;
            border-radius: 1px;
        }
        form input[type=submit]{
            width: max-content;
        }
    </style>

</head>
<body>
    <form action="./" method="post">
        <input type="text" name="userName" id="userName" placeholder="Enter Your Name" required>
        <input type="text" name="userID" id="userID" placeholder="Enter Your ID" required>
        <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password" required>
        <input type="password" name="userConfirmPassword" id="userConfirmPassword" placeholder="Confirm Password" required>
        <a href="../login">Have an Account?</a>
        <input type="submit" name="signUpSubmit" value="Sign Up">
    </form>
</body>
</html>


<?php

}

else{
    header('location: ../ProfilePage');
}
    
?>