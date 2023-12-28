<?php
$title = 'Dashboard'; 
include('components/header.php'); ?>
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-primary">
            Wellcome Back, <?= $user_logged['Name']?>
        </h2>
    </div>
</section>

<?php include('components/footer.php')?>