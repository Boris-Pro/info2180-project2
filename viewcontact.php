<?php

require_once 'session.php';
require_once 'viewcontacthandler.php';
require_once 'viewcontact-model.php';
if (isset($_GET['email'])){
    $contactemail = $_GET['email'];
    $_SESSION['contact_email'] = $contactemail;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="contactdetails.css">
  <script src="dashboard2.js" type="text/javascript"></script>
</head>
<body>
    <header>
      <?php include 'header.php';?>
    </header>

    <div class="container">
      <?php include 'aside.php'; ?>
        
      <main>
          <div class = "contactdetails">
            <div>
            <?php
            echo "<h3> " .$_SESSION["c_title"] .". ".$_SESSION["c_firstname"]." ".$_SESSION["c_lastname"].  "</h3>";
                ?>
            </div>
            <div>
            <button id = "assign"> Assign to me</button>
            <button id = "switch"> Switch</button>
            </div>
          </div>

            <div class = "contactdetails">
              <!-- contact details will apppear here --> 
              <div>
                <p>Email</P>
                <?php
                echo "<p>".$_SESSION['contact_email']. "</p>";
                ?>
              </div> 
              <div>
                <p>Telephone</p>
                <?php
                echo "<p>".$_SESSION["c_telephone"]. "</p>";
                ?>
              </div>
              <div>
                <p>Company</p>
                <?php
                echo "<p>".$_SESSION["c_company"]. "</p>";
                ?>
              </div>
              <div>
                <p>Assign to</p>
                <?php
                echo "<p>".$_SESSION["c_assigned_to"]. "</p>";
                ?>
              </div>
              <?php require_once 'viewcontacthandler.php'?> 
            </div>

            <div class = "notes">
                <!-- notes will apppear here -->
            </div>

            <div class = "addnote">
            <form action="viewcontact-model.php" method="post">
                <div class = "about">
                    <?php
                    echo "<h4>Add a note about " .$_SESSION["c_firstname"]. "</h4>";
                    ?>
                </div>
                <div class = "textarea">
                <textarea id="Note" name="Note" rows="4" cols="50">
                </textarea>
                </div>

            </form>

            </div>
        </div>
        </main>

    </div>
</body>
</html>



