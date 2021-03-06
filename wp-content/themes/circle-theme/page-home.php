<?php
/*
    Template Name: Home Page
*/
get_header();
?>

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
        <div class="row">
            <?php $loop = new WP_Query(array(
                'post_type' => 'features',
                'orderby'   => 'post_id',
                'order'     => 'ASC'
            )); ?>
            <?php while ($loop->have_posts()): $loop->the_post(); ?>
                <div class="col-sm-4">
                    <div class="fea-box text-center">
                        <?php if (!empty(get_field('feature_image'))): ?>
                            <img class="img-responsive" src="<?php echo get_field('feature_image')['url']?>" style="margin: auto" alt="<?php echo get_field('feature_image')['alt']?>"/>
                        <?php endif; ?>

                        <h3><?php the_title() ?></h3>
                        <h4><?php echo get_field('feature_body'); ?></h4>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query();
            ?>
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
                    <?php
                    $loops = new WP_Query(array('post_type'=>'projects', 'orderby'=>'rand'));
                    while( $loops->have_posts() ): $loops->the_post(); ?>
                    <div class="item">
                        <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
                        <?php endif; ?>

                        <div class="item-links">
                            <ul class="list-inline">
                                <li class="zoom-gallery">
                                    <a class="image-popup-no-margins" href="<?php the_post_thumbnail_url(); ?>">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <?php
                                    echo "<a href='".get_permalink()."'>";
                                    echo '<i class="fa fa-link" aria-hidden="true"></i>';
                                    echo "</a>";
                                    ?>

                                </li>
                            </ul>
                        </div>

                        <div class="item-info">
                            <h5 class="text-capitalize"><?php the_title(); ?></h5>

                        </div>
                    </div>

                    <?php endwhile; ?>
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
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/links-icons/1.png" />
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
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/links-icons/2.png" />
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
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/links-icons/3.png" />
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
                <?php $loop = new WP_Query(array(
                    'post_type' => 'post',
                    'orderby'   => 'post_id',
                    'order'     => 'ASC'
                )); ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>
                    <div class="item">
                        <a href="<?php get_permalink()?>">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full', array('class'=>'img-responsive')) ?>
                            <?php endif; ?>

                        </a>

                        <div class="post-info clearfix">
                            <div class="col-xs-4 text-center">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 90, null, null, array('class'=>'img-responsive img-circle')); ?>
                                By <a href="#"><?php the_author() ?></a>
                            </div>
                            <div class="col-xs-8" style="padding: 0">
                                <?php the_title( '<h5><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/1.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/2.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/3.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/4.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/5.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/6.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/7.png" alt="" />
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/why/8.png" alt="" />
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
                                    <img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/admin.jpg" alt="...">
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
                                    <img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/admin.jpg" alt="...">
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
                                    <img class="img-responsive img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/admin.jpg" alt="...">
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


<?php get_footer(); ?>
