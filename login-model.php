<?php

function get_user($pdo, $email) {

    $query = "SELECT * FROM Users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result =$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}