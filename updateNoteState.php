<?php

// connect to the database
$conn=mysqli_connect('sophia.cs.hku.hk', 'vmiranda', 'avemaria') or die('Error'.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'vmiranda') or die('Error!2'.mysqli_error($conn));

// defining the query
$value = $_GET['newvalue'];
$query = "update checklist set doneOrNot='$value' where id=".$_GET['noteID'];
mysqli_query($conn, $query) or die ('Query Error'.mysqli_error($conn));

?>
