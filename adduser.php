<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstname = $_POST["FirstName"];
    $lastname = $_POST["LastName"];
    $email = $_POST["Email"];
    $pwd = $_POST["Password"];
    $role = $_POST["Role"];
    
    try {
        require_once 'connection.php';
        require_once 'adduser-model.php';
        require_once 'adduser-contr.php';

        //ERROR HANDLERS

        $errors = [];


        if (is_input_empty($firstname, $lastname, $pwd, $email, $role)) {
            $errors["empty_input"] = "Fill in all fields!";
            
        }
        if (!is_password_valid($pwd)){
            $errors["invalid_password"] = "Invalid password used!";
        }

        require_once 'session.php';

        if ($errors) {
            $_SESSION['error_adduser'] = $errors;
            header("Location: newUser.php");
            die();

        }

        create_user($pdo, $firstname, $lastname, $pwd, $email, $role);
        header("Location: newUser.php?adduser=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {

        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: users.php");
    die();
}