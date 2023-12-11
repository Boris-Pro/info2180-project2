
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="dashboard2.css">
  <script src="dashboard2.js" type="text/javascript"></script>
</head>
<body>
    <header>
      <?php include 'header.php';?>
    </header>

    <div class="container">
      <?php include 'aside.php'; ?>
        
      <main>
          <div class = "users">
            <h1>Dashboard</h1>
            <button id = "addContact"> + Add Contact</button>
          </div>

          <div class = "d-container">

            <div id = "filter">
              <img src = "filter-icon.png" alt = "Filter icon" height = "30" width = "30">
              <h3 id = filter-by>Filter by:</h3>
              <button id = all>All</button>
              <button id = sales>Sales Leads</button>
              <button id = support>Support</button>
              <button id = assign>Assigned to me</button>
            </div>

            <div class = "results">
              <!-- Results will apppear here -->  
              <?php require_once('getContacts.php')?> 
            </div>
            
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



