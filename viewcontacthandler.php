<?php
session_start();

if (isset($_GET['email'])) {
    $contactemail = $_GET['email'];
    $_SESSION['contact_email'] = $contactemail;

    try {
        require_once 'connection.php';
        require_once 'viewcontact-model.php';
        
        // Validate and sanitize $contactemail here
        
        $email = $_SESSION['contact_email'];
        
        $result = get_contact($pdo, $email);

        // Directly use values from $result instead of storing them in session
        $_SESSION["c_firstname"] = $result["firstname"];
        $_SESSION["c_lastname"] = $result["lastname"];
        $_SESSION["c_title"] = $result["title"];
        $_SESSION["c_created_at"] = $result["created_at"];
        $_SESSION["c_updated_at"] = $result["updated_at"];
        $_SESSION["c_company"] = $result["company"];
        $_SESSION["c_telephone"] = $result["telephone"];
        $_SESSION["c_assigned_to"] = $result["assigned_to"];
        $_SESSION["c_type"] = $result["type"];
        
        // Redirect to viewcontact.php
        header("Location: viewcontact.php");
        exit(); // Ensure that no further code is executed
    } catch (PDOException $e) {
        // Provide user-friendly error messages or log errors
        die("Query failed: " . $e->getMessage());
    } finally {
        // Close the database connection
        $pdo = null;
        $stmt = null;
    }
}
?>
