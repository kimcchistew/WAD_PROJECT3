<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wad_project3");

$result = mysqli_query($conn, "SELECT * FROM students");


//insert
// get dara from forn
// letakkan di var
// crate query
// execute

var_dump($result);
echo "<br/>";
var_dump(mysqli_fetch_object($result));

 ?>
