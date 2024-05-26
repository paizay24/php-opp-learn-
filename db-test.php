<?php 


echo"<pre>";
$serverName = "localhost";
$userName = "pzo";
$password = "pzo124";
$dbName = "wad_school";

$conn = new mysqli($serverName,$userName,$password,$dbName);

$sql = "select * from students LIMIT 10 ";
$query = $conn->query($sql);

$rows = [];

while($row = $query->fetch_object()){
      $rows[] = $row;
}


print_r($rows[0]->name);
