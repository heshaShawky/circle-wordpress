<?php include 'assets/inc/header.php'; ?>
<style media="screen">
    .header {
        z-index: 999
    }

    .googleMap {
        position: relative;
        z-index: 0;
    }
</style>
<section class="hero" style="height: auto; color:#fff; background: none; padding: 0 ">
    <div class="head-title" style="position: absolute; left: 0; right: 0;z-index: 999; background: rgba(0, 0, 0, 0.7);top:152px;">
        <div class="container">
            <h2 class="text-uppercase">Contacts</h2>
        </div>

    </div>
    <div class="googleMap" id="googleMap" style="width: 100%; height: 100vh"></div>
</section>

<section class="contact-detial">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="deta">
                    <h4 class="text-uppercase">contact details</h4><br />
                    <ul class="list-unstyled">

                        <li>phoenix Inc.</li>
                        <li>PO Box 21177</li>
                        <li>Little Lonsdale St, Melbourne</li>
                        <li>Victoria 8011 Australia</li><br />
                        <li>Phone: (415) 124-5678</li>
                        <li>Fax: (415) 124-5678</li><br />
                        <li>support@yourname.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8">
                <form class="clearfix">
                    <div class="form-group clearfix">
                        <div class="col-sm-6">
                            <label for="name">Name <small>(requierd)</small></label>
                            <input class="form-control" type="text" placeholder="Your name*">
                        </div>
                        <div class="col-sm-6">
                            <label for="email">Email <small>(requierd)</small></label>
                            <input class="form-control" type="email" placeholder="Your email*">
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <div class="col-sm-12">
                            <label for="message">Your Message <small>(requierd)</small></label>
                            <textarea class="form-control" rows="8" cols="40" placeholder="Your Message*"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-default text-uppercase" type="submit">sent</button>
                            <a class="btn btn-default text-uppercase" onclick="$('form input,form textarea').val('');">clear</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

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
