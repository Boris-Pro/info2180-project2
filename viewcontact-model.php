<?php

function get_contact($pdo, $email) {

    $query = "SELECT * FROM Contacts WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result =$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}