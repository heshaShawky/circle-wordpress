<?php include 'assets/inc/header.php'; ?>

<section class="hero" style="height: auto; color:#fff; ">
    <div class="container">
        <div class="raw">
            <h2 class="text-uppercase" style="font-weight: bold;">gallery</h2>
        </div>
    </div>
</section>


<div class="panel with-nav-tabs panel-default">
    <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                        <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                    </ul>
                </li>
            </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1default">Default 1</div>
            <div class="tab-pane fade" id="tab2default">Default 2</div>
            <div class="tab-pane fade" id="tab3default">Default 3</div>
            <div class="tab-pane fade" id="tab4default">Default 4</div>
            <div class="tab-pane fade" id="tab5default">Default 5</div>
        </div>
    </div>
</div>
<?php include 'assets/inc/footer.php'; ?>
