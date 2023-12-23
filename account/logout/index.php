<?php


if (isset($_COOKIE["userID"])){
    setcookie("userID", 0, time() - (86400 * 30), "/");
    
    echo '<script>
        alert("Logged Out");
        window.location.replace("../login");
    </script>';
}
else{
    echo '<script>
        alert("Login First");
        window.location.replace("../login");
    </script>';
    
}


?>