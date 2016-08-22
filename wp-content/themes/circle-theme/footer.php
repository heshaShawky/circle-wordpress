<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package circle_theme
 */

?>

        <footer class="footer">
            <div class="container">
                <div class="raw">
                    <div class="col-sm-3">
                        <div class="logo">
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo_footer.png" class="img-responsive" alt="" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="footer-recent-posts">
                            <h4>Recent posts</h4>
                            <br />
                            <?php $recent_posts = wp_get_recent_posts(array('numberposts'=>'2')); ?>
                            <?php foreach ($recent_posts as $recent): ?>
                                <div class="recent-post-box">
                                    <p class="date "><?php echo $recent['post_date']; ?>  |
                                        <span class="user">By <?php echo get_userdata(intval($recent['post_author']))->user_login; ?></span>
                                    </p>
                                    <h5><?php echo $recent['post_title'] ?> </h5>
                                    <p class="short-desc">
                                        <?php echo excerpt(12, $recent['post_content']) ?>
                                    </p>
                                </div>

                                <hr />
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <div class="col-sm-3">
                        <h4>Contacts</h4><br />
                        <ul class="contact">
                            <li>Phoenix Inc.</li>
                            <li>PO Box 21177</li>
                            <li>Little Lonsdale St, Melbourne</li>
                            <li>Victoria 8011 Australia</li><br />
                            <li>Phone: (415) 124-5678</li>
                            <li>Fax: (415) 124-5678</li>
                            <li>support@yourname.com</li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <div class="news-letter">
                            <h4>newsletter signup</h4>
                            <br />
                            <p>
                                By subscribing to our mailing list you will get the latest news from us.
                            </p>
                            <form class="" action="index.html" method="post">
                                <div class="form-group clearfix">
                                    <div class="col-xs-8" style="padding: 0">
                                        <input class="form-control" type="email" name="email" value="">
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-default" type="submit" name="submit" value="JOIN US">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <br />
                        <br />
                        <div class="social">
                            <h4>Get Social</h4><br />
                            <ul class="list-inline">
                                <li><a href="#"><span class="fa fa-thumbs-o-up"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                            </ul>
                        </div>


                    </div>


                </div>
            </div>

        </footer>

        <div class="copy-right">
            <div class="container">
                <p class="pull-left">
                    © 2016 Circles. All Rights Reserved
                </p>
                <p class="pull-right">Theme Developed By
                    <a href="http://www.heshamshawky.com">Hesham Shawky</a>
                </p>
            </div>
        </div>



        <!--Import jQuery before bootstrap.js-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
        <!-- Include js plugin -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>

        <!-- MixItUp Filter Gallery plugin -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.mixitup.js"></script>
        <!-- Magnific Popup core JS file -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>

        <!-- Google-map -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCjL2dYBvBO0FYPn5rsviYDPSD_LUA1ytA"></script>

        <!-- Custom Script.js -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
