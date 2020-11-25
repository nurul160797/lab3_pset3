<?php
//get data first
$Id =$_POST["Id"];
$name =$_POST["name"];
$price =$_POST["price"];
$quantity =$_POST["quantity"];
$calorie =$_POST["calorie"];

//connect to db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_3";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO menu(Id, name, price, quantity, calorie)
  VALUES ('$Id', '$name', '$price', '$quantity', '$calorie')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>