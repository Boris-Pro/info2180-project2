<?php

try {
    require_once "connection.php";
    $query = "SELECT Users.firstname, Users.lastname, Users.email, Contacts.company, Contacts.type, Contacts.title FROM Users JOIN Contacts ON Users.email = Contacts.email;";
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
        echo "<table border='1'>";
        echo "<thead><tr><th>Name</th><th>Email</th><th>Company</th><th>Type</th></tr></thead>";
        echo "<tbody>";

        foreach ($results as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars("{$row['title']}. {$row['firstname']} {$row['lastname']}") . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['company']) . "</td>";
            echo "<td>" . htmlspecialchars($row['type']) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No matching users found";
    }

    die();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
