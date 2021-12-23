<?php
include_once 'dbh.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email ='$email' AND pwd = '$password' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows===1){
        $_SESSION['login']="true";
        header('location: exp_2.php');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="cont1 h-75">
    <div class="info ">
    <h3>Welcome_sub_title</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est porro temporibus voluptatibus consectetur corrupti dolorem non perferendis corporis, nihil aspernatur, qui obcaecati, et nobis ipsum magnam vel deserunt quaerat sed. Natus laboriosam placeat quia temporibus id optio cumque corrupti voluptate perspiciatis deserunt nihil voluptatum distinctio laudantium, facere veniam? Fugit quam placeat tempore distinctio, omnis earum. Ullam inventore rem excepturi repudiandae similique, suscipit adipisci provident dolor, error totam vero fuga nisi!</p>
    </div>
    <div class="line"></div>
    <div class="cont2">
    <div>
<h2>Nice To See You Again! </h2>
    </div>
    <div class="form">
        <form action="exp.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Email:</label>
            <input type="email" class="form-control shadow bg-body rounded border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password:</label>
            <input type="password" class="form-control shadow bg-body rounded border border-dark" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label fw-bold" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary shadow  rounded border border-dark" name="submit">Submit</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>