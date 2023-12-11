
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="table.css">
    <script src="users.js" type="text/javascript"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <?php include 'aside.php'; ?>

        <main>
            <!-- Add your form content here -->
            <div class = "usergrid">
            <h2>Users</h2>
            <button id="adduser">+ Add User</button>
            </div>
            <div id="result">
				<!-- Users will appear here -->
			</div>

 </main>
            
    </div>
</body>
</html>
