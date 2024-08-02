<?php 
include "db_connection1.php";

if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $query = "update dailytask set completed = '1', completedate = current_timestamp() where id = $id";
 $result = mysqli_query($conn,$query);
 $query1 = "UPDATE dailytask SET difference = timestampdiff(day, creationdate, completedate) where id = $id;";
 $result1 = mysqli_query($conn,$query1);
 if (!$result) {
     die("Task not found");
   }
   header("refresh:3; url=dailytaskadminmodule.php");  
 }
?>