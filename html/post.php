<?php include 'assets/inc/header.php'; ?>

<section class="hero" style="height: auto; color:#fff; ">
    <div class="container">
        <div class="raw">
            <h2 style="font-weight: bold;">BLOG</h2>
        </div>
    </div>
</section>

<section class="main-wrapper clearfix">
    <div class="container">
        <div class="col-md-8">
            <?php include 'assets/inc/single-post.php' ?>

            <?php include 'assets/inc/comments.php'; ?>
        </div>

        <div class="col-md-4">
            <?php include 'assets/inc/sidebar.php'; ?>
        </div>
    </div>

</section>


<?php include 'assets/inc/footer.php'; ?>
