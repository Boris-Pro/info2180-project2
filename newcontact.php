<?php
    session_start();

    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['company']) && isset($_POST['telephone']) && isset($_POST['titles']) && isset($_POST['type']) && isset($_POST['assignedSelector'])){
                include "connection.php";

                $firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
                echo "$firstName";
                $lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
                echo "$lastName";
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                echo "$email";
                $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
                echo "$company";
                $tel = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
                echo "$tel";
                $types = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
                echo "$type";
                $title = filter_input(INPUT_POST, 'titles', FILTER_SANITIZE_STRING);
                echo "$type";
                $assignedTo = filter_input(INPUT_POST, 'assignedSelector', FILTER_SANITIZE_STRING);
                echo "$assignedTo";
                $createdBy = $_SESSION['user_id'];
                echo "$createdBy";

                $queryString = "INSERT INTO contacts (title, firstname, lastname, email, telephone, company, types, assigned_to, created_by, created_at, updated_at) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
                $stmt = $pdo->prepare($queryString);
                $stmt->execute([$title, $firstName, $lastName, $email, $tel, $company, $types, $assignedTo, $createdBy]);
                unset($pdo);
            }
        }
    }catch(Exception $e){
        echo 'Message: ' . $e->getMessage();
    }
?>
        