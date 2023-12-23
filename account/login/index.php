<?php

if (!(isset($_COOKIE["userID"])) || ($_COOKIE["userID"] == 0)){


if(isset($_POST['loginSubmit'])){

    include_once('../../dbcon.php');
    $qry = "select * from user where userID = '" . $_POST['userID'] . "'";
    $result = mysqli_query($conn, $qry);
    $result = $result->fetch_all();
    if(count($result) == 1){
        if($result[0][2] == $_POST['userPassword']){
            setcookie("userID", $_POST['userID'], time() + (86400 * 30), "/"); // 86400 = 1 day
            echo '<script>
                alert("Login Success");
                window.location.replace("../ProfilePage");
            </script>';
        }
        else{
            echo '<script>alert("Enter Correct Password !!!");</script>';
        }
    }
    else{
        echo '<script>alert("Account does not exists !!!");</script>';
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
    <form action="./" method="POST">
        <input type="text" name="userID" id="userID" placeholder="Enter Your ID" required> 
        <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password" required>
        <a href="../signup">Create an Account</a>
        <input type="submit" name="loginSubmit" value="Login">
    </form>
</body>
</html>




<?php

}

else{
    header('location: ../ProfilePage');
}
    
?>