<?php
    include('../config/connect.php');

    if(!isset($_SESSION['user_id'])){
        header('location: ../login.php');
    }

$user_logged = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE id='$_SESSION[user_id]'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?>Blog App Learning</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-wite py-3">
        <div class="container">
            <a href="" class="navbar-brand text-uppercase">Blog.Dev</a>
            <button class="navbar-toggler" type= "button" data-bs-toggle= "collapse" data-bs-target= "#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav gap-3 me-auto">
                    <li class="nav-item"><a href="." class="nav-link  <?= ($title == 'Dashboard') ? 'active' : '' ?>">Dashboard</a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link  <?= ($title == 'Post' || $title == 'Edit Post') ? 'active' : '' ?>">Post</a></li>
                    <li class="nav-item"><a href="create-post.php" class="nav-link  <?= ($title == 'Add Post') ? 'active' : '' ?>">Create Post</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"  <?= ($title == 'Profile') ? 'active' : '' ?>>Profile</a></li>
                </ul>
            
                <ul class="navbar-nav gap-3 ">
                    <li>
                        <p class="nav-link active">Hi! <?= $user_logged['Name']?></p>
                    </li>
                    <li class="nav-item"><a href="php/logout.php" class="nav-link active">Log Out</a></li>
                   
            </div>
        </div>
    </nav>