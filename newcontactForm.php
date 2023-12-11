<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="newcontact.css"/>
    <script src= newcontact.js type="text/javascript"></script>
    <title>New Contact</title>
    <?php include 'connection.php'; ?>
</head>
<body>
   <header>
    <?php include 'header.php';?>
    </header>
   <div class= "container">
        <?php include 'aside.php';?>
        
        <main>
    <div class="ctitle">
        <h1>New Contact</h1>
    </div>
        
    <div class="c-container">
        <form action="newContact.php" id="newcontactform" method="POST" class="contact-form">
            <div class="form-row">
                <label for="titles">Title</label>  
                <select name="titles" id="titleSelector">
                <option value = "Mr.">Mr</option>
                            <option value = "Mrs.">Mrs</opion>
                            <option value = "Ms.">Ms</option>
                            <option value = "Dr.">Dr</option>
                            <option value = "Prof.">Prof</option>
                </select>              
            </div>

            <div class="form-row">
                <div class="name-container">
                    <div class="name-labels">
                        <label for="firstName">First Name</label>
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="name-inputs">
                        <input type="text" name="firstname" id="firstname" placeholder="First Name">
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="email-container">
                    <div class="email-labels">
                        <label for="email">Email</label>
                        <label for="telephone">Telephone</label>
                    </div>
                    <div class="email-inputs">
                        <input type="text" name="email" id="email" placeholder="Email">
                        <input type="text" name="telephone" id="telephone" placeholder="999-999-9999">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="company-type-container">
                    <div class="company-label">
                        <label for="company">Company</label>
                        <label for="types">Type</label>
                        
                    </div>
                    <div class="type-label">
                    <input type="text" name="company" id="company" placeholder="Company Name">
                        <select name="type" id="typeSelector">
                        <option value="Support">Support</option>
                        <option value="Sales Lead">Sales Lead</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <label for="assigned">Assigned To</label>
                <select name="assignedSelector" id="assignedSelector">
                <?php 
                            $stmt = $pdo->query("SELECT * FROM users");
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach($results as $result):?>
                                <option value="<?= $result['id']; ?>"><?= $result['firstname']." ".$result['lastname']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" id="saveButton">Save</button>
            </div>
        </form>
    </div>
</main>
   </div>
</body>
</html>
