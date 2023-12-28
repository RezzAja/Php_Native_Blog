<?php 
if(!isset($_GET['id'])){
    header('location: post.php');
}

$title = 'Edit Post';
include('components/header.php');
$data =mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM post WHERE id= '$_GET[id]'"));

 ?>
<section class= "py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="text-primary fw-bold">Edit Post</h4>
            <a href="create-post.php" class="btn btn-primary">Go Back</a>
        </div>

        <form action="php/post.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value= "<?= $_GET['id'] ?>">
            <div class="mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" id="title" class="title-control" placeholder="Title Post" value= "<?= $data['title']?>" required>
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="body" required><?= $data['body']?></textarea>
            </div>
            <div class="mb-3">
                <label for="image">image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" >
                <span class="formm-text">Jangan diisi jika tidak ingin mengganti gambar</span>
            </div>
            <button type= "submit"class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>
