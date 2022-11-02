<?php

include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title> All Students </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

 <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-9">
          <h1> All Students </h1> 
        </div>
      <table class="table table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Student ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Address</th>
        <th scope="col">Program</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Emergency Contact</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $student){ ?>
        <tr>
          <td><?= $student['_id'] ?></td>
          <td><?= $student['studentId'] ?></td>
          <td><?= $student['firstName'] ?></td>
          <td><?= $student['lastName'] ?></td>
          <td><?= $student['birthdate'] ?></td>
          <td><?= $student['address'] ?></td>
          <td><?= $student['program'] ?></td>
          <td><?= $student['contactNumber'] ?></td>
          <td><?= $student['emergencyContact'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>