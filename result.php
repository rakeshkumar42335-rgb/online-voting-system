<?php
include "db.php";
$r=mysqli_query($conn,"SELECT * FROM candidates");
?>
<table border="1">
<tr><th>Name</th><th>Votes</th></tr>
<?php while($row=mysqli_fetch_assoc($r)){
 echo "<tr><td>{$row['name']}</td><td>{$row['votes']}</td></tr>";
} ?>
</table>
<a href="logout.php">Logout</a>