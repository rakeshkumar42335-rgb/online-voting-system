<?php
 $conn = mysqli_connect("localhost","root","","voting_db");
if(!$conn){ die("Connection failed"); }
session_start();
?>