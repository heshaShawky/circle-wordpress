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

            <?php include 'assets/inc/main.php'; ?>

            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>

        <div class="col-md-4">
            <?php include 'assets/inc/sidebar.php'; ?>

        </div>
    </div>
</section>


<?php include 'assets/inc/footer.php'; ?>
