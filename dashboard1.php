<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="table.css">
    <script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <?php include 'aside.php'; ?>

        <main>
            <!-- Add your form content here -->
            <div class = "usergrid">
            <h2>Dashboard</h2>
            <button id="addcontact">+ Add Contact</button>
            </div>
            <div id="result">
				<!-- Users will appear here -->
			</div>

            <?php
                if (isset($_GET["access"]) && $_GET["access"] === "deny") {
                    echo "<br>";
                    echo '<p> Only Admin have access to Users </p>';
                }

            ?>

 </main>
            
    </div>
</body>
</html>
