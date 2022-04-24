<?php
    setcookie("username", "", time() - 60);
    setcookie("email", "", time() - 60);

    header("location:index.php");
?>