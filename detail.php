<?php 
$title = 'Detail' ;
include('components/header.php');
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM post INNER JOIN users ON post.user_id=users.id WHERE post.slug='$_GET[title]' "));
?> 
<header class="detail hero-post py-5">
    <div class="container">
        <span class="bg-light rounded p-2 fw-bold text-primary category mx-auto d-block" style= "width: max-content;">
            The News
        </span>
        <h1 class="header-title text-primary text-center"><?= $data['title']?></h1>

        <div class="d-flex align-items-center-gap-3 d-block justify-content-center">
                        <img src="assets/img/users/<?= $data['photo']?>"  class = "avatar rounded-circle"alt="">
                        <div class="profile">
                            <p class="m-0 text-primary"><?= $data['Name']?></p>
                            <p class="m-0 text-secondary" style = "font-size: 14px;">Web Developer</p>
                        </div>
                    </div>
        <img src="assets/img/post/<?= $data['image']?>" class= "rounded-3 mt-5" alt="">
    </div>
</header>

<section class="detail-content mx-auto py-5">
    <div class="container">
        <?= $data['body']?>
    </div>
</section>

<?php include('components/footer.php') ?>