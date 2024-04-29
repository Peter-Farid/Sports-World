<?php
include 'server.php'; 
$id = $_GET['id'];
$query = "DELETE FROM products WHERE id='$id'"; 
$result = mysqli_query($db,$query) or die ("Error");
header("Location: adminProducts.php"); 
?>