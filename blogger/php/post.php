<?php
include('../../config/connect.php');

if(!isset($_SESSION['user_id'])){
    header('location: ../../login.php');
}

$check = array(
    " " => "-",
    ":" => "-",
    "," => "-",
    "." => "-",
    "/" => "-",
    "'" => "-",
    '"' => "-",
    "?" => "-",
    "!" => "-",
);

 if(isset($_POST['action'])) { //method post digunakan untuk tambah data
    $title = $_POST['title'];
    $slug = strtolower(strtr($title, $check));
    $user_id= $_SESSION['user_id'];
    $body = $_POST['body'];
    $date = date('Y-m-d');
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $image_file = strtolower(strtr($title, $check)) . ".jpg" ;
    if($_POST['action'] == 'add') {
        //jika actionnya adalah add maka akan dilakukan perintah seprti dibawah

        $query = mysqli_query($connect, "INSERT INTO post SET title= '$title', 
                                                              slug='$slug', 
                                                              user_id='$user_id', 
                                                              body='$body', 
                                                              date='$date', 
                                                              image='$image_file'");
                                                 
        
        copy($temp, "../../assets/img/post/". $image_file);

        header($temp, "../../post.php");
    } elseif($_POST['action'] == 'update'){
         //jika actionnya adalah update maka akan dilakukan perintah seprti dibawah
         $id= $_POST['id'];
         if(!empty($image)){
            $query = mysqli_query($connect, "UPDATE post SET title= '$title', 
                                                              slug='$slug', 
                                                              user_id='$user_id', 
                                                              body='$body', 
                                                              date='$date', 
                                                              image='$image_file' WHERE id='$id'");
            copy($temp, "../../assets/img/post/". $image_file);
         }else{
            $query = mysqli_query($connect, "UPDATE post SET title= '$title', 
            slug='$slug', 
            user_id='$user_id', 
            body='$body', 
            date='$date' WHERE id='$id'");
         }

         header('location: ../post.php');
    }
} if ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM post WHERE id = '$id'");

    header('location: ../post.php');
}else{
    header('../post.php');
}
?>