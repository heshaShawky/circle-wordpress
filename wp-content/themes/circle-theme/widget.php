<?php
/*
@package circle


*/

/**
 *
 */
class My_custom_widget extends WP_Widget {

    // setup the widget name, description, etc
    public function __construct() {
        $widget_ops = array(
            'calssname'     => 'my-widget',
            'description'   => 'Custom circle Widget'
        );
        parent::__construct( 'circle_taps', 'Circle Taps', $widget_ops );
    }

    // Back end display of widget
    public function form() {

    }

    // Fron end display of widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];


        ?>

        <div class="taps">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">popular</a></li>
                            <li><a href="#tab2default" data-toggle="tab">recent</a></li>
                            <li><a href="#tab3default" data-toggle="tab">comments</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default"></div>
                        <div class="tab-pane fade" id="tab2default">
                            <?php
                            $recent_posts = wp_get_recent_posts(array('numberposts' => '5'));
                            foreach ($recent_posts as $recent): ?>


                                    <div class="recent-posts-side">
                                        <p class="date text-uppercase">
                                            <?php echo $recent["post_date"]; ?>  |
                                            <span class="user">by <?php the_author() ?></span>
                                        </p>
                                        <?php
                                            echo "<h5><a href='".get_permalink($recent["ID"])."'>{$recent['post_title']}</a></h5>";
                                        ?>
                                        <!-- <p class="short-desc">
                                            vitae id tortor suspendisse.
                                            Vestibulum eu ligula lorem ...
                                        </p> -->
                                        <hr />
                                    </div>


                            <?php endforeach; ?>
                        </div>
                        <div class="tab-pane fade" id="tab3default"></div>
                    </div>
                </div>
            </div>
        </div>

<?php
        echo $args['after_widget'];
    }



}
add_action( 'widgets_init', function () {
    register_widget( 'My_custom_widget' );
});
