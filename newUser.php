<?php
//require_once "UserFormHandler.php";
require_once 'adduser-view.php'; 
require_once "session.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <?php include 'aside.php'; ?>

        <main>
            <!-- Add your form content here -->
            <h2>New User</h2>
    <div>
        <div class="form">
          <form action = "adduser.php" method = "post">

            <div>
              <div>
            <label for = "FirstName"> First Name</label>
              </div>
              <div>
            <input type="text" id="FirstName" name="FirstName" placeholder="Jane">
              </div>
            </div>
            <div>
              <div>
            <label for = "LastName"> Last Name</label>
              </div>
              <div>
            <input type="text" id="LastName" name="LastName" placeholder="Doe">
              </div>
            </div>

            <div>
              <div>
            <label for = "Email"> Email</label>
              </div>
              <div>
            <input type="text" id="Email" name="Email" placeholder="something@example.com">
              </div>
            </div>
            <div>
              <div>
            <label for = "Password"> Password</label>
              </div>
              <div>
            <input type="password" id="Password" name="Password" placeholder="">
              </div>
            </div>

            <div>
              <div>
            <label for = "Role"> Role</label>
              </div>
              <div>
                <select id="Role" name="Role">
                  <option value="Member">Member</option>
                  <option value="Admin">Admin</option>
                </select>
              </div>
            </div>
            <div></div>
            <div class = "subBtn">
              <button type="submit" id = "saveBtn">Save</button>
            </div>
            
          </form>
        </div>


    </div>
    <?php
    check_adduser_errors();

    ?>
 </main>
            
    </div>
</body>
</html>
