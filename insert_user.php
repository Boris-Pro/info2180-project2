<?php
require_once 'connection.php';


// Example data to insert
$usersData = [
    ['', '', 'password123', 'admin@project2.com', 'Admin', date('Y-m-d H:i:s')],
    ['Boris', 'Morris', 'boris123', 'borismorris@gmail.com', 'Admin', date('Y-m-d H:i:s')],
    ['Jada-Ann', 'Vite', 'jada123', 'jadaann@gmail.com', 'Admin', date('Y-m-d H:i:s')],
    ['James', 'Bond', 'james123', 'jamesbond@gmail.com', 'Member', date('Y-m-d H:i:s')],
    ['Peter', 'Parker', 'peter123', 'peterparker@gmail.com', 'Member', date('Y-m-d H:i:s')]
];

$querySelect = "SELECT COUNT(*) FROM Users WHERE email = :email";
$stmtSelect = $pdo->prepare($querySelect);

$query = "INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES(:fname, :lname, :pwd, :email, :role, NOW());";
$stmt = $pdo->prepare($query);

foreach ($usersData as $userData) {
    $email = $userData[3];

    $stmtSelect->bindParam(":email", $email);
    $stmtSelect->execute();
    $userCount = $stmtSelect->fetchColumn();

    if ($userCount == 0) {


// Loop through the array and execute the INSERT query for each user
/*
foreach ($usersData as $userData) { */
    $firstname = $userData[0];
    $lastname = $userData[1];
    $pwd = $userData[2];
    //$email = $userData[3];
    $role = $userData[4];

    $stmt->bindParam(":fname", $firstname);
    $stmt->bindParam(":lname", $lastname);

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":role", $role);

    $stmt->execute();
}

}

// Close the connection 
$pdo = null;