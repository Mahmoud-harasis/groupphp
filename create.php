<?php
require_once('conction.php');

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["salary"])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];

$query = 'INSERT INTO employees SET name = :name, address = :address, salary = :salary';
$statement=$conn->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':address', $address);
$statement->bindValue(':salary', $salary);

$statement->execute();
header("Location: http://localhost/groupphp/index.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1>Manage The Employees</h1>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Emplyee Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="salary">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>

