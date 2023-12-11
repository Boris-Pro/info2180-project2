<?php

//declare(strict_types=1);
function check_adduser_errors() {
    if (isset($_SESSION['error_adduser'])) {
        $errors = $_SESSION['error_adduser'];

        echo "<br>";
        
        foreach ($errors as $error) {
            echo '<p>' . $error .  ' </p>';
        }

        unset($_SESSION['error_adduser']);

    } else if (isset($_GET["adduser"]) && $_GET["adduser"] === "success") {
        echo "<br>";
        echo '<p> User was added successful </p>';
    }
}