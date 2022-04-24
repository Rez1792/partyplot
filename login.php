<?php

    $email = $_GET["email"];
    $pass = $_GET["password"];

    $dbhost = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "party_plot";

    $conn = mysqli_connect($dbhost, $user, $pass, $dbname);

    if(!$conn) {
        die("DB error.".mysqli_error($conn));
    }
    // echo "Connected.";

    $q = "select * from login where username = '".$email."' and pass ='".$pass."'";
    // $q = "select * from login";

    $ret = mysqli_query($conn, $q);
    $db_pass = "";
    while($r = mysqli_fetch_assoc($ret)) {
        $r['email'];
        $db_pass = $r['pass'];
    }

    setcookie("email", $email, time() + 3600);
    setcookie("username", $email, time() + 3600);

    if(strcmp($db_pass, $pass) == 0) {
        header("location:index.php");
    }
    else {
        header("location:login.html");
    }


?>