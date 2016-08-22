<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-projects
 *
 * @package circle_theme
 */

get_header();
?>

<section class="hero" style="height: auto; color:#fff; background: url(<?php if(has_post_thumbnail()): the_post_thumbnail_url(); else: endif;?>)">
    <div class="container">
        <div class="raw">
            <h2 class="text-uppercase" style="font-weight: bold;">projects</h2>
        </div>
    </div>
</section>
<section class="main-wrapper clearfix" id="primary">
    <div class="container">
        <div class="col-md-12">
            <main id="main" class="post" role="main">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content-gallery', get_post_format() );

                    // the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </main>
        </div>

    </div>
</section>

<section class="recent">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3>related works</h3><br />
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
                                    <a href="<?php get_permalink(); ?>">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
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

<section class="recent-posts">
    <div class="container">
        <div class="row">
            <h2 class="text-center text-uppercase" style="font-weight:300">
                our clients
                <div class="arrows-posts">
                    <span id="move-left-post" class="glyphicon glyphicon-chevron-left"></span>
                    <span id="move-right-post" class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </h2>
            <div id="re-posts-cars">
                <?php for ($i=0; $i <= 8; $i++): ?>
                    <div class="item">
                        <a href="http://google.com"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/assets/images/owl1.jpg" alt="title" /></a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
