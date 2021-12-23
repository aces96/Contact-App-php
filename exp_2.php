<?php 

include_once 'dbh.php';

   if(isset($_POST['submit'])){
     $fname = $_POST['f-name'];
     $lname = $_POST['l-name'];
     $email = $_POST['email'];
     $adress = $_POST['adress'];
     $phone = $_POST['phone'];
     $group = $_POST['group'];
     
     $sql= "INSERT INTO `contacts` (firstname,lastname,email,adress,phone,grp) VALUES('$fname','$lname','$email','$adress','$phone','$group')";
     $result = mysqli_query($conn,$sql);
     if(!$result){
       echo 'error 404';
     }
   }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles2.css">
    <title>Document</title>
</head>
<body>
    <nav>
    <div class="nav">
        <img class="logo" src="./logo.png" alt="logo.png">
        <div class="title"><h1>MyWebApp</h1></div>
        <a href="./exp.php">Logout</a>

    </div>
    </nav>
    
    <div class="search">
        <div>
            <h3>Contact List</h3>
        </div>
            <div class="cont">
                <div class="input">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                </div>
                <div class="button">
                <button class="btn btn btn-success" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#modal">Add Person</button>
                </div>
            </div>
    </div>
    <div class="line"></div>
    <div class="table1">
        <table class="table table-striped">
            <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">First-Name</th>
            <th scope="col">Last-Name</th>
            <th scope="col">Email</th>
            <th scope="col">Adress</th>
            <th scope="col">Phone</th>
            <th scope="col">Group</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
          $query = "SELECT * FROM contacts";
          $data = mysqli_query($conn,$query);
          $i = 0;
            while($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
          <td><?=$row['id']?></td>
          <td><?=$row['firstname']?></td>
          <td><?=$row['lastname']?></td>
          <td><?=$row['email']?></td>
          <td><?=$row['adress']?></td>
          <td><?=$row['phone']?></td>
          <td><?=$row['grp']?></td>
          <td><?="action $i"?></td>
        </tr>
        <?php
            $i++;
          }
        }
        ?>
        </tbody>
        </table>
    </div>
    <div class="modal" id="modal" tabindex="1" >
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <form class="modal-body d-flex flex-column justify-content-between align-items-center" action="./exp_2.php" method="POST">
        <div class="w-50">
            <h6>First Name</h6>
        <input type="text" class="w-100" placeholder="First Name" name="f-name">
        </div>
        <h6>Last Name</h6>
        <div class="w-50">
        <input type="text" class="w-100" placeholder="Last Name" name="l-name">
        </div>
        <h6>Email</h6>
        <div class="w-50">
        <input type="text" class="w-100" placeholder="Email" name="email">
        </div>
        <h6>Adress</h6>
        <div class="w-50">
        <input type="text" class="w-100" placeholder="Adress" name="adress">
        </div>
        <h6>Phone</h6>
        <div class="w-50">
        <input type="text" class="w-100" placeholder="Phone" name="phone">
        </div>
        
        <div class="d-flex flex-row">
          <p class="mt-4">Family<input type="radio" name="group" value="family"></p>
          <p class="mt-4" >Friend<input type="radio" name="group" value="friend"></p>
          <p class="mt-4">Work<input type="radio" name="group" value="work"></p>
        </div>
        <h6>Note</h6>
        <div class="w-50">
        <input type="text" class="w-100" placeholder="note">
        </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" name="submit" value="submit">
      </div>

    </form>
    
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>




</body>
</html>