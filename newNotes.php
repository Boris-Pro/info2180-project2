<?php 
    include "connection.php"; 

    $stringForQuery = "SELECT * FROM contacts WHERE id = '$id'";
    $grab = $conn->query($stringForQuery);
    $rush = $grab->fetch(PDO::FETCH_ASSOC);

    $stringForQuery = "SELECT * FROM notes WHERE contact_id = '$id'";
?>
<div id = "notes">
    <h3><img src="notes-icon.png" alt="Notes Icon">Notes</h3><hr>

</div>

<label for="addnote"> Add a note about <?= $rush['firstname']?>; 
    <input type = "text" placeholder = "place new note here ">
</label>
<button id = "addButton" type = "button">Add Note</button>