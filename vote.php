<?php
include "db.php";
if(!isset($_SESSION['user'])) header("Location:index.php");
$user=$_SESSION['user'];
$c=mysqli_fetch_assoc(mysqli_query($conn,"SELECT voted FROM users WHERE username='$user'"));
if($c['voted']==1){ echo "Already voted"; exit; }
if(isset($_POST['vote'])){
 $cid=$_POST['candidate'];
 mysqli_query($conn,"UPDATE candidates SET votes=votes+1 WHERE id=$cid");
 mysqli_query($conn,"UPDATE users SET voted=1 WHERE username='$user'");
 header("Location: result.php");
}
?>
<form method="post">
<?php
$r=mysqli_query($conn,"SELECT * FROM candidates");
while($row=mysqli_fetch_assoc($r)){
 echo "<input type='radio' name='candidate' value='{$row['id']}' required>{$row['name']}<br>";
}
?>
<button name="vote">Vote</button>
</form>