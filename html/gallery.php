<?php include 'assets/inc/header.php'; ?>

<section class="hero" style="height: auto; color:#fff; ">
    <div class="container">
        <div class="raw">
            <h2 class="text-uppercase" style="font-weight: bold;">gallery</h2>
        </div>
    </div>
</section>

<section id="container">
    <header class="filter-gallery">
        <div class="container-fluid">
            <ul class="list-inline list-unstyled">
                <li class="selected filter" data-filter="all">All</li>
                <li class="filter" data-filter=".category-1">
                    cat1
                </li>
                <li class="filter" data-filter=".category-2">
                    cat2
                </li>
            </ul>
        </div>
    </header>

    <main class="gallery">
        <div class="container" id="Container">
            <?php for ($i=1; $i < 4; $i++) { ?>
                <div class="row">

                    <div class="col-sm-3 mix category-1">
                        <img class="img-responsive" src="http://placehold.it/600x400/13c2e8/fff/" alt="" />
                    </div>
                    <div class="col-sm-3 mix category-1">
                        <img class="img-responsive" src="http://placehold.it/600x400/13c2e8/fff/" alt="" />
                    </div>
                    <div class="col-sm-3 mix category-2">
                        <img class="img-responsive" src="http://placehold.it/600x400/d09106/fff/" alt="" />
                    </div>
                    <div class="col-sm-3 mix category-2">
                        <img class="img-responsive" src="http://placehold.it/600x400/d09106/fff/" alt="" />
                    </div>
                </div>
            <?php } ?>

        </div>
    </main>
</section>

<?php include 'assets/inc/footer.php'; ?>
