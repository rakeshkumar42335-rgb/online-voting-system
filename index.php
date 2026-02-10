<?php
include "db.php";
if(isset($_POST['login'])){
 $u=$_POST['username']; $p=$_POST['password'];
 $q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
 if(mysqli_num_rows($q)>0){
   $_SESSION['user']=$u;
   header("Location: vote.php");
 } else echo "Invalid Login";
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<form method="post">
<input name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
</body>
</html>