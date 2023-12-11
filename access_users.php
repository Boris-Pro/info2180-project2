<?php

require_once 'session.php';

if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] != "Admin"){
    header("Location: dashboard.php?access=deny");
    die();
}
else{
    header("Location: users.php");
    die();
}

?>