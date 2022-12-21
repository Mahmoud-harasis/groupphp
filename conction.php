<?php
require_once('conction.php');
$dsn = 'mysql:host=localhost;dbname=people'; // Data Source Name
$user = 'root'; // The user name - default root
$pass = ''; // Password - default empty

try {
$db = new PDO($dsn, $user, $pass); // Start a New connection with PDO class
echo 'You are Connected to the Server';

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



}
catch(PDOException $e) {
    echo 'Failed' . $e->getMessage();
}
?>
<br>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<a href="#"  type="button" class="btn btn-outline-warning">+ Add New Employee</a>
<table class="table">
    
  <thead> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php   ?>
      <th scope="row">1</th>
      <td>mahmoud</td>
      <td>aqaba</td>
      <td>1200</td>
      <td>
                <a href="update.php?id=<?php echo $employee['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="delete.php" style="display: inline-block">
                    <input  type="hidden" name="id" value="<?php echo $employee['id'] ?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>

    </tr>
    
  </tbody>
</table>
</body>
</html>