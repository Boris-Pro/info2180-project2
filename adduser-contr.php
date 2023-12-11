<?php

//declare(strict_types=1);

function is_input_empty($firstname, $lastname, $pwd, $email, $role){
    if(empty($firstname) || empty($lastname) || empty($pwd) || empty($email) || empty($role)){
        return true;
    } else{
        return false;
    }
}

function is_password_valid($pwd) {
    // Check if password is at least 8 characters long
    if (strlen($pwd) < 8) {
        return false;
    }

    // Check if password contains at least one number
    if (!preg_match('/[0-9]/', $pwd)) {
        return false;
    }

    // Check if password contains at least one letter
    if (!preg_match('/[a-zA-Z]/', $pwd)) {
        return false;
    }

    // Check if password contains at least one capital letter
    if (!preg_match('/[A-Z]/', $pwd)) {
        return false;
    }

    // If all conditions are met
    return true;
}

function create_user($pdo, $firstname, $lastname, $pwd, $email, $role) {
    set_user($pdo, $firstname, $lastname, $pwd, $email, $role);
}