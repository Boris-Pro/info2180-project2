<?php

//declare(strict_types=1);

function set_user($pdo, $firstname, $lastname, $pwd, $email, $role){
    $query = "INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES(:fname, :lname, :pwd, :email, :role, NOW());";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":fname", $firstname);
    $stmt->bindParam(":lname", $lastname);

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":role", $role);

    $stmt->execute();
}