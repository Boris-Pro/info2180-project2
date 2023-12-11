<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["Email"];
    $pwd = $_POST["Password"];
    
    try {
        require_once 'connection.php';
        require_once 'login-model.php';
        require_once 'login-contr.php';

        //ERROR HANDLERS

        $errors = [];


        if (is_input_empty($email, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
            
        }
        
        $result = get_user($pdo, $email);

        if (is_email_wrong($result)) {

            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["password"])) {

            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'session.php';

        if ($errors) {
            $_SESSION['errors_login'] = $errors;
            header("Location: index.php");
            die();

        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" .$result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_email"] = $result["email"];
        $_SESSION["user_role"] = $result["role"];
        
        $_SESSION["last_regeneration"] = time();

        header("Location: dashboard.php?login=success");

        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {

        die("Query failed: " . $e->getMessage());
    }


} else {
    header("Location: index.php");
    die();
}