<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>List of Users</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="list-of-users.css">
 <script src="getUsers.js" type="text/javascript"></script>
</head>
<body>
    <header>
    <?php include 'header.php';?>
    </header>

    <div class="container">
      <?php include 'aside.php'; ?>

      <main>
        <div class = "users">
            <h1>Users</h1>
            <button id = "addUser"> + Add User</button>
        </div>

        <div class = tContainer>
            <div class = userTable>
             <!-- Table to display data from database -->
            <?php require_once('getUsers.php')?> 
        </div>

      </main>

    </div>

</body>
</html>


