<?php
@$conn=mysqli_connect("localhost","root","") or die("connection is failed");

//var_dump($conn);

$db=mysqli_select_db($conn,"db");

?>
