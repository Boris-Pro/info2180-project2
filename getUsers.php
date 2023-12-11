<!-- SQL query to get data from database and display it -->
<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$username = 'root';
$password = 'password123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password );

$pstmt = $pdo->prepare("SELECT * FROM users");


$pstmt->execute();

$users = $pstmt->fetchAll();

?>
<table class = user-list-table>
  <?php if($users) ?>
      <tr id = 'row-headings'>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
      </tr>

      <?php foreach ($users as $row): ?>

        <tr>
          <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['role']; ?></td>
          <td><?php echo $row['created_at']; ?></td>
        </tr>

      <?php endforeach; ?>

</table>

