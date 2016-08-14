<?php include 'assets/inc/header.php'; ?>



        <!--===============================================================
            Start the Hero Section
        =================================================================-->
        <section class="hero">
            <div class="container">
                <div class="carousel-caption">
                    <h1>
                        <strong>CLEAN</strong>
                        <br />& PERFECT
                    </h1>
                    <p class="text-center">
                        Morbi a libero eget erat auctor cursus vitae id tortor.<br /> Suspendisse rhoncus.
                    </p>
                </div>
            </div>
        </section>

        <!--===============================================================
            Start the Blue Section
        =================================================================-->
        <section class="blue">
            <div class="container">
                <h2>A fully responsive theme with clean & pixel perfect design. </h2>
                <h4>Suspendisse tristique ante sit amet sem pulvinar posuere. </h4>
            </div>
        </section>

        <!--===============================================================
            Start the Features Section
        =================================================================-->
        <section class="features">
            <div class="container">
                <div class="col-sm-4">
                    <div class="fea-box text-center">
                        <img class="img-responsive" src="assets/images/features-icons/1.png" style="margin: auto"/>
                        <h3>Deep Research</h3>
                        <h4>IT WAS HARD TO MAKE IT SO COOL</h4>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="fea-box text-center">
                        <img class="img-responsive" src="assets/images/features-icons/2.png" style="margin: auto"/>
                        <h3>Unique Approach</h3>
                        <h4>IT WAS fun TO MAKE IT SO COOL</h4>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="fea-box text-center" style="border: 0">
                        <img class="img-responsive" src="assets/images/features-icons/3.png" style="margin: auto"/>
                        <h3>Advanced Support</h3>
                        <h4>IT is cool TO keep IT SO COOL</h4>
                    </div>


                </div>
            </div>
        </section>

        <!--===============================================================
            Start the recent Section
        =================================================================-->
        <section class="recent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h3>recent works</h3><br />
                        <p>
                            Suspendisse rhoncus facili iscing. Vestibulum eu ligula lorem mus orci sem.
                        </p>
                        <div class="arrows">
                            <span id="move-left" class="glyphicon glyphicon-chevron-left"></span>
                            <span id="move-right" class="glyphicon glyphicon-chevron-right"></span>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div id="owl-demo" style="overflow:hidden">
                            <?php for ($i=1; $i <= 8; $i++) : ?>
                            <div class="item">
                                <img class="img-responsive" src="assets/images/owl<?php echo $i ?>.jpg" alt="Owl Image" data-pin-nopin="true">

                                <div class="item-links">
                                    <ul class="list-inline">
                                        <li class="zoom-gallery">
                                            <a class="image-popup-no-margins" href="assets/images/owl<?php echo $i ?>.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="http://google.com">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="item-info">
                                    <h3>Project title</h3>
                                    <p>Graphic Design</p>
                                </div>
                            </div>
                            <?php endfor; ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===============================================================
            Start the Links Section
        =================================================================-->
        <section class="links">
            <div class="container">
                <div class="row">
                    <!-- First col -->
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <div class="list-image">
                                <img class="img-responsive" src="assets/images/links-icons/1.png" />
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <h4 class="title">All in one solution</h4>
                            <ul>
                                <li><a href="#">Content management systems</a></li>
                                <li><a href="#">Virtual shops and ecommerce</a></li>
                                <li><a href="#">Presentation websites</a></li>
                                <li><a href="#">Online catalogues</a></li>
                                <li><a href="#">Portal systems</a></li>
                                <li><a href="#">& any other dynamic website</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- First col -->
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <div class="list-image">
                                <img class="img-responsive" src="assets/images/links-icons/2.png" />
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <h4 class="title">passion for interaction</h4>
                            <ul>
                                <li><a href="#">Content management systems</a></li>
                                <li><a href="#">Virtual shops and ecommerce</a></li>
                                <li><a href="#">Presentation websites</a></li>
                                <li><a href="#">Online catalogues</a></li>
                                <li><a href="#">Portal systems</a></li>
                                <li><a href="#">& any other dynamic website</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- First col -->
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <div class="list-image">
                                <img class="img-responsive" src="assets/images/links-icons/3.png" />
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <h4 class="title">online help center</h4>
                            <ul>
                                <li><a href="#">Content management systems</a></li>
                                <li><a href="#">Virtual shops and ecommerce</a></li>
                                <li><a href="#">Presentation websites</a></li>
                                <li><a href="#">Online catalogues</a></li>
                                <li><a href="#">Portal systems</a></li>
                                <li><a href="#">& any other dynamic website</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div>  <!-- /.container -->
        </section>

        <!--===============================================================
            Start the recent-posts Section
        =================================================================-->
        <section class="recent-posts">
            <div class="container">
                <div class="row">
                    <h2 class="text-center" style="font-weight:300">
                        RECENT POSTS
                        <div class="arrows-posts">
                            <span id="move-left-post" class="glyphicon glyphicon-chevron-left"></span>
                            <span id="move-right-post" class="glyphicon glyphicon-chevron-right"></span>
                        </div>
                    </h2>
                    <div id="re-posts-cars">
                        <?php for ($i=0; $i <= 8; $i++): ?>
                            <div class="item">
                                <a href="http://google.com"><img class="img-responsive" src="assets/images/owl1.jpg" alt="title" /></a>

                                <div class="post-info clearfix">
                                    <div class="col-xs-4 text-center">
                                        <img class="img-responsive user" src="assets/images/admin.jpg" alt="" style="max-width:70px;" />
                                        By <a href="#">Admin</a>
                                    </div>
                                    <div class="col-xs-8" style="padding: 0">
                                        <h4><a href="#">With just a few clicks you can add in both portrait ...</a></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>


        <!--===============================================================
            Start the why-choose-us Section
        =================================================================-->
        <section class="why-choose-us">
            <div class="container">
                <h2>WHY CHOOSE US</h2>
                <div class="row">

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/1.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >customer support</h4>
                                </div>
                            </div>
                            <p>
                                Select design work for delivery in a beautiful, simple email to clients or teammates.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/2.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >
                                        responsive
                                    </h4>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, tetur adipiscing elit. Suspendisse smod congue bibendum.
                            </p>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/3.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >MULTILANGUAGE</h4>
                                </div>
                            </div>
                            <p>
                                Select design work for delivery in a beautiful, simple email to clients or teammates.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/4.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >Web development</h4>
                                </div>
                            </div>
                            <p>
                                Aliquam erat volutpat. Phasellus eget justo lacus. Vivamus pharetra ullamcorper massa.
                            </p>
                        </div>
                    </div>



                </div>

                <div class="row">

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/5.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >well documented</h4>
                                </div>
                            </div>
                            <p>
                                Because we know you don’t want to be limited on a portrait or scape format we made Showcase. compatible in both
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/6.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >
                                        UNLIMITED COLORS
                                    </h4>
                                </div>
                            </div>
                            <p>
                                With just a few clicks you can add any color you want.compatible in both portrait AND landscape!

                            </p>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/7.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >HTML5 & CSS3</h4>
                                </div>
                            </div>
                            <p>
                                With just a few clicks you can add any color you want.compatible in both portrait AND landscape!
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="why-box clearfix">
                            <div class="title clearfix">
                                <div class="col-xs-2" style="padding: 0">
                                    <img src="assets/images/why/8.png" alt="" />
                                </div>
                                <div class="col-sm-10">
                                    <h4 >customization</h4>
                                </div>
                            </div>
                            <p>
                                Aliquam erat volutpat. Phasellus eget justo lacus. Vivamus pharetra ullamcorper massa.
                            </p>
                        </div>
                    </div>



                </div>

            </div>
        </section>

        <!-- Testimonials Start -->
        <section class="testimonials padding-sections" id="testimonials">
            <!-- Section title -->
            <h2 class="text-center">
                what people say
            </h2>

            <div class="testimonial-container clearfix">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <!-- Testimonial Box -->
                            <div class="col-md-12">
                                <div class="test-box">
                                    <div class="col-xs-4">
                                        <div class="testi-img">
                                            <img class="img-responsive img-circle" src="assets/images/admin.jpg" alt="...">
                                        </div>
                                    </div>

                                    <div class="col-xs-8">
                                        <p><i class="fa fa-quote-left"></i>
                                            Qui detraxit sensibus theophrastus eu, at vis elit duis vocent, erant volutpat argumentum ne per. Ad inani nihil his, mea no corpora maiestatis.
                                        <i class="fa fa-quote-right"></i>
                                         </p>
                                        <h3>Tylor tomas</h3>
                                        <h5>Project Manger</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <!-- Testimonial Box -->
                            <div class="col-md-12">
                                <div class="test-box">
                                    <div class="col-xs-4">
                                        <div class="testi-img">
                                            <img class="img-responsive img-circle" src="assets/images/admin.jpg" alt="...">
                                        </div>
                                    </div>

                                    <div class="col-xs-8">
                                        <p><i class="fa fa-quote-left"></i>
                                            Qui detraxit sensibus theophrastus eu, at vis elit duis vocent, erant volutpat argumentum ne per. Ad inani nihil his, mea no corpora maiestatis.
                                        <i class="fa fa-quote-right"></i>
                                         </p>
                                        <h3>Tylor tomas</h3>
                                        <h5>SEO Foundation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <!-- Testimonial Box -->
                            <div class="col-md-12">
                                <div class="test-box">
                                    <div class="col-xs-4">
                                        <div class="testi-img">
                                            <img class="img-responsive img-circle" src="assets/images/admin.jpg" alt="...">
                                        </div>
                                    </div>

                                    <div class="col-xs-8">
                                        <p><i class="fa fa-quote-left"></i>
                                            Qui detraxit sensibus theophrastus eu, at vis elit duis vocent, erant volutpat argumentum ne per. Ad inani nihil his, mea no corpora maiestatis.
                                        <i class="fa fa-quote-right"></i>
                                         </p>
                                        <h3>Tylor tomas</h3>
                                        <h5>SEO Foundation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Carousel End -->
            </div><!-- Testi Container End -->
        </section>
        <!-- Testimonials End -->



<?php include 'assets/inc/footer.php'; ?>
